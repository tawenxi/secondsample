<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    /**
     * Display a StaticHomepage.
     *
     * @return Static:Homepage
     */
    public function home()
    {
         return view('static_pages/home');
    }



    /**
     * Display a StaticHelppage.
     *
     * @return Static:Helppage
     */
    public function help()
    {
         return view('static_pages/help');
    }

    /**
     * Display a StaticHomepage.
     *
     * 
     * @return Static:aboutpage
     */
    public function about()
    {
         return view('static_pages/about');
    }

   
}
