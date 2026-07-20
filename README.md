# 🚀 FullstackFlavour - Web Solutions Agency

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-2088FF?style=for-the-badge&logo=github-actions&logoColor=white)

Repositori ini merupakan Proyek Ujian Akhir Semester (UAS) mata kuliah **Cloud Computing**. Proyek ini mendemonstrasikan implementasi aplikasi web modern (FullstackFlavour) menggunakan arsitektur Multi-Container Docker, Orkestrasi, dan integrasi CI/CD Pipeline yang berkelanjutan.

## 🎓 Identitas Mahasiswa

*   **Nama:** Azis Toriq Maulana
*   **NIM:** C2C023180
*   **Fakultas:** Ilmu Komputer dan Teknologi Digital
*   **Universitas:** Universitas Muhammadiyah Semarang (UNIMUS)

---

## 🏗️ Arsitektur Sistem & Teknologi

Sistem ini berjalan di atas lingkungan Docker yang terisolasi dengan **3 Service Utama**:

1.  **`app` (Aplikasi):** Menjalankan sistem backend berbasis Laravel 12 (PHP-FPM 8.2).
2.  **`web` (Web Server):** Bertindak sebagai *Reverse Proxy* menggunakan Nginx untuk mendistribusikan trafik HTTP.
3.  **`db` (Database):** Menggunakan MySQL 8.0 dengan *Persistent Volume* untuk menjaga keamanan data.

### ✨ Pencapaian Fitur & Requirement UAS (Checklist)

*   [x] **Aplikasi & Fitur Utama:** Sistem CRUD (Create, Read, Update, Delete) Portfolio yang dilengkapi validasi input, Live Preview UI/UX, manajemen Tech Stack, dan upload gambar (*multipart/form-data*).
*   [x] **Docker Image & Dockerfile:** Custom Dockerfile untuk optimasi dependensi aplikasi.
*   [x] **Docker Compose:** Menggunakan manajemen deklaratif dengan `depends_on`, `networks`, dan `restart: unless-stopped`.
*   [x] **Persistent Volume & Keamanan Lingkungan:** Data database tidak hilang meski container dimatikan. Mengamankan kredensial menggunakan `.env` (tidak diunggah ke Git).
*   [x] **Health Check & Ketahanan:** Implementasi simulasi *restart policy* dan pengecekan kesehatan layanan pada database MySQL.
*   [x] **Automated Testing (Quality Gate):** Implementasi 27 Test Cases PHPUnit meliputi pengecekan endpoint, otentikasi, validasi form, dan koneksi database (100% PASS).
*   [x] **CI/CD Pipeline (GitHub Actions):** Otomatisasi pengujian, *build image*, tagging berdasarkan Commit SHA, dan rilis otomatis ke Docker Hub.

---

## 🛠️ Cara Menjalankan Aplikasi (Instalasi Lokal)

### Prasyarat

Pastikan Anda telah menginstal:

*   Docker Desktop
*   Git

### Langkah Instalasi

1.  **Clone Repositori**
    ```bash
    git clone [https://github.com/AzisToriq/UAS_Cloud_Computing.git](https://github.com/AzisToriq/UAS_Cloud_Computing.git)
    cd UAS_Cloud_Computing
    ```

2.  **Siapkan Environment Variable**
    Duplikat file konfigurasi dan sesuaikan jika perlu.
    ```bash
    cp .env.example .env
    ```

3.  **Jalankan Orkestrasi Docker**
    Build dan jalankan seluruh container di latar belakang.
    ```bash
    docker compose up -d --build
    ```

4.  **Setup Dependensi & Database (Di dalam Container)**
    Jalankan perintah berikut secara berurutan untuk menginstal vendor, membuat kunci aplikasi, menghubungkan folder gambar, dan menjalankan migrasi database:
    ```bash
    docker compose exec app composer install
    docker compose exec app php artisan key:generate
    docker compose exec app php artisan storage:link
    docker compose exec app php artisan migrate:fresh --seed
    ```

5.  **Akses Aplikasi**
    *   Halaman Publik: `http://localhost:8888`
    *   Halaman Admin: `http://localhost:8888/login`

---

## 🧪 Menjalankan Automated Testing

Proyek ini dilengkapi dengan pengujian otomatis (Automated Testing) untuk menjamin kualitas kode. Untuk menjalankan pengujian, eksekusi perintah berikut di terminal:

```bash
docker compose exec app php artisan test tests/Feature
