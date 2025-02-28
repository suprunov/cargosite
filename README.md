Установка:
```bash
composer clear-cache
rm -rf node_modules yarn.lock vendor composer.lock
yarn install

cp .env.example .env
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
composer install
yarn install
php artisan key:generate
php artisan storage:link
# 

php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

#Настройка Vite для продакшн
yarn build
php artisan optimize:clear

php artisan list

```
TODO: phpfixer

Документация Laravel
https://laravel.su/docs/11.x/installation


Настройка phpStorm для запуска команд package.json

vite: https://www.youtube.com/watch?v=KQe8om2nGqA&list=PL-FhWbGlJPfYoy58I7eU0sB6rtIiP71nq

Плагины PHPStorm для Laravel


Надо сделать так:
```css
.logo {
  background-image: url('~@/images/logo.png');
}
```


---
Для реализации указанной конфигурации в Vite, вам нужно настроить `vite.config.js` так, чтобы он выполнял следующие задачи:

1. При сборке (команда `yarn build`):
    - Собирать все JavaScript файлы в один файл `/public/assets/app.min.js`, включая все зависимости (например, jQuery, Bootstrap, React и другие библиотеки).
    - Преобразовать финальный файл в ES5 для старых браузеров.
    - Собирать все стили (CSS, LESS, SASS, SCSS) в один файл `/public/assets/styles.min.css`, включая ресурсы (шрифты, изображения, видео).

2. При запуске в режиме разработки (команда `yarn dev`):
    - Подключать соответствующие файлы JS и CSS для удобства разработки и автообновления страницы.

Вот пример конфигурации для вашего случая:

### `vite.config.js`

```js
import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import path from 'path';
import legacy from '@vitejs/plugin-legacy';
import vitePluginForLARAVEL from 'vite-plugin-laravel';  // Если используете для Laravel
import { viteStaticCopy } from 'vite-plugin-static-copy';  // Для копирования статических файлов

export default defineConfig({
  plugins: [
    react(),  // Плагин для React
    legacy({
      targets: ['defaults', 'not IE 11'],  // Поддержка ES5 для старых браузеров
    }),
    vitePluginForLARAVEL(), // Если используется Laravel
    viteStaticCopy({
      targets: [
        { src: 'resources/assets/img/**/*', dest: 'assets/img' },
        { src: 'resources/assets/fonts/**/*', dest: 'assets/fonts' },
        { src: 'resources/assets/video/**/*', dest: 'assets/video' },
      ],
    }),
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),  // Пример алиаса для удобства импорта
    },
  },
  build: {
    outDir: 'public',  // Выходная директория для собранных файлов
    manifest: true,  // Генерация манифеста для Blade (если используете Laravel)
    rollupOptions: {
      input: 'resources/assets/app.js',  // Основной файл JS
      output: {
        entryFileNames: 'assets/app.min.js',  // Финальный файл JS
        chunkFileNames: 'assets/[name].min.js',  // Разделенные части JS
        assetFileNames: 'assets/[name].[ext]',  // Статические файлы
      },
    },
    minify: 'terser',  // Минификация
    terserOptions: {
      ecma: 5,  // Преобразование в ES5
      compress: {
        drop_console: true,  // Удаление console.log
      },
    },
  },
  css: {
    preprocessorOptions: {
      less: {
        javascriptEnabled: true,  // Включение JavaScript в LESS
      },
      scss: {
        // Можно добавить общие стили, переменные
      },
    },
    postcss: {
      plugins: [
        require('autoprefixer'),  // Добавление автопрефиксов
      ],
    },
  },
  server: {
    proxy: {
      // Прокси настройки для разработки (если требуется)
      '/api': 'http://localhost',  // Пример прокси для API
    },
    hmr: true,  // Включение автообновления страницы при изменении файлов
  },
});
```

### Пояснения к настройкам:

1. **Плагины**:
    - `react()`: Плагин для работы с React.
    - `legacy()`: Подключаем плагин для поддержки старых браузеров (ES5).
    - `vite-plugin-laravel()`: Плагин для интеграции с Laravel, если вы используете его.
    - `viteStaticCopy()`: Этот плагин позволяет копировать статические файлы (шрифты, изображения и видео) в соответствующие папки в `/public/assets/`.

2. **Сборка JS**:
    - В `build.rollupOptions.input` указывается основной файл `app.js` из `resources/assets`.
    - `entryFileNames` и `chunkFileNames` задают конечные имена файлов.
    - Для минификации используется Terser, с параметром `ecma: 5`, чтобы преобразовать в ES5 для старых браузеров.

3. **Сборка CSS**:
    - Подключение LESS и SASS в разделе `css.preprocessorOptions` позволяет использовать эти препроцессоры.
    - В `postcss.plugins` подключается `autoprefixer`, чтобы добавлять автопрефиксы для совместимости с разными браузерами.

4. **Копирование статических файлов**:
    - Все изображения, шрифты и видео из `resources/assets/img`, `resources/assets/fonts`, `resources/assets/video` будут копироваться в соответствующие папки в `public/assets/`.

5. **Разработка**:
    - В режиме разработки сервер автоматически перезагружает страницу при изменении файлов с использованием HMR (Hot Module Replacement).

### Структура проекта:

После настройки Vite, структура вашего проекта должна выглядеть примерно так:

```
/public
  /assets
    /img
    /fonts
    /video
    app.min.js  // Собранный и минифицированный JS
    styles.min.css  // Собранные и минифицированные стили
/resources
  /assets
    /img
    /fonts
    /video
    app.js  // Основной JS файл
    styles.css  // Основной CSS файл
    /scss (или /less)
    /js (модули и другие скрипты)
```

### Команды для сборки:

- Для сборки проекта в продакшн:

```bash
yarn build
```

- Для разработки с автообновлением:

```bash
yarn dev
```

Теперь при использовании `yarn build` Vite будет собирать все ваши файлы в один файл JavaScript и CSS, а также копировать ресурсы в нужные папки. В режиме разработки Vite будет поддерживать автообновление страниц при изменении файлов.

---
Для миграции вашего проекта с Gulp на **Vite**, учитывая текущий `gulpfile.js`, мы будем следовать нескольким ключевым этапам. Основной задачей будет замена всех этапов сборки (LESS, JavaScript, HTML) на возможности Vite, а также настройка интеграции с Laravel.

Вот полная инструкция, как это сделать:

### 1. Установка зависимостей

Для начала, необходимо установить нужные пакеты:

```bash
yarn add -D vite vite-plugin-laravel less sass terser @vitejs/plugin-vue
```

### 2. Создание конфигурации Vite

Создайте файл `vite.config.js` в корне вашего проекта:

```js
import { defineConfig } from 'vite';
import laravel from 'vite-plugin-laravel';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel(), // Подключаем Laravel плагин для интеграции
  ],
  css: {
    preprocessorOptions: {
      less: {
        javascriptEnabled: true, // Включаем поддержку JavaScript в LESS
      },
      sass: {
        // Здесь можно добавить кастомные переменные для SASS
      },
    },
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'), // Указываем алиас для JS
    },
  },
  build: {
    outDir: 'public/build',  // Папка для итоговых файлов
    manifest: true,  // Подключаем создание манифеста для Blade
    rollupOptions: {
      input: 'resources/js/app.js',  // Основной файл JS для сборки
    },
  },
});
```

### 3. Перенос работы с LESS

Ваш `gulpfile.js` использует LESS для стилей. В Vite можно настроить компиляцию LESS через стандартный `vite-plugin-less`.

#### Создание `resources/css/app.less`

```less
/* resources/css/app.less */
@import 'variables.less'; /* Импорт других файлов LESS */
body {
  background-color: #fff;
}
```

### 4. Перенос работы с JS (сборка и минификация)

Для работы с JS вам нужно заменить `gulp-include` и `terser` на Vite. Например, настройка в `vite.config.js` позволяет это сделать.

1. В файле `resources/js/app.js` добавьте весь ваш JavaScript:

```js
// resources/js/app.js
import './modules/module1.js'; // Пример импортирования модулей
import './modules/module2.js';
```

2. Теперь Vite будет собирать все зависимости, и вы можете использовать [терсер](https://vitejs.dev/plugins/terser/) для минификации, добавив в конфигурацию Vite соответствующие настройки для продакшн-сборки.

Vite использует Terser автоматически в процессе сборки в продакшн:

```js
build: {
  minify: 'terser',  // Минификация с использованием Terser
  terserOptions: {
    compress: {
      drop_console: true,  // Удаление console.log
    },
  },
}
```

### 5. Работа с HTML

Для работы с HTML в Vite используйте встроенные возможности для шаблонов. Например, если у вас есть Blade-шаблоны и вам нужно вставить скомпилированные файлы JS и CSS:

```blade
<!-- resources/views/layouts/app.blade.php -->
@vite(['resources/js/app.js', 'resources/css/app.css'])
```

Это подключит все ваши скомпилированные активы через Vite.

Если вам нужно добавить поддержку для **inlinesource** (инлайнинг стилей и скриптов), можно использовать плагин для этого в Vite, но в большинстве случаев этого не нужно, так как Vite автоматически справляется с активами.

### 6. Перенос работы с изображениями и шрифтами

Для обработки изображений и шрифтов в Vite, достаточно поместить их в папку `resources/img`, `resources/fonts` и так далее. Vite сам будет управлять импортом этих файлов.

Пример:

```js
import img from '@/assets/images/logo.png';  // Пример импорта изображения
```

Vite автоматически оптимизирует изображения при сборке.

### 7. Работа с файлами шрифтов

Для шрифтов используйте ту же структуру, что и для изображений:

```bash
resources/fonts/
```

Vite автоматически обработает и добавит ссылки на шрифты в итоговый CSS.

### 8. Команды для сборки и разработки

- Для **разработки** с автообновлением:

```bash
yarn dev
```

- Для **сборки** в продакшн:

```bash
yarn build
```

- Для **отчистки**:

```bash
yarn clean
```

### 9. Удаление Gulp и ненужных зависимостей

Когда все настроено и протестировано с Vite, можно удалить старую конфигурацию Gulp:

1. Удалите файл `gulpfile.js`.
2. Удалите зависимости, связанные с Gulp:

```bash
yarn remove gulp gulp-concat gulp-less gulp-del gulp-sourcemaps gulp-file-include gulp-rename gulp-replace gulp-inline-source gulp-terser gulp-include
```

### 10. Заключение

Теперь ваш проект использует **Vite** для сборки активов, вместо Gulp. Vite предоставляет множество преимуществ, включая быструю сборку, поддержку ES-модулей и интеграцию с современными инструментами, такими как Hot Module Replacement (HMR).

С Vite, вам не нужно заботиться о сложных настройках для минификации, обработки LESS или работы с изображениями, все это автоматизируется.

---
Эти строки являются директивами для подключения Tailwind CSS в ваш проект. Если вы хотите интегрировать Tailwind CSS в ваш проект с использованием Vite, вам нужно выполнить несколько шагов.

### Шаг 1: Установка зависимостей

Для начала установим Tailwind CSS и необходимые пакеты через Yarn (или npm):

```bash
yarn add tailwindcss postcss autoprefixer
```

Затем создадим конфигурационные файлы для Tailwind и PostCSS:

```bash
npx tailwindcss init
```

Это создаст файл `tailwind.config.js` с базовой конфигурацией.

### Шаг 2: Настройка `tailwind.config.js`

Откроется файл `tailwind.config.js`, где можно настроить темы, пути для поиска классов и другие параметры. Например:

```js
module.exports = {
  content: [
    './resources/**/*.html',
    './resources/**/*.js',
    './resources/**/*.jsx',
    './resources/**/*.ts',
    './resources/**/*.tsx',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
```

Здесь мы указываем, где искать классы Tailwind. Это нужно для того, чтобы Tailwind CSS в процессе сборки удалил неиспользуемые классы и оптимизировал размер итогового CSS-файла.

### Шаг 3: Создание и настройка `postcss.config.cjs`

Создайте файл `postcss.config.cjs` в корне вашего проекта (если он ещё не был создан):

```js
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
};
```

### Шаг 4: Интеграция Tailwind в проект

Теперь в вашем основном CSS файле (например, `resources/assets/styles.css`) добавьте директивы для подключения Tailwind:

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

Это подключит базовые стили, компоненты и утилиты из Tailwind CSS.

### Шаг 5: Настройка `vite.config.js`

Vite автоматически поддерживает интеграцию с Tailwind CSS, так что дополнительных шагов для настройки Vite не требуется, если вы уже следуете стандартной конфигурации.

Однако, если вы хотите сделать явную настройку для обработки CSS, добавьте следующее в ваш `vite.config.js`:

```js
import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  css: {
    postcss: path.resolve(__dirname, './postcss.config.cjs'),  // Убедитесь, что путь к postcss.config.cjs указан правильно
  },
  build: {
    outDir: 'public',  // Папка вывода
  },
});
```

### Шаг 6: Запуск проекта

После того как вы настроите все файлы, выполните команду для сборки проекта:

```bash
yarn dev  // Для разработки с автообновлением
```

Или для продакшн-сборки:

```bash
yarn build
```

Теперь ваш проект будет использовать Tailwind CSS для стилизации, и будет производиться сборка стилей с использованием всех возможных утилит и компонентов, которые предоставляет Tailwind.

---
TODO: 
```javascript
import { defineConfig } from 'vite';

export default defineConfig({
    css: {
        preprocessorOptions: {
            sass: {
                additionalData: `@import "./src/styles/variables.scss";`
            },
            less: {
                additionalData: `@import "./src/styles/variables.less";`
            }
        }
    }
});

```


vite:
```javascript
import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import path from 'path';
import legacy from '@vitejs/plugin-legacy';
import vitePluginForLARAVEL from 'vite-plugin-laravel';  // Если используете для Laravel
import { viteStaticCopy } from 'vite-plugin-static-copy';  // Для копирования статических файлов
import autoprefixer from 'autoprefixer';  // Импорт autoprefixer

export default defineConfig({
    plugins: [
        react(),  // Плагин для React
        legacy({
            targets: ['defaults', 'not IE 11'],  // Поддержка ES5 для старых браузеров
        }),
        vitePluginForLARAVEL(), // Если используется Laravel
        viteStaticCopy({
            targets: [
                { src: 'resources/assets/img/**/*', dest: 'assets/img' },
                { src: 'resources/assets/fonts/**/*', dest: 'assets/fonts' },
                { src: 'resources/assets/video/**/*', dest: 'assets/video' },
            ],
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),  // Пример алиаса для удобства импорта
        },
    },
    build: {
        outDir: 'public',  // Выходная директория для собранных файлов
        manifest: true,  // Генерация манифеста для Blade (если используете Laravel)
        rollupOptions: {
            input: 'resources/assets/app.js',  // Основной файл JS
            output: {
                entryFileNames: 'assets/app.min.js',  // Финальный файл JS
                chunkFileNames: 'assets/[name].min.js',  // Разделенные части JS
                assetFileNames: 'assets/[name].[ext]',  // Статические файлы
            },
        },
        minify: 'terser',  // Минификация
        terserOptions: {
            ecma: 5,  // Преобразование в ES5
            compress: {
                drop_console: true,  // Удаление console.log
            },
        },
    },
    css: {
        preprocessorOptions: {
            less: {
                javascriptEnabled: true,  // Включение JavaScript в LESS
            },
            scss: {
                // Можно добавить общие стили, переменные
            },
        },
        postcss: {
            plugins: [
                autoprefixer,  // Автоматическое добавление автопрефиксов
                path.resolve(__dirname, './postcss.config.cjs'),  // Убедитесь, что путь к postcss.config.cjs указан правильно
            ],
        },
    },
    server: {
        proxy: {
            // Прокси настройки для разработки (если требуется)
            '/api': 'https://cargonomica.loc',  // Пример прокси для API
        },
        hmr: true,  // Включение автообновления страницы при изменении файлов
    },
});

```
