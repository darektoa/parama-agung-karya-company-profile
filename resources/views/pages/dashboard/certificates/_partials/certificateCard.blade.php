@php
    $image = $certificate->images[0] ?? null;
    $imageURI = $image?->uri;
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
        <h2 class="card-title">{{ $certificate->title }}</h2>
        <p>{{ Str::limit($certificate->content, 72) }}</p>
        <div class="card-actions justify-end">
            <a
                href="{{ route('dashboard.certificates.byCertificateId.edit', $certificate->id) }}"
                class="btn btn-warning btn-sm">
                Edit
            </a>
            <button
                x-on:click="
                    deleteId = '{{ $certificate->id }}'
                    deleteTitle = '{{ addslashes($certificate->title) }}'
                "
                onclick="deleteCertificateModal.showModal()"
                class="btn btn-error btn-sm">
                Delete
            </button>
        </div>
    </div>
</div>
