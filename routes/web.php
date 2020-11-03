<?php

use App\Http\Controllers\Broadcast\WhatsappController;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.menu');
});

Route::get('dashboard-blast/whatsapp', function () {
    return view('whatsapp.forms');
});

Route::post('dashboard-blast/whatsapp/send', [WhatsappController::class, 'index'])->name('whatsapp.post');
