<?php

namespace App\Http\Controllers\adminController;

use Illuminate\Http\Request;
use App\Models\addcategory;

class addcategoryController extends Controller
{ 
    public function index(){
        return view('admin_panel.addcategory');
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
}
