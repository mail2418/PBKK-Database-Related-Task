<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Article 
        Article::create([
            'category_id' => '1',
            'user_id' => '2',
            'title' => 'Walkot Bobby Nasution Resmikan Kampus UMKM Shopee Medan, Ini Harapannya',
            'slug' => 'ShopeeAdaUntukUMKM',
            'author' => 'Muhammad Ismail',
            'body' => 'Wali Kota Medan Bobby Nasution meresmikan Kampus UMKM Shopee Medan yang menjadi kampus pertama di Pulau Sumatra dan ke-6 di Indonesia. Kampus ini merupakan bagian dari program #ShopeeAdaUntukUMKM untuk mendorong ekspansi bisnis UMKM di Medan dan sekitarnya.
                       "Saat ini pelaku UMKM di Kota Medan membutuhkan perhatian khusus, tentang bagaimana produk mereka bisa diketahui masyarakat dan konsumen dengan lebih memperhatikan packaging dan promosi yang selama ini belum pernah dilakukan dan didapatkan ilmunya oleh mereka. Shopee diharapkan dapat menampung dan memberikan edukasi bagi pelaku UMKM yang telah atau akan membuat produk", kata Bobby melalui keterangan tertulis, Kamis (17/3/2022).',
            'excerpt' => 'Wali Kota Medan Bobby Nasution meresmikan Kampus UMKM Shopee Medan yang menjadi kampus pertama di Pulau Sumatra.',
            'published_at' => '2022-03-17 21:31:45'
        ]);
        Article::create([
            'category_id' => '3',
            'user_id' => '1',
            'title' => 'Meriah! Shopee Sukses Jadi Pionir Kampanye 3.15 Hari Belanja Konsumen',
            'slug' => '315HariBelanjaKonsumen',
            'author' => 'Muhammad Ismail',
            'body' => 'Shopee baru saja mengakhiri mega sale pertama tahun ini dalam gelaran kampanye 3.15 Hari Belanja Konsumen. Diketahui, puncak kampanye yang berlangsung 15 Maret lalu ini berakhir meriah dan meraih antusiasme tinggi dari para pengguna Shopeee.
                       Head of Marketing Growth Shopee Indonesia Monica Vionna menjelaskan kampanye ini hadir untuk mengajak pengguna merayakan hari-mu bersama-sama. Ia menambahkan #315HariBelanjaKonsumen mendapat antusiasme yang tinggi di berbagai wilayah operasi Shopee beroperasi. Bahkan, pihaknya mencatat penjualan produk 5 kali lebih banyak dalam 2 jam pertama di Selasa (15/3) lalu dibandingkan hari biasa.
                       "Kami senang sekali melihat banyak pengguna ikut berpartisipasi dan merayakan hari mereka bersama #315HariBelanjaKonsumen. Di Shopee, yang kami lakukan selalu berangkat dari kebutuhan pengguna. Sehingga kami bangga dapat menjadi pionir dalam menghadirkan kampanye 3.15 Hari Belanja Konsumen", ungkap Monica dalam keterangan tertulis, Rabu (16/3/2022).',
            'excerpt' => 'Shopee baru saja mengakhiri mega sale pertama tahun ini dalam gelaran kampanye 3.15 Hari Belanja Konsumen',
            'published_at' => '2022-03-16 20:25:27'
        ]);
        Article::create([
            'category_id' => '2',
            'user_id' => '1',
            'title' => 'Omzet UMKM di Solo Ini Berhasil Naik 49% Berkat Kampus UMKM Shopee',
            'slug' => 'OmzetUMKMNaik',
            'author' => 'Danang Syahputra',
            'body' => 'Menjadi pelaku usaha mikro kecil dan menengah (UMKM) tidaklah mudah. Misalnya saja yang dialami oleh seorang perempuan asal Solo, Natalia Dewi Puspita Sari yang sempat hampir gagal dalam usaha fesyennya.
                       Wanita yang akrab disapa Natali itu memiliki bisnis busana wanita dengan nama GalleryFashion yang dirintis sejak 2019. Akan tetapi bisnis tersebut mengalami kerugian cukup besar karena ketatnya persaingan hingga terancam gulung tikar di 2021."Di tahun 2021, penjualan saya menurun drastis. Usaha yang sudah saya bangun dari nol terancam gagal, sedangkan aku harus tetap menjalankan bisnis ini dan yang terpenting adalah menghidupi karyawanku juga," ungkap Natali berdasarkan keterangannya, Senin (14/3/2022).',
            'excerpt' => 'Menjadi pelaku usaha mikro kecil dan menengah (UMKM) tidaklah mudah. Misalnya saja yang dialami oleh seorang perempuan asal Solo, Natalia Dewi Puspita Sari yang sempat hampir gagal dalam usaha fesyennya.',
            'published_at' => '2022-03-08 14:05:21'
        ]);
        Article::create([
            'category_id' => '2',
            'user_id' => '3',
            'title' => 'Tokopedia-Shopee Masuk Daftar Pengawasan AS, Ada Apa?',
            'slug' => 'PengawasanTopedShopee',
            'author' => 'Achmad Dwi Afriyadi',
            'body' => 'Beberapa marketplace yang populer di Indonesia yakni Tokopedia, Bukalapak dan Shopee masuk dalam daftar pengawasan pemerintah Amerika Serikat (AS). Marketplace tersebut masuk dalam daftar Notorius Market List 2021 yang dirilis Kantor Perwakilan Dagang Amerika Serikat atau United States Trade Representative (USTR).
                       Daftar tersebut menyoroti pasar online dan fisik yang dilaporkan terlibat dalam pemalsuan merek dagang dan pembajakan hak cipta. "Perdagangan global barang palsu dan bajakan merusak inovasi dan kreativitas penting AS dan merugikan pekerja Amerika," kata Perwakilan Departemen Perdagangan Katherine Tai dalam keterangannya, Selasa (22/2/2022). Pada bagian fokus masalah, Notorius Market List 2021 memaparkan dampak buruk pemalsuan pada pekerja yang terlibat dengan pembuatan barang palsu. Notorious Markets 2021 juga mengidentifikasi 42 pasar online dan 35 pasar fisik yang dilaporkan terlibat atau memfasilitasi pemalsuan merek dagang atau pembajakan hak cipta. Ini termasuk mengidentifikasi untuk pertama kalinya AliExpress dan ekosistem e-commerce WeChat yakni dua pasar online signifikan berbasis di China yang dilaporkan memfasilitasi pemalsuan merek dagang. Pasar online yang berbasis di China Baidu Wangpan, DHGate, Pinduoduo, dan Taobao terus terdaftar. Kemudian, sembilan pasar fisik yang berlokasi di China dikenal dengan pembuatan, distribusi, dan penjualan barang palsu.',
            'excerpt' =>'Beberapa marketplace yang populer di Indonesia yakni Tokopedia, Bukalapak dan Shopee masuk dalam daftar pengawasan pemerintah Amerika Serikat',
            'published_at' => '2022-02-22 13:25:55'
        ]);
        Article::create([
            'category_id' => '3',
            'user_id' => '3',
            'title' => 'Genjot Mutu Talenta Digital Lokal, Jokowi Resmikan Sea Labs Indonesia',
            'slug' => 'PeresmianSeaLabsIndonesia',
            'author' => 'Achmad Dwi Afriyadi',
            'body' => 'Presiden Joko Widodo meresmikan Sea Labs Indonesia yang merupakan bagian dari induk perusahaan Shopee yakni Sea Group. Sea Labs Indonesia merupakan pusat pelatihan intensif bagi talenta digital Indonesia.
                       Acara tersebut turut dihadiri oleh Menteri Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nadiem Makarim, dan Menteri Koperasi dan UKM Republik Indonesia Teten Masduki, bersama dengan Chief Operating Officer Sea Ye Gang di kantor Sea Labs Indonesia, Gedung Pacific Century Place Jakarta.
                       Saat peresmian tersebut, Presiden Joko Widodo menyempatkan diri untuk berbincang dengan talenta digital yang berkiprah di luar negeri seperti Tech Lead SeaMoney Rangga Garmastewira, Head of Analytics, Platform & Regional Business Grab Singapore Ainun Najib, Software Engineer, Google UK Chairani Aulia Nusapati, dan Director of Engineering Asana Amerika Serikat Veni Johanna.
                       Rangga yang berkesempatan berbincang dengan Presiden Joko Widodo mengatakan, dirinya akan pulang ke Indonesia untuk memberikan kontribusi dan kemampuannya kepada Tanah Air.
                       "Dengan adanya Sea Labs Indonesia, saya akan pulang untuk berkontribusi langsung di Tanah Air. Nanti bulan April, saya bergabung di Sea Group Indonesia dan akan mengembangkan digital payment gateway Indonesia," kata Rangga, Selasa (1/3/2022). Rangga mengatakan perjalanan dirinya berkarier dalam dunia teknologi penuh dengan lika-liku. Pria lulusan dari ITB jurusan Ilmu Komputer ini sempat gagal untuk berkarir di sejumlah perusahaan teknologi.',
            'excerpt' =>'Presiden Joko Widodo meresmikan Sea Labs Indonesia yang merupakan bagian dari induk perusahaan Shopee yakni Sea Group',
            'published_at' => '2022-03-02 08:31:34'
        ]);
        // Category
        Category::create([
            'name' => 'ShopeeCommonNews',
            'slug' => 'Shopee-Common-News'
        ]);
        Category::create([
            'name' => 'ShopeeFinanceNews',
            'slug' => 'Shopee-Finance-News'
        ]);
        Category::create([
            'name' => 'ShopeeNetNews',
            'slug' => 'Shopee-Net-News'
        ]);
        // User
        User::create([
            'name' => 'Muhammad Ismail',
            'username'=> 'mail2418',
            'email' => 'muhammadismail2418@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        User::create([
            'name' => 'Danang Syahputra',
            'username'=> 'DanangGoks123',
            'email' => 'Danang123@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        User::create([
            'name' => 'Achmad Dwi Afriyadi',
            'username'=> 'AfriyadiAhmad2311',
            'email' => 'AfriyadiAhmad2311@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        //membuat factory atau faker Article
        Article::factory(6)->create();
        //Menggunakan dan membuka user faker 
        User::factory(7)->create();

    }
}
