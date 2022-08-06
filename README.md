# Set Up New Project

- first clone into ur local with
```cmd
git clone https://github.com/faruqii/Feelsbox.git
```

```cmd
composer install
cp .env.example .env
```

## Hot reload
-install dulu npm
```
npm install
```
-kemudian jalankan watch nya
```
npm run watch
```

## Jika Gambar tidak muncul
```
php artisan storage:link
```

## Migrate Database
```
php artisan migrate:fresh
```

## Seed Database
```
php artisan db:seed
```
