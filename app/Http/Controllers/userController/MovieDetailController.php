<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\addcategory;
use App\Models\addblog;

class MovieDetailController extends Controller
{
    public function index($id){
        // echo "hello".$id;
        $allcategory = addcategory::all();
        $allblog = addblog::all();
        $blogs = DB::table('addblogs')->where('blog_id', $id)->get();
        // return $blogs;
        return view("user_panel/movie_detail", ["blog_data"=>$blogs, "allcategorydetail"=>$allcategory, "all_blog_data"=>$allblog]);
    }
}
