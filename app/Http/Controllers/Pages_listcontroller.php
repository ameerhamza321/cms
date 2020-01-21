<?php

namespace App\Http\Controllers;


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
            'description' => 'required',
        ]);

        $pages = $request->title;
        $pages = $request->slug;
        $pages = $request->heading;
        $pages = $request->meta_title;
        $pages = $request->meta_keywords;
        $pages = $request->meta_description;
        $pages = $request->description;
        $pages = Pages_mgt::find($id);


        $pages->title = $request->title;
        $pages->title = $request->slug;
        $pages->title = $request->heading;
        $pages->title = $request->meta_title;
        $pages->title = $request->meta_keywords;
        $pages->title = $request->meta_description;
        $pages->title = $request->description;


        $pages->save();
        return redirect()->route('Pages_list.index')->with('successMsg','Page Successfully Updated');

    }


    public function destroy($id )
    {
        $data = Pages_mgt::findOrFail($id);
        $data->delete();
        return redirect('Pages_list');

    }

}
