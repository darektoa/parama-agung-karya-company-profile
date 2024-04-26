<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\{RedirectResponse, Request};

class SignOutController extends Controller
{
    /**
     * Sign-out handler
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(): RedirectResponse
    {
        return redirect()->back();
    }
}
