<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bloglist extends Controller
{
    public function index(){
        return view('admin_panel/blog-list');
    }
}
