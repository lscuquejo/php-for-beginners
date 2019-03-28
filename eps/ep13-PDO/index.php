<?php

require 'Task.php';

require 'functions.php';

$pdo = connectToDb();

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results);

require 'index.view.php';
