# SIMRATEK
_Created by Us_

## Pendahuluan
Sistem Manajemen Ruangan dan Tempat untuk Event Kampus (SIMRATEK) merupakan sebuah sistem yang dirancang untuk digunakan oleh seluruh civitas akademika **Universitas Udayana** meminjam gedung, ruangan, atau tempat lainnya yang bisa digunakan untuk menyelenggarakan event tertentu. Sistem ini akan mem-booking-kan tempat atau ruangan yang ada dan tersedia pada waktu tertentu yang bisa digunakan untuk melaksanakan event.

Dalam sistem ini akan menampilkan desain UI yang menarik dan mudah dipahami oleh pengguna untuk mengerti alur sistem pem-booking-an, dimana akan terdapat tampilan atau nama ruangan atau tempat yang sudah ter-booking dan ruangan atau tempat yang bisa di-booking. Aturan dan syarat untuk meminjam gedung akan terlampir di dalam desain UI. Selain itu, ketika ruangan atau tempat yang ingin dipinjam diklik maka akan tampil fasilitas yang tersedia di ruangan atau tempat tersebut.

### Tujuan
1. Mempermudah mahasiswa maupun dosen yang membuat event mencari ruangan atau tempat untuk event.
2. Menyediakan sistem yang bisa digunakan dan dimanfaatkan oleh mahasiswa maupun dosen yang membuat event.
3. Memastikan dan menyediakan aturan yang jelas untuk peminjaman ruangan atau tempat untuk event.
4. Membuat sistem peminjaman gedung yang terstruktur dan terjadwal dengan baik.
5. Mengefisiensi waktu dalam pencarian gedung untuk melaksanakan sebuah event.

## Fitur Kami
1. **Landing Page**
   - Menyambut pengguna dengan informasi singkat tentang SIMRATEK.
   - Menyediakan navigasi ke halaman-halaman utama lainnya.
   - Menampilkan berita dan pengumuman terbaru terkait peminjaman ruangan dan event kampus.
  
2. **Halaman Login**
   - Memungkinkan pengguna untuk masuk ke dalam sistem menggunakan kredensial mereka.
   - Mendukung autentikasi melalui email universitas.

3. **Dashboard**
   - **Admin**
     - Mengelola seluruh sistem peminjaman, termasuk menambah, mengedit, atau menghapus data ruangan dan user.
   - **PJ (Penanggung Jawab)**
     - Melihat daftar peminjaman yang dilakukan.
     - Membuat pemesanan baru dan melacak status peminjaman.
   - **Guest**
     - Melihat informasi umum tentang ruangan yang tersedia.

4. **Peminjaman Ruangan**
   - Pencarian ruangan berdasarkan tanggal, waktu, dan kapasitas.
   - Melihat detail ruangan termasuk fasilitas yang tersedia.
   - Memungkinkan pemesanan langsung melalui sistem.
   - Menampilkan status peminjaman.

5. **Pengelola Ruangan**
   - Admin dapat menambah, mengedit, dan menghapus informasi ruangan.
   - Menyediakan fitur untuk mengatur fasilitas yang tersedia di setiap ruangan.

6. **Pengelola User oleh Admin**
   - Menambah dan mengelola pengguna sistem (mahasiswa, dosen, dan admin).
   - Menentukan hak akses dan peran setiap pengguna.
   - Memantau aktivitas dan penggunaan sistem oleh setiap pengguna.

7. **Sistem Rekomendasi**
   - Memberikan rekomendasi ruangan berdasarkan kebutuhan pengguna (kapasitas, fasilitas, dll).

## Instalasi Sistem
1. Clone repositori ini:
    ```bash
    git clone https://github.com/Xenzirooo/Sistem-Informasi-SIMRATEK
    ```
2. Instal dependensi Composer:
    ```bash
    composer install
    ```
3. Instal dependensi NPM:
    ```bash
    npm install
    ```
4. Jalankan migrasi database:
    ```bash
    php artisan migrate
    ```
5. Seed database:
    ```bash
    php artisan db:seed
    ```
6. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## Kontak
Berminat berbincang dengan kami? Silahkan hubungi kontak pada dokumentasi.
