<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        // get data from database
        $name = 'John Doe';
        $name2 = 'John Doe';
        // pass data to view
        return view('about', compact('name', 'name2'));
    }

    public function contact() {
        // get data from database
        $name = 'contactus';
        $name2 = 'John Doe';
        // pass data to view
        return view('contactus', compact('name', 'name2'));
    }

    public function create() {
        // get data from database
        $name = 'John Doe';
        // pass data to view
        return view('about', compact('name'));
    }
}
