<?php

require 'functions.php';

class Task {

    public $description;

    public $completed = false;

    public function __construct($description)
    {

        $this->description = $description;

    }

    public function Complete()
    {

        $this->completed = true;

    }

    public function isComplete()
    {

        return $this->completed;

    }

}

$task = [

    new Task('Go to the store'),

    new Task('Go to the store'),

    new Task('Go to the store'),

];

$task[0];


require 'index.view.php';