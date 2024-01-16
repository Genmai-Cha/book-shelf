<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * TOP 一覧
     * 
     * @return 
     */
    public function index()
    {
        return view('register');
    }
}
