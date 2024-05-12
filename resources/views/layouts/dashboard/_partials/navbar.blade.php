<section class="navbar bg-base-100 shadow-sm">
    {{--
        <div class="flex-none">
        <button class="btn btn-square btn-ghost">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        </div>
    --}}
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">Parama Agung Karya</a>
    </div>
    <div class="flex-none gap-2">
        <nav>
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a href="/dashboard/contents">Atur Konten</a>
                </li>
                <li>
                    <a href="/dashboard/users">Manajemen Pengguna</a>
                </li>
            </ul>
        </nav>

        <div class="dropdown dropdown-end">
            <div
                tabindex="0"
                role="button"
                class="avatar btn btn-circle btn-ghost">
                <div class="w-10 rounded-full">
                    <img
                        alt="Tailwind CSS Navbar component"
                        src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
            </div>
            <ul
                tabindex="0"
                class="menu dropdown-content menu-sm z-[1] mt-3 w-52 rounded-box bg-base-100 p-2 shadow">
                <li>
                    <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
</section>
