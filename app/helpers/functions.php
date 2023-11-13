<?php 

use Illuminate\Support\Collection;
use Foundation\Language;

function pr($object, $exit = true)
{
    echo '<pre>';
    print_r($object);
    echo '</pre>';
    if ($exit == true) {
        exit;
    }
}

function view($view, $data = []) {
    // Extract the data array to variables

    extract($data);
    // pr(BASE_PATH .'/views'. "/{$view}.php");
    // Include the view file
    if (file_exists(BASE_PATH .'/views'. "/{$view}.php")) {
        include BASE_PATH .'/views'. "/{$view}.php";
    } else {
        // Handle the error, e.g., show a custom error message or log the issue
        echo "View {$view} not found!";
        // echo BASE_PATH;
    }
}

function csrf(){
    session_start();
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

function request()
{
    $request =new Collection();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        foreach($_POST as $key=> $item){
            $request[$key] = $item;
          
        }
    }else{
        foreach($_GET as $key=> $item){
            $request[$key] = $item;
          
        }
    }
    return $request;
      // pr($request);

}

function language(){
    
    return $language = new Language('bn');
}