<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Models\Banner\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()
            ->get();

        return view('pages.dashboard.banners.index')
            ->with('banners', $banners);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.banners.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $image = $request->file('image');

            if($image->isReadable()) {
                $imageURI = StorageHelper::putPublic('/banners/images', $image);
                Banner::create([
                    'uri' => $imageURI,
                ]);
            }

            return back()
                ->with('success', 'Successfully created banner');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $bannerId)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $bannerId)
    {
        $banner = Banner::findOrFail($bannerId);

        return view('pages.dashboard.banners.edit.index')
            ->with('banner', $banner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $bannerId)
    {
        try {
            $banner = Banner::findOrFail($bannerId);
            $image = $request->file('image');
                
            StorageHelper::deletePublic($banner->uri);
            $imageURI = StorageHelper::putPublic('/banners/images', $image);
            $banner->update([
                'uri' => $imageURI,          
            ]);
    
            return back()
                ->with('success', 'Successfully edited banner');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $bannerId)
    {
        $banner = Banner::findOrFail($bannerId);
        $banner->delete();

        return back();
    }
}
