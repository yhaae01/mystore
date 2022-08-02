# Tentang MyStore

MyStore merupakan aplikasi E-Commerce sederhana untuk toko anda. Di bangun menggunakan Laravel 7, Bootstrap 4, VueJS dan SCSS.

# Spesifikasi Minimum

-   PHP >= 7.4
-   Google Chrome >= 89.0.4389.114

# Cara Penggunaan

1. Buat database
2. Lakukan perintah `composer install`
3. Lakukan perintah `php artisan key:generate`
4. Lakukan perintah `php artisan migrate`

# Beberapa Masalah Yang Muncul

### 1. Jika Provinsi dan Kota Tidak Muncul

`php artisan indoregion:publish`

`composer dump-autoload`

`php artisan db:seed --class=IndoRegionSeeder`

### 2. Jika Gambar Tidak Muncul

`php artisan storage:link`
