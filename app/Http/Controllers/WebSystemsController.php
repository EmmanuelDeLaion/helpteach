<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSystemsController extends Controller
{
    public function index(){
        return view('web-systems.index');
    }
}
