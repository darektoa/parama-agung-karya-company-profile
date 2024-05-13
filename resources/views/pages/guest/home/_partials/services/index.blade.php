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
            <h4 class="w3pvt-title">{{ $contents?->homeServicesTitle?->text }}</h4>
            <p class="sub-title"></p>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <div
                    class="w-100 rounded-4 card overflow-hidden border-0 shadow-lg"
                    style="width: 18rem">
                    <img
                        src="https://source.unsplash.com/random/1920x1080?construction"
                        class="card-img-top"
                        height="320"
                        alt="..." />
                    <div
                        class="bg-light d-flex flex-column d-lg-flex-row justify-content-start align-items-baseline card-body">
                        <h5 class="fw-bold w-100 card-title mb-3 text-center">KONTRAKTOR</h5>
                        <div
                            class="accordion w-100"
                            id="detailAccordionOne">
                            <div class="accordion-item w-100 border-0">
                                <h2 class="w-100 rounded-3 overflow-hidden border">
                                    <button
                                        class="accordion-button collapsed w-100 btn-primary"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="false"
                                        aria-controls="collapseOne">
                                        Lihat Detailnya
                                    </button>
                                </h2>
                                <div
                                    id="collapseOne"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#detailAccordionOne">
                                    <div class="accordion-body">
                                        Mengerjakan pekerjaan serta menyediakan bahan bangunan civil dan konstruksi dari
                                        mulai design layout perancangan bentuk dan bangunan serta pelaksanaan. Meliputi
                                        : Renovasi, Pabrikasi dan Repair.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center my-lg-0 my-4">
                <div
                    class="w-100 rounded-4 card overflow-hidden border-0 shadow-lg"
                    style="width: 18rem">
                    <img
                        src="https://source.unsplash.com/random/1920x1080?architect"
                        class="card-img-top"
                        height="320"
                        alt="..." />
                    <div class="bg-light d-flex flex-column justify-content-start align-items-baseline card-body">
                        <h5 class="fw-bold w-100 card-title mb-3 text-center">DESIGN & BUILD</h5>
                        <div
                            class="accordion w-100"
                            id="detailAccordionTwo">
                            <div class="accordion-item w-100 border-0">
                                <h2 class="w-100 rounded-3 overflow-hidden border">
                                    <button
                                        class="accordion-button collapsed w-100 btn-primary"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Lihat Detailnya
                                    </button>
                                </h2>
                                <div
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#detailAccordionTwo">
                                    <div class="accordion-body">
                                        Menyediakan dan pengadaan material sesuai dengan kebutuhan, tenaga kerja baik
                                        sistem kerja borongan maupun harian. Meliputi: Partisi interior, Epoxy lantai,
                                        pengecatan, penggantian atap, keramik, granit dll.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
