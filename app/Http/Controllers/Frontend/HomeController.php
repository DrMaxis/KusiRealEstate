<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Properties\Property;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $properties = Property::all();
        return view('frontend.index')->with('properties', $properties);
    }



   public function test() {
       
    // prepare post data
    $postdata = array(
        'username' => 'simplerets',
        'password' => 'simplerets',
        
    );

    // set up Guzzle Client request

    $client = new Client();
    $uri =  'https://api.simplyrets.com/properties?count=true';
    $options = [
        'headers'   => ['Accept' => 'application/json', 'Authorization' => 'Basic c2ltcGx5cmV0czpzaW1wbHlyZXRz'],
        'timeout' => 200
    ];

    $response = $client->get($uri, $options);

    $result = json_decode($response->getBody()->getContents());

    dd($result, $response);
   }
}
