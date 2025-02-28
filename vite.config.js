/**
 * Vite конфигурационный файл.
 * @see https://vitejs.dev/config/
 */
import { defineConfig } from 'vite';
import Inspect from 'vite-plugin-inspect'; // Плагин для отладки конфигурации Vite
import laravel from 'laravel-vite-plugin'; // Плагин для интеграции Laravel с Vite
import { ViteImageOptimizer } from 'vite-plugin-image-optimizer'; // Оптимизация изображений
import path from 'path'; // Работа с путями
import legacy from '@vitejs/plugin-legacy'; // Поддержка старых браузеров
import { viteStaticCopy } from 'vite-plugin-static-copy'; // Копирование статических файлов
// import inject from '@rollup/plugin-inject'

export default defineConfig({
  /**
   * Подключаемые плагины
   * @see https://vitejs.dev/plugins/
   */
  plugins: [
    Inspect(), // Инструмент для инспекции Vite-проекта (@see https://github.com/antfu/vite-plugin-inspect)
    laravel({
      input: ['resources/js/app.js'], // Главный файл входа
      refresh: true, // Включает автоматическую перезагрузку при изменениях
    }),
    legacy({
      targets: ['defaults', 'not IE 11'], // Поддержка старых браузеров, исключая IE11
    }),

      // inject({
      //     $: 'jquery', // this caused warnings for all my scss files that had $variable
      //     jQuery: 'jquery',
      // }),
    /**
     * Настройки оптимизации изображений
     * @see https://github.com/FatehAK/vite-plugin-image-optimizer
     */
    ViteImageOptimizer({
      test: /\.(jpe?g|png|gif|tiff|webp|svg|avif)$/i,
      exclude: undefined,
      include: undefined,
      includePublic: true,
      logStats: true,
      ansiColors: true,
      svg: {
        multipass: true,
        plugins: [
          {
            name: 'preset-default',
            params: {
              overrides: {
                cleanupNumericValues: false,
                removeViewBox: false,
              },
              cleanupIDs: {
                minify: false,
                remove: false,
              },
              convertPathData: false,
            },
          },
          'sortAttrs',
          {
            name: 'addAttributesToSVGElement',
            params: { attributes: [{ xmlns: 'http://www.w3.org/2000/svg' }] },
          },
        ],
      },
      png: { quality: 50 },
      jpeg: { quality: 50 },
      jpg: { quality: 50 },
      tiff: {
        quality: 50,
      },
      gif: {},
      webp: {
        lossless: true,
      },
      avif: {
        lossless: true,
      },
      cache: false,
      cacheLocation: undefined,
    }),
  ],
  /**
   * Настройки CSS-предпроцессоров
   * @see https://vitejs.dev/config/#css-preprocessoroptions
   */
  css: {
    postcss: path.resolve(__dirname, './postcss.config.cjs'),
    preprocessorOptions: {
      scss: {},
      less: { javascriptEnabled: true }, // Разрешение использования JS в LESS
    },
  },

  /**
   * Настройки сборки проекта
   * @see https://vitejs.dev/config/build-options.html
   */
  build: {
    outDir: 'public/build', // Директория для вывода собранных файлов
    minify: 'terser', // Минификация кода через Terser
    terserOptions: {
      ecma: 5, // Поддержка старых стандартов JavaScript
      compress: { drop_console: true }, // Удаление console.log в продакшн-версии
      format: { comments: false }, // Удаление комментариев
    },
    chunkSizeWarningLimit: 1000, // Увеличиваем лимит на размер чанков до 1MB
  },
  /**
   * Настройки разрешения путей (алиасы)
   * @see https://vitejs.dev/config/#resolve-alias
   */
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
      '@images': path.resolve(__dirname, 'resources/img'),
      '@fonts': path.resolve(__dirname, 'resources/fonts'),
      '@video': path.resolve(__dirname, 'resources/video'),
      '@views': path.resolve(__dirname, 'resources/views'),
      '@src': path.resolve(__dirname, 'resources/js/src'),
      '@styles': path.resolve(__dirname, 'resources/css'),
      '@components': path.resolve(__dirname, 'resources/js/components'),
    },
  },
});
