<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class convertController extends Controller
{
    //


    public function convertTo (){
        $client = new Client();

        $url = env('API_ENDPOINT');
        $apikeys = env('API_KEY');

        $to = request('to');
        $form = request('from');
        $amount = request('amount');

        $headers = [
          'apikey' => $apikeys
        ];
        $request = $client->request(
            'GET', $url.'?to='.$to.'&from='.$form.'&amount='.$amount , ['headers' => ['apikey'=> $apikeys]]
        );
        //$res = $client->sendAsync($request)->wait();

        $res = json_decode($request->getBody()->getContents());
        $show= true;

        //dd($res);
        return view('pages-with-login.convert',compact('res','show','to'));
        //$res->getBody();
    }
}
