import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

//compile css js and copy in public

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
