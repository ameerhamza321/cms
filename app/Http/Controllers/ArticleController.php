<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
            })->make(true);
    }

    /**
     * @param Request $request
     * @return array
     * Delete specific article.
     */
    public function deleteArticle(Request $request)
    {
        Article::destroy($request->id);
        return ['status' => true, 'message' => 'Article deleted successfully'];
    }

    public function store_article(Request $request)
    {

        if($request->ajax())
        {
            $data = Article::latest()->get();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.article');
    }

    public function store(Request $request)
    {

        $rules = array(
            'title'    =>  'required',
            'image'         =>  'required|image|max:2048',
            'description'     =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'title'        =>  $request->title,
            'image'             =>  $new_name,
            'description'         =>  $request->description,
            'user_id'=> auth()->user()->id
        );

        Article::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }


}
