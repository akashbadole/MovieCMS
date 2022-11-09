<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        // $id = Auth::user()->id;
        // if($id==1){
        //     return redirect('/admin');
        // }else{
        //     return redirect('/');
        // }
        $status = Auth::user();
        if($status=='admin'){
            return redirect('/admin');
        }
        else if($status=='other')
        {
            return redirect('/other');
        }else{
            return redirect('/');
        }
    }
}
