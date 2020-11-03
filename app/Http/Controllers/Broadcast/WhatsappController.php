<?php

namespace App\Http\Controllers\Broadcast;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $url = "https://api.mercury.chat/sdk/whatsapp/sendMessage?api_token=5f9f714a4638d700199964ff7IQiZc8a5&instance=L1604284746236K";
        $headers = [
            'Content-Type' => 'application/json'
        ];

        $data = [
            'phone' => $request->txtPhone,
            'body' => $request->txtMsg
        ];

        $hasil = $client->request('POST', $url, [
            'headers' => $headers,
            'body' => json_encode($data)
        ]);

        return redirect('dashboard-blast/whatsapp');
        // echo $hasil->getBody();
        // die;

        // dd($client);
    }
}
