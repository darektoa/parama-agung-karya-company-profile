<div class="card w-full bg-base-100 shadow-xl">
    <figure class="bg-slate-400">
        <img
            class="h-[100%] w-full object-cover"
            src="{{ $service->thumbnail?->uri ? \StorageHelper::url($service->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
            loading="lazy"
            alt=" " />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $service->title }}</h2>
        <p>{{ Str::limit($service->content, 72) }}</p>
        <div class="card-actions justify-end">
            <a
                href="{{ route('dashboard.service.byServiceId.edit', $service->id) }}"
                class="btn btn-warning btn-sm">
                Edit
            </a>
            <button
                x-on:click="
                    deleteId = '{{ $service->id }}'
                    deleteTitle = '{{ addslashes($service->title) }}'
                "
                onclick="deleteServiceModal.showModal()"
                class="btn btn-error btn-sm">
                Delete
            </button>
        </div>
    </div>
</div>
