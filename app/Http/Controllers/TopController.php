<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * TOP 一覧
     * 

     */
    public function index()
    {
        return view('top');
    }
}
