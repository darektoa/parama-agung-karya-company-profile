<div class="row">
    <div class="col-12 col-lg-6 pe-lg-1 my-1">
        <div class="d-flex align-items-center rounded-4 border p-2">
            <span class="d-flex text-primary border-end me-3 p-3">
                <i class="fa-solid fa-envelope-open"></i>
            </span>
            <div class="d-flex flex-column">
                <a
                    href="mailto:{{ $contents->contactEmail->text }}"
                    class="d-block">
                    {{ $contents->contactEmail->text }}
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 ps-lg-1 my-1">
        <div class="d-flex align-items-center rounded-4 border p-2">
            <span class="d-flex text-primary border-end me-3 p-3">
                <i class="fa-solid fa-phone"></i>
            </span>
            <div class="d-flex flex-column">
                <p>
                    {{ $contents->contactTelphone->text }}
                </p>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-12 my-1">
        <div class="d-flex align-items-center rounded-4 border p-2">
            <span class="d-flex text-primary border-end me-3 p-3">
                <i class="fa-solid fa-home"></i>
            </span>
            <address
                class="mb-0"
                translate="no">
                {{ $contents->contactOfficeLocation->text }}
            </address>
        </div>
    </div>
</div>
