<?php
/**
 * Created by PhpStorm.
 * User: leonardocuquejo
 * Date: 2019-04-05
 * Time: 08:26
 */

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