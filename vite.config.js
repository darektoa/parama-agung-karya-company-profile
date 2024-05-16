import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/layouts/dashboard/index.css',
                'resources/css/layouts/guest/index.css',
                'resources/css/libraries/tailwind.css',
                'resources/js/layouts/dashboard/index.js',
                'resources/js/layouts/guest/index.js',
            ],
            refresh: true,
        }),
    ],
});
