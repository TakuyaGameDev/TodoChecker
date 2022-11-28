import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        // buildしたいjsファイルやcssファイルを作成したらこちらに追記していく
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        hmr: {
            host: 'localhost',
        },
        watch: {
            usePolling: true,
        },
    },
});
