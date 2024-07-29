# Laravel updates package

[En version](EN.md)

Пакет работает на основе миграций, используя туже модель. Создание файлов обновлений и накатывания их. 
Это удобно при диплое приложений, когда нужно чтобы автоматически добавились какие-то данные. И при первом запуске, когда есть критические части приложения.

Установка:
```shell
composer require gian_tiaga/laravel-updates
```

**Доступные команды:**

1. Создание обновления
```shell
php artisan update:make add_permissions_to_admin
```
2. Запуск обновления
```shell
php artisan update:migrate
```
3. Откат обновления
```shell
php artisan update:rollback
```
