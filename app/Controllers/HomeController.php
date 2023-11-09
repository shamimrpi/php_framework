<?php 

namespace App\Controllers;

use App\Models\User;

  class HomeController {
    public function index() {
        $users = User::all();
        print_r($users);
        die();
        echo 'Welcome to the home page.';
    }

    public function about() {
        echo 'Welcome to the about page.';
    }
}