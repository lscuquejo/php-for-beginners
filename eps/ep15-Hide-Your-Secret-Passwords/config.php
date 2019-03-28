<?php


return [

    'database' => [//mysql:host=127.0.0.1;dbname=mytodo', 'root', '123mudar')

        'name' => 'mytodo',

        'username' => 'root',

        'password' => '123mudar',

        'connection' => 'mysql:host=127.0.0.1',

        'option' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

        ]

    ]

];