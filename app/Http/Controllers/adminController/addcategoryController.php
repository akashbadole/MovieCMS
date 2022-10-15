<?php

namespace App\Http\Controllers\adminController;

use Illuminate\Http\Request;
use App\Models\addcategory;
// for url calling 
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB; // for delete 
 
use League\CommonMark\Reference\Reference;

class addcategoryController extends Controller
{ 
    public function index(){
        $categoryData = Addcategory::All() ;
        return view('admin_panel.addcategory', ['Category_Data_All'=>$categoryData]);
    }

    public function add_category(Request $request){
        $cat = new addcategory();
        $cat->category = $request->input("category");
        $cat->save();
        return redirect('addcategory')->with('success','Add Category Successfully !');
       
       
    //    ---------------------
        // return $request; 	
       
    //    { // return output  return $request; 
    //      // _token	"98mScQp45LIY328Yz2yhtYpd2vjljZksCEd6M69m"
    //     // category	"science"
    //    }

    }

    public function delete($id){
        // For Reference
            // $deleted = DB::table('addblogs')->where('blog_id', $id)->delete();
            // return redirect('/blog-list')->with('danger', 'Record Deleted');

        $deleted = DB::table('addcategories')->where('category_id', $id)->delete();
        return redirect('addcategory')->with('danger','Deleted Successfully.' );
    }
    public function edit($id){
        // return $id;
        $categoryData = addcategory::all();
        $categoryDataAdding = DB::table('addcategories')->where('category_id', $id)->get();
        return view('admin_panel.editcategory',["allCategory"=>$categoryDataAdding, 'categoryData'=>$categoryData]);
    }
}
