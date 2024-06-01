import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

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
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~admin-lte': path.resolve(__dirname, 'node_modules/admin-lte'),
            '~fontawesome': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free'),
        }
    },
});
