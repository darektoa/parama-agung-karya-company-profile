@extends('layouts.guest.index')

@section('content')
    @include('partials.app-header')

    @include('pages.guest.home._partials.banner')
    @include('pages.guest.home._partials.about.index')
    @include('pages.guest.home._partials.blog.index')
    @include('pages.guest.home._partials.certificate.index')
    @include('pages.guest.home._partials.project.index')
    @include('pages.guest.home._partials.services.index')
    @include('pages.guest.home._partials.contact.index')

    @include('partials.app-footer')
@endsection
