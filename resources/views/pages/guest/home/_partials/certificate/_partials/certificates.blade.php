<div class="container">
    <div class="wthree_pvt_title mb-5">
        <h4 class="w3pvt-title">Sertifikasi Kami</h4>
        {{-- <p class="sub-title text-left mx-0 text-secondary">&nbsp;</p> --}}
    </div>
    <div class="pb-lg-5 pb-sm-4">
        <ul class="demo row">
            @foreach ($projects as $project)
                <li class="col-lg-4">
                    <div class="img-grid rounded-2 position-relative overflow-hidden shadow-lg">
                        <div class="w-100">
                            <img
                                src="{{ $project->thumbnail?->uri ? \StorageHelper::url($project->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
                                alt=" "
                                height="240"
                                class="object-fit-cover w-100" />
                            <div
                                class="position-absolute w-100 d-flex flex-column justify-content-start bottom-0 px-4 py-3"
                                style="background-color: rgba(255, 255, 255, 0.8)">
                                <h3 class="main-title-w3pvt fs-6">
                                    {{ $project->title }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
