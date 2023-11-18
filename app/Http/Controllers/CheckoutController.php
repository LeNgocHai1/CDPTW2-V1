<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Support\Facades\Mail;
use App\Mail\ShoppingMail;


class CheckoutController extends Controller
{
    public function getCheckOut() 
    { 
       return view('checkout');
       
    }

    public function postCheckOut(Request $request) 
    {
         
    }
    public function __construct()
    {
        $this->middleware('auth'); 
    }
}
