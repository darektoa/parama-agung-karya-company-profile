@extends('layouts.guest')

@section('content')
    @include('partials.app-header')

    @include('pages.guest.blog._partials.banner')
    @include('pages.guest.blog._partials.breadcrumb')

    <section
        class="post-wthree align-w3"
        id="blog"
    >
        <div class="container">
            @include('pages.guest.blog.detail._partials.heading')

            <div class="row">
                @include('pages.guest.blog.detail._partials.aside')
                @include('pages.guest.blog.detail._partials.main')
            </div>
        </div>
    </section>

    @include('partials.app-footer')
@endsection
