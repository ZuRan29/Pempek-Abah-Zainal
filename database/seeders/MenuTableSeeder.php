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
    }
}
