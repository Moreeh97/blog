<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        // load view
        require __DIR__ . '/../views/home/index.php';
    }

    public function about() {
        require __DIR__ . '/../views/home/about.php';
    }
}
