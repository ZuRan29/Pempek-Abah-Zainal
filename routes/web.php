<?php

use App\Http\Controllers\Broadcast\AllController;
use App\Http\Controllers\Broadcast\ChatApiControlller;
use App\Http\Controllers\Broadcast\WhatsappController;
use App\Http\Controllers\CobaController;
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

Route::get('dashboard-blast/broadcast', function() {
    return view('whatsapp.broadcast');
});

Route::get('dashboard-blast/all-chat', [AllController::class, 'index']);
Route::post('dashboard-blast/whatsapp/send', [WhatsappController::class, 'index'])->name('whatsapp.post');

// Chat-API
Route::get('dashboard-blast/chat-api', function () {
    return view('whatsapp.chat-api');
});
Route::post('dashboard-blast/chat-api/send', [ChatApiControlller::class, 'index'])->name('chat-api.send');


Route::get('coba', [CobaController::class, 'index']);
