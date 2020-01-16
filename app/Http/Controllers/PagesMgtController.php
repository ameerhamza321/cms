<?php

namespace App\Http\Controllers;
use App\Pages_mgt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Contracts\DataTable;

class PagesMgtController extends Controller
{

    public function index(Request $request)
    {


        /* return DataTable::of($page)->make(true);*/
        return view('backend.add_page');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function getdata(Pages_mgt $pages_mgt)
    {
        $page =Pages_mgt::query();
        return DataTable::of($page)->addColumn('shortDescription', function($page) {
            return strip_tags(Str::words($page->description, 20));
        })->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    function postdata(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'slug'  => 'required',
            'heading'  => 'required',
            'meta_title'  => 'required',
            'meta_keywords'  => 'required',
            'meta_description'  => 'required',
            'description'  => 'required',
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            if($request->get('button_action') == "insert")
            {
                $pages = new Pages_mgt([
                    'title'    =>  $request->get('title'),
                    'slug'     =>  $request->get('slug'),
                    'heading'     =>  $request->get('heading'),
                    'meta_title'     =>  $request->get('meta_title'),
                    'meta_keywords'     =>  $request->get('meta_keywords'),
                    'meta_description'     =>  $request->get('meta_description'),
                    'description'     =>  $request->get('description')
                ]);
                $pages->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }
        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);


        if(empty($_FILES['file']))
        {
            exit();
        }
        $errorImgFile = "./img/img_upload_error.jpg";
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $destinationFilePath = './img-uploads/'.$newfilename ;
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
            echo $errorImgFile;
        }
        else{
            echo $destinationFilePath;
        }


    }


















    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pages_mgt  $pages_mgt
     * @return \Illuminate\Http\Response
     */
    public function show(Pages_mgt $pages_mgt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages_mgt  $pages_mgt
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages_mgt $pages_mgt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages_mgt  $pages_mgt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages_mgt $pages_mgt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages_mgt  $pages_mgt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages_mgt $pages_mgt)
    {
        //
    }
}
