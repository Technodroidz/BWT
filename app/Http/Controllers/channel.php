<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class channel extends Controller
{
    
    public function index(){

        view('web.pages.my-channel');
    }
}
