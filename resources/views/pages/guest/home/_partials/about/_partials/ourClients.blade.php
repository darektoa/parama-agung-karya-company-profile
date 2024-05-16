<section class="w-100 bg-light py-2">
    <div class="container">
        <h2 class="fw-semibold fs-6 mb-1 pt-2 text-center">Klien Kami:</h2>
        <div
            class="slide carousel"
            data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 0; $i < $clients->count(); $i+=3)
                    <div class="@if($i === 0) active @endif carousel-item">
                        <div
                            class="row"
                            style="height: 5rem">
                            @for ($j = $i; $j < $clients->count(); $j++)
                                <img
                                    src="{{ \StorageHelper::url($clients[$j]?->uri ?? '') }}"
                                    class="h-100 object-fit-contain col-4 px-0"
                                    alt="{{ $clients[$j]?->alt ?? '' }}" />
                            @endfor
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
