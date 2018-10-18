<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;
 
use Kreait\Firebase\Factory;
 
use Kreait\Firebase\ServiceAccount;
 
use Kreait\Firebase\Database;

class ProductsController extends Controller
{
    public function __construct()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/212feac9ce31.json');
        $this->firebase = (new Factory)
                    ->withServiceAccount($serviceAccount)
                    ->withDatabaseUri('https://tour-app-1084.firebaseio.com/')
                    ->create();
    }
    public function index(){
        $database =  $this->firebase->getDatabase();
        $reference = $database->getReference('products/today');
        $value = $reference->getValue();
        dd($value);
        return 'Hello';
    }

    public function save() {
        /* $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/212feac9ce31.json');
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

        echo"<pre>";
        print_r($newPost->getvalue()); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $strInventory = $request->inventory;
        $arrProduct = [];
        $arrProduct['title'] = $request->title;
        $arrProduct['body'] = $request->body;
        $arrProduct['image'] = $request->image;
        $arrProduct['url'] = $request->url;

        //dd($arrProduct);

        $database = $this->firebase->getDatabase();
        $newPost = $database
                    ->getReference('products/'.$strInventory)
                    ->push($arrProduct);

        //dd($newPost->getvalue());

        return $newPost->getvalue();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $strInventory = 'history';
        $database = $this->firebase->getDatabase();
        $reference = $database->getReference('products/today/'.$id);
        $objPost = $reference->getValue($id);

        $newPost = $database
                    ->getReference('products/'.$strInventory)
                    ->push($objPost);

        $deletePost = $reference->remove();

        return $deletePost;
    }

}
 
?>