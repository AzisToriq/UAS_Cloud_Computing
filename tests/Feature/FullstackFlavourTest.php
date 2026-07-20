<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Portfolio;

class FullstackFlavourTest extends TestCase
{
    // BUKTI UAS: RefreshDatabase memastikan setiap test dijalankan di database yang bersih
    use RefreshDatabase;

    /**
     * 1. Pengujian Endpoint & Halaman Publik
     */
    public function test_halaman_utama_dapat_diakses_publik(): void
    {
        $response = $this->get('/');

        // Memastikan status HTTP 200 (OK)
        $response->assertStatus(200);
    }

    /**
     * 2. Pengujian Keamanan (Halaman Admin Dilindungi)
     */
    public function test_halaman_admin_terlindungi_dan_redirect_ke_login(): void
    {
        $response = $this->get('/admin/portfolios');

        // Memastikan user yang belum login ditendang ke halaman login
        $response->assertRedirect('/login');
    }

    /**
     * 3. Pengujian Fungsi & Koneksi Database (CRUD - Create)
     */
    public function test_admin_dapat_menambahkan_portofolio_baru(): void
    {
        // Setup: Buat akun Admin
        $admin = User::factory()->create();

        // Action: Simulasikan login dan submit form tambah portofolio
        $response = $this->actingAs($admin)->post('/admin/portfolios', [
            'title' => 'Project Joki Web E-Commerce',
            'slug' => 'project-joki-web-ecommerce', // <-- INI YANG DITAMBAHKAN BRE!
            'description' => 'Membuat website e-commerce dengan Laravel untuk klien.',
            'link' => 'https://github.com/fullstackflavour/ecommerce'
        ]);

        // Assert: Pastikan diarahkan kembali ke halaman index tanpa error
        $response->assertRedirect(route('portfolios.index'));

        // BUKTI UAS: Pastikan data benar-benar tersimpan di database
        $this->assertDatabaseHas('portfolios', [
            'title' => 'Project Joki Web E-Commerce',
        ]);
    }

    /**
     * 4. Pengujian Validasi Input
     */
    public function test_validasi_input_judul_wajib_diisi(): void
    {
        $admin = User::factory()->create();

        // Action: Submit form tapi 'title' sengaja tidak diisi (null)
        $response = $this->actingAs($admin)->post('/admin/portfolios', [
            'title' => '',
            'slug' => 'tanpa-judul', // <-- Tambahkan juga biar aman dari error validasi lain
            'description' => 'Deskripsi saja tanpa judul.',
        ]);

        // BUKTI UAS: Pastikan sistem menolak dan memberikan error validasi pada kolom 'title'
        $response->assertSessionHasErrors('title');
    }
}
