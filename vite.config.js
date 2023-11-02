import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        proxy: {
            "/api": {
                target: "https://steelwebworks.test",
                changeOrigin: true,
                secure: false,
                rewrite: (path) => path.replace(/^\/api/, ""),
            },
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/diceroller.css',
                'resources/js/app.js',
                'resources/js/diceroller.js'
            ],
            refresh: true,
        }),
    ],
});
