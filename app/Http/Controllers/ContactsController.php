<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactsController extends Controller
{
    //
    protected function validate(Request $req) {
        $this->validate( $req,[
            'message' => 'required|text'
        ]);
    }
}
