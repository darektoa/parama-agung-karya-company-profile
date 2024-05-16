@extends('layouts.dashboard.index')

@section('content')
    @include('pages.dashboard.clients._partials.successModal')
    @include('pages.dashboard.clients._partials.failedModal')
    @include('pages.dashboard.clients.edit._partials.breadcrumb')

    <div class="container mx-auto grid h-full auto-rows-max px-6">
        <header class="flex w-full items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Edit Clients</h2>
        </header>

        <section>
            <div class="mb-8 h-auto max-w-lg overflow-auto rounded-xl bg-white px-4 py-3 shadow-md dark:bg-gray-800">
                @include('pages.dashboard.clients.edit._partials.updateForm')
            </div>
        </section>
    </div>
@endsection
