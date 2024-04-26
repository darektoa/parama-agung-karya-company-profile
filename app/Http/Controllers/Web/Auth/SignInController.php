<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SignInController extends Controller
{
    /**
     * Sign-in view Handler
     * 
     * @return \Illuminate\View\View
     */
    public function index() :View
    {
        return view('pages.auth.signIn.index');
    }

    /**
     * Sign-in data store handler
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) :RedirectResponse
    {
        // dd($request->all());

        return redirect()->route('dashboard.home');
    }
}
