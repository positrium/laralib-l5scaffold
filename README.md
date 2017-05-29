# laralib-l5scaffold

target : https://packagist.org/packages/laralib/l5scaffold

## setup

- 2017-05-29
  - 最新パッケージバージョンを使うとtraitが存在しないと怒られるので`dev-master`を利用して実験する。

### NG

```json
  "require-dev": {
    "fzaninotto/faker": "~1.4",
    "mockery/mockery": "0.9.*",
    "phpunit/phpunit": "~5.7",
    "laralib/l5scaffold": "1.0.*"
  }
```

laralib/l5scaffold (1.0.10)

```
$ php artisan

  [Symfony\Component\Debug\Exception\FatalErrorException]         
  Trait 'Illuminate\Console\AppNamespaceDetectorTrait' not found  
```

### OK

```json
  "require-dev": {
    "fzaninotto/faker": "~1.4",
    "mockery/mockery": "0.9.*",
    "phpunit/phpunit": "~5.7",
    "laralib/l5scaffold": "*@dev"
  }
```

laralib/l5scaffold (dev-master 196b346)

```
$ php artisan

 make
  make:auth            Scaffold basic login and registration views and routes
  make:command         Create a new Artisan command
  make:controller      Create a new controller class
  make:event           Create a new event class
  make:job             Create a new job class
  make:listener        Create a new event listener class
  make:mail            Create a new email class
  make:middleware      Create a new middleware class
  make:migration       Create a new migration file
  make:model           Create a new Eloquent model class
  make:notification    Create a new notification class
  make:policy          Create a new policy class
  make:provider        Create a new service provider class
  make:request         Create a new form request class
  make:scaffold        Create a laralib scaffold
  make:seeder          Create a new seeder class
  make:test            Create a new test class
```

## config

```
# config/app.php : add providers

    Laralib\L5scaffold\GeneratorsServiceProvider::class,
```
