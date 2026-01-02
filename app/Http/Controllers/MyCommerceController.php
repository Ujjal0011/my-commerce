<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MyCommerceController extends Controller
{
    public function index():View
    {
        return view('website.home.index');
    }

    public function category():View
    {
        return view('website.category.index');
    }

    public function details():View
    {
        return view('website.details.index');
    }
}
