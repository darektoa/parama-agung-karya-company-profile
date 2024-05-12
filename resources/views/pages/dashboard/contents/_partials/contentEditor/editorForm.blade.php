@isset($content)
    <form
        class="flex h-full w-full flex-col items-start"
        action="{{ route('dashboard.content.byContentId.put', [$content?->id ?? '']) }}"
        method="POST"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <label class="form-control mb-4 w-full">
            <div class="flex flex-col px-1 py-2">
                <b class="label-text">{{ $content?->name }}</b>
                <small class="text-xs text-gray-400">~ {{ $content?->codename }}</small>
            </div>
            <textarea
                class="textarea textarea-bordered w-full resize-none"
                placeholder="Type here . . ."
                rows="5"
                name="text">
{{ $content?->text }}</textarea
            >
        </label>

        <label class="form-control mb-4">
            <div class="flex flex-col px-1 py-2">
                <b class="label-text">IMAGE</b>
            </div>
            <div class="group/contentEditorImageInputCard relative w-full max-w-80 overflow-hidden rounded-lg">
                <figure class="w-full bg-base-300 object-contain">
                    <img
                        src="{{ $content?->image?->uri ? StorageHelper::url($content?->image?->uri ?? '') : '/images/illustrations/snap_the_moment_bg.svg' }}"
                        class="aspect-video w-80"
                        alt="" />
                </figure>
                <div
                    class="group/contentEditorImageInputCardForeground absolute left-0 top-0 flex h-full w-full bg-base-300/60 opacity-0 transition-all group-hover/contentEditorImageInputCard:opacity-100">
                    <div
                        class="absolute z-50 flex h-full w-full scale-0 p-4 transition-all duration-300 group-hover/contentEditorImageInputCardForeground:scale-100">
                        <input
                            type="file"
                            name="image"
                            class="file-input-default file-input file-input-bordered file-input-sm mt-auto w-full" />
                    </div>
                </div>
            </div>
        </label>

        <button
            class="btn btn-outline btn-block sticky bottom-4 mt-auto"
            type="submit">
            SAVE
        </button>
    </form>
@endisset
