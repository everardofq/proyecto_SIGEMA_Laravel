<?php

namespace sigema\Http\Controllers;

use Illuminate\Http\Request;
use sigema\Http\Requests;
use sigema\Http\Controllers\Controller;

class FrontController extends Controller
{
   public function __construct(){
      $this->middleware('auth',['only'=> 'admin']); //middleware solo al metodo admin
   }

   public function index(){
        return view('index');
   }

   public function contacto(){
        return view('contacto');
   }

   public function reviews(){
        return view('reviews');
   }

   public function admin(){
        return view('admin.index');
   }
}
