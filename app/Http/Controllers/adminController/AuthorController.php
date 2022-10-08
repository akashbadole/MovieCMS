<?php

namespace App\Http\Controllers\adminController;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {   
        $AuthorData = Author::All();
        return view('admin_panel.addauthor',["authorData"=>$AuthorData]);
    }
    public function addAuthor(Request $request){
        $data = new Author();
        $data->authorName=$request->input('authorName');
        $data->save();

        return redirect('addauthor')->with('success','Author Added successfully');
    }
}
