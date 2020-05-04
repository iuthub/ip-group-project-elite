<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingsController extends Controller
{
    //
    protected function validate(Request $req) {
        $this->validate( $req,[
            'date' => 'required|date',
            'hour' => 'required',
            'numPerson' => 'required'
        ]);
    }
}
