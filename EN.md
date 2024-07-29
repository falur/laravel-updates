# Laravel updates package

[Русская версия](Readme.md)

The package works on the basis of migrations, using the same model. Creating update files and rolling them out. This is convenient in deploy app, when you need some data to be added automatically. And at the first launch, when there are critical parts of the application.

**Commands:**

1. Create update
```shell
php artisan update:make add_permissions_to_admin
```
2. Run update
```shell
php artisan update:migrate
```
3. Rollback update
```shell
php artisan update:rollback
```
