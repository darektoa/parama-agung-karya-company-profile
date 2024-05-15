<div class="card w-full bg-base-100 shadow-xl">
    <figure class="bg-slate-400">
        <img
            class="h-[100%] w-full object-cover"
            src="{{ $portfolio->thumbnail?->uri ? \StorageHelper::url($portfolio->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
            loading="lazy"
            alt=" " />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $portfolio->title }}</h2>
        <p>{{ Str::limit($portfolio->content, 72) }}</p>
        <div class="card-actions justify-end">
            <a
                href="{{ route('dashboard.portfolio.byPortfolioId.edit', $portfolio->id) }}"
                class="btn btn-warning btn-sm">
                Edit
            </a>
            <button
                x-on:click="
                    deleteId = '{{ $portfolio->id }}'
                    deleteTitle = '{{ $portfolio->title }}'
                "
                onclick="deletePortfolioModal.showModal()"
                class="btn btn-error btn-sm">
                Delete
            </button>
        </div>
    </div>
</div>
