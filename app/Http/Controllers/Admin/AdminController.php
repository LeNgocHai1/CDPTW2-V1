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
   
        return view('admin');
    }
     public function find(Request $request)
    {
      
       return view('product.find');

    }
    public function count_category()
    {
        $count = Users::count('name');
         return view('layout.admin.main');
    }
    
    public function __construct()
    {
     $this->middleware('AdminRole');   
    }
}
?>