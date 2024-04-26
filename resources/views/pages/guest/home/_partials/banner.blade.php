<section
    class="banner"
    style="background-image: url({{ \StorageHelper::url($contents?->homeHeroBackground?->image?->uri) }})"
>
    <div class="container">
        <div class="banner_text_wthree_pvt h-100">
            <h3 class="home-banner-w3">
                {{ $contents?->homeHeroTitle?->text }}
            </h3>
            <p class="bnr-txt">
                {{ $contents?->homeHeroDescription?->text }}
            </p>
        </div>
    </div>

    <div class="banner-bottom-w3ls">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-6">
                    <div class="bb-img">
                        <img
                            src="{{ \StorageHelper::url($contents?->homeHeroFeaturedCard1?->image?->uri) }}"
                            class="img-fluid img-thumbnail w-100 object-fit-cover"
                            alt=""
                        />
                        <h3>
                            {{ $contents?->homeHeroFeaturedCard1?->text }}
                        </h3>
                    </div>
                </div>
                <div class="col-sm-4 col-6">
                    <div class="bb-img">
                        <img
                            src="{{ \StorageHelper::url($contents?->homeHeroFeaturedCard2?->image?->uri) }}"
                            class="img-fluid img-thumbnail w-100 object-fit-cover"
                            alt=""
                        />
                        <h3>
                            {{ $contents?->homeHeroFeaturedCard2?->text }}
                        </h3>
                    </div>
                </div>
                <div class="col-sm-4 col-6 mt-sm-0 mx-auto mt-4">
                    <div class="bb-img">
                        <img
                            src="{{ \StorageHelper::url($contents?->homeHeroFeaturedCard3?->image?->uri) }}"
                            class="img-fluid img-thumbnail w-100 object-fit-cover"
                            alt=""
                        />
                        <h3>
                            {{ $contents?->homeHeroFeaturedCard3?->text }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
