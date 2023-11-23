<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Users;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
   {
   
   $sql = "select * from v_quantity";
   $quantity = DB::select($sql);

        return view('admin',['quantity'=>$quantity]);
    }
     public function find(Request $request)
    {
  
       if(!is_numeric($request->keywords))
       {
           $result = DB::table('categories')
           ->join('products','categories.categoryID','=','products.categoryID')
           ->select('categoryName','productName','productImage','listPrice')
           ->orWhere('categoryName','like','%'.$request->keywords.'%')
           ->orWhere('productName','like','%'.$request->keywords.'%')
           ->get();
       }
       else{
           $result = DB::table('categories')
           ->join('products','categories.categoryID','=','products.categoryID')
           ->select('categoryName','productName','productImage','listPrice')
           ->Where('listPrice','>',$request->keywords) 
           ->get();         
       }
       
       return view('product.find',['result'=>$result]);
        

    }
    public function count_category()
    {
        $count = Users::count('name');
         return view('layout.admin.main',['count'=>$count]);
    }
    
    public function __construct()
    {
     $this->middleware('AdminRole');   
    }
}
?>