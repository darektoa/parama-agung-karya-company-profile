@extends('layouts.dashboard-new.index')

@section('content')
    @include('pages.dashboard.portfolios._partials.breadcrumb')

    <div class="container mx-auto grid auto-rows-max px-6">
        <header class="flex w-full items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Portfolios</h2>
            <a
                href="{{ route('dashboard.portfolio.create') }}"
                class="btn btn-outline btn-primary btn-sm ml-4"
            >
                Add
            </a>
        </header>

        <section
            class="grid grid-flow-row grid-cols-3 gap-6"
            x-data="{ deleteId: null, deleteTitle: null }"
        >
            @foreach ($portfolios as $portfolio)
                <div class="card w-full bg-base-100 shadow-xl">
                    <figure class="bg-slate-400">
                        <img
                            class="h-[100%] w-full object-cover"
                            src="{{ $portfolio->thumbnail?->uri ? \StorageHelper::url($portfolio->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
                            loading="lazy"
                            alt=" "
                        />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $portfolio->title }}</h2>
                        <p>{{ Str::limit($portfolio->content, 72) }}</p>
                        <div class="card-actions justify-end">
                            <a
                                href="{{ route('dashboard.portfolio.byPortfolioId.edit', $portfolio->id) }}"
                                class="btn btn-warning btn-sm"
                            >
                                Edit
                            </a>
                            <button
                                x-on:click="
                                    deleteId = '{{ $portfolio->id }}'
                                    deleteTitle = '{{ $portfolio->title }}'
                                "
                                onclick="deletePortfolioModal.showModal()"
                                class="btn btn-error btn-sm"
                            >
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

            <dialog
                id="deletePortfolioModal"
                class="modal"
            >
                <div class="modal-box">
                    <h3
                        class="text-lg font-bold"
                        x-text="deleteTitle"
                    ></h3>
                    <p class="py-4">Are you sure to delete it?</p>
                    <div class="modal-action">
                        <form method="dialog">
                            <button class="btn btn-info mr-2">Close</button>
                        </form>
                        <form
                            method="POST"
                            :action="'{{ route('dashboard.portfolio.byPortfolioId.delete', '') }}/' + deleteId"
                        >
                            @method('DELETE')
                            @csrf
                            <button
                                class="btn btn-outline btn-error"
                                type="submit"
                            >
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </dialog>
        </section>
    </div>
@endsection
