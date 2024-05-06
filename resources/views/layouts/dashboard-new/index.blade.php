<!DOCTYPE html>

<html
    :class="{ 'theme-dark': dark }"
    :data-theme="dark ? 'dark' : 'false'"
    x-data="data()"
    lang="en"
>
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <title>Admin Dashboard</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="{{ asset('libraries/windmill.output.css') }}"
        />
        <script
            src="{{ asset('libraries/alpine@v2_x_x.min.js') }}"
            defer=""
        ></script>
        <script src="{{ asset('libraries/init-alpine.js') }}"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        @vite([
            'resources/css/layouts/dashboard/index.css',
            'resources/js/app.js',
        ])

        @yield('head')
    </head>
    <body>
        <div
            class="flex h-screen w-full bg-gray-50 dark:bg-gray-900"
            :class="{ 'overflow-hidden': isSideMenuOpen}"
        >
            @include('layouts.dashboard-new._partials.sidebar')
            @include('layouts.dashboard-new._partials.mobileSidebar')

            <div class="flex flex-1 flex-col">
                @include('layouts.dashboard-new._partials.navbar')

                <main class="h-full overflow-y-auto pb-16">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
