<?php

namespace App\Http\Controllers\adminController;

use Illuminate\Http\Request;
use App\Models\addblog;
use App\Models\addcategory;

class addblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categoryData = Addcategory::All() ;
        // return $categoryData; // for category data
        return view('admin_panel.addblog', ["category_data" => $categoryData]);
    }

    public function addblog(Request $request){
        // return $request; all data visible
        $blog = new Addblog();
        $blog->	blog_category=$request->input('category_name');
        $blog->blog_title=$request->input('blog_title');
        $blog->blog_author=$request->input('blog_author');
        $blog->blog_desc=$request->input('blog_desc');
        // $blog->string("blog_pic");
        $blog->blog_pic = "";
        
        $blog->save();
        return redirect('addblog')->with('success','Add Blog Successfully !');
    }

}
