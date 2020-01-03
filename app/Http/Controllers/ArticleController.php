<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.article');
    }//.... end of index() .....//

    public function getArticlesList()
    {
        return DataTables::of(Article::query())
            ->addColumn('action', function ($article) {
                return '';
            })->addColumn('shortDescription', function($article) {
        return Str::limit(strip_tags($article->description));
        })->make(true);
    }

    /**
     * @param Request $request
     * @return array
     * Delete specific article.
     */
    public function deleteArticle(Request $request )
    {
        Article::destroy($request->id);
        return ['status' => true, 'message' => 'Article deleted successfully'];

    }

    public function store(Request $request)
    {

        $rules = array(
            'title' => 'required',
            'image' => 'sometimes|required|image|max:2048',
            'description' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');

        $new_name = rand() . '.' . $request->image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'title' => $request->title,
            'image' => $new_name,
            'description' => $request->description,
            'user_id' => auth()->user()->id
        );


        Article::create($form_data);


        return response()->json(['success' => 'Data Added successfully.']);
    }

    public function add_article()
    {
        return view('backend.add_article');

    }
//    function postdata(Request $request)
//    {
//        $validation = Validator::make($request->all(), [
//            'title' => 'required',
//            'image' => 'image',
//            'description' => 'required',
//        ]);
//
//        $error_array = array();
//        $success_output = '';
//        if ($validation->fails()) {
//            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
//                $error_array[] = $messages;
//            }
//        } else {
//            if ($request->get('button_action') == "insert") {
//                $pages = new Article([
//                    'title' => $request->get('title'),
//                    'image' => $request->get('images'),
//                    'description' => $request->get('description'),
//                    'user_id' => auth()->user()->id
//                ]);
//                $pages->save();
//                $success_output = '<div class="alert alert-success">Data Inserted</div>';
//            }
//        }
//        $output = array(
//            'error' => $error_array,
//            'success' => $success_output
//        );
//        echo json_encode($output);
//    }


}
