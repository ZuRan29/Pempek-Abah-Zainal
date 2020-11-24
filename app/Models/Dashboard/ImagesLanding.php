<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesLanding extends Model
{
    use HasFactory;

    protected $table = 'images_landing';

    protected $fillable = ['path', 'foto'];
}
