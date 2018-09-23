<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Style;

class StylesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $styles = Style::visible()->get();
        return view('styles.index', compact('styles'));
    }

}
