@extends('layouts.dashboard-new.index')

@section('content')
    @include('pages.dashboard.certificates._partials.breadcrumb')

    <div class="container mx-auto grid auto-rows-max px-6">
        @include('pages.dashboard.certificates._partials.header')

        <section
            class="grid grid-flow-row grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"
            x-data="{ deleteId: null, deleteTitle: null }">
            @foreach ($certificates as $certificate)
                @include('pages.dashboard.certificates._partials.certificateCard')
            @endforeach

            @include('pages.dashboard.certificates._partials.deleteCertificateConfirm')
        </section>
    </div>
@endsection
