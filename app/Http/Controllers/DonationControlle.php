<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationControlle extends Controller
{
        public function index()
    {
        return view('Donasi');
    }
}
