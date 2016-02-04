<?php

namespace Gamify\Http\Controllers;

use Illuminate\Http\Request;

use Gamify\Http\Requests;
use Gamify\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

}