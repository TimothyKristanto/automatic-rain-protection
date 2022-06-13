# automatic-rain-protection

### PENTING! Lakukan langkah-langkah di bawah setelah melakukan clone atau download dari github

1. install xampp
2. buka xampp dan tekan tombol start pada server apache dan MySQL
3. composer install / composer update
4. cp .env.example .env
5. buat database di xampp : auto_rain_protection
6. ganti nama DB_DATABASE di file .env menjadi auto_rain_protection
7. php artisan migrate
8. php artisan db:seed —class=SensorDetectionSeeder
9. php artisan key:generate