<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        $title = "Home";
        return view("pages.home",  compact("title"));
    }
}
    