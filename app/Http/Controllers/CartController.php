<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Store\Illuminate\Session\SessionManager;
use PHPUnit\Framework\Constraint\Count;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ViewListCart()
    {
        return view('list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AddCart(Request $request, $productID)
    {   
        return view('cart');
    }
    public function DeleteItemCart(Request $request, $productID)
    {   
       return view('cart');
    }
    public function DeleteListItemCart(Request $request, $productID)
    {   
       return view('listcart');
    }
    /* lưu từng quanty của sản phẩm
    public function SaveListItemCart(Request $request, $productID, $quanty)
    {   
        $oldcart =  Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart); //tạo đôi tượng newcart
        $newcart->UpdateItemCart($productID, $quanty);
         // kiểm tra giỏ hàng nếu còn thì đẩy session lên lại nếu ko còn thì xóa giỏ hàng
        $request->Session()->put('Cart', $newcart);
        return view('listcart');
    }
    */
    public function SaveAllItem(Request $request)
    {
       
       
        return view('listcart');
     
 
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
