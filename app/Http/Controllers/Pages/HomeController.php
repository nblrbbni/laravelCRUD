<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("pages.home");
    }

    public function categories()
    {
        return view("pages.categories");
    }
    public function authors()
    {
        return view("pages.authors");
    }
    public function borrowings()
    {
        return view("pages.borrowings");
    }


}