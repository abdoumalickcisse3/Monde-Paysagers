<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index()
    {
        return view('Contact');
    }

    public function show($id)
    {
        // Code pour l'action show
    }
}
