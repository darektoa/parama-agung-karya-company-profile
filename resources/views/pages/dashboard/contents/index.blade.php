@extends('layouts.dashboard.index')

@section('content')
    <div class="container mx-auto grid h-full auto-rows-max px-6">
        <header class="flex w-full items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Contents</h2>
        </header>

        @include('pages.dashboard.contents._partials.contentEditor.editorForm')
    </div>
@endsection
