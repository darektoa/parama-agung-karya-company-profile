@extends('layouts.dashboard.index')

@section('content')
    @include('pages.dashboard.services._partials.successModal')
    @include('pages.dashboard.services._partials.failedModal')
    @include('pages.dashboard.services.create._partials.breadcrumb')

    <div class="container mx-auto grid h-full auto-rows-max px-6">
        <header class="flex w-full items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Post New Service</h2>
        </header>

        <section>
            <div
                class="relative mb-8 h-auto max-w-lg overflow-auto rounded-lg bg-white px-4 py-3 shadow-md dark:bg-gray-800">
                @include('pages.dashboard.services.create._partials.addNewForm')
            </div>
        </section>
    </div>
@endsection
