<?php

namespace App\Http\Controllers\Broadcast;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatApiControlller extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $url = "https://eu147.chat-api.com/instance190982/sendMessage?token=a2p7lf6hkeu4153s";
        $headers = [
            'Content-Type' => 'application/json'
        ];

        $data = [
            'phone' => $request->txtPhone,
            'body' => $request->txtMsg
        ];

        $hasil = $client->request('POST', $url, [
            'headers' => $headers,
            'content' => json_encode($data)
        ]);

        return redirect('dashboard-blast/chat-api');
    }
}
