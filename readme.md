# Konfigurasi

Setelah download/clone, setting terlebih dahulu konfigurasi database. Buka file `.env` dan sesuaikan dengan konfigurasi database lokal Anda:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventaris
DB_USERNAME=username
DB_PASSWORD=password
```

Setelah selesai setting koneksi database, jalankan perintah berikut di terminal/command prompt:

```bash
php artisan migrate --seed
```

jika terjadi kesalahan, pastikan Anda menjalankan perintah ini di direktori aplikasi (`inventaris-ukk`) dan konfigurasi koneksi ke database sudah benar

login dengan akun `admin@gmail.com` dan password `admin`
