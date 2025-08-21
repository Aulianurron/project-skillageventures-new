import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            buildDirectory: "build",
        }),
        vue(),//addplugins here
    ],
    build: {
        outDir: path.resolve(__dirname, "public_html/build"),
        rollupOptions: {
            input: {
                main: path.resolve(__dirname, "resources/js/app.js"),
                style: path.resolve(__dirname, "resources/css/app.css"),
            },
        },
    },
});
