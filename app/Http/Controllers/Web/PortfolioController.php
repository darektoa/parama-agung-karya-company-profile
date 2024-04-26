<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Portfolio page handler
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('pages.guest.portfolio.index');
    }
}
