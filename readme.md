### Installation

Laravel has a set of requirements in order to ron smoothly in specific environment. Please see [requirements](https://laravel.com/docs/7.x#server-requirements) section in Laravel documentation.

Assuming your machine meets all requirements - let's process to installation :

1. Open in cmd or terminal app and navigate to this folder
2. Run following commands

```bash
git clone https://github.com/fheryfebrians/persada.git
```

```bash
cd persada
```


```bash
composer install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```


```bash
php artisan serve
```

And navigate to generated server link (http://127.0.0.1:8000)
