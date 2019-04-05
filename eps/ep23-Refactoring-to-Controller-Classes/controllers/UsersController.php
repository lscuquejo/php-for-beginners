<?php
/**
 * Created by PhpStorm.
 * User: leonardocuquejo
 * Date: 2019-04-05
 * Time: 08:54
 */

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));

    }
    
    public function store()
    {

        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');

    }

}