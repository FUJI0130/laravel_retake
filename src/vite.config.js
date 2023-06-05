import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

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
// 以下追記
    // server:{
    //     host: true,
    //     hmr:{
    //         host: 'localhost',
    //     },
    //     port: 5173,
    // },
});
