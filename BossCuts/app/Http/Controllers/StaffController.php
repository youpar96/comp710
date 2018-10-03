<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barber;

class BarberController extends Controller
{
    public function indexForAdmin(){
        $barbers=DB::table('barbers')->get();
        return view('admin.staff', compact('barbers'));
    }
}
