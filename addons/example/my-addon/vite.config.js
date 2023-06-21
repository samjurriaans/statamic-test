import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir:  '../../../public/vendor/my-addon',
        emptyOutDir: true,
    },
    plugins: [
        laravel({
            input: [
                'resources/js/cp.js',
                'resources/css/cp.css'
            ],
        }),
    ],
});
