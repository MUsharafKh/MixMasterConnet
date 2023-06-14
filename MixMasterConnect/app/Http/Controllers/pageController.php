<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndexPage(){
        return view("front-user.index");
    }

    public function getAboutUsPage(){
        return view("front-user.about-us");
    }

    public function getContactUsPage(){
        return view("front-user.contact-us");
    }

    public function getEventsPage(){
        return view("front-user.events");
    }

    public function getPrivacyPolicyPage(){
        return view("front-user.privacy-policy");
    }

    public function getSongRequestPage(){
        return view("front-user.request");
    }
}
