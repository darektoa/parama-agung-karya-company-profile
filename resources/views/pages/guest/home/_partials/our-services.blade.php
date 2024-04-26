<section
    class="single_grid_w3_main align-w3-abt"
    id="about"
>
    <div class="container">
        <div class="wthree_pvt_title mb-5 text-center">
            <h4 class="w3pvt-title">{{ $contents?->homeServicesTitle?->text }}</h4>
            <p class="sub-title"></p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="abt-grid">
                    <div class="row">
                        <div class="col-3">
                            <div class="abt-icon">
                                <span>
                                    <i class="fa-solid fa-building"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="abt-txt">
                                <h4>{{ $contents?->homeServiceTitle1?->text }}</h4>
                                <p>
                                    {{ $contents?->homeServiceDescription1?->text }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-lg-0 my-4">
                <div class="abt-grid">
                    <div class="row">
                        <div class="col-3">
                            <div class="abt-icon">
                                <span>
                                    <i class="fa-solid fa-brush"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="abt-txt">
                                <h4>{{ $contents?->homeServiceTitle2?->text }}</h4>
                                <p>
                                    {{ $contents?->homeServiceDescription2?->text }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="abt-grid">
                    <div class="row">
                        <div class="col-3">
                            <div class="abt-icon">
                                <span>
                                    <i class="fa-solid fa-bolt"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="abt-txt">
                                <h4>{{ $contents?->homeServiceTitle3?->text }}</h4>
                                <p>
                                    {{ $contents?->homeServiceDescription3?->text }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <a
                href="/contact"
                class="w3ls-btn btn"
            >
                Kontak Kami
            </a>
        </div>
    </div>
</section>
