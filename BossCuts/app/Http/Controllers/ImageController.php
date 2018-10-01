<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ImageController extends Controller
{
    public function index(){
        $images=DB::table('images')->get();
        return view('front.gallery', compact('images'));
    }
    
    public function indexForAdmin(){
        return view('admin.gallery');
    }
}
