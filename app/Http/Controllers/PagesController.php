<?php

namespace App\Http\Controllers;

use App\Pages_mgt;

use Illuminate\Http\Request;

use Validator;
use Yajra\DataTables\Facades\DataTables;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pages_mgt::query();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="' . $data->id . '" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
            dd($data);
        }
        return view('backend.add_page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required',
            'slug' => 'required',
            'heading' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'description' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'title' => $request->title,
            'slug' => $request->slug,
            'heading' => $request->heading,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'description' => $request->description

        );

        Pages_mgt::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Sample_data $sample_data
     * @return \Illuminate\Http\Response
     */
    public function show(Pages_mgt $pages_mgt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Sample_data $sample_data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request()->ajax()) {
            $data = Pages_mgt::findOrFail($id);
            return response()->json(['result' => $data]);
        }
        return view('backend.pages');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Sample_data $sample_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages_mgt $pages_mgt)
    {
        $rules = array(
            'title' => 'required',
            'slug' => 'required',
            'heading' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'description' => 'required'

        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'title' => $request->title,
            'slug' => $request->slug,
            'heading' => $request->heading,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'description' => $request->description

        );

        Pages_mgt::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Sample_data $sample_data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pages_mgt::findOrFail($id);
        $data->delete();
    }
}
