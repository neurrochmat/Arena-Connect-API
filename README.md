<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# API Arena Connect

Repository ini digunakan sebagai template API dari aplikasi Arena Connect.

<i>Minimum requirements</i> untuk menjalankan template ini adalah:
- PHP 8.2
- Laravel 11
- MySQL 8.0/MariaDB 10.4

Cara menggunakan template ini adalah sebagai berikut:
1. Dengan menggunakan ``terminal`` atau ``command prompt``, duplikasi template ini menggunakan perintah:
```
git clone https://gitlab.com/sukotyasp/pbl-laravel-template.git {project-directory}
```
2. Masuk ke ``{project-directory}``, hapus folder **hidden** bernama `` .git``.
3. Alternatif selain melakukan langkah 1. dan 2., anda dapat mengunduh versi terbaru yang dipublikasikan pada link <a href='https://gitlab.com/sukotyasp/pbl-laravel-template/-/releases'>berikut</a>. Kemudian ``extract`` file yang anda unduh. Buka ``terminal`` atau ``command prompt``, lalu pilih folder hasil ekstrak sebagai folder aktif pada command line.
4. Install dependency menggunakan composer dengan perintah

```
composer install
```
5. __Copy__ file ``.env.example`` menjadi ``.env`` dengan perintah (windows)
```
copy .env.example .env
```
7. Buat database sesuai yang anda butuhkan, kemudian sesuaikan entry berikut pada file ``.env``:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={your database}
DB_USERNAME={your database username}
DB_PASSWORD={your database password}
```
7. Jalankan perintah berikut:
```
php artisan key:generate
php artisan migrate
php artisan db:seed
```
8. Jalankan aplikasi menggunakan perintah:
```
php artisan serve
```
9. Anda dapat memodifikasi port yang digunakan:
```
php artisan serve --port={custom port}
```
<hr>
