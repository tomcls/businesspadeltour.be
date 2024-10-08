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
            input: ['resources/js/app.js','resources/js/te.js','resources/scss/app.scss'],
            refresh: true,
        }),
    ],
});
