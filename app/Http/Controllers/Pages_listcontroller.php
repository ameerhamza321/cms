<?php

namespace App\Http\Controllers;


use App\Article;
use App\Pages_mgt;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Contracts\DataTable;


class Pages_listcontroller extends Controller
{

    public function index()
    {
       $pages = Pages_mgt::all();

        return view('backend.pages_list')->with('pages',$pages);
    }


    public function edit($id)
    {
        $pages = Pages_mgt::findorfail($id);
        return view('backend.pages_update', compact('pages', $pages));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title' => 'required',
            'slug' => 'required',
            'heading' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'description' => 'required'

        ]);
        $title = $request->title;
        $slug = $request->slug;
        $heading = $request->heading;
        $meta_title = $request->meta_title;
        $meta_keywords = $request->meta_keywords;
        $meta_description = $request->meta_description;
        $description = $request->description;
        $pages = Pages_mgt::find($id);


        $pages->title = $request->title;
        $pages->slug = $request->slug;
        $pages->heading = $request->heading;
        $pages->meta_title = $request->meta_title;
        $pages->meta_keywords = $request->meta_keywords;
        $pages->meta_descripton = $request->meta_description;
        $pages->descripton = $request->description;
        $pages->save();
        return redirect()->route('Pages_list.index')->with('successMsg','Page Successfully Updated');

    }
    public function destroy(Request $request )
    {

        Pages_mgt::destroy($request->id);
        return back();

    }

}
