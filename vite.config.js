import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { run } from 'vite-plugin-run'

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        run({ // watch the lang files, if changed, generate new vue i18 files.
          silent: false,
          input: [
            {
              name: 'build translation files',
              run: ['php', 'artisan', 'vue-i18n:generate'],
              pattern: ['./lang/**/*']
            }
          ]
        })
    ],
});
