<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view("master");
       }
       public function home(){
        return view('home');
       }
       public function contact(){
        return view('contact');
       }
       public function about(){
        return view('about');
       }
       public function project(){
        return view('project');
       }
}
