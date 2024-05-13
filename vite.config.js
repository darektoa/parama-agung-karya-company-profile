import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/layouts/dashboard/index.css',
                'resources/css/layouts/guest/index.css',
                'resources/css/libraries/tailwind.css',
                'resources/js/app.js',
                'resources/js/app-windmill.js',
            ],
            refresh: true,
        }),
    ],
});
