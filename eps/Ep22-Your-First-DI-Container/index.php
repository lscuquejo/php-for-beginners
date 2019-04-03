<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

$users = App::get('database')->selectAll('users');

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
