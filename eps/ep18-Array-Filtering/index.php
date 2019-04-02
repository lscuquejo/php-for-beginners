<?php

class Post
{
    public $title;

    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [

    new Post('My First Post', true),
    new Post('My First Post', true),
    new Post('My First Post', true),
    new Post('My First Post', false),

];

//$unpublishedPost = array_filter($posts, function ($post) {
//    return ! $post->published;
//});
//
//$publishedPost = array_filter($posts, function ($post) {
//    return $post->published;
//});

$modified = array_map(function ($post) {
    return 'foobar';
}, $posts);

var_dump($modified);