<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.frontend.index');
    }

    public function details(Request $resuest, $slug)
    {
        return view('pages.frontend.details');
    }
    public function carts(Request $resuest)
    {
        return view('pages.frontend.carts');
    }
    public function notfound(Request $resuest)
    {
        return view('pages.frontend.404');
    }

    public function success(Request $resuest)
    {
        return view('pages.frontend.success');
    }
}
