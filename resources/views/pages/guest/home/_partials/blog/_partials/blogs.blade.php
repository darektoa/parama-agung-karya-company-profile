<div class="container">
    <div class="wthree_pvt_title mb-5">
        <h4 class="w3pvt-title">{{ $contents?->blogTitle?->text }}</h4>
        {{-- <p class="sub-title text-left mx-0 text-secondary">&nbsp;</p> --}}
    </div>
    <div class="">
        <ul class="demo row">
            @foreach ($blogs as $blog)
                <li class="col-lg-6 mb-4">
                    <div
                        class="w-100 h-100 rounded-4 card overflow-hidden border-0 shadow-lg"
                        style="min-height: 14rem">
                        <div class="row g-0 h-100">
                            <div class="col-12 col-md-6 h-100">
                                <img
                                    src="{{ $blog->thumbnail?->uri ? \StorageHelper::url($blog->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
                                    class="img-fluid rounded-start w-100 h-100 object-fit-cover"
                                    alt="..." />
                            </div>
                            <div class="col-12 col-md-6 h-100">
                                <div class="h-100 d-flex flex-column card-body bg-white">
                                    <h5 class="card-title">
                                        <a href="/blogs/{{ $blog->id }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h5>
                                    <p class="card-text mb-2">{{ Str::limit($blog->content, 72) }}</p>
                                    <p class="card-text mt-auto">
                                        <small class="text-body-secondary">
                                            {{ $blog->created_at->format('Y/m/d') }}
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
