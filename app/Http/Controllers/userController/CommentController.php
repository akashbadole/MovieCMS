<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\addComment;
use App\Models\addblog;

class CommentController extends Controller
{
    // public function index($id){
    //     // return $id;
    //     $blogs = DB::table('addblogs')->where('blog_id', $id)->get();
    //     $comment = DB::table('add_comment')->where('blog_id', $id)->get();
    //     // return $blogs;
    //     return view("user_panel/movie_detail",["blog_data"=>$blogs,"comment_data"=>$comment]);
    // }

    public function add_comment(Request $req, $id){
        // return $id;
        $NewComment = new addComment();
        $NewComment->blog_id=$id;
        $NewComment->user_name=$req->input("user_name");
        $NewComment->email_id=$req->input("email_id");
        $NewComment->subject=$req->input("subject");
        $NewComment->comment=$req->input("comment");
        $NewComment->save();  
        return redirect('movie_detail/'.$id)->with('success', 'Comment Successfully Added ! ');
    }
}
