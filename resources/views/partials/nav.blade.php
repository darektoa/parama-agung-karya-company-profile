<div class="nav_w3ls ml-lg-5">
    <nav>
        <label
            for="drop"
            class="toggle"
        >
            <span
                class="fa-solid fa-bars"
                aria-hidden="true"
            ></span>
        </label>
        <input
            type="checkbox"
            id="drop"
        />
        <ul class="menu">
            <li>
                <a
                    href="/"
                    class="{{ Request::is('/') ? 'active' : '' }}"
                >
                    Beranda
                </a>
            </li>
            <li>
                <a
                    href="/about"
                    class="{{ Request::is('about') ? 'active' : '' }}"
                >
                    Tentang Kami
                </a>
            </li>
            <li>
                <a
                    href="/portfolio"
                    class="{{ Request::is('portfolio') ? 'active' : '' }}"
                >
                    Portfolio
                </a>
            </li>
            <li>
                <a
                    href="/contact"
                    class="{{ Request::is('contact') ? 'active' : '' }}"
                >
                    Kontak Kami
                </a>
            </li>
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
                    {{-- <li><a href="/portfolio" class="drop-text">Portfolio</a></li> --}}
                    <li>
                        <a
                            href="/blogs"
                            class="drop-text {{ Request::is('blogs') ? 'active' : '' }}"
                        >
                            Blog
                        </a>
                    </li>
                </ul>
            </li>

            <!-- <li class="nav-right-sty mt-lg-0 mt-sm-4 mt-3">
                <a href="/login" class="reqe-button text-uppercase">Login</a>
                <a href="/register" class="reqe-button text-uppercase">Register</a>
            </li> -->
        </ul>
    </nav>
</div>
