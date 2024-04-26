<?php

namespace App\Http\Controllers\Web;

use App\Helpers\CollectionHelper;
use App\Http\Controllers\Controller;
use App\Models\Content\{Content, Page};
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
        $contents = CollectionHelper::toObject(
            Content::whereRelation('directory.directory', 'codename', 'beranda')
                ->orderBy('order')
                ->get()
                ->mapWithKeys(fn($items) => (
                    [$items['codename'] => $items]
                ))
        );

        return view('pages.guest.home.index')
            ->with('contents', $contents);
    }
}
