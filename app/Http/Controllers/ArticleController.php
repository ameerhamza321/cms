<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
                              <a href="#" id="'.$article->id.'" class="btn btn-danger btn-sm deleteRecord"><i class="fa fa-trash"></i> </a>';

            })->addColumn('shortDescription', function($article) {
        return Str::limit(strip_tags($article->description));
        })->make(true);
    }


    public function store(Request $request)
    {
        //dd($request->all());

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


        return redirect('article')->with('successMsg','Article Successfully Added');
    }

    public function add_article()
    {
        return view('backend.add_article');
    }


    public function edit($id)
    {
        $articles = Article::findorfail($id);
        return view('backend.update_article', compact('articles', $articles));
    }

    public function update(Request $request, $id)
    {
      // dd($request->all());

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
        return back()->with('successMsg','Article Successfully Deleted');
    }

}
