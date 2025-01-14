<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {

        $pageTitle = "Home - ".env('APP_NAME');

        return view('frontend.index', compact('pageTitle'));
    }
}
