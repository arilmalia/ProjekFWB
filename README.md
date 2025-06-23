## <p align="center">PENDAFTARAN DI SEBUAH KLINIK</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Database Tables & Relationships

### Tabel Utama

#### 1. logins
| Kolom         | Tipe Data         | Keterangan                |
|-------------- |------------------|---------------------------|
| id            | BIGINT (PK)      | Primary Key               |
| name          | VARCHAR          | Nama user                 |
| email         | VARCHAR (unique) | Email user                |
| password      | VARCHAR          | Password user             |
| role          | ENUM             | ['dokter','admin','pasien']|
| rememberToken | VARCHAR          | Token                     |
| timestamps    | TIMESTAMP        | Waktu buat/update         |

#### 2. pasiens
| Kolom         | Tipe Data         | Keterangan                |
|-------------- |------------------|---------------------------|
| id            | BIGINT (PK)      | Primary Key               |
| user_id       | BIGINT (FK)      | Relasi ke logins.id       |
| no_pasien     | VARCHAR (unique) | Nomor pasien              |
| nama          | VARCHAR          | Nama pasien               |
| umur          | INTEGER          | Umur pasien               |
| jenis_kelamin | ENUM             | ['Laki-laki','Perempuan'] |
| timestamps    | TIMESTAMP        | Waktu buat/update         |

#### 3. dokters
| Kolom         | Tipe Data         | Keterangan                |
|-------------- |------------------|---------------------------|
| id            | BIGINT (PK)      | Primary Key               |
| user_id       | BIGINT (FK)      | Relasi ke logins.id       |
| no_dokter     | VARCHAR (unique) | Nomor dokter              |
| nama          | VARCHAR          | Nama dokter               |
| spesialis     | VARCHAR          | Spesialisasi              |
| timestamps    | TIMESTAMP        | Waktu buat/update         |

#### 4. daftars
| Kolom         | Tipe Data         | Keterangan                |
|-------------- |------------------|---------------------------|
| id            | BIGINT (PK)      | Primary Key               |
| pasien_id     | BIGINT (FK)      | Relasi ke pasiens.id      |
| dokter_id     | BIGINT (FK)      | Relasi ke dokters.id      |
| tanggal_daftar| DATE             | Tanggal konsultasi        |
| keluhan       | TEXT             | Keluhan pasien            |
| diagnosis     | TEXT             | Diagnosis dokter          |
| tindakan      | TEXT             | Tindakan dokter           |
| timestamps    | TIMESTAMP        | Waktu buat/update         |

#### 5. reseps
| Kolom         | Tipe Data         | Keterangan                |
|-------------- |------------------|---------------------------|
| id            | BIGINT (PK)      | Primary Key               |
| pasien_id     | BIGINT (FK)      | Relasi ke pasiens.id      |
| daftar_id     | BIGINT (FK)      | Relasi ke daftars.id      |
| nama_obat     | VARCHAR          | Nama obat                 |
| keterangan    | VARCHAR          | Keterangan resep          |
| timestamps    | TIMESTAMP        | Waktu buat/update         |

### Relasi Antar Tabel
- **logins** (1)───(1) **pasiens**
- **logins** (1)───(1) **dokters**
- **pasiens** (1)───(N) **daftars** (N)───(1) **dokters**
- **pasiens** (1)───(N) **reseps** (N)───(1) **daftars**

### Penjelasan Relasi
- Setiap user login bisa menjadi pasien atau dokter (melalui tabel `pasiens` atau `dokters`).
- Setiap konsultasi (`daftars`) menghubungkan satu pasien dan satu dokter.
- Setiap resep (`reseps`) menghubungkan satu pasien dan satu konsultasi.
