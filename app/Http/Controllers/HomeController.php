<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class HomeController extends Controller
{
    /**
    * Index
    *
    * @return <+Return+>
    */
    public function index()
    {
        return view('welcome');
    }
}
