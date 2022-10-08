<?php

namespace App\Http\Controllers\adminController;

use Illuminate\Http\Request;
use App\Models\addblog;
use App\Models\addcategory;
use App\Models\Author;
use Illuminate\Support\Facades\URL;

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
        $AuthorData = Author::All();
        // return $categoryData; // for category data
        return view('admin_panel.addblog', ["category_data" => $categoryData, "authorData"=>$AuthorData]);
    }

    public function addblog(Request $request){

        // // return $request; all data visible
        // $blog = new Addblog();
        // $blog->	blog_category=$request->input('category_name');
        // $blog->blog_title=$request->input('blog_title');
        // $blog->blog_author=$request->input('blog_author');
        // $blog->blog_desc=$request->input('blog_desc');
        // // $blog->string("blog_pic");
        // $blog->blog_pic = "";
        
        // $blog->save();
        $file = $request->file('blog_pic');
   

        $url = URL::to("/");
        // echo $url;

        $ext=$file->getClientOriginalExtension();

        if($ext=='jpg' || $ext=='jpeg' || $ext=="png" || $ext=="PNG"){
            $destinationPath='uploads';
            $file->move($destinationPath, $file->getClientOriginalName());

            $url = URL::to("/").'/uploads/'.$file->getClientOriginalName();
            // return $request; all data visible
            $blog = new Addblog();
            $blog->blog_category=$request->input('category_name');
            $blog->authorName=$request->input('authorData');
            $blog->blog_title=$request->input('blog_title');
            $blog->blog_author=$request->input('blog_author');
            $blog->blog_desc=$request->input('blog_desc');
            $blog->blog_pic=$url;
            
            $blog->save();
            return redirect('addblog')->with('success','Add Blog Successfully !');
        }
        else{
        return redirect('addblog')->with('success','Issue with Upload Image');
    }
    $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        $url=URL::to("/").'/uploads/'.$file->getClientOriginalName();
    }

}
