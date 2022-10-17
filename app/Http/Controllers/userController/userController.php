<?php


namespace App\Http\Controllers\userController;
use Illuminate\Http\Request;
use App\Models\addcategory;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    public function index(Request $request){
        $category_name = $request->input('val');
      
        if($category_name=="")
        {
            $categoryData = Addcategory::All();
            $allData = DB::table('addblogs')->get();
            return view('user_panel.index', ['menu'=>$categoryData, 'allblogdata'=>$allData]);
        }
        else{
            $categoryData = Addcategory::All();
            $allData = DB::table('addblogs')->where('blog_category', $category_name)->get();
            return view('user_panel.index', ['menu'=>$categoryData, 'allblogdata'=>$allData]);
        }
    }
}
