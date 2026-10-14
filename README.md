# Library System

## Description

Simple Library Information System

## Requirements

- PHP
- Composer
- MySQL
- Laravel

## Installation

1. Clone repository ini
2. Jalankan `composer install`
3. Copy `.env.example` menjadi `.env`, lalu sesuaikan konfigurasi database (`DB_DATABASE=library_system`)
4. Buat database `library_system` di MySQL
5. Jalankan `php artisan key:generate`
6. Jalankan `php artisan migrate`
7. Jalankan `php artisan db:seed --class=BookSeeder`
8. Jalankan `php artisan serve``

## Author

Rizal Ardiansyah
