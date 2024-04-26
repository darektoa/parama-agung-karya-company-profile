@extends('layouts/guest')
{{-- @dd($contents) --}}
@section('content')
    @include('partials.app-header')

    @include('pages.guest.home._partials.banner')
    @include('pages.guest.home._partials.our-services')

    @include('partials.app-footer')
@endsection
