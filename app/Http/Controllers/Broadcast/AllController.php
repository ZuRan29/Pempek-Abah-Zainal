<?php

namespace App\Http\Controllers\Broadcast;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index()
    {
        $client = new Client();
        $getNama = $client->get('https://api.mercury.chat/sdk/whatsapp/chat?api_token=5f9f714a4638d700199964ff7IQiZc8a5&instance=L1604284746236K&skip=0&limit=5000')->getBody();
        $data = json_decode($getNama, true)['data'];
        $realdata = json_decode(json_encode($data));
        if (isset($realdata->image)) {
            $realdata = $realdata;
        }
        // dd($realdata);

        $getChat = $client->get('https://api.mercury.chat/sdk/whatsapp/messages/6289517748988@c.us?api_token=5f9f714a4638d700199964ff7IQiZc8a5&instance=L1604284746236K&skip=0')->getBody();
        $dataChat = json_decode($getChat, true)['data'];
        $dataChat = json_decode(json_encode($dataChat));

        sort($dataChat);
        // dd($realdata);
        return view('whatsapp.all-chats',[
                'realdata' => $realdata,
                'realchat' => $dataChat
        ] );

    }
}
