@extends('layouts.dashboard.index')

@section('content')
    <main class="px-container p-6">
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="flex mb-4">
                    <h2 class="card-title">Web Preview</h2>
                    <div class="card-actions justify-end ml-auto">
                        <a href="https://paramaagungkarya.co.id/" target="__blank" class="btn btn-primary">Open New Tab</a>
                    </div>
                </div>
                <div class="w-full h-[32rem]">
                    <iframe class="w-full h-full rounded-xl" src="https://paramaagungkarya.co.id/" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection
