Urutan untuk penggunaan
1. Fork terlebih dahulu
2. Buat database lalu sesuaikan config '.env' atau 'config/database.php' dengan pengaturan database yang telah dibuat
3. Jalankan 'php artisan migrate'
4. Jalankan seeder secara berurutan
    <br>a. 'php artisan db:seed --class=Role'
    <br>b. 'php artisan db:seed --class=Menu'
    <br>c. 'php artisan db:seed --class=RoleAccess'
    <br>d. 'php artisan db:seed --class=User'

5. Sekarang anda dapat login dengan url "localhost/[namaproject]/public/auth/login"
    dengan user akun
    <br><br>username/email  : superadmin@mail.com
    <br>password        : 12345678