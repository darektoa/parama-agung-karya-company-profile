<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Helpers\CollectionHelper;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('thumbnail')
            ->latest()
            ->get();
        
        return view('pages.dashboard.blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.blogs.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $thumbnail = $request->file('thumbnail');
            
            $blog = Blog::create([
                'title' => $request->title,
                'slug'  => Str::slug($request->title) . Str::random(4),
                'content' => $request->content,
            ]);

            if($thumbnail->isReadable()) {
                $thumbnailUri = StorageHelper::putPublic('/blogs/thumbnails', $thumbnail);
                $blog->thumbnail()->create([
                    'uri' => $thumbnailUri,
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
    public function show(string $blogId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $blogId)
    {
        $blog = Blog::with('thumbnail')->findOrFail($blogId);

        return view('pages.dashboard.blogs.edit.index')
            ->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $blogId)
    {
        try {
            $blog = Blog::findOrFail($blogId);
            $data = CollectionHelper::getOrOld($request, $blog);
            
            if($data) $blog->update($data->only([
                'title',
                'content'
            ])->toArray());
                
            if($thumbnail = $request->file('thumbnail')) {
                if($oldThumbnail = $blog->thumbnail) {
                    StorageHelper::deletePublic($oldThumbnail->uri);
                    $oldThumbnail->delete();
                }

                $thumbnailURI = StorageHelper::putPublic('/blogs/thumbnails', $thumbnail);
                $blog->thumbnail()->create([
                    'uri' => $thumbnailURI,          
                ]);
            }

            return back()
                ->withSuccess('Successfully edited the blog');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $blogId)
    {
        $blog = Blog::with('thumbnail')->findOrFail($blogId);

        if($blog->thumbnail) {
            StorageHelper::deletePublic($blog->thumbnail);
            $blog->thumbnail->delete();
        }

        $blog->delete();

        return back();
    }
}
