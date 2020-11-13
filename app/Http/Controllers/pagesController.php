<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function sites(){
        return view('pages.sites');
    }
    public function predictions(){
        return view('pages.predictions');
    }
    public function contacts(){
        return view('pages.contacts');
    }
    public function odds(){
        return view('pages.odds');
    }
    public function stream(){
        return view('pages.stream');
    }
}
