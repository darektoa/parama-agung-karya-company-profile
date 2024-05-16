<li class="font-bold">
    <a
        class="{{ routeIs('dashboard.clients', false) ? 'active' : '' }}"
        href="{{ route('dashboard.clients') }}">
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
                x="1"
                y="4"
                width="22"
                height="16"
                rx="2"
                ry="2"></rect>
            <line
                x1="1"
                y1="10"
                x2="23"
                y2="10"></line>
        </svg>
        Clients
    </a>
</li>
