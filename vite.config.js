import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import preact from "@preact/preset-vite";

export default defineConfig({
    plugins: [
        preact({
            prefreshEnabled: true,
        }),
        laravel({
            input: [
                'resources/css/vendors/dataTables/datatables.css',
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/vendors/bootstrap/bootstrap.rtl.css',
                'resources/css/vendors/fontawesome/fontawesome.css',
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/js/imageDot.js',
                'resources/js/vendors/jquery/jquery-3.6.0.min.js',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/vendors/datatables/dataTables.bootstrap5.min.js',
                'resources/js/confirm-code.js',
                'resources/videos/curtain.mp4',
                ],
            refresh: true,
        }),
    ],
});
