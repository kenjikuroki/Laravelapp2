<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  
    public function index()
    {
       $data = ['one', 'two', 'three', 'four', 'five'];
       return view('index', ['data'=>$data]);
    }

   public function post(Request $request)
   {
       return view('index', ['msg'=>$request->msg]);
   }

}

