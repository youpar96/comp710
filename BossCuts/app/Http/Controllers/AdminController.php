<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
    This controller is used to control the admin functions
*/
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin/home');
    }

}
