<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Helpers\CollectionHelper;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Models\Portfolio\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::with(['thumbnail'])
            ->latest()
            ->get();

        return view('pages.dashboard.portfolios.index')
            ->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.portfolios.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $thumbnail = $request->file('thumbnail');
            
            $portfolio = Portfolio::create([
                'title' => $request->title,
                'slug'  => Str::slug($request->title) . Str::random(4),
                'content' => $request->content,
                'start_on' => $request->start_on,
                'end_on' => $request->end_on,
            ]);

            if($thumbnail->isReadable()) {
                $thumbnailURI = StorageHelper::putPublic('/portfolios/thumbnails', $thumbnail);
                $portfolio->thumbnail()->create([
                    'uri' => $thumbnailURI,
                ]);
            }

            return back()
                ->with('success', 'Successfully created portfolio');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $portfolioId)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $portfolioId)
    {
        $portfolio = Portfolio::with('thumbnail')->findOrFail($portfolioId);

        return view('pages.dashboard.portfolios.edit.index')
            ->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $portfolioId)
    {
        try {
            $portfolio = Portfolio::findOrFail($portfolioId);
            $data = CollectionHelper::getOrOld($request, $portfolio);
            
            if($data) $portfolio->update($data->only([
                'title',
                'content',
                'start_on',
                'end_on'
            ])->toArray());
                
            if($thumbnail = $request->file('thumbnail')) {
                if($oldThumbnail = $portfolio->thumbnail) {
                    StorageHelper::deletePublic($oldThumbnail->uri);
                    $oldThumbnail->delete();
                }
    
                $thumbnailURI = StorageHelper::putPublic('/portfolios/thumbnails', $thumbnail);
                $portfolio->thumbnail()->create([
                    'uri' => $thumbnailURI,          
                ]);
            }
    
            return back()
                ->with('success', 'Successfully edited portfolio');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $portfolioId)
    {
        $portfolio = Portfolio::with('thumbnail')->findOrFail($portfolioId);

        if($portfolio->thumbnail) {
            StorageHelper::deletePublic($portfolio->thumbnail);
            $portfolio->thumbnail->delete();
        }

        $portfolio->delete();

        return back();
    }
}
