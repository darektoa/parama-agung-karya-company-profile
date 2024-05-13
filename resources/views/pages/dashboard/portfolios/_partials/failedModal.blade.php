@error('error')
    <dialog
        x-data
        x-init="$el.showModal()"
        class="modal modal-bottom sm:modal-middle"
    >
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
            </form>
            <div class="flex items-center">
                <lottie-player
                    src="https://lottie.host/f49526d3-ac72-459c-b178-571d48ab912d/ofyPJjQSIK.json"
                    background=""
                    speed="1"
                    autoplay
                    loop
                    direction="1"
                    mode="normal"
                    class="col-span-4 row-span-2 flex h-full w-full max-w-40 scale-125 items-center"
                ></lottie-player>
                <div class="flex h-full grow flex-col justify-center">
                    <h3 class="text-lg font-bold text-error">FAILED</h3>
                    <p class="mb-4">{{ $message }}</p>
                    <small>Press ESC key or click on ✕ button to close</small>
                </div>
            </div>
        </div>
    </dialog>
@enderror
