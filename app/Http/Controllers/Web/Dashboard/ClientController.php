<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Helpers\CollectionHelper;
use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Models\Client\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::latest()
            ->get();

        return view('pages.dashboard.clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.clients.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $image = $request->file('image');

            if($image->isReadable()) {
                $imageURI = StorageHelper::putPublic('/clients/images', $image);
                Client::create([
                    'uri' => $imageURI,
                ]);
            }

            return back()
                ->with('success', 'Successfully created client');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $clientId)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $clientId)
    {
        $client = Client::findOrFail($clientId);

        return view('pages.dashboard.clients.edit.index')
            ->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $clientId)
    {
        try {
            $client = Client::findOrFail($clientId);
            $image = $request->file('image');
                
            StorageHelper::deletePublic($client->uri);
            $imageURI = StorageHelper::putPublic('/clients/images', $image);
            $client->update([
                'uri' => $imageURI,          
            ]);
    
            return back()
                ->with('success', 'Successfully edited client');
        } catch(\Exception $err) {
            return back()
                ->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $clientId)
    {
        $client = Client::findOrFail($clientId);
        $client->delete();

        return back();
    }
}
