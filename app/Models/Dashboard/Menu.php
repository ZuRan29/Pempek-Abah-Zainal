<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = [
        'nama_menu','deskripsi','harga','foto'
    ];
}
