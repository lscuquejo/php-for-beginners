<?php

$router->get('', 'PagesController.php@home');
$router->get('about', 'PagesController.php@about');
$router->get('contact', 'PagesController.php@contact');

$router->get('users', 'UsersController@idex');
$router->post('users', 'UserController@store');