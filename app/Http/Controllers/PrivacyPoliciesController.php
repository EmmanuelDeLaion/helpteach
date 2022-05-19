<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPoliciesController extends Controller
{
    public function index(){
        return view('privacy-policies.index');
    }
}
