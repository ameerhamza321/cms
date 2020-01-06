<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

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
        return DataTables::of($page)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    function postdata(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',

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
                    'name'    =>  $request->get('name'),

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages_mgt  $pages_mgt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Role::findOrFail($id);
            return response()->json(['result' => $data]);
        }
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
        $rules = array(
            'name' => 'required',

        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }



        $form_data = array(
            'name' => $request->name,

        );


        Article::create($form_data);


        return response()->json(['success' => 'Data Added successfully.']);

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
