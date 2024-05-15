<?php

namespace App\Http\Controllers\Web;

use App\Helpers\CollectionHelper;
use App\Http\Controllers\Controller;
use App\Models\Banner\Banner;
use App\Models\Blog\Blog;
use App\Models\Certificate\Certificate;
use App\Models\Client\Client;
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
        $banners = Banner::latest()
            ->get();

        $blogs = Blog::with(['thumbnail'])
            ->limit(4)
            ->latest()
            ->get();
        
        $certificates = Certificate::with(['images'])
            ->limit(3)
            ->latest()
            ->get();

        $clients = Client::latest()
            ->get();
            
        $projects = Portfolio::with(['thumbnail'])
            ->limit(3)
            ->latest()
            ->get();
            
        $contents = CollectionHelper::toObject(
            Content::orderBy('order')
                ->get()
                ->mapWithKeys(fn($items) => (
                    [$items['codename'] => $items]
                ))
        );

        return view('pages.guest.home.index')
            ->with([
                'banners' => $banners,
                'blogs' => $blogs,
                'certificates' => $certificates,
                'clients' => $clients,
                'contents' => $contents,
                'projects' => $projects,
            ]);
    }
}
