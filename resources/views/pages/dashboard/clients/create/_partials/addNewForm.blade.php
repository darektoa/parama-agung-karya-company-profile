<form
    class="flex h-full w-full flex-col items-start"
    action="{{ route('dashboard.clients.post') }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf

    <label class="form-control mb-10 w-full">
        <div class="flex flex-col px-1 py-2">
            <h5 class="label-text text-base">Image</h5>
        </div>
        <div class="group/contentEditorImageInputCard relative aspect-video w-full overflow-hidden rounded-lg">
            <figure class="w-full bg-slate-400 object-contain">
                <img
                    id="image1"
                    src="/images/illustrations/snap_the_moment_bg.svg"
                    class="aspect-video w-full"
                    alt="" />
            </figure>
            <div
                class="group/contentEditorImageInputCardForeground absolute left-0 top-0 flex h-full w-full bg-base-300/60 opacity-0 transition-all group-hover/contentEditorImageInputCard:opacity-100">
                <div
                    class="absolute z-50 flex h-full w-full scale-0 p-4 transition-all duration-300 group-hover/contentEditorImageInputCardForeground:scale-100">
                    <input
                        required
                        id="inputImage"
                        type="file"
                        name="image"
                        class="file-input-default file-input file-input-bordered file-input-sm mt-auto w-full" />
                </div>
            </div>
        </div>
    </label>

    <button
        class="btn btn-primary btn-block sticky bottom-2 mt-auto"
        type="submit">
        SAVE
    </button>
</form>

@section('scripts')
    <script>
        const elmnt = document.getElementById('inputImage').addEventListener('change', async (evt) => {
            const baseURL = '{{ route('dashboard.clients.post') }}';
            const file = evt.target.files[0];
            const formData = new FormData();

            const imagesDataURL = await toDataURL(file);
            const imagesBlob = await toBlob(file);
            document.getElementById('image1').src = imagesDataURL;

            formData.append('_token', '{{ csrf_token() }}');
            formData.append('image', imagesBlob);

            // fetch(baseURL, {
            //     method: 'POST',
            //     body: formData,
            // });
        });
    </script>
@endsection
