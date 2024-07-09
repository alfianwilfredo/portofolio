<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {

        $repositories = Repository::get();
        return view('pages.portofolio')->with('repositories', $repositories);
    }
}
