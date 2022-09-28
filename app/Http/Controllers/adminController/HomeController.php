<?php

namespace App\Http\Controllers\adminController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('admin_panel.dashboard');
    }
}
