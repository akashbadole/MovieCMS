<?php

namespace App\Http\Controllers\adminController;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function edit($id){
        $AuthorData = Author::All();
        // return $id;
        $AuthorDataEdit = DB::table('authors')->where('author_id', $id)->get();
        return view('admin_panel.authoredit',["allauthor"=>$AuthorData, 'AuthorData'=>$AuthorDataEdit]);
    }
    public function update(Request $req, $id){
        // echo "<pre>";
        // print_r($_POST);
        DB::table('authors')
            ->where('author_id', $id)
            ->update(['authorName' => $req->input('authorName')]);
        return redirect('/addauthor')->with('success', 'Author Updated Successfully');
    }
    public function delete($id){
        $EffectedRow = DB::table('authors')->where('author_id', $id)->delete();
        return redirect('addauthor')->with('danger','Author deleted Successfully');
    }
}
