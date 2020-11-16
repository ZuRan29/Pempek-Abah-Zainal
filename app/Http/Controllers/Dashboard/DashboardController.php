<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\MenuView;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = MenuView::sum('total_menu');
        return view('layouts.dashboard.content', compact('menus'));
    }
}
