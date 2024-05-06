<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Helpers\CollectionHelper;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Models\Content\{Content, Directory, Image};
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\View\View;

class ContentController extends Controller
{
    /**
     * Edit landing page content view handler
     * 
     * @return \Illuminate\View\View
     */
    public function index() :View
    {
        $directories = Directory::where('depth', 0)
            ->orderBy('name')
            ->get();

        return view('pages.dashboard.contents.index')
            ->with('directories', $directories);
    }


    /**
     * Show detail page content view handler
     * 
     * @param \Illuminate\Http\Request $request
     * @param string $contentId
     * @return \Illuminate\View\View
     */
    public function show(Request $request, string $contentId) :View
    {
        $directories = Directory::where('depth', 0)
            ->orderBy('name')
            ->get();

        $content = Content::findOrFail($contentId);

        return view('pages.dashboard.contents.index')
            ->with('directories', $directories)
            ->with('content', $content);
    }


    /**
     * Update content by Id
     * 
     * @param \Illuminate\Http\Request $request
     * @param string $contentId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, string $contentId) :RedirectResponse
    {
        $content = Content::findOrFail($contentId);
        $data = CollectionHelper::getOrOld($request, $content);
        
        if($data) $content->update($data->only([
            'text'
        ])->toArray());
            
        if($contentImage = $request->file('image')) {
            if($oldImage = $content->image) {
                StorageHelper::deletePublic($oldImage->uri);
                $oldImage->delete();
            }

            $imageUri = StorageHelper::putPublic('/contentImages', $contentImage);
            Image::create([
                'content_id'    => $contentId,
                'uri'           => $imageUri,          
            ]);
        }

        return back();
    }
}
