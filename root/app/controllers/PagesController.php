<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');

    }

    public function about()
    {

        $company = 'Laracastas';

        return view('about', [

            'users' => $company

        ]);

    }

    public function contact()
    {

        return view('contact');

    }

}