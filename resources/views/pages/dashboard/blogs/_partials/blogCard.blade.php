<div class="card w-full bg-base-100 shadow-xl">
    <figure class="bg-slate-400">
        <img
            class="h-[100%] w-full object-cover"
            src="{{ $blog->thumbnail?->uri ? \StorageHelper::url($blog->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
            loading="lazy"
            alt=" " />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $blog->title }}</h2>
        <p>{{ Str::limit($blog->content, 72) }}</p>
        <div class="card-actions justify-end">
            <a
                href="{{ route('dashboard.blog.byBlogId.edit', $blog->id) }}"
                class="btn btn-warning btn-sm">
                Edit
            </a>
            <button
                x-on:click="
                    deleteId = '{{ $blog->id }}'
                    deleteTitle = '{{ $blog->title }}'
                "
                onclick="deleteBlogModal.showModal()"
                class="btn btn-error btn-sm">
                Delete
            </button>
        </div>
    </div>
</div>
