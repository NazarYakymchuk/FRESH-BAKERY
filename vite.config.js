import { defineConfig } from 'vite';
import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import laravel from 'laravel-vite-plugin';
import path from "path";

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        createSvgIconsPlugin({
            iconDirs: [path.resolve(process.cwd(), 'resources/assets/icons')],
            symbolId: '[name]',
            inject: 'body-last',
        }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources',
            '@scss': '/resources/assets/scss',
            '@js': '/resources/assets/js',
            '@node': '/node_modules'
        }
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                  @import "./resources/assets/scss/helpers/variables.scss";
                  @import "./resources/assets/scss/helpers/mixins.scss";
                  @import "./resources/assets/scss/helpers/display.scss";
                `
            }
        }
    }
});
