<?php 

namespace App\Controllers;

use App\Models\User;
use App\Models\Category;


  class HomeController {

    // public function __construct(){
    //     csrf();
    // }

    public function index() {
        $users = User::get();
        // pr($users);
        echo language()->get('welcome');
        echo '<br />';
        echo 'Welcome to the home page.';
    }

    public function about() {
        $category = Category::select('id','name')->with('products:id,name,category_id')->limit(10)->get();
        pr($category); 
        echo 'Welcome to the about page.' ;
    }

    public function category(){
        // 
        return view('category/create');
    }

    public function category_store(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // pr(request()['name']);  
                    $model = new Category();
                    $model->name = request()['name'];
                    $model->save();
                    echo 'save successfully';
                
            }
    }
}