<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentOptionsController extends Controller
{
    public function index(){
        return view('payment-options.index');
    }
}
