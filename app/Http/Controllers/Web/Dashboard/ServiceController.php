<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Helpers\CollectionHelper;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Models\Service\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with(['thumbnail'])
            ->latest()
            ->get();

        return view('pages.dashboard.services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.services.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $thumbnail = $request->file('thumbnail');
            
            $service = Service::create([
                'title' => $request->title,
                'slug'  => Str::slug($request->title) . Str::random(4),
                'content' => $request->content,
            ]);

            if($thumbnail->isReadable()) {
                $thumbnailURI = StorageHelper::putPublic('/services/thumbnails', $thumbnail);
                $service->thumbnail()->create([
                    'uri' => $thumbnailURI,
                ]);
            }

            return back()
                ->with('success', 'Successfully created service');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $serviceId)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $serviceId)
    {
        $service = Service::with('thumbnail')->findOrFail($serviceId);

        return view('pages.dashboard.services.edit.index')
            ->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $serviceId)
    {
        try {
            $service = Service::findOrFail($serviceId);
            $data = CollectionHelper::getOrOld($request, $service);
            
            if($data) $service->update($data->only([
                'title',
                'content',
            ])->toArray());
                
            if($thumbnail = $request->file('thumbnail')) {
                if($oldThumbnail = $service->thumbnail) {
                    StorageHelper::deletePublic($oldThumbnail->uri);
                    $oldThumbnail->delete();
                }
    
                $thumbnailURI = StorageHelper::putPublic('/services/thumbnails', $thumbnail);
                $service->thumbnail()->create([
                    'uri' => $thumbnailURI,          
                ]);
            }
    
            return back()
                ->with('success', 'Successfully edited service');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $serviceId)
    {
        $service = Service::with('thumbnail')->findOrFail($serviceId);

        if($service->thumbnail) {
            StorageHelper::deletePublic($service->thumbnail);
            $service->thumbnail->delete();
        }

        $service->delete();

        return back();
    }
}
