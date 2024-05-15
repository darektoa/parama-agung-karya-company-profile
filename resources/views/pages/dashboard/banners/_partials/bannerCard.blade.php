@php
    $imageURI = $banner->uri;
    $defaultURI = '/images/illustrations/snap_the_moment_bg.svg';
@endphp

<div class="card w-full bg-base-100 shadow-xl">
    <figure class="bg-slate-400">
        <img
            class="h-[100%] w-full object-cover"
            src="{{ $imageURI ? \StorageHelper::url($imageURI) : $defaultURI }}"
            loading="lazy"
            alt=" " />
    </figure>
    <div class="card-body">
        <div class="card-actions justify-end">
            <a
                href="{{ route('dashboard.banners.byBannerId.edit', $banner->id) }}"
                class="btn btn-warning btn-sm">
                Edit
            </a>
            <button
                x-on:click="
                    deleteId = '{{ $banner->id }}'
                    deleteTitle = '{{ $banner->title }}'
                "
                onclick="deleteBannerModal.showModal()"
                class="btn btn-error btn-sm">
                Delete
            </button>
        </div>
    </div>
</div>
