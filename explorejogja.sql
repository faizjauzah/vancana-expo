-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explorejogja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'faiz', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) UNSIGNED NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `gambar_destinasi` varchar(255) NOT NULL,
  `isi_destinasi` text NOT NULL,
  `wilayah_destinasi` enum('Kota','Bantul','Kulon Progo','Sleman','Gunung Kidul') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `gambar_destinasi`, `isi_destinasi`, `wilayah_destinasi`) VALUES
(1, 'Gembira Loka Zoo', '1701511289.jpeg', 'Jalan-jalan ke Yogya belum lengkap kalau belum menyapa satwa-satwa unik dan lucu di Kebun Binatang Gembira Loka. Terletak di Kotagede, Kota Yogyakarta, kebun binatang ini sudah melayani banyak wisatawan sejak 1953. Rekreasinya pun beragam, ada Zoo Express untuk keliling area kebun binatang dengan rel yang menantang, merasakan serunya skuter air, jalan-jalan di sekitar kebun pakai Ninebot atau roda berjalan, dan menyentuh satwa air di kolam sentuh.', 'Kota'),
(2, 'Candi Prambanan', '1701511264.jpeg', 'Siapa yang enggak takjub melihat candi Hindu terbesar di Indonesia? Iya, candi terbesar itu adalah Candi Prambanan yang terletak di kompleks Taman Wisata Candi Prambanan. Berlokasi di Kabupaten Sleman, D.I Yogyakarta, candi ini diperkirakan telah berdiri sejak abad ke-9. Wow, sudah berusia lama banget ya, Sobat Pesona! Menjulang setinggi 47 meter, Candi Prambanan memiliki bentuk seperti kumpulan mahkota kalau dilihat dari kejauhan. Makanya, Sobat Pesona jangan sampai terlewat mengabadikan momen berkunjung ke Candi Prambanan, ya!', 'Sleman'),
(3, 'The World Landmarks Merapi Park', 'landmark_merapi.jpeg', 'Merapi Park, yang juga dikenal sebagai The World Landmark Merapi Park, adalah destinasi wisata yang menampilkan replika miniatur landmark terkenal dari seluruh dunia. Tempat wisata populer ini pertama kali dibuka pada pertengahan tahun 2017. Berlokasi di Jalan Kaliurang kilometer 22,5, Hargobinangun, Kecamatan Pakem, Kabupaten Sleman, Yogyakarta, Merapi Park sangat diminati oleh generasi milenial dan keluarga karena memiliki banyak spot foto yang menarik dan menakjubkan, sehingga seringkali menjadi tujuan utama bagi mereka yang ingin mengambil foto yang Instagramable.', 'Sleman'),
(4, 'Tebing Breksi', 'tebing_breksi.jpg', 'Dari Tebing Breksi ini kita bisa lihat pemandangan daerah Yogyakarta dan sekitarnya dengan jelas termasuk semua tempat-tempat ikoniknya lho... Mari pergi menanjak ke Tebing Breksi yang berada di Kabupaten Sleman. Bermula dari penambangan batu, siapa sangka kini pemandangan dari atas tebing-tebing yang super estetik ini tak tergambarkan dengan kata-kata. Ukiran-ukiran wayang di tebingnya pun betul-betul artistik. Salah satu tempat wisata di Yogyakarta ini pun jadi favorit wisatawan buat berfoto dengan spot kece berlatar tebing. Pokoknya, sayang banget kalau enggak kesini, Sobat Pesona!', 'Sleman'),
(5, 'Hutan Pinus Mangunan', 'hutan_pinus_magunan.jpeg', 'Kalau kalian butuh yang asri-asri di Yogya, coba ke Hutan Pinus Asri Mangunan yang terletak dekat Desa Wisata Tembi, Bantul. Di sini, ada banyak pohon pinus jenis merkusii yang  menjulang tinggi. Selain itu, terdapat juga spot-spot foto instagramable yang terbuat dari batang pohon atau kayu dan akan memenuhi postingan media sosial Sobat Pesona. Jangan lewatkan juga befoto di amphiteater  serba kayunya yang instagenic, mampir ke mata air Bengkung serta mengunjungi Gardu Pandang, tempat melihat pemandangan dari atas bukit. Wah, sejuknya enggak terbayangkan yah!', 'Bantul'),
(6, 'Taman Pelangi Jogja', 'taman_pelangi.jpg', 'Taman Lampion merupakan lokasi wisata yang tidak hanya cocok digunakan untuk wisata keluarga melainkan juga berwisata dengan pasangan. Terlebih dengan suasana malam hari yang romantis, maka Taman Lampion menjadi wisata yang cukup banyak direkomendasikan bagi pengunjung yang datang berpasangan. Tips bagi pengunjung yang ingin berwisata ke sana, sebaiknya menyiapkan kamera dengan kondisi baik untuk keperluan berswafoto. Di wisata malam di jogja ini, Anda bisa menemukan spot foto yang menarik mata sehingga cocok untuk mengabadikan momen-momen seru saat liburan di Jogja.', 'Sleman'),
(7, 'Obelix Hills', 'obelix_hills.jpg', 'Tempat wisata di Jogja terbaru memang tak ada habisnya. Obelix Hills adalah salah satunya. Tempat ini menawarkan spot foto yang Instagramable dan sangat cocok dikunjungi bagi kamu yang hobi fotografi. Keindahan pemandangan alam asri dan sunset Jogja yang dapat terlihat jelas dari tempat ini menjadi daya tarik bagi pengunjung. Obelix Hills terletak di sebelah tenggara Candi Prambanan dan termasuk ke dalam Shiva Plateau.', 'Sleman'),
(8, 'Hutan Mangrove Kulon Progo', 'hutan_mangrove.jpg', 'Rekomendasi tempat wisata Jogja yang lagi hits berikutnya yaitu Hutan Mangrove Kulon Progo. Di sini kamu bisa menikmati deretan pohon bakau (mangrove) yang indah. Selain itu kamu juga bisa berfoto di jembatan kayu dan ayunan. Atau kamu dapat menyusuri tepi pantai menggunakan perahu yang sudah disediakan sambil melihat ekosistem pantai seperti ikan dan kepiting. Jangan lupa untuk menikmati sunset yang cantik saat berkunjung ke Hutan Mangrove yang berada di Kulon Progo ini.', 'Kulon Progo'),
(9, 'HeHa Ocean View', 'heha_oceanview.jpg', 'Pantai selatan Jogja juga dapat dinikmati dari HeHa Ocean View. Di sini kamu bisa menikmati keindahan laut sambil berswafoto dan menikmati hidangan di restoran. HeHa Ocean View juga menyediakan fasilitas kabin dan glamping (glamorous camping) untuk pengunjung yang ingin menginap.', 'Gunung Kidul'),
(10, 'HeHa Sky View', 'heha_skyview.jpg', 'HeHa Sky View\r\nMemandang Kota Gudeg dari ketinggian bisa menjadi pilihan tempat wisata di Jogja terbaru. Di HeHa Sky View, kamu dapat menikmati keindahan lanskap Jogja dan langitnya. Di tempat ini, terdapat beberapa spot foto Instagramable dengan latar langit Jogja, seperti Sky Balloon, HeHa Aeroplane, Sky Swing, Macrame, dan Sky Glass. Untuk dapat berfoto di spot tersebut, pengunjung harus membayar biaya tiket tambahan.', 'Gunung Kidul'),
(11, 'Watu Payung', '1701508407.jpeg', 'Salah satu tempat wisata alam Jogja yang wajib dikunjungi adalah Watu Payung di Gunungkidul. Watu Payung menyuguhkan pesona pegunungan yang indah. Tempat ini banyak dikunjungi untuk melihat keindahan sunrise yang menakjubkan. Tips-nya, sebelum pergi kalian juga perlu memeriksa seperti apa cuaca di sana. Pasalnya, cuaca di daerah pegunungan dapat berubah dengan sangat cepat.', 'Gunung Kidul'),
(12, 'Ledok Sambi', '1701510327.jpeg', 'Ledok Sambi merupakan tempat wisata di Jogja bernuansa alam yang cocok menjadi destinasi wisata bersama keluarga. Lokasi Ledok Sambi berada di desa wisata samba tepatnya di jalan Kaliurang KM20, Pakem, kabupaten Sleman, Yogyakarta. Kawasan wisata ini letaknya di pinggir sebuah sungai atau lembah, jadi di sana detikers bisa piknik atau berkemah. Kita akan dimanjakan dengan hamparan di lembah Kali Kuning, dengan suasana sawah, ladang, sungai, serta rerumputan yang masih hijau. Ditambah, kita juga bisa menikmati mountain view puncak merapi.', 'Sleman'),
(13, 'Pantai Cangkring', '1701510857.jpeg', 'Pantai Cangkring adalah pantai pasir putih yang lokasinya berada di Kabupaten Bantul, DI Yogyakarta. Di sana, kamu bisa bersantai sambil menikmati pemandangan sunset, berfoto-foto, ataupun bermain pasir dan berjemur untuk sekedar menghilangkan penat. Jangan khawatir, di sekitar pantai juga banyak terdapat warung-warung makanan lokal. Untuk bisa memasuki pantai, pengunjung hanya dikenakan bayar retribusi parkir sebesar Rp 3.000 untuk motor, mobil pribadi Rp 5.000, dan bus Rp 10.000.', 'Bantul'),
(14, 'Jalan Malioboro', '1701510988.jpeg', 'Jelas saja tempat wisata di Jogja yang satu ini wajib ada di nomor 1. Kamu betul-betul belum ke Jogja namanya kalau enggak mampir atau paling enggak lewat Jalan Malioboro! Selain untuk beli oleh-oleh, kamu juga bisa makan-makan di area Malioboro. Apalagi kalau malam, banyak banget warung tenda berdiri di sini. Kalau kamu liburan ke Jogja dengan kereta, kamu bisa langsung berjalan kaki dari Stasiun Tugu Yogyakarta ke Jalan Malioboro karena lokasinya berseberangan. Apalagi kalau kamu tiba di sore hari. Duh, cocok banget untuk langsung isi perut di area Malioboro!', 'Kota'),
(15, 'Kraton Yogyakarta', '1701511067.jpeg', 'Jogja adalah sebuah Daerah Istimewa, yang dipimpin oleh seorang raja yaitu Sultan Hamengkubuwono X. Seorang raja tentu saja butuh istana, dan Kraton Yogyakarta adalah istananya. Sejarah panjang Kesultanan Yogyakarta pun bisa kamu lihat langsung di sini. Kamu bisa mengunjungi Kompleks Utama Kraton Yogyakarta yang dibuka untuk umum pada pukul 08.30 - 13.00 WIB, kecuali Jumat hanya sampai 11.00 WIB. Ada pemandu yang bisa menemanimu menjelajahi area Kraton. Tetapi kalau kamu ingin berjalan-jalan sendiri pun tak masalah. ', 'Kota'),
(16, 'Benteng Vredeburg', 'benteng_vredeburg.jpg', 'Museum ini ternyata menjadi salah satu objek wisata populer di Jogja yang banyak dikunjungi wisatawan lokal hingga wisatawan asing. Lokasinya yang berada di pusat Kota Yogyakarta, membuat Museum Benteng Vredeburg tak pernah sepi pengunjung. Sebagai informasi, Benteng Vredeburg merupakan sebuah benteng dengan gaya arsitektur Belanda yang dibangun menggunakan bata dan kayu pada masa kolonial. Tak hanya berdiri sebuah benteng, di Museum Benteng Vredeburg juga terdapat berbagai ruangan yang dulunya digunakan sebagai penjara, gudang mesin, dan ruang penyimpanan.', 'Kota'),
(17, 'Kalibiru', 'kalibiru.jpg', 'Dusun Kalibiru, Desa Hargowilis, Kecamatan Kokap, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta. Salah satu wisata Kulon Progo ini dilengkapi banyak sudut-sudut instagramable untuk para wisatawan.\r\n\r\nSpot favorit yang harus dan wajib dicoba adalah anjungan dengan latar Waduk Sermo di belakangnya. Namun diperlukan sedikit usaha untuk mencapai anjungan yang terletak di pohon ini.', 'Kulon Progo'),
(18, 'Kebun Teh Nglinggo', 'kebunteh_Nglinggo.jpg', 'Kebun teh Nglinggo Samigaluh akan lebih berkesan jika dinikmati di pagi atau malam hari. Saat kabut mulai memudar akan tampak beberapa tumbuhan Camellia Sinensis terhampar dengan cantiknya. Pemandangan matahari terbit dapat dilihat dari tiga puncak yang berada di sekitar kebun teh. Salah satu puncak tak bernama akan menyuguhkan pemandangan Candi Borobudur yang letaknya cukup jauh namun terlihat, kemudia puncak yang kedua adalah puncak Dempok yang tak kalah indah.', 'Kulon Progo'),
(19, 'Puncak Widosari', 'puncak_widosari.jpg', 'Puncak Widosari adalah titik tertinggi dari Bukit Widosari, kamu bisa melihat bentang alam indah nan asri. Tak perlu khawatir soal fasilitas di Puncak Widosari, sudah tergolong lengkap kok. Mulai dari musala, toilet umum, warung yang menyediakan aneka makanan dan minuman, sampai dengan penginapan. Jadi, kalau mau berburu kabut di pagi hari bisa lebih dulu menginap di penginapan sekitar. Yang lebih menyenangkan, di Puncak Widosari juga telah tersedia gardu pandang. Cocok banget buat bersantai sambil menikmati pemandangan indah.', 'Kulon Progo'),
(20, 'Kebun Bunga Matahari Pantai Glagah', 'kebunbungapantaiglagah.jpg', 'Lokasi objek wisata Taman Bunga Matahari pantai Glagah Kulon Progo berada di pantai Glagah, di Desa Temon, Kecamatan Wates, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta. Agar bisa mengakses jalan ke lokasi wisata, silahkan melewati TPR timur pantai Glagah. Kemudian lurus saja, nah di situ lah letak Taman Bunga Matahari. Hanya dengan dana sebesar Rp. 5.000 saja, pengunjung sudah bisa berswafoto sepuasnya di lokasi wisata. Asal benar-benar diperhatikan jangan sampai merusak atau bahkan menginjak bunga-bunga cantik tersebut.', 'Kulon Progo'),
(21, 'Air Terjun Kembang Soka', 'kembangsoka.jpg', 'Nama Kembang Soka disematkan untuk kawasan air terjun ini karena dahulu ada banyak pohon soka yang tumbuh di sini. Masyarakat sekitar pun memberi nama destinasi ini dengan bunga pohon itu. Meski masih alami, fasilitas penunjang wisata di sini sudah cukup lengkap. Memang sederhana, tetapi warung makan, toilet, kamar mandi, dan mushalla sudah layak untuk memfasilitasi pengunjung. Tiket masuk Air Terjun Kembang Soka hanya dibanderol sebesar Rp 6.000 saja.', 'Kulon Progo'),
(22, 'Alun-alun Kidul Jogja', 'alkid.jpeg', 'Alun-alun kidul/selatan Yogyakarta biasa di sebut warga Jogja dengan nama AlKid merupakan wilayah yang terletak di sebelah selatan Kraton Yogyakarta. Alun-alun Kidul menjadi ruang publik dengan berbagai macam kegiatan yang dapat dijumpai menjelang sore hingga malam hari. Alun-alun kidul juga menjadi salah satu wisata malam di Kota Jogja. Pengunjung Alun-alun Kidul terdiri dari berbagai macam tujuan, mulai dari yang berwisata keluarga, atau jalan-jalan bersama pasangan.', 'Kota'),
(23, 'Kebun Buah Mangunan', 'kebun_mangunan.jpeg', 'Kebun Buah Mangunan sudah terkenal sebagai destinasi wisata di Bantul, Yogyakarta yang banyak didatangi wisawatan karena ingin melihat keindahan pemandangannya. Destinasi wisata ini memiliki banyak sekali julukan. Mulai dari negeri di atas awan dan hingga surganya kebun buah. Ini berlokasi di atas ketinggian sekitar 200 mdpl dari atas permukaan tanah. Cuaca yang ada di Kebun Buah Mangunan juga terbilang sejuk. Jadi, bisa menyegarkan tubuh dan melepas penat dari kehidupan kota yang padat.', 'Bantul'),
(24, 'Taman Sari', 'taman_sari.png', 'Taman Sari merupakan situs bekas taman istana Keraton Ngayogyakarta Hadiningrat. Salah satu ikon yang menarik dari Taman Sari adalah kolam air yang dikelilingi oleh benteng. Pada zaman dahulu, kolam ini dipergunakan untuk mandi oleh istri-istri Sultan. Selain kolam air, di tempat ini juga terdapat kanal air, ruangan-ruangan, tempat beristirahat, dan tempat pengintaian. Dalam area Taman Sari terdapat sebuah terowongan yang konon bisa menjadi jalan pintas menuju laut selatan.', 'Kota'),
(25, 'Air Terjun Sri Gethuk', 'airterjun_srigethuk.jpeg', 'Air Terjun Sri Gethuk terkenal dengan debit airnya yang tidak pernah kering. Di bawah air terjun terdapat sebuah kolam alami yang bisa digunakan untuk berenang. Jika tidak bisa berenang, kamu bisa menyewa ban yang sudah disediakan. Air Terjun Sri Gethuk berada di tepi Sungai Oya meluncur bebas dari ketinggian 50 meter. Air terjun ini berasal dari Mata Air Ngandong, Dong Poh, dan Ngumbul. Selain berenang, kamu juga dapat berfoto dengan latar tebing batuan karst yang menawan.', 'Gunung Kidul'),
(26, 'Pintu Langit Dahromo', 'pintulangit_dahromo.jpg', 'Semakin banyaknya pengunjung yang mencari spot foto yang Instagramable telah mendorong bermunculannya tempat wisata dengan spot foto menarik. Salah satunya adalah Pintu Langit Dahromo yang berada di Kecamatan Dlingo, Kabupaten Bantul. Dinamai Pintu Langit Dahromo karena di tempat ini terdapat sebuah pintu yang terbuka yang seolah langsung mengarah ke langit. Menariknya, penataan kawasan wisata ini dibangun menggunakan limbah-limbah kayu tak terpakai.', 'Bantul'),
(27, 'Pantai Nglambor', 'pantai_nglambor.jpg', 'Selain Pantai Parangtritis yang sudah terkenal, Jogja masih memiliki banyak pantai lain yang tidak kalah cantiknya, lho! Salah satunya adalah Pantai Nglambor. Pantai Nglambor berhadapan langsung dengan Samudera Hindia sehingga ombaknya terkenal besar. Namun, di tepi pantai terdapat dua batu karang yang menyerupai kura-kura besar yang dinamai “Watu Kalong” dan “Watu Kuntul”. Batu karang besar ini cukup untuk memecah ombak sehingga pantai menjadi aman dikunjungi. Panorama ekosistem bawah laut di Pantai Nglambor ini juga terkenal sangat cantik sehingga cocok untuk menjadi tempat snorkeling.', 'Gunung Kidul'),
(28, 'Pantai Jogan', 'pantai_jogan.jpg', 'Posisi geografis Jogja yang berbatasan langsung dengan Samudera Hindia menjadikan wilayah ini memiliki banyak pantai. Selain Pantai Nglambor yang sudah dibahas sebelumnya, terdapat juga Pantai Jogan. Kedua pantai ini sama-sama terletak di Gunungkidul. Yang menarik dari Pantai Jogan adalah adanya air terjun yang berasal dari aliran dua sungai yang disebut Air Terjun Pengantin. Konon, jika mandi di bawah air terjun ini kamu akan cepat mendapat jodoh. Tertarik mencoba?', 'Gunung Kidul'),
(29, 'Puncak Becici', 'puncak_becici.jpg', 'Wisata alam ini memiliki hutan pinus seluas 4,4 hektar dengan alamnya yang masih alami dan hijau, udara yang masih segar dan hawa sejuk yang belum tercemar oleh polusi. Para pengunjung juga dapat merasakan ketenangan ditengah-tengah hutan pinus dan juga dapat memandangi keindahan alam dari gardu pandang. Yang terkenal dari Puncak Becici ini adalah panoramanya yang tak kalah indah dari Kali biru. Pengunjung dapat melihat deretan pohon hijau yang tumbuh dengan rapat dari ketinggian dengan latar belakang Gunung Merbabu dan Gunung Merapi.', 'Bantul'),
(30, 'Bukit Panguk Kediwung', 'bukit_panguk.jpg', 'Wisata ini sangat populer di kalangan anak muda karena memiliki banyak sekali spot yang instagramable. Bukit Panguk Kediwung sebenarnya merupakan wisata bukit yang memiliki panorama sangat indah dan menawan. Oleh pihak pengelola, tempat ini ditambahkan beberapa spot gardu pandang dengan desain yang unik. Dengan begitu, para pengunjung yang datang ke sini tidak hanya bisa menikmati pemandangannya yang menawan, tapi juga bisa berfoto dengan background yang instagramable.', 'Bantul');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(255) NOT NULL,
  `gambar_hotel` varchar(255) NOT NULL,
  `isi_hotel` text NOT NULL,
  `bintang_hotel` enum('Bintang 3','Bintang 4','Bintang 5') NOT NULL,
  `harga_hotel` varchar(255) NOT NULL,
  `link_hotel` varchar(255) NOT NULL,
  `wilayah_hotel` enum('Kota','Bantul','Kulon Progo','Sleman','Gunung Kidul') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `gambar_hotel`, `isi_hotel`, `bintang_hotel`, `harga_hotel`, `link_hotel`, `wilayah_hotel`) VALUES
(1, 'Hotel Tentrem Yogyakarta', 'hotel_tentrem.jpg', 'Hotel Tentrem Yogyakarta merupakan satu dari sekian banyak hotel bintang 5 yang sering menjadi andalan wisatawan yang berlibur di Kota Jogja. Terletak di Jalan AM Sangaji No. 72 A, Yogyakarta, hotel yang didesain dengan nuansa Jawa modern ini siap memanjakan tamu dengan fasilitas kelas satu.', 'Bintang 5', 'Rp 1.936.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=14-11-2023.15-11-2023.1.1.HOTEL.409746.Hotel%20Tentrem%20Yogyakarta.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxf', 'Kota'),
(2, 'Grand Diamond Hotel Yogyakarta', 'grand_diamond.jpeg', 'Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Grand Diamond Hotel Yogyakarta adalah pilihan yang tepat. Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang.', 'Bintang 4', 'Rp 1.135.555', 'https://www.traveloka.com/id-id/hotel/detail?spec=18-11-2023.19-11-2023.1.1.HOTEL.149155.Grand%20Diamond%20Hotel%20Yogyakarta.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dol', 'Sleman'),
(3, 'Regantris Malioboro', 'regantris.jpeg', 'Regantris Malioboro merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.', 'Bintang 3', 'Rp 970.428', 'https://www.traveloka.com/id-id/hotel/detail?spec=18-11-2023.19-11-2023.1.1.HOTEL.2000000217842.Regantris%20Malioboro.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxf', 'Kota'),
(4, 'Hotel Neo Malioboro by ASTON', 'hotel_neo_malioboro.jpeg', 'Hotel Neo Malioboro memiliki kriteria yang nyaman dan tenang untuk beristirahat di jantung Kota Yogyakarta. Fasilitasnya bermutu disertai layanan yang memuaskan. Anda tak perlu mengeluarkan banyak biaya untuk menginap di sini karena harga sewanya terjangkau.', 'Bintang 3', 'Rp 2.014.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=27-11-2023.28-11-2023.1.1.HOTEL.3000010007119.Hotel%20Neo%20Malioboro%20by%20ASTON.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySd', 'Kota'),
(5, 'Paku Mas Hotel', 'paku_mas_hotel.jpeg', 'Paku Mas Hotel adalah hotel dekat bandara Bandar Udara Internasional Adisutjipto (JOG) dan merupakan pilihan tepat untuk bermalam sambil menunggu jadwal penerbangan berikutnya. Dapatkan tempat untuk istirahat yang nyaman di tengah persinggahan sementara Anda.', 'Bintang 3', 'Rp 313.962', 'https://www.traveloka.com/id-id/hotel/detail?spec=27-11-2023.28-11-2023.1.1.HOTEL.3000010004913.Paku%20Mas%20Hotel.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiO', 'Kota'),
(6, 'INNSIDE by Melia Yogyakarta', 'innside.jpeg', 'Menginap di INNSIDE by Melia Yogyakarta tak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tapi juga menawarkan kenyamanan bagi istirahat Anda.', 'Bintang 4', 'Rp 692.750', 'https://www.traveloka.com/id-id/hotel/detail?spec=27-11-2023.28-11-2023.1.1.HOTEL.3000010039024.INNSIDE%20by%20Melia%20Yogyakarta.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe', 'Kota'),
(7, 'Sheraton Mustika Yogyakarta Resort & Spa', 'sheraton_mustika.jpeg', 'Sheraton Mustika Yogyakarta Resort & Spa adalah pilihan tepat bagi Anda yang ingin menghabiskan waktu dengan berbagai fasilitas mewah. Nikmati kualitas layanan terbaik dan pengalaman mengesankan selama menginap di hotel ini.', 'Bintang 5', 'Rp 1.179.751\r\n', 'https://www.traveloka.com/id-id/hotel/detail?spec=27-11-2023.28-11-2023.1.1.HOTEL.3000020001130.Sheraton%20Mustika%20Yogyakarta%20Resort%20%26%20Spa.1&contexts=%7B%22inventoryRateKey%22%3A%22EPSy2lMQRUbs4Z%2BpcPzDIQJS%2FRAEhuHYBZQl71KB9Kg%2BiqGLDk2uWjsyHU', 'Sleman'),
(8, 'Melia Purosani Yogyakarta', 'melia_purosani.jpeg', 'Berlokasi di pusat kota Yogyakarta. Beberapa langkah lagi Anda akan temukan tempat-tempat wisata utama Yogyakarta seperti yang ikonik Jalan Malioboro, Pasar Beringharjo dan Keraton Yogyakarta.', 'Bintang 5', 'Rp 1.266.500', 'https://www.traveloka.com/id-id/hotel/detail?spec=27-11-2023.28-11-2023.1.1.HOTEL.168.Melia%20Purosani%20Yogyakarta.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfji', 'Kota'),
(12, 'Yogyakarta Marriott Hotel', '1701511956.jpeg', 'Yogyakarta Marriott Hotel terhubung langsung dengan Pakuwon Mall Jogja, pusat perbelanjaan terbesar di Yogyakarta. Hotel ini berada di lokasi strategis Jl. Ring Road Utara, menawarkan akses yang mudah ke semua tujuan perjalanan anda di Yogyakarta, termasuk Candi Prambanan, Candi Borobudur, Kraton Yogyakarta, dan Jalan Malioboro.', 'Bintang 5', 'Rp 1.403.600', 'https://www.traveloka.com/id-id/hotel/detail?spec=03-12-2023.04-12-2023.1.1.HOTEL.3000020003297.Yogyakarta%20Marriott%20Hotel.1&contexts=%7B%22inventoryRateKey%22%3A%22EPSy2lMQRUbs4Z%2BpcPzDIQJS%2FRAEhuHYBZQl71KB9Kg%2BiqGLDk2uWjsyHUapF7H3WsIkBdgyaCd6cEzZv', 'Kota'),
(13, 'Lafayette Boutique Hotel', '1701512409.jpeg', 'Desain dan arsitektur menjadi salah satu faktor penentu kenyamanan Anda di hotel. Lafayette Boutique Hotel menyediakan tempat menginap yang tak hanya nyaman untuk beristirahat, tapi juga desain cantik yang memanjakan mata Anda.', 'Bintang 5', 'Rp 893.365', 'https://www.traveloka.com/id-id/hotel/detail?spec=03-12-2023.04-12-2023.1.1.HOTEL.3000010014429.Lafayette%20Boutique%20Hotel.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolT', 'Sleman'),
(14, 'The Rich Jogja Hotel', '1701512665.jpeg', 'Dapat dicapai dalam 15 menit berkendara dari Jalan Malioboro, jalan perbelanjaan utama di Yogyakarta, The Rich Jogja Hotel bintang 4 ini menyediakan kamar-kamar modern dengan WiFi gratis. Fasilitas hotel meliputi spa, gym, dan kolam renang outdoor. ', 'Bintang 4', 'Rp 535.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=03-12-2023.04-12-2023.1.1.HOTEL.3000010000813.The%20Rich%20Jogja%20Hotel.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU0EQyXUDrrTvnasVAw0smVlM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIe', 'Sleman'),
(15, 'Grand Tjokro Yogyakarta', '1701512894.jpeg', 'Grand Tjokro Yogyakarta merupakan pilihan tepat saat mengunjungi Sleman. Kombinasi ideal antara harga, kenyamanan, dan kepraktisan, tempat ini menawarkan suasana yang menawan dengan fasilitas yang di desain untuk wisatawan seperti Anda.', 'Bintang 4', 'Rp 622.638', 'https://www.traveloka.com/id-id/hotel/detail?spec=03-12-2023.04-12-2023.1.1.HOTEL.443756.Grand%20Tjokro%20Yogyakarta.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfj', 'Sleman'),
(16, 'Cakra Kusuma Hotel', '1701513025.jpeg', 'Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, Cakra Kusuma Hotel adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.', 'Bintang 3', 'Rp 363.400', 'https://www.traveloka.com/id-id/hotel/detail?spec=03-12-2023.04-12-2023.1.1.HOTEL.149193.Cakra%20Kusuma%20Hotel.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU0EQyXUDrrTvnasVAw0smVlM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7dolTIewZlxfjiOGz6', 'Sleman'),
(17, 'Royal Malioboro by ASTON', '1701513203.jpeg', 'Menginap di Royal Malioboro by ASTON saat anda sedang berada di Jalan Malioboro adalah sebuah pilihan cerdas. Lokasi hotel sangat strategis karena hanya berjarak 7,43 km dengan Bandar Udara Internasional Adisutjipto (JOG). Dari Stasiun Tugu Yogyakarta, hotel ini hanya berjarak sekitar 0,08 km. Hotel ini cukup mudah dijangkau karena berdekatan dengan fasilitas publik.', 'Bintang 4', 'Rp 1.650.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=03-12-2023.04-12-2023.1.1.HOTEL.9000000927698.Royal%20Malioboro%20by%20ASTON.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8YdqqIySdppe7do', 'Kota'),
(18, 'ibis Yogyakarta International Airport Kulon Progo', 'ibis_kp.jpg', 'ibis Yogyakarta International Airport Kulon Progo adalah hotel Accor pertama di Kulon Progo, Daerah Istimewa Yogyakarta. Memiliki 216 kamar, ruang pertemuan, restoran buka sepanjang hari, spa, serta pojok web. Berlokasi strategis dekat Bandara Internasion al Yogyakarta, serta memiliki pemandangan indah Pantai Glagah yang memukau dan Bukit Menoreh yang menakjubkan. ', 'Bintang 3', 'Rp 500.335', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.9000001153245.ibis%20Yogyakarta%20International%20Airport%20Kulon%20Progo.1&contexts=%7B%22inventoryRateKey%22%3A%22nlhdC7VIRS8%2Fg2zTQbk8oDBmKeOA09oJqLJIF6F5Rw%2BZ%2FcQOiNr', 'Kulon Progo'),
(19, 'Novotel Yogyakarta International Airport Kulon Progo', 'novotel_kp.jpeg', 'Sebagai hotel kelas menengah pertama Accor di Kulon Progo, Novotel Yogyakarta International Airport Kulon Progo memiliki 194 kamar berdesain modern. Menawarkan berbagai fasilitas, termasuk ruang pertemuan, ballroom, restoran bersantap sepanjang hari, bar, kolam renang, pusat kebugaran, dan spa. ', 'Bintang 4', 'Rp 650.375', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.9000002293311.Novotel%20Yogyakarta%20International%20Airport%20Kulon%20Progo.1&contexts=%7B%22inventoryRateKey%22%3A%22nlhdC7VIRS8%2Fg2zTQbk8oDBmKeOA09oJqLJIF6F5Rw%2BZ%2FcQO', 'Kulon Progo'),
(20, 'Grand Dafam Signature International Airport Yogyakarta', 'grand_dafam.jpg', 'Terletak di Temon, 39 km dari Museum Sonobudoyo, Grand Dafam Signature International Airport Yogyakarta menawarkan akomodasi dengan tempat fitness lengkap, parkir pribadi, taman, dan teras. Hotel bintang 4 ini menawarkan layanan antar jemput gratis dan layanan kamar. Anda dapat menikmati minuman di bar atau makanan di restoran.', 'Bintang 5', 'Rp 708.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.9000001042090.Grand%20Dafam%20Signature%20International%20Airport%20Yogyakarta.1&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNU', 'Kulon Progo'),
(21, 'Ros In Hotel', 'ros_in.jpg', 'Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Ros In Hotel adalah pilihan yang tepat. Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang.', 'Bintang 4', 'Rp 650.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.3000010000270.Ros%20In%20Hotel.1', 'Bantul'),
(22, 'Adhisthana Hotel Yogyakarta', 'adhistana.jpeg', 'Adhisthana Hotel Yogyakarta merupakan hotel rekomendasi untuk Anda, seorang backpacker yang tak hanya mengutamakan bujet, tapi juga kenyamanan saat beristirahat setelah menempuh petualangan seharian penuh.', 'Bintang 3', 'Rp 1.332.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.1000000551735.Adhisthana%20Hotel%20Yogyakarta.1', 'Bantul'),
(23, 'The Grand Palace Hotel Yogyakarta', 'grand_palace.jpg', 'Bagi Anda yang menginginkan kualitas pelayanan oke dengan harga yang ramah di kantong, The Grand Palace Hotel Yogyakarta adalah pilihan yang tepat. Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang tetap terjaga mutunya.', 'Bintang 3', 'Rp 758.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.186716.The%20Grand%20Palace%20Hotel%20Yogyakarta.1', 'Bantul'),
(24, 'KJ Hotel Yogyakarta', 'kj_hotel.jpeg', 'Desain dan arsitektur menjadi salah satu faktor penentu kenyamanan Anda di hotel. KJ Hotel Yogyakarta menyediakan tempat menginap yang tak hanya nyaman untuk beristirahat, tapi juga desain cantik yang memanjakan mata Anda.', 'Bintang 4', 'Rp 759.770', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.3000010028636.KJ%20Hotel%20Yogyakarta.1', 'Bantul'),
(25, 'Hotel Santika Gunungkidul Yogyakarta', 'hotel_santika.jpg', 'Hotel Santika Gunungkidul Yogyakarta adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Dengan fasilitas yang memadai, Hotel ini menjadi pilihan yang tepat untuk menginap.', 'Bintang 4', 'Rp 594.000', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.9000001069861.Hotel%20Santika%20Gunungkidul%20Yogyakarta.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU13LUNuufACdbU0usK5vg0dM0tKsNUio4Rxug1zOzHJilcvZa8Yd', 'Gunung Kidul'),
(26, 'Giri Wanara Glamping Resort', 'giri_wanara.jpg', 'Menginap di Giri Wanara Glamping Resort tak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tapi juga menawarkan kenyamanan bagi istirahat Anda.', 'Bintang 3', 'Rp 946.800', 'https://www.traveloka.com/id-id/hotel/detail?spec=09-12-2023.10-12-2023.1.1.HOTEL.9000000958636.Giri%20Wanara%20Glamping%20Resort.2&contexts=%7B%22inventoryRateKey%22%3A%22povEwB3ZzsU2C6pd%2B6MdU%2B0DXZ%2BT%2Bqw8uON7NhQf%2Ft5M0tKsNUio4Rxug1zOzHJilcvZa8Ydq', 'Gunung Kidul');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(255) NOT NULL,
  `gambar_kuliner` varchar(255) NOT NULL,
  `isi_kuliner` text NOT NULL,
  `harga_kuliner` varchar(255) NOT NULL,
  `wilayah_kuliner` enum('Kota','Bantul','Kulon Progo','Sleman','Gunung Kidul') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama_kuliner`, `gambar_kuliner`, `isi_kuliner`, `harga_kuliner`, `wilayah_kuliner`) VALUES
(1, 'Gudeg Yu Djum', 'gudeg_yudjum.jpg', 'Gudegnya tidak berkuah dan rasanya dominan manis. Gudeg Yu Djum ini paling legendaris di Jogja. Cabangnya banyak, tetapi dapur utamanya terletak di Mbarek dan buka dari jam 5 pagi. Kita bisa melihat proses memasaknya yang masih menggunakan kayu bakar.', 'Rp 20.000', 'Kota'),
(2, 'The House Of Raminten', 'raminten.jpg', 'The House of Raminten adalah salah satu restoran legendaris dan sangat populer di Jogja. Tempat wisata kuliner di Jogja ini terkenal dengan nuansa Jawa-nya yang kental. Mulai dari arsitektur bangunan, dekorasi, hingga seragam para pelayan memiliki desain khas Jawa yang menarik pengunjung. The House of Raminten menyajikan beragam sajian yang tidak hanya nikmat tetapi juga cukup terjangkau harganya. Tempat wisata malam kuliner Jogja ini buka 24 jam.', 'Rp 15.000', 'Kota'),
(3, 'Bakmi Jawa Pak Pele', 'bakmi_pakpele.jpg', 'Salah satu restoran legendaris yang menyajikan hidangan ini ialah Bakmi Jawa Pak Pele. Tempat wisata kuliner di Jogja yang satu ini sangat populer dan tidak pernah sepi pengunjung. Bahkan banyak orang rela mengantri untuk menikmati kelezatan hidangan bakmi jawa di Pak Pele ini. Para pengunjung dapat memilih hidangan bakmi goreng, bakmi godhog (rebus) ataupun bakmi nyemek sesuai dengan selera dan kesukaannya. Para pengunjung juga dapat memilih jenis mie yang terdiri dari bakmi kuning ataupun bakmi bihun. Bakmi Pak Pele sendiri terkenal dengan ciri khasnya menggunakan telur bebek sebagai pelengkap. Bakmi Jawa Pak Pele ini buka dari jam setengah 5 sore hingga jam 11 malam.', 'Rp 20.000', 'Kota'),
(4, 'Soto Sampah Jogja', 'soto_sampah.jpg', 'Disebut Soto Sampah karena memang mengandung rempah-rempah dan campuran di dalam soto yang beragam dan mirip sampah. Dalam satu porsinya, piring kamu akan penuh berisi dengan toge, kol, bihun, gajih sapi, juga siraman kuah soto yang mantab. Meskipun tampilannya terkesan acak-acakan, tapi saat kamu mencobanya dijamin akan susah untuk berhenti mengunyah. Meski namanya tidak menggugah selera, soto ini punya cita rasa akan memanjakan lidah. Tempat wisata kuliner di Jogja ini buka mulai dari pukul 7 pagi hingga setengah 3 pagi. ', 'Rp 10.000', 'Kota'),
(5, 'Bakpia Pathok 25', 'bakpia_pathok25.jpg', 'Bakpia Pathok 25 adalah salah satu produsen bakpia yang cukup terkenal di Yogyakarta, Indonesia. Sejarah toko ini berasal dari nama jalan tempatnya berada, yakni Jalan Pathok 25. Bakpia Pathok 25 telah berdiri sejak tahun 1979 dan memiliki sejarah yang panjang sebagai produsen bakpia tradisional. Bakpia Pathok juga memiliki berbagai rasa yang berbeda, termasuk rasa kacang hijau, kacang tanah, cokelat, dan berbagai pilihan rasa lainnya. Bakpia Pathok Jogja telah menjadi oleh-oleh khas yang populer di kota ini. Kue ini sering dibeli sebagai oleh-oleh oleh wisatawan yang berkunjung ke Jogja karena rasanya yang enak dan variasi rasa yang banyak. ', 'Rp 40.000', 'Kota'),
(6, 'Sate Klatak Pak Bari', 'sate_klatak.jpeg', 'Warung Sate Klatak Pak Bari adalah salah satu tempat wisata kuliner di Jogja yang terkenal dan populer. Sate klathak sendiri adalah sate kambing yang disajikan dengan tusuk jeruji besi, bukan kayu. Tusuk yang terbuat dari jeruji ini membuat tingkat kematangan sate tersebut menjadi lebih merata. Sate Klatak Pak Bari buka pada pukul 17.30 sore hingga pukul 01.00 dini hari membuatnya cocok kamu kunjungi untuk menikmati indahnya suasana malam kota Jogja.', 'Rp 20.000', 'Bantul'),
(7, 'Mangut Lele Mbah Marto', 'mangut_lele.jpg', 'Mangut lele merupakan salah satu bagian dari kekayaan kuliner khas Jogja yang sudah ada sejak jaman dahulu. Mangut lele adalah masakan olahan berbahan dasar ikan lele yang disiram dengan kuah santan yang pedas. Dulunya, hidangan ini selalu disajikan sebagai hidangan utama bagi raja-raja Keraton. Cara pengolahan lele yang dibakar atau diasapi sebelum dicampur dengan kuah santannya menjadi kunci masakan Mangut Lele Mbah Marto sangat enak. Aroma lele yang sangat khas bercampur dengan kuah santan yang pedas menjadi perpaduan yang sangat pas. Karena mengusung konsep “Open Kitchen”, saat Anda datang pertama kali ke Mangut Lele Mbah Marto, akan melihat bagaimana proses memasak semua menu di warung makan ini. Alat memasaknya yang masih sangat sederhana yaitu menggunakan tungku kayu bakar dan juga akan terlihat dinding yang hitam akibat kepulan asap dari aktivitas memasak di dapur ini.', 'Rp 25.000', 'Bantul'),
(8, 'Kampoeng Matraman', 'kampoeng_matraman.jpg', 'Meski namanya Kampoeng Matraman, tempat ini bukanlah sebuah kampoeng namun sebuah tempat makan yang unik. Sembari makan pengunjung juga bisa sambil belajar nilai-nilai sejarah kerajaan Mataram karena penataan ruangan dan bangunannya mengambil dari konsep kerajaan Mataram. Menu yang disajikan Kampoeng Matraman beragam mulai dari sayur lodeh, oseng genjer, oseng kembang gedang, tempe goreng garit, mangut lele, dan lain-lain.', 'Rp 15.000', 'Bantul'),
(9, 'Sego Godhog Pak Pethel', 'sego_godhog.jpg', 'Sego godhog Pak Pethel adalah salah satu kuliner legendaris di Jogjakarta yang sudah tidak diragukan lagi sedapnya. Warung ini sudah ada sejak tahun 1986, kemudian pada 1990 tercetuslah menu sego godhog dimana kala itu harga seporsi Rp. 125. Sego godhog Pak Pethel memiliki kesamaan dengan bakmi godhog, yang membedakan adalah terdapat nasi di dalamnya. Sego godhog buatan Pak Pethel ini terdiri dari nasi, bihun, daging ayam, telur serta sayur. Jika Anda ingin meredakan masuk angin, pilihlah sego godhog pedas, perpaduan kuah panas yang ekstra pedas dipercaya dapat mengusir masuk angin.', 'RP 15.000', 'Bantul'),
(10, 'Gudeg Bromo Bu Tekluk', 'gudeg_bromo.jpg', 'Tempat wisata kuliner di Jogja yang juga terkenal dengan sajian gudegnya adalah Gudeg Bromo Bu Tekluk. Warung yang telah buka sejak tahun 1984 ini menyajikan gudeg basah yang disiram areh gurih ditemani oleh sambal krecek pedas dan berbagai lauk tambahan yang dapat dipilih oleh para pengunjung seperti ayam suwir, telur bacem, tahu, tempe, ceker hingga kepala ayam. Krecek yang digunakan oleh warung ini juga berbeda dengan yang lainnya. Jika biasanya sambal krecek terbuat dari daging sapi, di sini sambal krecek diolah dari kulit daging kerbau sehingga tidak mudah hancur saat dimasak.', 'Rp 20.000', 'Sleman'),
(11, 'Soto Bathok Mbah Karto', 'soto_bathok.jpg', 'Soto Bathok Mbah Karto adalah salah satu destinasi kuliner wajib dikunjungi saat Anda berada di Jogja, soto legendaris yang satu ini mulai tahun 2015 silam. Bangunan warung ini sendiri masih sangat tradisional dengan banyak ornamen bambu dan lantainya yang langsung ke tanah. Sesuai namanya, penyajian soto bathok ini menggunakan mangkuk yang terbuat dari batok kelapa dan juga piring gerabah. Soto ini memiliki kuah bening dan berisikan potongan daging sapi, tauge, bihun, dan kubis yang dicampur ke dalam kuah. Makanan yang satu ini cocok disantap di pagi hari untuk sarapan sembari menikmati pemandangan sawah yang membentang di sekitar area warung. Soto Bathok Mbah Karto hanya memiliki dua varian menu yaitu soto campur dan soto pisah.\r\n', 'Rp 10.000', 'Sleman'),
(12, 'SGPC Bu Wiryo', 'sgpc_buwiryo.jpg', 'Warung Sego Pecel Bu Wiryo memiliki banyak pelanggan dari berbagai kalangan, terutama mereka yang beraktivitas atau memiliki ikatan historis dengan kampus UGM. Layaknya warung sego pecel pada umumnya yang menyediakan menu sego pecel dan beberapa pilihan lauk lainnya. Namun rasa bumbu pecel yang diberikan warung bu wiryo ini cukup berbeda dan membuatnya spesial. Bumbu pecel di warung bu wiryo memiliki teksture yang cenderung encer namun tekstur kacang masih terasa kasar. Rasa yang diberikan pun merupakan perpaduan rasa manis gurih yang bercampur sedikit pedas. Sehingga sangat nikmat jika dicampur dengan sayuran segar. Harga Sego pecel di sini juga bersahabat dengan mahasiswa alias murah.', 'Rp 20.000', 'Sleman'),
(13, 'Kopi Klotok Kaliurang', 'kopi_klotok.jpeg', 'Warung Kopi Klotok merupakan salah satu tempat kuliner favorit di Jogja, banyak wisatawan yang mampir di warung ini setelah menikmati liburan di Jogja. Sesampai di Kedai Kopi Hits Jogja wisatawan akan disambut desain tempat yang cukup sederhana dengan nuansa tradisional berupa Rumah Joglo dengan furniture kuno di dalamnya, namun siapa yang berkunjung di sini akan terasa hangat. Lokasi Warung Kopi Klotok yang berada di area persawahan tentunya akan menyajikan suasana yang menyejukkan. Kopi Klotok Jogja dibuka mulai pukul 07.00 hingga pukul 22.00 WIB pada setiap harinya', 'Rp 10.000', 'Sleman'),
(14, 'Geblek Menoreh', 'geblek_menoreh.jpg', 'Rekomendasi tempat makan enak di Kulon Progo selanjutnya adalah Geblek Menoreh View. Lokasinya tidak jauh dari jalan viral Nanggulan Kulon Progo. Berbagai menu angkringan sederhana seperti nasi kucing, dan sate-satean bisa Anda coba di sini. Tidak ketinggalan snack khas Kulon Progo seperti geblek, mendoan, dan pisang siap menemani Anda. Semua semakin sempurna dengan panorama indah yang terlihat dari lokasi ini.\r\n', 'Rp 10.000', 'Kulon Progo'),
(15, 'Kopi Ingkar Janji', 'kopi_ingkarjanji.jpg', 'Pemandangan yang tidak kalah apik juga bisa Anda dapatkan saat mengunjungi Kopi Ingkar Janji. Lokasinya pun masih berdekatan dengan Kopi Ampirono dan selalu ramai. Perbukitan yang menjadi perbatasan antara Kulon Progo dan Purworejo bisa terlihat dengan jelas. Semua semakin cantik dengan keberadaan jalan yang membelah sawah, persis gambar pemandangan saat kecil dulu. Tempat ini juga memiliki banyak spot menarik untuk berfoto seperti kolam air, tugu Jogja mini, dan masih banyak lagi. Suasananya pun nyaman dengan konsep outdoor yang seru. Menu yang tersedia juga beragam tidak hanya kopi saja, ada camilan seperti geblek, makanan khas Kulon Progo favorit serta lainnya', 'Rp 15.000', 'Kulon Progo'),
(16, 'Geblek Pari Nanggulan', 'geblek_parinanggulan.jpg', 'Geblek Pari Nanggulan tersedia menu kuliner tradisional yang bisa kamu pilih untuk memanjakan perutmu. Makanan ala ndeso dengan harga yang murah tentu menjadi favorit bagi semia kalangan. Tidak perlu budget yang besar untuk dapat menikmati sajian kuliner nikmat di warung hits ini. Hadirnya warung Geblek Pari di Nanggulan ini menjadi kabar baik bagi para pecinta kopi dan kuliner. Dengan begitu ada referensi baru untuk menikmati masa liburan dengan cara nongkrong dan menikmati sajia kuliner nikmat.', 'Rp 10.000', 'Kulon Progo'),
(17, 'Pawon Purba', 'pawon_purba.jpg', 'Sebagai tujuan wisata kuliner pengunjung yang datang ke Nglanggeran, Pawon Purba menghadirkan nuansa tradisional lewat menu-menu lokal. Tak hanya menu makanan saja yang tradisional. Sajian pun diolah menggunakan alat tradisional, seperti tungku dan kayu bakar sebagai alat masaknya. Sayur lombok ijo, telur dadar krispi, pisang goreng, singkong, dan berbagai olahan tiwul (nasi) menjadi menu favorit pengunjung pawon. Ada pula belalang goreng khas Gunungkidul yang tersedia dalam dua varian rasa, yakni bumbu bacem dan bumbu bawang.\r\nSementara untuk minuman, ada wedang empon-empon dan cokelat Nglanggeran yang direkomendasikan langsung oleh pengelola.\r\n', 'Rp 15.000', 'Gunung Kidul'),
(18, 'Taman Watu Cafe dan Resort', 'tamanwatu_cafe.jpg', 'Pemandangan laut yang biru terlihat paling cantik dari dataran tinggi. Taman Watu Cafe dan Resort memberikan pengalaman tidak terlupakan untuk menikmati makanan di antara batu tebing dan pemandangan laut di bawahnya. Menawarkan menu seafood dan hidangan kekinian lainnya, restoran satu ini tergolong terjangkau meski pengunjung mendapat pengalaman premium. ', 'Rp 20.000', 'Gunung Kidul'),
(19, 'Warung Si Mbok', 'warung_simbok.jpg', 'Bangunan rumah makan Warung Simbok tidak terlalu besar dan tidak terlalu luas. Saat masuk, karyawan yang bertugas akan langsung menghampiri dan menanyakan menu yang akan dipesan. Terdiri dari tempat duduk lesehan dan tempat duduk dengan meja-kursi. Di bagian depan, pengunjung akan bisa melihat ke arah jalan raya. Sedangkan di bagian belakang, ada lukisan-lukisan dinding yang membuat ruangan lebih menarik untuk pengunjung. Suasana di dalam sejuk dan tidak panas. Pengunjung yang pernah datang ke rumah makan ini mengatakan bahwa tempat ini nyaman karena lokasinya strategis, makanan enak, dan harganya yang terjangkau.', 'Rp 20.000', 'Gunung Kidul'),
(20, 'Pondok Griyo Wono', 'pondok_griyono.jpg', 'Rumah makan Pondok Makan Lesehan Griyo Wono selalu ramai saat hari libur atau liburan sekolah. Karena lokasinya dekat dengan pantai Kukup dan Krakal sehingga setelah lelah menikmati perjalanan atau wisata di sekitar pantai kemudian makan dengan lahap di tempat makan ini. Pondok Makan Lesehan Griyo Wono juga menyediakan pilihan tempat makan dengan meja dan kursi dengan suasana rumah joglo dan juga ada yang lokasinya dekat dengan jalan raya sehingga pengunjung bisa menikmati makanan sambil menikmati suasana alam sekitarnya. Salah satu menu andalan di Pondok Makan Lesehan Griyo Wono adalah nasi goreng khas Jawa. Nasi goreng ini terbuat dari nasi yang digoreng bersama dengan bahan-bahan seperti telur, sayuran, dan daging sapi atau ayam. Rasa nasi goreng di sini sangat kuat dan gurih, disajikan dengan acar dan sambal yang pedas.\r\n\r\n\r\n', 'Rp 20.000', 'Gunung Kidul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
