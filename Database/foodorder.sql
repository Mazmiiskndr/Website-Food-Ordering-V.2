-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 19.31
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `nama_perusahaan`, `no_hp`, `email`, `judul`, `deskripsi`) VALUES
(1, 'Foods Ordering', '62+ 82295153183', 'azmiiskandar0@gmail.com', 'Important to eat fruit', 'Eating fruit provides health benefits — people who eat more fruits and vegetables as part of an overall healthy diet are likely to have a reduced risk of some chronic diseases. Fruits provide nutrients vital for health and maintenance of your body.\r\n\r\nFruits are sources of many essential nutrients that are underconsumed, including potassium, dietary fiber, vitamin C, and folate (folic acid).\r\n\r\nMost fruits are naturally low in fat, sodium, and calories. None have cholesterol.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `nama_rekening`, `nomor_rekening`) VALUES
(1, 'Mandiri', 'Moch Azmi Iskandar', '177-000-660-547-8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `subject`, `deskripsi`) VALUES
(1, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'Design nya ', 'dasdsaassdsadsadas'),
(2, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'dasd', 'dsadsdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foods`
--

CREATE TABLE `foods` (
  `id_foods` int(11) NOT NULL,
  `id_restoran` int(11) NOT NULL,
  `nama_foods` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` float NOT NULL,
  `gambar_foods` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foods`
--

INSERT INTO `foods` (`id_foods`, `id_restoran`, `nama_foods`, `deskripsi`, `harga`, `gambar_foods`) VALUES
(1, 8, 'Grilled Cheese Sandwich', 'Grilled cheese sandwich or grilled cheese is a hot sandwich made with more varieties of cheese cooked on the grill long enough for the cheese to melt a little and the bread to get brown and a little crispy. Grill until lightly browned and flip over; conti', 70000, 'Sandwich.jpg'),
(2, 9, 'Turkey Fajitas', 'Enjoy delicious Mexican food with this smoky BBQ turkey fajitas recipe from Giulia Restro to finish up turkey leftovers or just to make a tasty dinner! just give it a kick with picante sauce, peppers and onions, all wrapped up in a flour tortilla.', 20000, 'Foods.jpg\r\n'),
(6, 7, 'Hot Dog', 'Whole cured, cooked sausage that is skinless or stuffed in a casing, that may be known as a frankfurter, frank, furter, wiener, red hot, vienna, bologna, garlic bologna, or knockwurst, and that may be served in a bun or roll', 15000, 'HotDog2.jpg'),
(7, 10, 'Ham Burger', 'Sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The patty may be pan fried, grilled, smoked or flame broiled. The Epic Ham and Cheese Stuffed Bacon Burger is hands down the best', 50000, 'Burger2.jpg'),
(8, 6, 'Detroit Style Pizza', 'A thick, square-cut pizza with a crunchy, fried bottom layer of crust overflowing with delicious melted cheese. The result of this unique pizza style is a gooey, doughy center with a crunchy outer crust and caramelized cheese hugging its edges.', 150000, 'Pizza2.jpg'),
(9, 6, 'Spaghetti Carbonara', 'Just spaghetti and the carbonara is made with pancetta or bacon, eggs, Parmesan, a little olive oil, salt and pepper. The silky carbonara sauce is created when the beaten eggs are tossed with the hot pasta and a little fat from the pancetta or bacon.', 65000, 'Spagetti.jpg'),
(11, 5, 'Pasta allArrabbiata', 'Pasta Arrabiata literally means &quot;angry pasta&quot; in Italian. Arrabiata sauce (sugo all\'arrabbiata) is a spicy (angry) tomato sauce that\'s made with plenty of olive oil, garlic, chopped tomatoes, and red pepper flakes to provide the heat.', 45000, 'pasta.jpg'),
(12, 5, 'Toasted Ravioli', 'The crunchy pasta, dusted with grated Parmesan cheese and dunked in a marinara-style sauce, makes a delicious hot appetizer. the ravioli is deep-fried, not toasted, and like many culinary discoveries, the first batch was the result of an accident.', 75000, 'Untitled-1.jpg'),
(13, 11, 'Nasi Cikur Khas Makanan Sunda', 'Perpaduan rasa dan aroma kencur yang khas, dengan pedas dan gurih bumbu lainnya bikin Nasi Cikur Khas Tasikmalaya sedap disantap seluruh anggota keluarga. Resep makanan Indonesia dengan kencur ini juga bisa bantu menambah imun tubuh keluarga selama puasa lho, Bu.', 35000, 'Cikur.jpg'),
(14, 11, 'Nasi T.O Khas Tasikmalaya', 'Dalam bahasa setempat tutug artinya \'ditumbuk\'. Karena itu nasi tutug oncom adalah nasi yang dicampur oncom tumbuk. Nasi TO, demikian makanan ini biasa disebut, harus disajikan dalam kondisi hangat. Perpaduan rasa gurih, asin, dan pulen, terasa saat nasi ini dikunyah di mulut.', 15000, 'To.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restoran`
--

CREATE TABLE `restoran` (
  `id_restoran` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_restoran` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `buka_restoran` varchar(255) NOT NULL,
  `tutup_restoran` varchar(255) NOT NULL,
  `o_days` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `restoran`
--

INSERT INTO `restoran` (`id_restoran`, `id_kategori`, `nama_restoran`, `email`, `no_hp`, `buka_restoran`, `tutup_restoran`, `o_days`, `url`, `alamat`, `gambar`) VALUES
(5, 4, 'Treehouse Restro', 'treehsr@gmail.com', '1-245-785-4101	', '20:00', '22:00', 'Senin-Rabu', '', '2902 Benson Park Drive Mangkubumi Tasikmalaya', 'ThreeHouse.jpg'),
(6, 3, 'Giulia Restro', 'gr69stro@gmail.com', '1-555-555-5555', '10:00', '21:00', 'Senin-Sabtu', '', 'Tasikmalaya,kawalu,perun griya mitra batik E148', 'GuliaRe.jpg'),
(7, 7, 'Vernick Restro', 'vernic@gmail.com', '1-567-567-8888', '10:00', '19:00', 'Senin-Sabtu', '', '1812 Fleming Street Tasikmalaya BKR', 'verni2.jpg'),
(8, 10, 'Artisan Bar &amp; Grill', 'grilltisan@gmail.com', '1-222-333-7878', '11:00', '08:00', 'Senin-Jumat', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 'bar.jpg'),
(9, 16, 'Highland Restaurant', 'highland@gmail.com', '1-245-485-3213', '10:00', '21:00', 'Senin-Kamis', 'highlandrestro.com', 'Tasikmalaya, Jl. Haji Jaenal Mustofa No. 142, Samping Asia Plaza', 'Highland.jpg'),
(10, 7, 'Alchemist Restaurant', 'alchemist@gmail.com', '1-423-3213-666', '08:00', '19:00', '24Jam - x7', '', 'Tasikmalaya, Indihiang Jl. Letna Sudiarjo No. 169. Samping Transmart Studio', 'Alchemist.jpg'),
(11, 14, 'Restoran Sunda', 'sunda@gmail.com', '085-213-353-5324', '09:00', '20:00', '24Jam - x7', 'sunda.com', 'Tasikmalaya, Jl. BKR No. 47 Depan tempat futsal ', 'restoransunda.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `res_kategori`
--

CREATE TABLE `res_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `res_kategori`
--

INSERT INTO `res_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Centinental'),
(3, 'Chinese'),
(4, 'Desserts'),
(7, 'American'),
(8, 'Vegan'),
(10, 'Drinks'),
(11, 'Boba'),
(12, 'Indonesian'),
(14, 'Makanan Sunda'),
(16, 'Italian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_foods` int(11) NOT NULL,
  `id_restoran` int(11) NOT NULL,
  `nama_foods` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `success_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_users`, `id_foods`, `id_restoran`, `nama_foods`, `qty`, `total`, `status`, `tanggal`, `success_date`) VALUES
(15, 2, 14, 11, 'Nasi T.O Khas Tasikmalaya', 1, 15000, 'Closed', '2021-06-16', '2021-06-21'),
(21, 2, 6, 7, 'Hot Dog', 3, 45000, 'Closed', '2021-06-21', '2021-06-21'),
(22, 2, 2, 9, 'Turkey Fajitas', 5, 100000, 'In Procces', '2021-06-21', '2021-06-21'),
(23, 2, 1, 8, 'Grilled Cheese Sandwich', 1, 70000, NULL, '2021-06-21', '2021-06-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `alamat_users` varchar(300) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `nama`, `no_hp`, `alamat_users`, `gambar`, `role_id`, `date`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '', '', 'default.png', 1, '2021-06-01 22:20:13'),
(2, 'azmiiskandar0@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Moch Azmi Iskandar', '62+ 82295153183', 'Perum Griya Mitra Batik Blo3232232', 'azmi1.jpg', 2, '2021-06-01 22:21:05'),
(9, 'ujangandi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ujang Andi', '+628229542344', 'Tasikmalaya,kawalu,perun griya mitra batik E148', 'AndiUje.jpg', 2, '2021-06-08 16:52:13'),
(11, 'azmiiskndr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Azmi Iskandar', '0822951531', 'perum', 'IMG_0074.jpg', 2, '2021-06-09 20:40:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id_foods`);

--
-- Indeks untuk tabel `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id_restoran`);

--
-- Indeks untuk tabel `res_kategori`
--
ALTER TABLE `res_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `foods`
--
ALTER TABLE `foods`
  MODIFY `id_foods` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id_restoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `res_kategori`
--
ALTER TABLE `res_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
