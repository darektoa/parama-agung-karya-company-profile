@if (session()->has('success'))
    <dialog
        x-data
        x-init="$el.showModal()"
        class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-circle btn-ghost btn-sm absolute right-2 top-2">✕</button>
            </form>
            <div class="flex items-center">
                <lottie-player
                    src="https://lottie.host/04e99f11-26d7-46fb-9081-2c8663f6b31f/ZFQQ1onOOC.json"
                    background=""
                    speed="1"
                    autoplay
                    loop
                    direction="1"
                    mode="normal"
                    class="col-span-4 row-span-2 flex h-full w-full max-w-40 scale-150 items-center"></lottie-player>
                <div class="flex h-full grow flex-col justify-center">
                    <h3 class="text-lg font-bold text-success">SUCCESSFULL</h3>
                    <p class="mb-4">{{ session()->get('success') }}</p>
                    <small>Press ESC key or click on ✕ button to close</small>
                </div>
            </div>
        </div>
    </dialog>
@endif
