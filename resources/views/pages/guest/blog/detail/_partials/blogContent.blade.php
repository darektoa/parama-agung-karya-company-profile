<div class="single-left1 mb-5">
    <img
        src="{{ $blog->thumbnail?->uri ? \StorageHelper::url($blog->thumbnail?->uri) : '/images/illustrations/snap_the_moment_bg.svg' }}"
        class="img-fluid rounded-4 w-100 h-100 object-fit-cover"
        alt=" " />

    <ul class="courses_list d-flex align-items-center my-3">
        <li>
            <h6 class="courses-first text-bl my-4">
                <span class="fa fa-user me-2"></span>
                Admin
            </h6>
        </li>
        <li class="mx-3">
            <a href="#">
                <span class="fa-solid fa-calendar-days me-1"></span>
                {{ $blog->created_at->format('Y/m/d') }}
            </a>
        </li>
    </ul>

    <h5 class="card-title mb-4">
        <a
            href="/blogs/1"
            class="text-bl">
            {{ $blog->title ?? '' }}
        </a>
    </h5>
    <p>
        {{ $blog->content ?? '' }}
    </p>
</div>
