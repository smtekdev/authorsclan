<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view("index");
    }
    public function about(){
        return view("about");
    }
    public function app_development(){
        return view("app-development");
    }
    public function contactForm(){
        return view("contactForm");
    }
    public function portfolio(){
        return view("portfolio");
    }
    public function services(){
        return view("services");
    }
    public function graphic_design(){
        return view("graphic_design");
    }
    public function design(){
        return view("design");
    }
    public function social_media_marketing(){
        return view("social_media_marketing");
    }
     public function ecommerce(){
        return view("ecommerce");
    }
    public function seo(){
        return view("seo");
    }
    public function bookwriting(){
        return view("bookwriting");
    }
     public function website(){
        return view("website");
    }
    public function socialmedia(){
        return view("socialmedia");
    }
}
