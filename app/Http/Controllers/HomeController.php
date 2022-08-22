<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
        return view('users.app');
    }
    public  function members()
    {
        $members = ['nodir'];
        return view('users.members', \compact('members'));
    }
    public  function about()
    {
        return view('users.about');
    }
}
