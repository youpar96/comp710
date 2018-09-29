<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        return view('front.gallery');
    }
    
    public function indexForAdmin(){
        return view('admin.gallery');
    }
}
