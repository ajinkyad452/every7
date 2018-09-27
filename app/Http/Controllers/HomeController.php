<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;
 
use Kreait\Firebase\Factory;
 
use Kreait\Firebase\ServiceAccount;
 
use Kreait\Firebase\Database;

class HomeController extends Controller
{
public function index(){
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/212feac9ce31.json');
 
    $firebase = (new Factory)
     
    ->withServiceAccount($serviceAccount)
     
    ->withDatabaseUri('https://tour-app-1084.firebaseio.com/')
     
    ->create();
     
    $database = $firebase->getDatabase();
    
    $reference = $database->getReference('products/today');

    $value = $reference->getValue();
     
    //echo"Hello, <pre>";
     
    //print_r($value);
    return view('main',['products' => $value]);
 
}

public function save() {
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/212feac9ce31.json');
 
$firebase = (new Factory)
 
->withServiceAccount($serviceAccount)
 
->withDatabaseUri('https://tour-app-1084.firebaseio.com/')
 
->create();
 
$database = $firebase->getDatabase();
 
$newPost = $database
 
->getReference('products/today')
 
->push([
 
    'title' => 'Sacard Games Part 2',
     
    'body' => 'Vikram Chandra',
    
    'image' => 'http://every7.xyz/products/wp-content/uploads/2018/09/51ikQ3LtN7L._SX325_BO1204203200_.jpg',
    
    'url' => ''
     
]);
 
//$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
 
//$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
 
//$newPost->getChild('title')->set('Changed post title');
 
//$newPost->getValue(); // Fetches the data from the realtime database
 
//$newPost->remove();
 
echo"<pre>";
 
print_r($newPost->getvalue());
}

public function details($id)
{
    return view('welcome');
}
}
 
?>