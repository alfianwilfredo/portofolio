<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class AboutController extends Controller
{
    //

    public function index()
    {
        return view('pages.about');
    }
}
