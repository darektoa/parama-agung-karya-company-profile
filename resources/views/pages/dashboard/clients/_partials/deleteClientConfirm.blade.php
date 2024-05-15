<dialog
    id="deleteClientModal"
    class="modal">
    <div class="modal-box">
        <h3
            class="text-lg font-bold"
            x-text="deleteTitle"></h3>
        <p class="py-4">Are you sure to delete it?</p>
        <div class="modal-action">
            <form method="dialog">
                <button class="btn btn-info mr-2">Close</button>
            </form>
            <form
                method="POST"
                :action="'{{ route('dashboard.clients.byClientId.delete', '') }}/' + deleteId">
                @method('DELETE')
                @csrf
                <button
                    class="btn btn-outline btn-error"
                    type="submit">
                    Delete
                </button>
            </form>
        </div>
    </div>
</dialog>
