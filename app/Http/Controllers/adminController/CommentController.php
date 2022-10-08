<?php

namespace App\Http\Controllers\adminController;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return view("admin_panel.comment");
    }
    public function add_comment(Request $request)
    {
        $data = new Comment();
        $data->comment_author=$request->input('comment_author');
        $data->comment_post=$request->input("comment_post");
        $data->save();

        return redirect('addcomment')->with('success', 'Comment Data Added successfully !');
    }
}
