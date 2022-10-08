<?php

namespace App\Http\Controllers\adminController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class bloglist extends Controller
{
    public function index(){
        // all data i got 
        // $data = DB::table('addblogs')->get();
        // return $data;

        //pagination 
        $data = DB::table('addblogs')->paginate(3);
        // return $data;

        return view('admin_panel/blog-list',["blogData"=>$data]);
    }
}
