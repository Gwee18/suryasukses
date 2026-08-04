# Surya Sukses - Kloning Website (Proyek Pembelajaran)

> **Perhatian:** Repositori ini dibuat semata-mata sebagai **proyek pembelajaran** dalam rangka memahami dan mempraktikkan pengembangan web modern menggunakan Laravel. Proyek ini merupakan hasil salinan tampilan dari website resmi [suryasukses.com](https://suryasukses.com). Seluruh hak cipta, merek dagang, konten, dan identitas visual adalah milik PT Surya Sukses Internasional. Repositori ini tidak dimaksudkan untuk kepentingan komersial maupun untuk menyaingi atau menggantikan website aslinya.

---

## Pratinjau

<p align="center">
  <img src="docs/screenshots/preview.svg" alt="Pratinjau Tampilan Website Surya Sukses" width="100%" />
</p>

---

## Tentang Proyek

Proyek ini merupakan implementasi ulang tampilan antarmuka dari website [suryasukses.com](https://suryasukses.com) menggunakan tumpukan teknologi modern berbasis PHP. Tujuan dari proyek ini adalah untuk melatih kemampuan:

- Membangun layout halaman web yang kompleks menggunakan Laravel dan Blade
- Mengintegrasikan Bootstrap 5 dan Tailwind CSS dalam satu proyek
- Mengelola aset statis menggunakan Vite sebagai bundler
- Memahami struktur routing dan arsitektur MVC dalam Laravel

---

## Tumpukan Teknologi

| Kategori | Teknologi |
|---|---|
| Framework Backend | Laravel 12 (PHP 8.2+) |
| Template Engine | Blade |
| CSS Framework | Bootstrap 5.3, Tailwind CSS 4 |
| Bundler | Vite 7 dengan Laravel Vite Plugin |
| Database | SQLite (default) / MySQL |
| Package Manager | Composer, NPM |

---

## Persyaratan Sistem

Pastikan sistem Anda telah memenuhi persyaratan berikut sebelum melakukan instalasi:

- PHP versi 8.2 atau lebih baru
- Composer versi 2.x
- Node.js versi 18 atau lebih baru dan NPM
- Ekstensi PHP: `pdo`, `pdo_sqlite` (atau `pdo_mysql` jika menggunakan MySQL), `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`
- Git

---

## Panduan Instalasi

### 1. Kloning Repositori

```bash
git clone https://github.com/Gwee18/suryasukses.git
cd suryasukses
```

### 2. Instalasi Dependensi PHP

```bash
composer install
```

### 3. Konfigurasi Environment

Salin file konfigurasi environment dan sesuaikan pengaturannya:

```bash
cp .env.example .env
```

Kemudian buka file `.env` dan sesuaikan nilai berikut:

```env
APP_NAME="Surya Sukses"
APP_URL=http://localhost:8000

# Jika menggunakan SQLite (default), tidak perlu mengubah bagian database
DB_CONNECTION=sqlite

# Jika menggunakan MySQL, ubah konfigurasi berikut:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=suryasukses
# DB_USERNAME=root
# DB_PASSWORD=
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Migrasi dan Seeding Database

Jalankan perintah berikut untuk membuat tabel database sekaligus mengisi data awal:

```bash
php artisan migrate:fresh --seed
```

> **Catatan:** Perintah `migrate:fresh` akan menghapus seluruh tabel yang ada kemudian membuat ulang dari awal. Gunakan `php artisan migrate --seed` jika Anda tidak ingin menghapus data yang sudah ada.

### 6. Instalasi Dependensi Node.js

```bash
npm install
```

### 7. Build Aset Frontend

Untuk lingkungan pengembangan (dengan hot reload):

```bash
npm run dev
```

Untuk build produksi:

```bash
npm run build
```

### 8. Menjalankan Server Lokal

```bash
php artisan serve
```

Aplikasi dapat diakses melalui browser di alamat: `http://localhost:8000`

---

## Menjalankan Seluruh Layanan Sekaligus

Anda dapat menjalankan server PHP, queue worker, dan Vite secara bersamaan menggunakan perintah berikut:

```bash
composer run dev
```

Perintah ini akan menjalankan:
- `php artisan serve` - server pengembangan Laravel
- `php artisan queue:listen` - pemroses antrian (queue worker)
- `php artisan pail` - log viewer real-time
- `npm run dev` - Vite dev server dengan hot module replacement

---

## Perintah Artisan yang Berguna

| Perintah | Keterangan |
|---|---|
| `php artisan migrate:fresh --seed` | Reset database dan isi ulang data awal |
| `php artisan migrate` | Jalankan migrasi yang belum dieksekusi |
| `php artisan db:seed` | Jalankan seeder tanpa mereset tabel |
| `php artisan cache:clear` | Bersihkan cache aplikasi |
| `php artisan config:clear` | Bersihkan cache konfigurasi |
| `php artisan route:list` | Tampilkan daftar seluruh rute yang terdaftar |
| `php artisan tinker` | Buka REPL interaktif Laravel |
| `php artisan test` | Jalankan seluruh pengujian otomatis |

---

## Struktur Direktori

```
suryasukses/
├── app/
│   ├── Http/
│   │   ├── Controllers/    # Logika pengendali permintaan HTTP
│   │   └── Middleware/     # Middleware kustom
│   └── Models/             # Model Eloquent
├── database/
│   ├── migrations/         # File migrasi tabel database
│   └── seeders/            # File seeder data awal
├── public/                 # File yang dapat diakses publik (CSS, JS, gambar)
├── resources/
│   ├── css/                # File sumber CSS
│   ├── js/                 # File sumber JavaScript
│   └── views/              # Template Blade
├── routes/
│   └── web.php             # Definisi rute web
├── docs/
│   └── screenshots/        # Aset dokumentasi
└── vite.config.js          # Konfigurasi Vite
```

---

## Kredit

Tampilan dan konten visual pada proyek ini mengacu pada website resmi milik:

**PT Surya Sukses Internasional**
Website: [https://suryasukses.com](https://suryasukses.com)

Seluruh hak cipta atas merek, logo, konten teks, dan desain adalah milik PT Surya Sukses Internasional. Repositori ini hanya digunakan untuk keperluan edukasi dan tidak memiliki afiliasi resmi dengan perusahaan tersebut.

---

## Lisensi

Kode sumber pada repositori ini didistribusikan di bawah [Lisensi MIT](https://opensource.org/licenses/MIT). Namun perlu ditegaskan bahwa lisensi ini hanya berlaku untuk kode yang ditulis oleh kontributor repositori ini, dan tidak mencakup konten visual maupun merek yang dimiliki oleh PT Surya Sukses Internasional.

---

## Kontributor

<a href="https://github.com/Gwee18/suryasukses/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=Gwee18/suryasukses" alt="Kontributor" />
</a>

---

<p align="center">
  Dibuat untuk keperluan pembelajaran. Bukan untuk penggunaan komersial.
</p>
