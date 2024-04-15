import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/img/icons8-whatsapp-48.png",
                "resources/img/logo.png",
            ],
            refresh: true,
        }),
    ],
});
