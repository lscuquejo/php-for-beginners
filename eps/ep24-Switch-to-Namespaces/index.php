<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};
use App\Core\App;

$users = App::get('database')->selectAll('users');

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
