@extends('layouts/guest')

@section('content')
    @include('partials.app-header')

    @include('pages.guest.contact._partials.banner')
    @include('pages.guest.contact._partials.breadcrumb')
    @include('pages.guest.contact._partials.contact')

    @include('partials.app-footer')
@endsection
