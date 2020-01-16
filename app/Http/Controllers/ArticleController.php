<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{

    public function index()
    {
        return view('backend.article');
    }//.... end of index() .....//

    public function getArticlesList()
    {
        return DataTables::of(Article::query())
            ->addColumn('action', function ($article) {
                return '      <a href="'.route('article.edit', $article->id).'"  class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> </a>
      
                              <a class="icon deleteRecord" href="#"></a>
                              <a href="'.route('article.delete', $article->id).'" id="\'+row.id+\'" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> </a>';

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


    public function edit($id)
    {
//        if(request()->ajax())
//        {
//            $data = Article::findOrFail($id);
//            return response()->json(['data' => $data]);
//        }

        $articles = Article::findorfail($id);
        return view('backend.update_article', compact('articles', $articles));
    }

    public function update(Request $request)
    {

        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '') {
            $rules = array(
                'title' => 'required',
                'description' => 'required',
                'image' => 'sometimes|required|image|max:2048'
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        } else {
            $rules = array(
                'title' => 'required',
                'description' => 'required'
            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }
        $form_data = array(
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_name,
            'user_id' => auth()->user()->id
        );
        Article::whereId($request->hidden_id)->update($form_data);
        return redirect('article');
    }

    public function destroy($id)
    {
        $data = Article::findOrFail($id);
        $data->delete();
        return back();
    }

}
