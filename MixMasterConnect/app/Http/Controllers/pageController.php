<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndexPage(){
        return view("front-user.index");
    }
}
