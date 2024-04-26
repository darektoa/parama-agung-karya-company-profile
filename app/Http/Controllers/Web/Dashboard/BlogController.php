<?php

namespace App\Http\Controllers\Web\Dashboard;

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
        $blogs = Blog::get();

        return view('layouts.dashboard-new.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $thumbnail = $request->file('thumbnail');
            
            Blog::create([
                'title' => '',
                'slug'  => Str::slug(''),
                'content' => '',
            ]);

            StorageHelper::put('/blogs/thumbnails', $thumbnail);

            return back();
        } catch(\Exception $err) {
            return back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $blogId)
    {
        //
    }
}
