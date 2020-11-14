<?php

namespace App\Http\Controllers\Broadcast;
ini_set('max_execution_time', 0);
set_time_limit(0);

use App\Http\Controllers\Controller;
use App\Models\Broadcast;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;


class ChatApiControlller extends Controller
{
    public function index(Request $request)
    {

        $client = new Client();
        $url = "https://eu114.chat-api.com/instance144661/sendMessage?token=sdje75wgo6ci2f4w";
        $headers = [
            'Content-Type' => 'application/json'
        ];

        $realData = [
            'phone' => $request->txtPhone,
            'body' => $request->txtMsg
        ];

        // $data = [
        //     'phone' => $request->txtPhone,
        //     'body' => $request->txtMsg
        // ];

        $realData = json_encode($realData);

        // $hasil = $client->request('POST', $url, [
        //     'method'  => 'POST',
        //     'header'  => 'Content-type: application/json',
        //     'content' => $realData,
        // ]);

        $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $realData,
            ]
        ]);
        // Send a request

        $result = file_get_contents($url, false, $options);
        // return redirect('dashboard-blast/chat-api');
    }


    public function getDatabase()
    {
        $broadcast = DB::table('broadcast')->get();

        foreach ($broadcast as $broad) {
            $message = 'Yth. Bapak/Ibu '. $broad->nama .'

Terima Kasih atas Partisipasi Rekan Rekan Semua telah mengikuti Webinar 3 Jam Diskusi Bersama 4 Narasumber
PENGADAAN JASA KONSTRUKSI 2021
Pasca Hadirnya Permen PUPR No. 14 tahun 2020 dan SE. No. 22 tahun 2020

Link Materi : https://bit.ly/JASKONMATERI

Link Youtube :  https://youtu.be/2vMqFPpztuM

Untuk mendownload Sertifikat melalui Link berikut : https://sertifikat.diklatonline.id/landing/get_sertifikat/pengadaan-jasa-konstruksi

(Sertifikat di download dengan memasukkan alamat email yang digunakan saat Registrasi Zoom. Sertifikat saat ini sedang proses pembuatan dan dapat Di Download 3 hari setelah Kegiatan)

Sertifikat hanya di berikan bagi peserta yang mengikuti kegiatan melalui ZOOM, sesuai dengan data kehadiran.

Mohon ditunggu. Terima kasih 🙏🏽';

        $data = [
            'phone' => $broad->phone,
            'body' => $message
        ];

        $url = "https://eu145.chat-api.com/instance143493/sendMessage?token=1atto4m47iqljn2e";

        $realData = json_encode($data);

        $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $realData,
            ]
        ]);

        // Send a request
        $result = file_get_contents($url, false, $options);

        echo $result;
        }
    }
}
