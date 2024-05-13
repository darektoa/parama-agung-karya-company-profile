<div class="container">
    <div class="wthree_pvt_title mb-5">
        <h4 class="w3pvt-title">Projek Terbaru Kami</h4>
        {{-- <p class="sub-title text-left mx-0 text-secondary">&nbsp;</p> --}}
    </div>
    <div class="pb-lg-5 pb-sm-4">
        <ul class="demo row">
            @foreach ($projects as $project)
                <li class="col-lg-4">
                    <div class="img-grid rounded-4 overflow-hidden shadow-lg">
                        <div class="Portfolio-grid1 w-100">
                            <img
                                src="{{ $project->thumbnail?->uri ? \StorageHelper::url($project->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
                                alt=" "
                                style="height: 14em"
                                class="img-fluid object-fit-cover w-100" />
                        </div>
                        <div
                            class="port-desc bg-light d-flex flex-column justify-content-start px-4 py-3"
                            style="min-height: 12rem">
                            <h3 class="main-title-w3pvt fs-5 mb-2">
                                {{ $project->title }}
                            </h3>
                            <p class="mb-4">
                                {{ Str::limit($project->content, 72) }}
                            </p>
                            <div class="d-grid mt-auto h-auto gap-2">
                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#project-{{ $project->id }}">
                                    Lihat Detailnya
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- POP UP --}}
                    <div
                        class="fade modal"
                        id="project-{{ $project->id }}"
                        tabindex="-1"
                        aria-labelledby="modalProjectTitle"
                        aria-modal="true"
                        role="dialog">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-body d-flex flex-column position-relative">
                                    <button
                                        class="btn-close btn-white rounded-circle position-absolute align-self-end btn-primary bg-white p-2"
                                        type="button"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                        stl></button>
                                    <div class="Portfolio-grid1 w-100">
                                        <img
                                            src="{{ $project->thumbnail?->uri ? \StorageHelper::url($project->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
                                            alt=" "
                                            style="height: 14em"
                                            class="img-fluid object-fit-cover w-100" />
                                    </div>
                                    <div
                                        class="port-desc bg-light d-flex flex-column justify-content-start px-4 py-3"
                                        style="min-height: 12rem">
                                        <h3 class="main-title-w3pvt fs-5 mb-2">
                                            {{ $project->title }}
                                        </h3>
                                        <p class="mb-4">
                                            {{ $project->content }}
                                        </p>
                                        <div class="d-grid mt-auto h-auto gap-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
