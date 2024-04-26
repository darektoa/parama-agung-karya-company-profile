<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Content\Content;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Contact page handler
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $contents = Content::whereRelation('directory.directory', 'codename', 'kontakKami')
            ->orderBy('order')
            ->get()
            ->mapWithKeys(fn($items) => (
                [$items['codename'] => $items]
            ))
            ->toArray();
        
        return view('pages.guest.contact.index')
            ->with('contents', $contents);
    }
}
