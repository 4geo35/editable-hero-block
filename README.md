### Установка

Добавить `"./vendor/4geo35/editable-hero-block/src/resources/views/livewire/admin/**/*.blade.php",
        "./vendor/4geo35/editable-hero-block/src/resources/views/admin/**/*.blade.php",
        "./vendor/4geo35/editable-hero-block/src/resources/views/components/**/*.blade.php",` в `tailwind.admin.config.js`, созданный в пакете `tailwindcss-theme`.

Добавить `"./vendor/4geo35/editable-hero-block/src/resources/views/components/**/*.blade.php",
        "./vendor/4geo35/editable-hero-block/src/resources/views/web/**/*.blade.php",` в `tailwind.config.js`, созданный в пакете `tailwindcss-theme`.

Запустить миграции для создания таблиц `php artisan migrate`


### Примечание

По умолчанию блок не использует `h1`, чтобы в нем появился тег, нужно при выводе блока передать параметр `useH1` в значении `true`, тогда для первого элемента блока `div` переключится на `h1`.
