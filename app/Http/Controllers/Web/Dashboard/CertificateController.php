<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Helpers\CollectionHelper;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Models\Certificate\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::with('images')
            ->latest()
            ->get();
        
        return view('pages.dashboard.certificates.index')
            ->with('certificates', $certificates);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.certificates.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $images = $request->file('images');
            // dd($request->all(), $images);
            $certificate = Certificate::create([
                'title' => $request->title,
                'slug'  => Str::slug($request->title) . Str::random(4),
                'content' => $request->content,
            ]);

            foreach($images as $image) {
                if(!$image->isReadable()) return;

                $imageUri = StorageHelper::putPublic('/certificates/images', $image);
                $certificate->images()->create([
                    'uri' => $imageUri,
                ]);
            }

            return back()
                ->with('success', 'Successfully created certificate');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $certificateId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $certificateId)
    {
        $certificate = Certificate::with('images')->findOrFail($certificateId);

        return view('pages.dashboard.certificates.edit.index')
            ->with('certificate', $certificate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $certificateId)
    {
        try {
            $images = $request->file('images');
            $image = $images[0] ?? null;
            $certificate = Certificate::findOrFail($certificateId);
            $data = CollectionHelper::getOrOld($request, $certificate);
            
            if($data) $certificate->update($data->only([
                'title',
                'content'
            ])->toArray());
                
            if($image) {
                if($oldImage = ($certificate->images[0] ?? null)) {
                    StorageHelper::deletePublic($oldImage->uri);
                    $oldImage->delete();
                }

                $imageURI = StorageHelper::putPublic('/certificates/images', $image);
                $certificate->images()->create([
                    'uri' => $imageURI,          
                ]);
            }

            return back()
                ->withSuccess('Successfully edited the certificate');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $certificateId)
    {
        $certificate = Certificate::with('images')->findOrFail($certificateId);

        foreach($certificate->images as $image) {
            StorageHelper::deletePublic($image);
        }
        
        $certificate->images()->delete();
        $certificate->delete();

        return back();
    }
}
