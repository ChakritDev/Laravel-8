<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return 'Home page';
    }
    public function service()
    {
        return 'Service page';
    }
    public function contact()
    {
        return 'Contact page';
    }
}
