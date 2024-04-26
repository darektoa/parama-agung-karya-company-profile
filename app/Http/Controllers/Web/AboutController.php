<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Content\Content;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * About page handler
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $contents = Content::whereRelation('directory.directory', 'codename', 'tentangKami')
            ->orderBy('order')
            ->get()
            ->mapWithKeys(fn($items) => (
                [$items['codename'] => $items]
            ))
            ->toArray();

        return view('pages.guest.about.index')
            ->with('contents', $contents);
    }
}
