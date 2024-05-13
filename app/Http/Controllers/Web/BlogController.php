<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
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
    public function show(string $blogId)
    {
        $blog = Blog::findOrFail($blogId);
        $otherBlogs = Blog::where('id', '!=', $blogId)
            ->latest()
            ->get();
        
        return view('pages.guest.blog.detail.index')
            ->with([
                'blog' => $blog,
                'otherBlogs' => $otherBlogs,
            ]);
    }
}
