<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home ()
    {
        return view('contents.home');
    }
    public function product ()
    {
        return view('contents.product');
    }
    public function product_detail ()
    {
        return view('contents.product_detail');
    }
}
