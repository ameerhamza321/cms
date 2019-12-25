<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$page =Role::cursor(2);*/

        /* return DataTable::of($page)->make(true);*/
        return view('backend.add_role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function getdata(Request $request)
    {
        $page =Role::all();
        return DataTable::of($page)->make(true);
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
                $pages = new Role([
                    'title'    =>  $request->get('title'),

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
