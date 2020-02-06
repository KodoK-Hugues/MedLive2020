<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function index()
    {
			$client = new Client();
			$response = $client->request('GET','https://tripadvisor1.p.rapidapi.com/hotels/get-details?adults=2&nights=2&currency=EUR&lang=fr_FR&child_rm_ages=7%252C10&checkin=2020-01-20&location_id=187147',[
      "headers" => [
        "X-RapidAPI-Host"=>env("ApiHost"),
        "X-RapidAPI-Key"=>env("ApiKey")]
    ]
			);
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();
      $bodyConv = json_decode($body, true);



// dd($bodyConv);

    	return view('/hotel', ["datas"=>$bodyConv['data']]
      );

    }
}


//$data = json_decode($json);
