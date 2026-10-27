# Vapezoo CMS Laravel

Prototype katalog Vapezoo dengan halaman produk, berita, FAQ, dan pengelolaan konten melalui Laravel.

## Yang tersedia

- Halaman beranda, tentang, produk, Hexohm, berita, kontak, dan FAQ.
- CRUD banner, produk, berita, FAQ, serta informasi halaman.
- Model dan migrasi terpisah untuk konten katalog serta pesan kontak.

## Menjalankan demo

Laravel v10.48.9, PHP ^8.1, Composer, serta MySQL/MariaDB. Aset frontend memakai perintah pada package.json. Dependency Composer dan Node tidak disertakan.

1. Pakai versi PHP yang memenuhi composer.json dan lockfile. Aktifkan ekstensi PDO MySQL, mbstring, OpenSSL, tokenizer, XML, ctype, dan fileinfo.
2. Salin .env.example menjadi .env bila belum ada, lalu isi koneksi database sendiri. Jangan commit .env.
3. Jalankan `composer install`, lalu `php artisan key:generate`.
4. Buat database demo kosong, lalu jalankan `php artisan migrate`. Baca isi seeder sebelum menjalankan `php artisan db:seed`.
5. Untuk aset yang berasal dari source, jalankan `npm install` dan script development/production atau build yang tersedia pada package.json. Toolchain Node legacy belum diuji ulang.
6. Jalankan `php artisan serve` dan buka alamat yang dicetak terminal.

## Struktur yang perlu dibaca

`app/` menyimpan controller/model atau komponen Livewire, `routes/` memetakan URL, `resources/views/` menyimpan Blade, `database/migrations/` berisi skema, dan `public/` adalah web root. `tests/` yang tersedia sebagian besar masih contoh bawaan framework.

## Batas implementasi

- Kelompok route /admin pada sumber belum mempunyai middleware autentikasi. Jalankan sebagai prototype lokal; jangan membuka admin ke jaringan publik.
- Unggahan dan database lokal tidak disertakan, sehingga katalog baru dapat kosong. Beberapa layar legacy mengasumsikan konten sudah ada.
- README Laravel bawaan diganti dengan dokumentasi proyek; aplikasi ini berbeda dari repo vapezoo versi statis.

## Pemeriksaan publikasi

- PHP lint: 106/106 berkas PHP non-Blade lolos menggunakan PHP 8.1.12.
- Salinan publik tidak menyertakan .env aktual, dependency Composer/Node, log, database dump, arsip, sesi, atau unggahan lokal.
- Tes framework, koneksi database, pengoperasian UI, build aset, dan API eksternal belum dijalankan pada salinan ini. Lint hanya memeriksa sintaks; tidak membuktikan seluruh fitur berfungsi.

## Asal source dan lisensi

Berasal dari [https://github.com/havel373/vapezoo-rafik](https://github.com/havel373/vapezoo-rafik). Riwayat Git sumber tidak dibawa ke salinan publik ini; atribusi upstream dan berkas lisensi yang tersedia tetap dipertahankan.

Aset UI statis yang dirujuk aplikasi tetap disertakan beserta lisensi yang tersedia. Konten merek dan gambar mengikuti hak pemilik aslinya. Perubahan untuk publikasi ini meliputi dokumentasi, pemisahan konfigurasi lokal, skema demo bila diperlukan, dan koreksi terbatas yang dicatat pada persiapan proyek.
