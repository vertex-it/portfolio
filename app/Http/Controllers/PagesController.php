<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function services()
    {
        return view('services');
    }

    public function projects()
    {
        return view('project-index');
    }

    public function project()
    {
        return view('project-show');
    }

    public function contact()
    {
        return view('contact');
    }
}
