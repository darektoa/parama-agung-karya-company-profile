<section class="position-relative align-w3">
    <div 
        class="w-100 h-100 z-n1 position-absolute top-0 left-0" 
        style="background: url('/images/stocks/vision-illustration.jpeg') no-repeat right top; filter: grayscale(0.5)">
    </div>
    <div class="container-fluid">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="services-bg-color">
                    <div class="wthree_pvt_title mb-3">
                        <h4 class="w3pvt-title">
                            {{ $contents->aboutOurVisionsTitle->text }}
                        </h4>
                        <span class="sub-title"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 service-title my-4">
                            <h4 class="home-title text-theme">
                                {{-- {{ $contents->aboutMissionTitle1->text }} --}}
                            </h4>
                            <p class="sec-4 bg-light p-3 bg-opacity-75 rounded-2">
                                {{ $contents->aboutOurVisionsDescription->text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-bg-color">
                    <div class="wthree_pvt_title mb-3">
                        <h4 class="w3pvt-title">
                            {{ $contents->aboutOurMissionsTitle->text }}
                        </h4>
                        <span class="sub-title"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 service-title my-4">
                            <h4 class="home-title text-theme">
                                {{ $contents->aboutMissionTitle1->text }}
                            </h4>
                            <p class="sec-4">
                                {{ $contents->aboutMissionDescription1->text }}
                            </p>
                        </div>
                        <div class="col-md-6 service-title my-md-4">
                            <h4 class="home-title text-theme">
                                {{ $contents->aboutMissionTitle2->text }}
                            </h4>
                            <p class="sec-4">
                                {{ $contents->aboutMissionDescription2->text }}
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-4">
                            <h4 class="home-title text-theme">
                                {{ $contents->aboutMissionTitle3->text }}
                            </h4>
                            <p class="sec-4">
                                {{ $contents->aboutMissionDescription3->text }}
                            </p>
                        </div>
                    </div>
                    {{--
                        <div class="d-flex justify-content-start">
                        <a href="/about" class="btn w3ls-btn">Lebih Lanjut</a>
                        </div>
                    --}}
                </div>
            </div>
            
            <div class="offset-lg-2"></div>
        </div>
    </div>
</section>
