import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': '../../node_modules/bootstrap',
            '~admin-lte': '.../../node_modules/admin-lte',
            '~fontawesome': '../../node_modules/@fortawesome/fontawesome-free',
        }
    },
});
