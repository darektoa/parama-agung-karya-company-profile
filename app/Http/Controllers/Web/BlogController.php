<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Blogs page handler
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('pages.guest.blog.index');
    }

    
    /**
     * Detail Blog page handler
     * 
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('pages.guest.blog.detail.index');
    }
}
