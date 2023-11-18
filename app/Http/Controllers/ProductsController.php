<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Cart;
use App\Comment;
use Illuminate\Support\Facades\DB;
use App\ProductDetail;


class ProductsController extends Controller
{
   
   public function showlist()
   {
       
       return view('listproduct');

   }
   public function showdetail()
   {   
       
       return view('productdetail');

   }
   public function AddItemCart()
   {   //lay giỏ hàng cũ 
    
    return redirect()->route('list.cart');
   }
   
}
