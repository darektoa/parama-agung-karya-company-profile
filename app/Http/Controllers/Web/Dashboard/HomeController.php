<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Dashboard home view handler
     * 
     * @return \Illuminate\View\View
     */
    public function index() :View
    {
        return view('pages.dashboard.home.index');
    }
}
