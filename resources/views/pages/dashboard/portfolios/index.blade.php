@extends('layouts.dashboard-new.index')

@section('content')
    @include('pages.dashboard.portfolios._partials.breadcrumb')

    <div class="container mx-auto grid auto-rows-max px-6">
        @include('pages.dashboard.portfolios._partials.header')

        <section
            class="grid grid-flow-row grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"
            x-data="{ deleteId: null, deleteTitle: null }">
            @foreach ($portfolios as $portfolio)
                @include('pages.dashboard.portfolios._partials.portfolioCard')
            @endforeach

            @include('pages.dashboard.portfolios._partials.deletePortfolioConfirm')
        </section>
    </div>
@endsection
