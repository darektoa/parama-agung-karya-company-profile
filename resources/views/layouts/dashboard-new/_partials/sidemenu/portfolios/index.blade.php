<li class="font-bold">
    <a
        class="{{ routeIs('dashboard.portfolio', false) ? 'active' : '' }}"
        href="{{ route('dashboard.portfolio') }}">
        <svg
            class="h-5 w-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <rect
                x="2"
                y="7"
                width="20"
                height="14"
                rx="2"
                ry="2"></rect>
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
        </svg>
        Portfolios
    </a>
</li>
