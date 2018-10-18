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
     
    //dd($value);
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
 
    'title' => 'OnePlus 6',
     
    'body' => 'OnePlus 6 (Mirror Black, 6GB RAM, 64GB Storage)',
    
    'image' => 'https://images-na.ssl-images-amazon.com/images/I/61zm87iWL6L._SL1500_.jpg',
    
    'url' => 'https://www.amazon.in/OnePlus-Mirror-Black-64GB-Storage/dp/B0756Z43QS'
     
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
    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/212feac9ce31.json');
 
    $firebase = (new Factory)
     
    ->withServiceAccount($serviceAccount)
     
    ->withDatabaseUri('https://tour-app-1084.firebaseio.com/')
     
    ->create();
     
    $database = $firebase->getDatabase();
    
    $reference = $database->getReference('products/today');

    $value = $reference->getValue();

    $product_detail = $value[$id];
     
   /*  echo"Hello, <pre>";
     
    print_r($product_detail); */
    //return view('welcome');
    return view('detail',['product' => $product_detail]);
}
}
 
?>