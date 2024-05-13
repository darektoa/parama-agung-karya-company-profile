<div class="posts mt-4 border p-4">
    <h3 class="courses-title">Blog Lainnya</h3>
    <div class="posts-grids">
        @foreach ($otherBlogs as $blog)
            <div class="row posts-grid mt-4">
                <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                    <a href="/blogs/{{ $blog->id }}">
                        <img
                            src="{{ $blog->thumbnail?->uri ? \StorageHelper::url($blog->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
                            alt=" "
                            class="img-fluid img-thumbnail" />
                    </a>
                </div>
                <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                    <h4>
                        <a
                            href="/blogs/{{ $blog->id }}"
                            class="fw-semibold text-dark fs-6">
                            {{ \Str::limit($blog->title, 24) }}
                        </a>
                    </h4>
                    <ul class="wthree_courses_events_list mt-2">
                        <li class="text-bl text-primary fs-6 me-2">
                            <span
                                class="fa fa-calendar fs-6 me-2"
                                aria-hidden="true"></span>
                            {{ $blog->created_at->format('Y/m/d') }}
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
