<div class="row mt-4 px-1">
    <div class="col-12 text-center">
        {{-- <h5 class="cont-form">Get In Touch</h5> --}}
        <div class="row">
            <div class="col-12 col-lg-4 border-right border-left contact-w3">
                <span class="mb-3">
                    <i class="fa-solid fa-envelope-open"></i>
                </span>
                <div class="d-flex flex-column">
                    <a
                        href="mailto:{{ $contents['contactEmail']['text'] }}"
                        class="d-block">
                        {{ $contents['contactEmail']['text'] }}
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 border-right border-left contact-w3">
                <span class="mb-3">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <div class="d-flex flex-column">
                    <p>
                        {{ $contents['contactTelphone']['text'] }}
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-4 border-right border-left contact-w3">
                <span class="mb-3">
                    <i class="fa-solid fa-home"></i>
                </span>
                <address>
                    {{ $contents['contactOfficeLocation']['text'] }}
                </address>
            </div>
        </div>
    </div>
</div>
