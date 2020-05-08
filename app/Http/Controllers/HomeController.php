<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth'); //verified
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $contacts = Contact::all();
        if(Auth::check() && Auth::user()->role == 2) {
            return redirect(route('adminIndex'))->with([
                'info'=> "if you want to enter as a user first you must logout as a admin"
            ]);       
        }

        return view('index');
    }
}
