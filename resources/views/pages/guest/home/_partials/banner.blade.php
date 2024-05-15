<section
    class="banner"
    style="padding: 20% 0">
    <div
        id="heroCarousel"
        class="slide position-absolute w-100 h-100 carousel top-0">
        <div class="carousel-indicators">
            @foreach ($banners as $banner)
                <button
                    type="button"
                    data-bs-target="#heroCarousel"
                    data-bs-slide-to="{{ $loop->iteration - 1 }}"
                    aria-label="Banner {{ $loop->iteration }}"
                    @if ($loop->iteration === 1)
                        aria-current="true"
                        class="active"
                    @endif></button>
            @endforeach
        </div>
        <div class="carousel-inner h-100">
            @foreach ($banners as $banner)
                <div class="h-100 active carousel-item">
                    <img
                        src="{{ \StorageHelper::url($banner->uri) }}"
                        class="d-block w-100 h-100 object-fit-cover"
                        alt="{{ $banner->alt }}" />
                </div>
            @endforeach
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide="prev">
            <span
                class="carousel-control-prev-icon"
                aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide="next">
            <span
                class="carousel-control-next-icon"
                aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
