<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getIndexPage()
    {
        return view("front-user.index");
    }
}
