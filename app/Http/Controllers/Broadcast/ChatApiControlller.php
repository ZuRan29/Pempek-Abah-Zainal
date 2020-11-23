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

    public function sendFile()
    {

        $broadcast = DB::table('bc_wa')->where('status', '0')->limit(250)->get();

        // dd($broadcast);

        foreach ($broadcast as $broad) {
            $coba = DB::table('bc_wa')->where('id', $broad->id)->update(['status' => '1']);
            // dd($coba);
            // $this->db->query("UPDATE bc_wa_2 SET send = '1' WHERE id = ".$broad->id);
            // dd($broad['nama']);
            $message = 'Salam Bapak / Ibu '. $broad->nama .'
*Workshop Online*
Pelatihan dan Sertifikasi Hypnotherapy
*FUNDAMENTAL & ADVANCED HYPNOTHERAPY*
Gelar Profesi / Non Akademik (CH & CHt) dari Indonesian Board of Hypnotherapy (IBH)

7 Sesi Pertemuan
7 - 14 Desember 2020
18.30 - 21.00 WIB

*SILABUS PELATIHAN :*
•  Fundamental Hypnotherapy (3 Sesi Pertemuan)
•  Advanced Hypnotherapy (2 Sesi Pertemuan)
•  Smart – Self Healing (2 sesi Pertemuan)

*Link Regestrasi* https://hypnotherapy.diklatonline.id/

Harga Normal : ~Rp. 3.500.000~,
*Harga Promo hanya Rp. 1.250.000,-*

*Fasilitas Yang Anda Dapatkan :*
•  Mengikuti 7 Sesi Pertemuan
•  Materi Pelatihan
•  Video Rekaman Pembelajaran
•  Sertifikat Fundamental Hypnotherapy (CH)
•  Sertifikat Advanced Hypnotherapy (CHt)
•  Sertifikat CH CHt Good Standing
•  Membership dari IBH
•  Gelar non akademik CH dan CHt
•  Gratis Pengiriman Sertifikat
•  *Smart - Self Healing (2 Sesi Pertemuan) Senilai Rp 750.000,-*

*Kontak Panitia*

*https://wa.me/628111102495*
*https://wa.me/628111109423*';

            // $message = 'Halo';
        $data = [
            'phone' => $broad->telp,
            'body' => 'http://diklatonline.id/bc_wa/bc_hypno.jpg',
            'filename' => 'bc_hypno',
            'caption' => $message
        ];

        // dd($data);
        $url = 'https://eu145.chat-api.com/instance143493/sendFile?token=1atto4m47iqljn2e';

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


    public function sendFileNew()
{

        $broadcast = DB::table('bc_wa_3')->where('status', '0')->limit(250)->get();

        // dd($broadcast);

        foreach ($broadcast as $broad) {
            $coba = DB::table('bc_wa_3')->where('id', $broad->id)->update(['status' => '1']);

            $message = 'Salam Bapak / Ibu '. $broad->nama .'
Kelas Kompetensi – Full Online
BIMBINGAN TEKNIS & SERTIFIKASI KOMPETENSI
AHLI MUDA K3 KONSTRUKSI – BNSP
(Peraturan Menteri PUPR No. 21 Tahun 2019 & Permen PUPR No 14 tahun 2020)

Metode Pelatihan
•  E- learning
•  Tatap muka Online - Webinar
•  Sertifikasi Komptensi BNSP – Online

Tanggal Kegiatan : 14 – 19 Desember 2020

Narasumber dari :
•  Tim Ditjen Bina Konstruksi - Kementerian PUPR
•  Praktisi dan Konsultan K3 Konstruksi

Promo Akhir Tahun  4.750.000,-

Selengkapnya di  https://kelassmart.com/k3bnsp/

WA Panitia https://wa.me/628111565770

Panitia  : 0811 1565 770 / 0811 9997 339';

            // $message = 'Halo';
        $data = [
            'phone' => '62'. $broad->telp,
            'body' => 'http://diklatonline.id/bc_wa/ahli_muda_k3.jpeg',
            'filename' => 'ahli_muda_k3.jpeg',
            'caption' => $message
        ];

        $url = 'https://eu114.chat-api.com/instance144661/sendFile?token=sdje75wgo6ci2f4w';

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
