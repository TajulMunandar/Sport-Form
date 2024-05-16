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

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Tanggung Jawab Profesi',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Penguasaan Peraturan',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Kecakapan Memimpin',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Kerapian',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Tanggung Jawab Profesi',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Penguasaan Peraturan',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Kecakapan Memimpin',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Kerapian',
        ]);

        \App\Models\Aspek::factory()->create([
            'aspek' => 'Tanggung Jawab Profesi',
        ]);

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
        // soal lari
        \App\Models\Soal::factory()->create();

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan Juri berada pada pos yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan pengawas berada pada pos yang
            tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan wasit berada pada pos yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan Atlet pada tempat yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan sarana yang dipakai ketika
            perlombaan berlangsung sudah sesuai'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Tepat Waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Dapat menjelelaskan jika terjadi protes
            '
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
            'id_aspek' => 1,
            'soal' => 'Memastikan Sarana dan prasarana lari sesuai standarisasi dan sesuai pada tempatnya'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Memastikan system pencatat waktu berjalan dengan baik dan secara manual dan otomatis'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 1,
            'soal' => 'Menguasai system kualifikasi'
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
            'id_aspek' => 2,
            'soal' => 'Menguasai pemeringkatan pemenang atau hasil perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasai system diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasasi proses pengajuan keberatan atau protes dari tim atau atlet'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasi peraturan pemindahan atau waktu lomba'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 2,
            'soal' => 'Menguasi teknik pengukuran'
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
            'id_aspek' => 3,
            'soal' => 'Memiliki kesiapan mental yang kuat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Mengatahui filosifi perwasitan atletik '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Mampu menjunjung tinggi nilai kejujuran tanpa memihak'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 3,
            'soal' => 'Tepat waktu'
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
            'soal' => 'Pakaian atau lencana untuk membedakan antara Referees and Chief Judges'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Pluit, tembak, stopwatch, alat ukur yang diperlukan sudah ada dan sesuai pos'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Memiliki fisik yang standart untuk seorang wasit atau berat badan ideal'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Memiliki tata bahasa yang baik dan sopan '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 4,
            'soal' => 'Memiliki kemampuan tata cara memanggil tim/atlet jika terjadi problem dilapangan'
        ]);

        // soal jalan
        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Menguasasi peraturan dari Peraturan Teknik Perlombaan Atletik'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Memastikan Juri, pengawas, wasit berada pada pos yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Memastikan Atlet pada tempat yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Memastikan sarana yang dipakai ketika perlombaan berlangsung sudah sesuai'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Tepat waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Dapat menjelelaskan jika terjadi protes'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Menegakkan faktor keamanan dan keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Mengambil keputusan apabila ada penyesuaian dilapangan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Menyatakan kegiatan dapat dilaksanakan dan dihentikan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Membuat daftar resmi peserta lomba setiap hari setelah dilaksanakan undian dan pembagian group.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Menyatakan kegiatan dapat dilaksanakan dan dihentikan. '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Memastikan Sarana dan prasarana lari sesuai standarisasi dan sesuai pada tempatnya'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Memastikan system pencatat waktu berjalan dengan baik dan secara manual dan otomatis'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 5,
            'soal' => 'Menguasai system kualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai peraturan pada Peraturan Teknik Perlombaan Atletik'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai setia pos dan nomor Jalan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai aturan diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai tehnik starter'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai tehnik recall starter'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasasi timer'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasasi tehnik pengawas lintasan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasi juri kedatangan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai juri pencatat hasil'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasi juri hakim'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai pemeringkatan pemenang atau hasil perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasai system diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasasi proses pengajuan keberatan atau protes dari tim atau atlet'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasi peraturan pemindahan atau waktu lomba'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 6,
            'soal' => 'Menguasi teknik pengukuran'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Konsentrasi tinggi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Membuat keputusan yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Teamwork'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Membuat sanksi yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Memberikan tanda legitimasi ( stempel ) atas hasil formulir penilaian setelah ditandatangani Wasit Kepala.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Melaksanakan koordinasi dengan Ketua Perlombaan , Panpel , dan Technical Delegate .'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Memimpin pertandingan secara jujur, adil dan benar agar dapat berlangsung lancar serta aman'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Melakukan tindakan pengamanan untuk menjamin keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Melakukan pengecekan dan pendaftaran'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Mengawasi pembuatan dan kesiapan prasarana dan sarana lomba ( lapangan , dsb )'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Memiliki kesiapan mental yang kuat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Mengatahui filosifi perwasitan atletik '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Mampu menjunjung tinggi nilai kejujuran tanpa memihak'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 7,
            'soal' => 'Tepat waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Baju sesuai yang sudah ditetapkan pada perlombaan tersebut'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Celana sesuai yang sudah ditetapkan pada perlombaan tersebut '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Sepatu sesuai standart perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Pakaian atau lencana untuk membedakan antara Referees and Chief Judges'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Pluit, tembak, stopwatch, alat ukur yang diperlukan sudah ada dan sesuai pos'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Memiliki fisik yang standart untuk seorang wasit atau berat badan ideal'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Memiliki tata bahasa yang baik dan sopan '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 8,
            'soal' => 'Memiliki kemampuan tata cara memanggil tim/atlet jika terjadi problem dilapangan'
        ]);

        // soal lompat
        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Menguasasi peraturan dari Peraturan Teknik Perlombaan Atletik'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Memastikan Juri, pengawas, wasit berada pada pos yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Memastikan Atlet pada tempat yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Memastikan sarana yang dipakai ketika perlombaan berlangsung sudah sesuai'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Tepat waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Dapat menjelelaskan jika terjadi protes'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Menegakkan faktor keamanan dan keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Mengambil keputusan apabila ada penyesuaian dilapangan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Menyatakan kegiatan dapat dilaksanakan dan dihentikan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Membuat daftar resmi peserta lomba setiap hari setelah dilaksanakan undian dan pembagian group.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Menyatakan kegiatan dapat dilaksanakan dan dihentikan. '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Membuat daftar resmi peserta lomba setiap hari setelah dilaksanakan undian dan pembagian group.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Memastikan Sarana dan prasarana lari sesuai standarisasi dan sesuai pada tempatnya'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Memastikan system pencatat waktu berjalan dengan baik dan secara manual dan otomatis'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 9,
            'soal' => 'Menguasai system kualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Mampu mengawasi setiap peserta sebelum melakukan perlombaan lompat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Mampu mengawasi peserta yang akan melakukan lompatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasai tehnik pengukuran hasil lompatan pada setiap peserta'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Mampu mencatat hasil lompatan yang dilakukan oleh setiap peserta sesuai dengan pengukuran juri pengukur'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Mampu penengah atau pemberi keputusan jika ada pelanggaran maupun perselisihan dalam kompetisi lompat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Mampu memberikan keputuas jika ada peserta yang mempunyai hasil atau nilai yang sama maka penentuan pemenang berdasarkan pemberian kesempatan kedua untuk masingmasing peserta dengan nilai yang sama tersebut'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasasi setiap pelanggaran yang terjadi dilapangan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Wasit menguasai peraturan perlombaan semua nomor lompat pada buku pada Peraturan Teknis Perlombaan Atletik'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasai setia pos dan nomor Lompat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasai peraturan diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasai pemeringkatan pemenang atau hasil perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasai system diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasasi proses pengajuan keberatan atau protes dari tim atau atlet'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasi peraturan pemindahan atau waktu lomba'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 10,
            'soal' => 'Menguasi teknik pengukuran'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Konsentrasi tinggi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Membuat keputusan yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Teamwork'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Membuat sanksi yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Memberikan tanda legitimasi ( stempel ) atas hasil formulir penilaian setelah ditandatangani Wasit Kepala.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Melaksanakan koordinasi dengan Ketua Perlombaan , Panpel , dan Technical Delegate .'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Memimpin pertandingan secara jujur, adil dan benar agar dapat berlangsung lancar serta aman'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Melakukan tindakan pengamanan untuk menjamin keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Melakukan pengecekan dan pendaftaran'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Mengawasi pembuatan dan kesiapan prasarana dan sarana lomba ( lapangan , dsb )'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Memiliki kesiapan mental yang kuat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Mengatahui filosifi perwasitan atletik '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Mampu menjunjung tinggi nilai kejujuran tanpa memihak'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 11,
            'soal' => 'Tepat waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Baju sesuai yang sudah ditetapkan pada perlombaan tersebut'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Celana sesuai yang sudah ditetapkan pada perlombaan tersebut '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Sepatu sesuai standart perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Pakaian atau lencana untuk membedakan antara Referees and Chief Judges'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Pluit, tembak, stopwatch, alat ukur yang diperlukan sudah ada dan sesuai pos'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Memiliki fisik yang standart untuk seorang wasit atau berat badan ideal'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Memiliki tata bahasa yang baik dan sopan '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 12,
            'soal' => 'Memiliki kemampuan tata cara memanggil tim/atlet jika terjadi problem dilapangan'
        ]);

        // soal lempar
        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Menguasasi peraturan dari Peraturan Teknik Perlombaan Atletik'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Memastikan Juri, pengawas, wasit berada pada pos yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Memastikan Atlet pada tempat yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Memastikan sarana yang dipakai ketika perlombaan berlangsung sudah sesuai'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Tepat waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Dapat menjelelaskan jika terjadi protes'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Menegakkan faktor keamanan dan keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Mengambil keputusan apabila ada penyesuaian dilapangan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Menyatakan kegiatan dapat dilaksanakan dan dihentikan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Membuat daftar resmi peserta lomba setiap hari setelah dilaksanakan undian dan pembagian group.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Menyatakan kegiatan dapat dilaksanakan dan dihentikan. '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Membuat daftar resmi peserta lomba setiap hari setelah dilaksanakan undian dan pembagian group.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Memastikan Sarana dan prasarana lari sesuai standarisasi dan sesuai pada tempatnya'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Memastikan system pencatat waktu berjalan dengan baik dan secara manual dan otomatis'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 13,
            'soal' => 'Menguasai system kualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasai peraturan pada Peraturan Teknik Perlombaan Atletik'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasai setia pos dan nomor Lempar'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasai aturan diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasi tehnik pemanggilan '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasai peraturan perlombaan nomor lempar dengan sah dan gagalnya suatu lemparan atlet'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasi memegang bendera'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasi penempatkan alat pengukur sesudah bendera penanda tempat jatuhnya cakram sudah ditempatkan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Selalu mengamati dan memastikan dimana tempat jatuhnya alat setelah atlet melempar'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Mengkondisikan sisi lemparan atlet apakah kidal atau kanan sehingga wasit mempu merubah posisi masing-masing'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasai tanda atau isyarat bahwa apakah sah atau tidak lemparan yang dilakukan peserta'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasai pemeringkatan pemenang atau hasil perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasai system diskualifikasi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasasi proses pengajuan keberatan atau protes dari tim atau atlet'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasi peraturan pemindahan atau waktu lomba'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 14,
            'soal' => 'Menguasi teknik pengukuran'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Konsentrasi tinggi'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Membuat keputusan yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Teamwork'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Membuat sanksi yang tepat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Memberikan tanda legitimasi ( stempel ) atas hasil formulir penilaian setelah ditandatangani Wasit Kepala.'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Melaksanakan koordinasi dengan Ketua Perlombaan , Panpel , dan Technical Delegate .'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Memimpin pertandingan secara jujur, adil dan benar agar dapat berlangsung lancar serta aman'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Melakukan tindakan pengamanan untuk menjamin keselamatan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Melakukan pengecekan dan pendaftaran'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Mengawasi pembuatan dan kesiapan prasarana dan sarana lomba ( lapangan , dsb )'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Memiliki kesiapan mental yang kuat'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Mengatahui filosifi perwasitan atletik '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Mampu menjunjung tinggi nilai kejujuran tanpa memihak'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 15,
            'soal' => 'Tepat waktu'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Baju sesuai yang sudah ditetapkan pada perlombaan tersebut'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Celana sesuai yang sudah ditetapkan pada perlombaan tersebut '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Sepatu sesuai standart perlombaan'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Pakaian atau lencana untuk membedakan antara Referees and Chief Judges'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Pluit, tembak, stopwatch, alat ukur yang diperlukan sudah ada dan sesuai pos'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Memiliki fisik yang standart untuk seorang wasit atau berat badan ideal'
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Memiliki tata bahasa yang baik dan sopan '
        ]);

        \App\Models\Soal::factory()->create([
            'id_aspek' => 16,
            'soal' => 'Memiliki kemampuan tata cara memanggil tim/atlet jika terjadi problem dilapangan'
        ]);
    }
}
