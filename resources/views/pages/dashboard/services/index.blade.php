@extends('layouts.dashboard.index')

@section('content')
    @include('pages.dashboard.services._partials.breadcrumb')

    <div class="container mx-auto grid auto-rows-max px-6">
        @include('pages.dashboard.services._partials.header')

        <section
            class="grid grid-flow-row grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"
            x-data="{ deleteId: null, deleteTitle: null }">
            @foreach ($services as $service)
                @include('pages.dashboard.services._partials.serviceCard')
            @endforeach

            @include('pages.dashboard.services._partials.deleteConfirm')
        </section>
    </div>
@endsection
