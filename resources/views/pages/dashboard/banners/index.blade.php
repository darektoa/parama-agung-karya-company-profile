@extends('layouts.dashboard.index')

@section('content')
    @include('pages.dashboard.banners._partials.breadcrumb')

    <div class="container mx-auto grid auto-rows-max px-6">
        @include('pages.dashboard.banners._partials.header')

        <section
            class="grid grid-flow-row grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"
            x-data="{ deleteId: null, deleteTitle: null }">
            @foreach ($banners as $banner)
                @include('pages.dashboard.banners._partials.bannerCard')
            @endforeach

            @include('pages.dashboard.banners._partials.deleteBannerConfirm')
        </section>
    </div>
@endsection
