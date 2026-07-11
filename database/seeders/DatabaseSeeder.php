<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $posts = [
            [
                'title' => 'Indonesia Luncurkan Satelit Baru untuk Perkuat Internet Nasional',
                'content' => 'Pemerintah Indonesia resmi meluncurkan satelit komunikasi terbaru yang akan memperkuat jaringan internet di seluruh pelosok nusantara. Satelit ini diharapkan mampu menjangkau daerah terpencil yang selama ini belum mendapatkan akses internet yang memadai.',
                'published' => 'yes',
                'image' => '/img/satelit.jpeg',
                'publisher' => 'Nastasha Wijaya',
                'category' => 'Teknologi',
                'event_date' => '2026-07-10',
                'views' => 30452,
                'created_at' => '2026-07-10 08:15:00',
                'updated_at' => '2026-07-10 08:15:00',
            ],
            [
                'title' => 'Kereta Cepat Jakarta Bandung Diperpanjang Hingga Surabaya',
                'content' => 'Proyek kereta cepat yang menghubungkan Jakarta dan Bandung kini akan diperpanjang hingga Surabaya. Proyek ambisius ini ditargetkan selesai pada tahun 2029 dan akan menjadi jalur kereta cepat terpanjang di Asia Tenggara.',
                'published' => 'yes',
                'image' => '/img/kereta.png',
                'publisher' => 'Budi Santoso',
                'category' => 'Nasional',
                'event_date' => '2026-07-10',
                'views' => 9271,
                'created_at' => '2026-07-10 10:42:00',
                'updated_at' => '2026-07-10 10:42:00',
            ],
            [
                'title' => 'Rupiah Menguat Sentuh Level Terbaik Sepanjang Tahun 2026',
                'content' => 'Nilai tukar rupiah terhadap dolar AS menguat signifikan dan menyentuh level terbaik sepanjang tahun 2026. Bank Indonesia optimis tren positif ini akan terus berlanjut seiring membaiknya kondisi ekonomi global.',
                'published' => 'yes',
                'image' => '/img/rupiah-melemah.png',
                'publisher' => 'Aly Winata',
                'category' => 'Ekonomi',
                'event_date' => '2026-07-09',
                'views' => 7834,
                'created_at' => '2026-07-09 07:30:00',
                'updated_at' => '2026-07-09 07:30:00',
            ],
            [
                'title' => 'Tidur Berkualitas Terbukti Tingkatkan Produktivitas Kerja',
                'content' => 'Sebuah penelitian terbaru mengungkapkan bahwa tidur berkualitas selama 7-8 jam per malam dapat meningkatkan produktivitas kerja hingga 40 persen. Para ahli kesehatan merekomendasikan untuk menjaga pola tidur yang teratur.',
                'published' => 'yes',
                'image' => '/img/tidur.png',
                'publisher' => 'Aly Winata',
                'category' => 'Lifestyle',
                'event_date' => '2026-07-09',
                'views' => 12903,
                'created_at' => '2026-07-09 13:20:00',
                'updated_at' => '2026-07-09 13:20:00',
            ],
            [
                'title' => 'Timnas Indonesia Raih Emas di Kejuaraan Sepak Bola Asia',
                'content' => 'Tim nasional sepak bola Indonesia berhasil meraih medali emas dalam kejuaraan sepak bola tingkat Asia. Kemenangan ini disambut antusias oleh jutaan suporter Indonesia di seluruh dunia.',
                'published' => 'yes',
                'image' => '/img/timnas.png',
                'publisher' => 'Awan Pratama',
                'category' => 'Olahraga',
                'event_date' => '2026-07-08',
                'views' => 21567,
                'created_at' => '2026-07-08 22:05:00',
                'updated_at' => '2026-07-08 22:05:00',
            ],
            [
                'title' => 'Danau Toba Masuk Destinasi Wisata Favorit Dunia 2026',
                'content' => 'Danau Toba di Sumatera Utara resmi masuk dalam daftar destinasi wisata favorit dunia versi UNESCO tahun 2026. Pengakuan internasional ini diharapkan dapat mendorong peningkatan kunjungan wisatawan mancanegara ke Indonesia.',
                'published' => 'yes',
                'image' => '/img/tobau-danau.png',
                'publisher' => 'Biru Santoso',
                'category' => 'Travel',
                'event_date' => '2026-07-08',
                'views' => 4318,
                'created_at' => '2026-07-08 09:47:00',
                'updated_at' => '2026-07-08 09:47:00',
            ],
            [
                'title' => 'Startup Teknologi Indonesia Tembus Valuasi 1 Miliar Dolar',
                'content' => 'Sebuah startup teknologi asal Indonesia berhasil mencapai status unicorn dengan valuasi mencapai 1 miliar dolar AS. Pencapaian ini menjadikan Indonesia sebagai negara dengan jumlah unicorn terbanyak di Asia Tenggara.',
                'published' => 'yes',
                'image' => '/img/star-up.png',
                'publisher' => 'Awan Pratama',
                'category' => 'Ekonomi',
                'event_date' => '2026-07-07',
                'views' => 6729,
                'created_at' => '2026-07-07 11:33:00',
                'updated_at' => '2026-07-07 11:33:00',
            ],
            [
                'title' => 'Kurikulum Merdeka Belajar Terbukti Tingkatkan Nilai Siswa',
                'content' => 'Hasil evaluasi nasional menunjukkan bahwa implementasi Kurikulum Merdeka Belajar berhasil meningkatkan rata-rata nilai siswa secara signifikan. Program ini kini akan diperluas ke seluruh sekolah di Indonesia.',
                'published' => 'yes',
                'image' => '/img/belajar.png',
                'publisher' => 'Awan Pratama',
                'category' => 'Edukasi',
                'event_date' => '2026-07-07',
                'views' => 3845,
                'created_at' => '2026-07-07 15:58:00',
                'updated_at' => '2026-07-07 15:58:00',
            ],
            [
                'title' => 'Pemerintah Targetkan 10 Juta Rumah Subsidi Selesai 2027',
                'content' => 'Kementerian Perumahan Rakyat mengumumkan target pembangunan 10 juta unit rumah subsidi yang ditargetkan selesai pada tahun 2027. Program ini ditujukan untuk masyarakat berpenghasilan rendah di seluruh Indonesia.',
                'published' => 'yes',
                'image' => '/img/subsidi.png',
                'publisher' => 'Natasha Wijaya',
                'category' => 'Nasional',
                'event_date' => '2026-07-06',
                'views' => 5621,
                'created_at' => '2026-07-06 08:05:00',
                'updated_at' => '2026-07-06 08:05:00',
            ],
            [
                'title' => 'Aplikasi Kesehatan Lokal Kalahkan Google Fit di Indonesia',
                'content' => 'Sebuah aplikasi kesehatan buatan anak bangsa berhasil mengalahkan Google Fit dalam hal jumlah pengguna aktif di Indonesia. Aplikasi ini menawarkan fitur pemantauan kesehatan yang disesuaikan dengan kebutuhan masyarakat Indonesia.',
                'published' => 'yes',
                'image' => '/img/kesehatan.png',
                'publisher' => 'Langit Kusuma',
                'category' => 'Teknologi',
                'event_date' => '2026-07-06',
                'views' => 8103,
                'created_at' => '2026-07-06 14:22:00',
                'updated_at' => '2026-07-06 14:22:00',
            ],
            [
                'title' => 'Festival Kuliner Nusantara 2026 Dihadiri 500 Ribu Pengunjung',
                'content' => 'Festival Kuliner Nusantara 2026 yang digelar di Jakarta berhasil menarik lebih dari 500 ribu pengunjung selama 5 hari pelaksanaan. Event tahunan ini menampilkan ribuan menu makanan tradisional dari 34 provinsi di Indonesia.',
                'published' => 'yes',
                'image' => '/img/makanan.png',
                'publisher' => 'Eugene Sari',
                'category' => 'Lifestyle',
                'event_date' => '2026-07-05',
                'views' => 2947,
                'created_at' => '2026-07-05 16:10:00',
                'updated_at' => '2026-07-05 16:10:00',
            ],
            [
                'title' => 'Ekspor Batu Bara Indonesia Naik 30 Persen di Kuartal Kedua',
                'content' => 'Badan Pusat Statistik mencatat kenaikan ekspor batu bara Indonesia sebesar 30 persen pada kuartal kedua 2026. Kenaikan ini didorong oleh meningkatnya permintaan dari negara-negara Asia Timur.',
                'published' => 'yes',
                'image' => '/img/bara-batu.png',
                'publisher' => 'Bara Nugraha',
                'category' => 'Ekonomi',
                'event_date' => '2026-07-05',
                'views' => 4512,
                'created_at' => '2026-07-05 09:55:00',
                'updated_at' => '2026-07-05 09:55:00',
            ],
            [
                'title' => 'Atlet Bulu Tangkis Indonesia Juara All England 2026',
                'content' => 'Atlet bulu tangkis Indonesia kembali mengharumkan nama bangsa dengan meraih gelar juara di turnamen All England 2026. Kemenangan ini semakin mengukuhkan posisi Indonesia sebagai kekuatan bulu tangkis dunia.',
                'published' => 'yes',
                'image' => '/img/bulu-tangkais.png',
                'publisher' => 'Natasha Wijaya',
                'category' => 'Olahraga',
                'event_date' => '2026-07-04',
                'views' => 15834,
                'created_at' => '2026-07-04 20:30:00',
                'updated_at' => '2026-07-04 20:30:00',
            ],
            [
                'title' => 'Bali Kembali Dinobatkan sebagai Pulau Terbaik di Asia',
                'content' => 'Pulau Bali kembali meraih penghargaan sebagai pulau terbaik di Asia versi majalah Travel + Leisure 2026. Penghargaan ini menjadi bukti bahwa Bali masih menjadi destinasi wisata unggulan dunia.',
                'published' => 'yes',
                'image' => '/img/bali.png',
                'publisher' => 'Bara Nugraha',
                'category' => 'Travel',
                'event_date' => '2026-07-04',
                'views' => 11209,
                'created_at' => '2026-07-04 12:18:00',
                'updated_at' => '2026-07-04 12:18:00',
            ],
            [
                'title' => 'Universitas Indonesia Masuk 50 Besar Kampus Terbaik Asia',
                'content' => 'Universitas Indonesia berhasil masuk dalam daftar 50 besar kampus terbaik di Asia versi QS World University Rankings 2026. Pencapaian ini menjadi kebanggaan bagi dunia pendidikan Indonesia.',
                'published' => 'yes',
                'image' => '/img/ui.png',
                'publisher' => 'Awan Pratama',
                'category' => 'Edukasi',
                'event_date' => '2026-07-03',
                'views' => 7456,
                'created_at' => '2026-07-03 17:45:00',
                'updated_at' => '2026-07-03 17:45:00',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}