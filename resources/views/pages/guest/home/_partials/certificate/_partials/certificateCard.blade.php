@php
    $image = $certificate->images[0] ?? null;
    $imageURI = $image?->uri;
    $defaultURI = '/images/illustrations/snap_the_moment_bg.svg';
@endphp

<li class="col-lg-4">
    <div class="img-grid rounded-2 position-relative overflow-hidden shadow-lg">
        <div class="w-100">
            <img
                src="{{ $imageURI ? \StorageHelper::url($imageURI) : $defaultURI }}"
                alt=" "
                height="240"
                class="object-fit-cover w-100" />
            <div
                class="position-absolute w-100 d-flex flex-column justify-content-start bottom-0 px-4 py-3"
                style="background-color: rgba(255, 255, 255, 0.8)">
                <h3 class="main-title-w3pvt fs-6">
                    {{ $certificate->title }}
                </h3>
            </div>
        </div>
    </div>
</li>
