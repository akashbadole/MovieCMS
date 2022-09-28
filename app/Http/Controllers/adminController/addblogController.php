<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_panel.addblog');
    }

}
