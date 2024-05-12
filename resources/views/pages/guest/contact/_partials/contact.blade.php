<section
    class="contact-wthree align-w3"
    id="contact">
    <div class="container">
        <div class="wthree_pvt_title text-center">
            <h4 class="w3pvt-title">
                {{ $contents['contactTitle']['text'] }}
            </h4>
            <p class="sub-title">
                {{ $contents['contactDescription']['text'] }}
            </p>
        </div>

        @include('pages.guest.contact._partials.contact-location')
        @include('pages.guest.contact._partials.contact-info')
    </div>
</section>
