<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "https://webhook.site/f0be6633-90a1-47a5-a445-0ca194b388d9";
        $headers = [
            'Content-Type' => 'application/json'
        ];

        $data = [
            "is_webhook_enable"=> true,
            "webhook_url"=>'https://webhook.site/f0be6633-90a1-47a5-a445-0ca194b388d9'
        ];

        $hasil = $client->request('POST', $url, [
            'headers' => $headers,
            'body' => json_encode($data)
        ]);

        dd($hasil);
    }
}
