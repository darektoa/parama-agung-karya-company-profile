<div class="container">
    <div class="wthree_pvt_title mb-5">
        <h4 class="w3pvt-title">Sertifikasi Kami</h4>
        {{-- <p class="sub-title text-left mx-0 text-secondary">&nbsp;</p> --}}
    </div>
    <div class="pb-lg-5 pb-sm-4">
        <ul class="demo row">
            @foreach ($certificates as $certificate)
                @include('pages.guest.home._partials.certificate._partials.certificateCard')
            @endforeach
        </ul>
    </div>
</div>
