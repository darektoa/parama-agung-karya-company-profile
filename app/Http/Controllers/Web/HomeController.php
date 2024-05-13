<?php

namespace App\Http\Controllers\Web;

use App\Helpers\CollectionHelper;
use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use App\Models\Content\{Content, Page};
use App\Models\Portfolio\Portfolio;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Home page handler
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $blogs = Blog::limit(4)->latest()->get();
        $projects = Portfolio::limit(3)->latest()->get();
        $contents = CollectionHelper::toObject(
            Content::orderBy('order')
                ->get()
                ->mapWithKeys(fn($items) => (
                    [$items['codename'] => $items]
                ))
        );

        return view('pages.guest.home.index')
            ->with([
                'blogs' => $blogs,
                'contents' => $contents,
                'projects' => $projects,
            ]);
    }
}
