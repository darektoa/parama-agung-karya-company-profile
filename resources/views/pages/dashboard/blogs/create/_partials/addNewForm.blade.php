<form
    class="flex h-full w-full flex-col items-start"
    action="{{ route('dashboard.blog.post') }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf

    <label class="form-control mb-1">
        <div class="flex flex-col px-1 py-2">
            <h5 class="label-text text-base">Thumbnail</h5>
        </div>
        <div class="group/contentEditorImageInputCard relative w-full max-w-80 overflow-hidden rounded-lg">
            <figure class="w-full bg-slate-400 object-contain">
                <img
                    id="thumbnail"
                    src="/images/illustrations/snap_the_moment_bg.svg"
                    class="aspect-video w-80"
                    alt="" />
            </figure>
            <div
                class="group/contentEditorImageInputCardForeground absolute left-0 top-0 flex h-full w-full bg-base-300/60 opacity-0 transition-all group-hover/contentEditorImageInputCard:opacity-100">
                <div
                    class="absolute z-50 flex h-full w-full scale-0 p-4 transition-all duration-300 group-hover/contentEditorImageInputCardForeground:scale-100">
                    <input
                        required
                        x-on:change="(e) => { updateImageOnChange(e, 'thumbnail') }"
                        type="file"
                        name="thumbnail"
                        class="file-input-default file-input file-input-bordered file-input-sm mt-auto w-full" />
                </div>
            </div>
        </div>
    </label>

    <label class="form-control mb-1 w-full max-w-lg">
        <div class="label">
            <h5 class="label-text text-base">Title</h5>
        </div>
        <input
            required
            type="text"
            name="title"
            placeholder="Type here . . ."
            class="peer input input-bordered w-full" />
        <span class="px-1 py-2 text-xs text-red-600 opacity-0 duration-300 peer-invalid:opacity-100 dark:text-red-400">
            Title field must be fill.
        </span>
    </label>

    <label class="form-control mb-10 w-full max-w-lg">
        <div class="flex flex-col px-1 py-2">
            <h5 class="label-text text-base">Description</h5>
            {{-- <small class="text-xs text-gray-400">Fill the content</small> --}}
        </div>
        <textarea
            required
            class="peer textarea textarea-bordered w-full resize-none"
            placeholder="Type here . . ."
            rows="5"
            name="content"></textarea>
        <span class="px-1 py-2 text-xs text-red-600 opacity-0 duration-300 peer-invalid:opacity-100 dark:text-red-400">
            Description field must be fill.
        </span>
    </label>

    <button
        class="btn btn-primary btn-block sticky bottom-2 mt-auto"
        type="submit">
        SAVE
    </button>
</form>
