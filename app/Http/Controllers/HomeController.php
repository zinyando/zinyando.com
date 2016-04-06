<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function home()
    {
        return view('home');
    }
}
