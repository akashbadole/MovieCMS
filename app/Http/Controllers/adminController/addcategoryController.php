<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addcategoryController extends Controller
{
    public function index(){
        return view('admin_panel.addcategory');
    }
}
