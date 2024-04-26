@extends('layouts/guest')

@section('content')
    @include('partials.app-header')

    @include('pages.guest.portfolio._partials.banner')
    @include('pages.guest.portfolio._partials.breadcrumb')
    @include('pages.guest.portfolio._partials.portfolio')

    @include('partials.app-footer')
@endsection
