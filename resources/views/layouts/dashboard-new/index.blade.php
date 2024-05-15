<!DOCTYPE html>

<html
    :data-theme="dark ? 'dark' : null"
    x-data="data()"
    lang="us">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0" />
        <title>Admin Dashboard</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" />
        <script
            src="{{ asset('libraries/alpine@v2_x_x.min.js') }}"
            defer=""></script>
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
            :class="{ 'overflow-hidden': isSideMenuOpen}">
            @include('layouts.dashboard-new._partials.sidebar')
            @include('layouts.dashboard-new._partials.mobileSidebar')

            <div class="flex flex-1 flex-col">
                @include('layouts.dashboard-new._partials.navbar')

                <main class="h-full overflow-y-auto pb-16">
                    @yield('content')
                </main>
            </div>
        </div>

        <script>
            function isBloabable(file) {
                const { type } = file;

                return type.startsWith('image/') || type.startsWith('video/') || type.startsWith('audio/');
            }

            function toBlob(file) {
                const fileReader = new FileReader();
                fileReader.readAsArrayBuffer(file);

                const promise = new Promise((resolve, reject) => {
                    fileReader.addEventListener('load', (event) => {
                        const arrayBuffer = event.target.result;
                        const blob = new Blob([arrayBuffer]);
                        resolve(blob);
                    });

                    fileReader.addEventListener('error', (event) => {
                        reject(null);
                    });
                });

                return promise;
            }

            function toDataURL(file) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(file);

                const promise = new Promise((resolve, reject) => {
                    fileReader.addEventListener('load', (event) => {
                        const dataURL = event.target.result;
                        resolve(dataURL);
                    });

                    fileReader.addEventListener('error', (event) => {
                        reject(null);
                    });
                });

                return promise;
            }
        </script>

        @yield('scripts')
    </body>
</html>
