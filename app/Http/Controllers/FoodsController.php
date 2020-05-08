<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
class FoodsController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('auth'); //verified
    }
    public function index()
    {
        return view('index');
    }
}
