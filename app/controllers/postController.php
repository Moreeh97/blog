<?php
namespace App\Controllers;
use App\Models\Post;

class PostController {
    public function index() {
        $post = new Post();
        $posts = $post->all();

        require __DIR__ . '/../views/posts/index.php';
    }
}
