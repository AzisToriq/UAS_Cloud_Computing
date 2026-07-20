<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Akun Admin
        User::firstOrCreate(
            ['email' => 'admin@fullstackflavour.com'],
            [
                'name' => 'Admin FullstackFlavour',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Dummy Layanan (Services)
        $services = [
            ['name' => 'Landing Page Bisnis', 'description' => 'Desain modern, responsif, dan optimasi SEO untuk meningkatkan konversi penjualan Anda.', 'starting_price' => 1500000],
            ['name' => 'Company Profile Premium', 'description' => 'Website profesional untuk membangun kredibilitas perusahaan dengan fitur lengkap.', 'starting_price' => 3500000],
            ['name' => 'Sistem Informasi Web', 'description' => 'Aplikasi web kustom (Dashboard, ERP, CRM) dengan Laravel untuk kebutuhan operasional.', 'starting_price' => 8000000],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }

        // 3. Dummy Portofolio (DENGAN SLUG)
        $portfolios = [
            ['title' => 'E-Commerce Toko Baju', 'slug' => 'e-commerce-toko-baju', 'description' => 'Platform belanja online dengan integrasi payment gateway dan manajemen stok otomatis.', 'link' => 'https://example.com', 'is_published' => true],
            ['title' => 'Dashboard HRD Perusahaan', 'slug' => 'dashboard-hrd-perusahaan', 'description' => 'Sistem manajemen absensi, cuti, dan penggajian karyawan berbasis web.', 'link' => 'https://example.com', 'is_published' => true],
            ['title' => 'Aplikasi Kasir (POS)', 'slug' => 'aplikasi-kasir-pos', 'description' => 'Aplikasi kasir berbasis cloud dengan laporan penjualan harian dan cetak struk termal.', 'link' => '', 'is_published' => true],
        ];
        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
