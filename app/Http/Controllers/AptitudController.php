<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AptitudController extends Controller
{
    public function Home()
    {
        return view('Aptitudes');
    }
}
