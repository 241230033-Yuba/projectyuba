<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
        public function index()
    {
        return view('donasi');
    }
    
        public function pay()
    {
        return view('donasi');
    }
}
