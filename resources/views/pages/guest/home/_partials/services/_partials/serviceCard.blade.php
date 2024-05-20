<div class="col-12 col-lg-6 mb-4 d-flex justify-content-center">
    <div
        class="w-100 rounded-4 card overflow-hidden border-0 shadow-lg"
        style="width: 18rem">
        <img
            src="{{ $service->thumbnail?->uri ? \StorageHelper::url($service->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
            class="card-img-top"
            height="320"
            alt="..." />
        <div
            class="bg-light d-flex flex-column d-lg-flex-row justify-content-start align-items-baseline card-body">
            <h5 class="fw-bold w-100 card-title mb-3 text-center">{{ $service->title }}</h5>
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
                            {{ $service->content }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>