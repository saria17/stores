<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(Request $request){
      return view('admin.master');
   }
   public function categories(Request $request){
      return view('admin.categories');
   }
}
