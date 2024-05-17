@extends('layouts.dashboard.index')

@section('content')
    <main class="px-container p-6">
        <div class="card w-full bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="mb-4 flex">
                    <h2 class="card-title">Web Preview</h2>
                    <div class="card-actions ml-auto justify-end">
                        <a
                            href="https://paramaagungkarya.co.id/"
                            target="__blank"
                            class="btn btn-primary">
                            Open New Tab
                        </a>
                    </div>
                </div>
                <div class="h-[32rem] w-full">
                    <iframe
                        class="h-full w-full rounded-xl"
                        src="http://paramaagungkarya.co.id/"
                        frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection
