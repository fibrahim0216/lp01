<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

    	return view('home.index');
    }

    public function blog(){
    	return view('home.blog');
    }

    public function single(){
    	return view('home.single_post');
    }

    public function about(){
    	return view('home.about_us');
    }

    public function contact(){
    	return view('home.contact_us');
    }
}
