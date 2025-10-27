# Versions

PHP : 8.3.6 ,
npm : 10.9.2 ,
node : v22.13.1 ,
composer : 2.8.9 ,
Laravel : 12.35.1


# Steps

## 1.Copy .env from .env.example

```bash

cp .env.example .env

```
## 2.Import members.sql file to mysql

```sql

mysql -u username -p members < path/to/file.sql

```

## 3.Install Composer Packages 

```bash

composer install

```

## 4.Install Npm Packages 

```bash

npm install

```

## 5.Run Development Server for Hot-Reload

```bash

npm run dev

```

## 6.Start Laravel Application Server

```bash

php artisan serve

```