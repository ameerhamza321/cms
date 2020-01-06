<?php

namespace App\Http\Controllers;

use App\Pages_mgt;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class Pages_listcontroller extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request)
    {


        /* return DataTable::of($page)->make(true);*/
        return view('backend.pages_list');
    }


    function getdata(Pages_mgt $pages_mgt)
    {


        $page =Pages_mgt::query();
        return DataTables::of($page)->addColumn('shortDescription', function($page) {
            return Str::limit(strip_tags($page->description), 15);
        })->make(true);

    }
}
