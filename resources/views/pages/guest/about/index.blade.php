@extends('layouts/guest')

@section('content')
    @include('partials.app-header')

    @include('pages.guest.about._partials.banner')
    @include('pages.guest.about._partials.breadcrumb')
    @include('pages.guest.about._partials.overview')
    @include('pages.guest.about._partials.our-visions')
    @include('pages.guest.about._partials.our-missions')

    @include('partials.app-footer')
@endsection
