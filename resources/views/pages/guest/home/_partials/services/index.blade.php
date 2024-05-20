<section
    id="services"
    class="py-5"
    style="
        background: linear-gradient(
            0deg,
            rgba(255, 255, 255, 1) 0%,
            rgba(230, 243, 255, 1) 20%,
            rgba(230, 243, 255, 1) 80%,
            rgba(255, 255, 255, 1) 100%
        );
    ">
    <div class="container py-5">
        <div class="mb-5 text-center">
            <h4 class="w3pvt-title">{{ $contents?->serviceTitle?->text }}</h4>
            <p class="sub-title"></p>
        </div>
        <div class="row">

            @foreach ($services as $service)
                @include('pages.guest.home._partials.services._partials.serviceCard')
            @endforeach

        </div>
    </div>
</section>
