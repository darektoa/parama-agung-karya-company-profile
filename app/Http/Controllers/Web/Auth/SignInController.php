<?php

namespace App\Http\Controllers\Web\Auth;

use App\Exceptions\ResponseException;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        try {
            $username   = $request->username;
            $password   = $request->password;

            Auth::attempt(['username' => $username, 'password' => $password]);
            Auth::attempt(['email' => $username, 'password' => $password]);

            if(!Auth::check())
                throw new ResponseException('Account did not match', 404);

            return redirect()->route('dashboard.home');
        }catch(ResponseException $err) {
            return back()
                ->withErrors(['error' => $err->getErrors()]);
        }

    }
}
