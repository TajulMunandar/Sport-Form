<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
        ]);

        // soal
        \App\Models\Aspek::factory()->create();

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Penguasaan Peraturan',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Kecakapan Memimpin',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Kerapian',
        ]);

        // soal
        \App\Models\Soal::factory()->create();

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan Juri, pengawas, wasit berada pada pos yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan Atlet pada tempat yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan sarana yang dipakai ketika perlombaan berlangsung sudah sesuai'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Tepat waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Dapat menjelelaskan jika terjadi protes'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Menegakkan faktor keamanan dan keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Mengambil keputusan apabila ada penyesuaian dilapangan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Menyatakan kegiatan dapat dilaksanakan dan dihentikan.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Membuat daftar resmi peserta lomba setiap hari setelah dilaksanakan undian dan pembagian group.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasai peraturan pada buku hijau'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasai setia pos dan nomor lari'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasai aturan diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasai tehnik starter'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasai tehnik recall starter'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasasi timer'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasasi tehnik pengawas lintasan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasi juri kedatangan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasai juri pencatat hasil'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasi juri hakim'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Konsentrasi tinggi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Membuat keputusan yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Teamwork'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Membuat sanksi yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Memberikan tanda legitimasi ( stempel ) atas hasil formulir penilaian setelah ditandatangani Wasit Kepala.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Melaksanakan koordinasi dengan Ketua Perlombaan , Panpel , dan Technical Delegate .'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Memimpin pertandingan secara jujur, adil dan benar agar dapat berlangsung lancar serta aman'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Melakukan tindakan pengamanan untuk menjamin keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Melakukan pengecekan dan pendaftaran'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Mengawasi pembuatan dan kesiapan prasarana dan sarana lomba ( lapangan , dsb )'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Baju sesuai yang sudah ditetapkan pada perlombaan tersebut'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Celana sesuai yang sudah ditetapkan pada perlombaan tersebut '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Sepatu sesuai standart perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Pakaian menyesuaikan pada tempat pos wasit'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Pluit, tembak, stopwatch, alat ukur yang diperlukan sudah ada dan sesuai pos'
        ]);
    }
}
