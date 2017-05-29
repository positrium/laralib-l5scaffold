# laralib-l5scaffold

特にオプションを付けずにフルインストールする

```
$ laravel new laralib-l5scaffold
```

# scaffold full

## simple

```
$ php artisan make:scaffold AdminUser \
      --schema="name:string, mail:string" \
      --ui="bs3"
```

```console
$ php artisan route:list

+--------+----------+----------+------+---------+--------------+
| Domain | Method   | URI      | Name | Action  | Middleware   |
+--------+----------+----------+------+---------+--------------+
|        | GET|HEAD | /        |      | Closure | web          |
|        | GET|HEAD | api/user |      | Closure | api,auth:api |
+--------+----------+----------+------+---------+--------------+
```

## 手動でrouteを追加

```php
// routes/api.php

Route::resource('admin_user', 'AdminUserController');
```

```console
$ php artisan route:list

+--------+-----------+-----------------------------------+---------------------+--------------------------------------------------+--------------+
| Domain | Method    | URI                               | Name                | Action                                           | Middleware   |
+--------+-----------+-----------------------------------+---------------------+--------------------------------------------------+--------------+
|        | GET|HEAD  | /                                 |                     | Closure                                          | web          |
|        | GET|HEAD  | api/admin_users                   | admin_users.index   | App\Http\Controllers\AdminUserController@index   | api          |
|        | POST      | api/admin_users                   | admin_users.store   | App\Http\Controllers\AdminUserController@store   | api          |
|        | GET|HEAD  | api/admin_users/create            | admin_users.create  | App\Http\Controllers\AdminUserController@create  | api          |
|        | GET|HEAD  | api/admin_users/{admin_user}      | admin_users.show    | App\Http\Controllers\AdminUserController@show    | api          |
|        | PUT|PATCH | api/admin_users/{admin_user}      | admin_users.update  | App\Http\Controllers\AdminUserController@update  | api          |
|        | DELETE    | api/admin_users/{admin_user}      | admin_users.destroy | App\Http\Controllers\AdminUserController@destroy | api          |
|        | GET|HEAD  | api/admin_users/{admin_user}/edit | admin_users.edit    | App\Http\Controllers\AdminUserController@edit    | api          |
|        | GET|HEAD  | api/user                          |                     | Closure                                          | api,auth:api |
+--------+-----------+-----------------------------------+---------------------+--------------------------------------------------+--------------+
```
