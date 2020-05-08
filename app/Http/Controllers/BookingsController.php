<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingsController extends Controller
{
    //
    /*
    public function validate(Request $req) {
        $this->validate( $req,[
            'date' => 'required|date',
            'hour' => 'required',
            'numPerson' => 'required'
        ]);
    }*/
    public function __construct()
    {
       $this->middleware('auth'); //verified
    }
    public function index()
    {
        return view('reservation');
    }
}
