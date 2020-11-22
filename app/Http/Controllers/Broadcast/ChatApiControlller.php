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
Kelas Online – Webinar
MEMAHAMI 8 LIFE SKILLS UNTUK MERAIH SUKSES

Selasa, 24 November 2020, 13.00 - 15.00 WIB

Life Skills tak pelak merupakan elemen fundamental untuk meraih keberhasilan hidup yang epik. Sayangnya, ilmu tentang life skills ini justru jarang diajarkan di bangku sekolah dan kuliah. Kelas  yang powerful ini mengajak Anda untuk menjelajahi beragam tema kunci tentang life skills

•	Apa saja tipe life skills yang paling dibutuhkan untuk sukses di era digital yang serba bergerak dengan cepat ini?
•	Bagaimana tahapan dan langkah praktikal untuk mempelajari dan menerapkan beragam life skills secara efektif?
•	Kenapa kegagalan dalam menguasai life skills akan membuat bisnis ataupun karir kita bisa termehek-mehek dan akhirnya stagnan?

Materi
1.	Self Learning Skills
2.	Grit & Resiliency Skills
3.	Creative Problem Solving Skills
4.	Personal Productivity Skills
5.	Mind Management Skills
6.	Professional Manner
7.	Digital Literacy Skills
8.	Money Management Skills

Delapan life skills di atas dibedah secara mendalam, aplikatif dan menyajikan beragam contoh penerapannya yang powerful. Dijamin Anda akan dibuat terkesima dengan kedalaman ulasan dan penyajiannya.

Harga Normal Rp. 450.000,-
Investasi Khusus Alumni Rp. 50.000,-

TEMPAT TERBATAS

Registrasi Segera di https://order.diklatonline.id/MeraihSukses

Kontak Panitia 0813 1888 6103';

            // $message = 'Halo';
        $data = [
            'phone' => '62'. $broad->telp,
            'body' => 'http://diklatonline.id/bc_wa/life_skills.jpeg',
            'filename' => 'life_skills.jpeg',
            'caption' => $message
        ];

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
}
