<?php

namespace Database\Seeders;

use App\Models\Dashboard\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
                'nama_menu' => 'Kapal Selam',
                'deskripsi' => 'Pempek kapal selam sedikit unik dari sisi ukuran. Ukurannya relatif lebih besar dibandingkan pempek "kecil", karena memang disiapkan untuk menampung satu butir telur.',
                'harga' => 10000,
                'foto' => 'Pempek Palembang.jpg'

        ]);

        Menu::create([
            'nama_menu' => 'Kulit',
            'deskripsi' => 'Pempek kulit memiliki bahan dasar yang paling berbeda dari pempek Palembang lainnya. Dari namanya saja bisa kita tebak bahwa bahan dasarnya adalah kulit ikan. Ya, benar sekali bahwa bahan dasar utamanya adalah kulit ikan. Kulit yang digunakan bisa berasal dari kulit ikan belida atau tenggiri. Tetapi karena kulit ikan tersebut baunya sangat amis dan warnanya juga hitam, maka dalam perkembangannya beberapa orang menggantinya dengan daging perut ikan sebagai bahan dasar utama pempek yang satu ini. Daging perut ikan memiliki bau yang lebih tidak amis dan berwarna merah. Sehingga pempek yang dihasilkan juga berwarna lebih terang dan lebih wangi.',
            'harga' => 9000,
            'foto' => 'Pempek Kulit.jpg'
        ]);
    }
}
