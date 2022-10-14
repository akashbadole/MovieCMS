<?php

namespace App\Http\Controllers\adminController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\addcategory;

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
    public function delete($id)
    {
        // return $id;

        $deleted = DB::table('addblogs')->where('blog_id', $id)->delete();
        return redirect('/blog-list')->with('danger', 'Record Deleted');
 
    }
    public function edit($id){
        $categoryData = addcategory::all();
        // return $id;
        $blogs = DB::table('addblogs')->where('blog_id', $id)->get();
        // return $blogs;
        // echo "<pre>";
        // print_r($blogs);
        return view('admin_panel/edit', ["categoryDataa"=>$categoryData,"blog_data"=>$blogs]);

    }

    public function update(Request $req, $id){
        // return $req." ".$id;
        // echo "<pre> ";
        // print_r($_POST);

        $affected = DB::table('addblogs')
            ->where('blog_id', $id )
            ->update(['blog_category'=>$req->input('category_name'),'blog_title' =>$req->input('blog_title'), 'blog_author'=>$req->input('blog_author'), 'blog_desc'=>$req->input('blog_desc')]);
            return redirect('/blog-list')->with('success','Record Updated Successfully');
    }
}
