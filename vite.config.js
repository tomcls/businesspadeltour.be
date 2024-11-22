import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',  
        watch: {
            ignored: [ '**/node_modules/**', '**/vendor/**', '**/docker/**', '**/storage/**','**/public/**'],
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css',
                'node_modules/filepond/dist/filepond.min.css',
                'resources/js/te.js',
                'resources/js/filepond.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
