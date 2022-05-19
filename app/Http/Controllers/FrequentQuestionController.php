<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrequentQuestionController extends Controller
{
    public function index(){
        return view('frequent-questions.index');
    }
}
