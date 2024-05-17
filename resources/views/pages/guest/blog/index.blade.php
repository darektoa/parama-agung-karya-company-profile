@extends('layouts.guest.index')

@section('content')
    @include('partials.app-header')

    @include('pages.guest.blog._partials.banner')
    @include('pages.guest.blog._partials.breadcrumb')
    @include('pages.guest.blog._partials.blog')

    @include('partials.app-footer')
@endsection
