<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    # in controllers, we
    # process variable data or params
    # talk to the model
    # receive from the model
    # compile or process data from the model if needed
    # pass the data back to the correct view


    public function getIndex()
    {
        return view('pages.welcome');
    }

    public function getAbout()
    {

        $fullName = "Ade Bello";

        return view('pages.about', compact('fullName'));
    }

    public function getContact()
    {
        return view('pages.contact');
    }

}
