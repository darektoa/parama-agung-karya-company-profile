<div class="nav_w3ls ml-lg-5">
    <nav>
        <label
            for="drop"
            class="toggle">
            <span
                class="fa-solid fa-bars"
                aria-hidden="true"></span>
        </label>
        <input
            type="checkbox"
            id="drop" />
        <ul class="d-flex align-items-center menu">
            <li>
                <a href="/#home">Beranda</a>
            </li>
            <li>
                <a href="/#about">Tentang Kami</a>
            </li>
            <li>
                <a href="/#projects">Proyek</a>
            </li>
            <li>
                <a href="/#services">Layanan</a>
            </li>
            <li>
                <a href="/#contact">Kontak</a>
            </li>
            <li class="dropdown">
                <button
                    class="btn-dark dropdown-toggle btn border-0 bg-transparent"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-language text-white"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <button
                            class="dropdown-item"
                            translate="no"
                            href="#"
                            x-on:click="changeTranslate('id')">
                            Indonesia
                        </button>
                    </li>
                    <li>
                        <button
                            class="dropdown-item"
                            translate="no"
                            href="#"
                            x-on:click="changeTranslate('en')">
                            English
                        </button>
                    </li>
                </ul>
            </li>

            {{--
                <li>
                <label
                for="drop-2"
                class="toogle-2 toggle"
                >
                Lainnya
                <span
                class="fa-solid fa-angle-down"
                aria-hidden="true"
                ></span>
                </label>
                <a
                href="#"
                class=""
                >
                Lainnya
                <span
                class="fa-solid fa-angle-down"
                aria-hidden="true"
                ></span>
                </a>
                <input
                type="checkbox"
                id="drop-2"
                />
                <ul>
                <li><a href="#portfolio" class="drop-text">Portfolio</a></li>
                <li>
                <a
                href="#blogs"
                class="drop-text"
                >
                Blog
                </a>
                </li>
                </ul>
                </li>
            --}}

            {{--
                <li class="nav-right-sty mt-lg-0 mt-sm-4 mt-3">
                <a href="/login" class="reqe-button text-uppercase">Login</a>
                <a href="/register" class="reqe-button text-uppercase">Register</a>
                </li>
            --}}
        </ul>
    </nav>
</div>

@push('scripts-stack')
    <script>
        function changeTranslate(lang) {
            const select = document.querySelector('.goog-te-combo');
            select.value = lang;
            select.dispatchEvent(new Event('change'));
            document.documentElement.setAttribute('lang', lang);
            removeGoogleTranslateBanner();
        }
    </script>
@endpush
