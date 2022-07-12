-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 01:17 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_barang`
--

CREATE TABLE `web_barang` (
  `kode` char(10) NOT NULL,
  `merk` varchar(200) DEFAULT NULL,
  `kategori` char(30) DEFAULT NULL,
  `satuan` char(20) DEFAULT NULL,
  `hargabeli` double DEFAULT NULL,
  `diskonbeli` double DEFAULT NULL,
  `hargapokok` double DEFAULT NULL,
  `hargajual` double DEFAULT NULL,
  `diskonjual` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_barang`
--

INSERT INTO `web_barang` (`kode`, `merk`, `kategori`, `satuan`, `hargabeli`, `diskonbeli`, `hargapokok`, `hargajual`, `diskonjual`, `stok`, `foto`, `deskripsi`) VALUES
('L001', 'Dell XPS 13', 'Dell', 'Unit', 7000000, 0, 7000000, 7000000, 0, 3, 'Dell-XPS-13.jpg', 'Dell XPS 13 memiliki bobot 1,2 kg dengan ketebalan 13,7 mm dan 8mm. Laptop ini memiliki resolusi layar UltraSharp QHDSharp+3200 x 1800 pixel sehingga memiliki ketajaman gambar yang bisa disebut sempurna. Hal yang paling mengagumkan lagi, laptop terbaik ininmemiliki RAM sebesar 16 BG dengan SSD 1 TB serta memiliki ketahanan baterai sampai 9 jam'),
('L002', 'Dell Inspiron 11 3000', 'Dell', 'Unit', 3500000, 0, 3500000, 3500000, 0, 2, 'Dell-Inspiron-11-3000.jpeg', 'Untuk anda yang sedang mencari laptop 2 in 1 maka anda bisa mencoba untuk memakai Dell Inspiron 11 3000. Laptop ini dipersenjatai dengan processor dual core AMD A9 yang hemat daya dan juga RAM sebesar 4GB. Untuk masalah penyimpanannya, laptop ini mempercayai media eMMC berkapasitas sebesar 64GB.'),
('L003', 'Hp 15 BA004AX', 'Hp', 'Unit', 6000000, 0, 6000000, 6000000, 0, 5, 'Hp-15-BA004Ax.jpg', 'Laptop ini memiliki RAM 8GB dan HDD 1 TB. Perangkat ini memiliki processor dari AMD yaitu A10-9600P 4 inter dengan kecepatan hingga 2,4 GHz dan dilengkapi dengan fitur HEVC yang dapat memaksimalkan pemutaran video pada perangkat tersebut'),
('L004', 'Acer Chromebook 514', 'Acer', 'Unit', 8500000, 0, 8500000, 8500000, 0, 4, 'Acer-Chromebook-514.jpg', 'Bodi laptop premium ini masih mempertahankan material aluminium sebagai pelapis bodi utama. Layarnya sendiri hadir dengan mode touchscreen IPS 14 inci dengan resolusi hingga 1080p. Selain itu, keunggulan lainnya juga terdapat pada daya tahan baterainnya yang mampu tetap hidup hingga 12 jam.'),
('L005', 'Asus X550IU', 'Asus', 'Unit', 9500000, 0, 9500000, 9500000, 0, 5, 'Asus-X550IU.jpeg', 'Laptop gaming ini hadir dengan processor AMD APU FX-9830P, 3.0 GHz - 3.7 GHz, dan RAM 8GB DDR4. Laptop ini juga memiliki layar 15.6 inci Full HD dan 2 slot VGA R7 Graphics (512SP) yang menghasilkan kualitas gambar serta video optimal'),
('L006', 'Dell Inspiron 14 5481', 'Dell', 'Unit', 6000000, 0, 6000000, 6000000, 0, 4, 'Dell-Inspiron-14-5481.png', 'Dell Inspiron 14 5481 merupakan salah satu laptop yang mempunyai processor Intel Core i3 145U dan RAM DDR4 sebesar 4GB. Untuk masalah penyimpanan, laptop ini dibekali dengan SSD berkapasitas 128GB'),
('L007', 'Lenovo Yoga 9i', 'Lenovo', 'Unit', 28249000, 0, 28249000, 24249000, 0, 2, 'Lenovo-Yoga-9i.png', 'Laptop dengan ukuran 14 inci ini memiliki layar sentuh 1080p dan dilengkapi dengan stylus bawaan untuk mempermudah kamu dalam membuat desain atau pencatatan. Kualitas audio, layar dan bentuk laptop Lenovo Yoga 9i sangat cocok untuk hiburan dan kebutuhan multimedia'),
('L008', 'Asus VivoBook A442UQ', 'Asus', 'Unit', 8000000, 0, 8000000, 8000000, 0, 4, 'ASUS-VivoBook-A442UQ.png', 'Merk laptop keluaran ASUS ini memiliki daya tarik pada besaran RAM yang digunakan. Laptop ini dipersenjatai RAM 8GB yang lebih dari cukup untuk memproses berbagai pekerjaan secara bersamaan. Selain itu, laptop ini menggunakan prosesor Intel Core i5, dengan penyimpanan HDD 1TB'),
('L009', 'Acer Aspire E15', 'Acer', 'Unit', 5000000, 0, 5000000, 5000000, 0, 6, 'Acer-Aspire-E15.jpg', 'Laptop ini dibekali dengan layar berukuran 15 inchi dengan resolusi sebesar 1080p. Acer Aspire E15 ditenagai oleh processor Intel Core i3 8130U dan dikombinasikan dengan RAM sebesar 6GB. Untuk masalah penyimpanannya sudah disediakan HDD dengan kapasitas sebesar 1TB'),
('L010', 'Apple MacBook Air M1 2020', 'Apple', 'Unit', 16699000, 0, 16699000, 16699000, 0, 3, 'Apple-MacBook- Air-M1-2020.png', 'Laptop ini hadir dengan layar retina 13 inci. Kelebihan chip khusus M1 pada laptop ini akan memungkinkan Apple MacBook Air M1 2020 untuk bekerja jauh lebih baik dan lebih lama dengan penyimpanan dan baterai yang cukup tangguh'),
('L011', 'LG Gram 17', 'Lg', 'Unit', 25000000, 0, 25000000, 25000000, 0, 3, 'LG Gram 17.png', 'Laptop ini juga memiliki RAM 16 GB dengan prosesor Intel Ice lake Core i7 sangat cocok untuk menjadi laptop kerja. Tidak usah khawatir dengan masalah penyimpanan, karena ruang penyimpanan laptop ini adalah 1TB. Tak lupa juga, LG Gram 17 sudah menggunakan SSD'),
('L012', 'Samsung NP270E4V – X01ID', 'Samsung', 'Unit', 4300000, 0, 4300000, 4300000, 0, 7, 'Samsung-NP270E4V-X01ID.jpg', 'Ukuran layarnya 14 inch dan HD LED Display.Dengan menggunakan GPU nVIDIA GeForce 710 m, kualitas gambar yang dikeluarkan menjadi lebih jernih. Selain itu, laptop ini memiliki driver optikal super multi dual layer'),
('L013', 'Lenovo IdeaPad Duet', 'Lenovo', 'Unit', 6500000, 0, 6500000, 6500000, 0, 4, 'Lenovo-IdeaPad-Duet.jpg', 'Merk laptop ini menggunakan Chrome OS dan bagian keyboardnya bisa Anda lepas dan menjadi sebuah tablet yang sangat praktis dan portabel.\r\nMerk laptop portabel ini ditenagai oleh Prosesor Octa Core MediaTek Helio P60T dan didukung juga dengan RAM sebesar 4GB. Untuk masalah penyimpanan data, Lenovo IdeaPad Duet dibekali dengan eMMC dengan kapasitas sebesar 128GB\r\n'),
('L014', 'Asus ZenBook Flip 14 UX461UN', 'Asus', 'Unit', 3899000, 0, 3899000, 3899000, 0, 3, 'Asus-ZenBook-Flip-14-UX461UN.jpg', 'Laptop ini didukung dengan prosesor Intel® Core™ i7-8550U dan Intel® Core™ i5-8250U serta RAM 8 sampai 16 GB. Laptop ini adalah laptop 2-in-1 tertipis di dunia yang menggunakan grafis diskrit – sehingga dapat dikatakan bahwa laptop ini adalah “powerhouse”.Laptop ini mendukung layar sentuh dan dapat dirotasi lipat 360 derajat\r\n'),
('L015', 'Lenovo ThinkPad X280', 'Lenovo', 'Unit', 4600000, 0, 4600000, 4600000, 0, 5, 'Lenovo-ThinkPad-X280.jpg', 'Laptop ini didudukung dengan prosesor intel core i7 dan didukung dengan konektivitas 2 port untuk USB Type C dan 2 port untuk USB 3.0. Perangkat ini juga dilengkapi dengan media penyimpanan 256 GB SSD dan 8 GB RAM. Memiliki baterai sangat awet sampai 15 jam'),
('L016', 'Xiaomi Mi Notebook Air', 'Xiaomi', 'Unit', 9000000, 0, 9000000, 9000000, 0, 3, 'Xiaomi-Mi-Notebook-Air.jpg', 'Laptop ultrabook ini dilengkapi dengan penyimpanan yang cukup besar yaitu 12 GB SSD dan juga RAM 4 GB. Perangkat ini memiliki processor Intel yaitu core m3.Core m3 ini serigng disetarakan dengan core i5, namun diakui core m3 memiliki performa yang lebih baik'),
('L017', 'HP 15-BA004AX', 'Hp', 'Unit', 8699000, 0, 8699000, 8699000, 0, 2, 'HP-14-BA006AZ.jpg', 'Body dari laptop ini sendiri berbahan plastik berbalur metalic brush dengan bagian cover diberi aksen garis horizontal. Layarnya sekitar 15,6 inci dengan teknologi SVA BrightView WLED. Untuk prosesornya sendiri  15-BA004AX mengadopsi AMD A10-9600P 4-inti dengan daya pacu hingga 2,4GHz'),
('L018', 'ASUS X441BA', 'Asus', 'Unit', 4299000, 0, 4299000, 4299000, 0, 3, 'ASUS-X441BA.png', 'Merk laptop ini telah menggunakan graphic card, dan audio yang berkelas untuk aktivitas gaming. Untuk media penyimpanan, merk laptop ini dibekali RAM 4GB, dan penyimpanan HDD sebesar 1TB\r\n'),
('L019', 'ASUS VivoBook K403FA-EB301T', 'Asus', 'Unit', 3899000, 0, 3899000, 3899000, 0, 2, 'Asus-VivoBook-K403FA-EB30IT.jpg', 'Apalagi didalam bodinya sudah tertanam spesifikasi yang ciamik untuk harga dikelasnya. Penyimpanannya sudah memakai SSD berkapasitas 512GB dengan RAM 4 GB. Memori ini siap menyokong kinerja dari prosesor Core i3 yang cukup oke penggunaan sehari-hari. Kapasitas baterai yang ditawarkan ASUS VivoBook Ultra K403 cukup apik. ASUS mengklaim laptop ini dapat bertahan selama 24 jam\r\n'),
('L020', 'Toshiba Portege X20W', 'Toshiba', 'Unit', 7500000, 0, 7500000, 7500000, 0, 4, 'Toshiba-Portege-X20W.jpeg', 'Toshiba Portege X20W hadir dengan prosesor Intel Core i7-7500U untuk mendukung performa tinggi agar tetap stabil. Bagian layarnya berukuran 12,5 inci dengan pelindung Corning Gorilla Glass 4, tak terlalu besar tetapi cukup nyaman. Tak hanya itu, laptop murah Toshiba ini juga dibekali fitur keamanan seperti Windows Hello, finger login, dan Intel vPRO');

-- --------------------------------------------------------

--
-- Table structure for table `web_kategori`
--

CREATE TABLE `web_kategori` (
  `id` int(11) NOT NULL,
  `kategori` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_kategori`
--

INSERT INTO `web_kategori` (`id`, `kategori`) VALUES
(1, 'Dell'),
(2, 'Hp'),
(3, 'Acer'),
(4, 'Asus'),
(5, 'Lenovo'),
(6, 'Apple'),
(7, 'LG'),
(8, 'Samsung'),
(9, 'Xiaomi'),
(10, 'Toshiba');

-- --------------------------------------------------------

--
-- Table structure for table `web_order`
--

CREATE TABLE `web_order` (
  `trans_id` char(100) NOT NULL,
  `id_plg` char(20) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `total_bayar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_order`
--

INSERT INTO `web_order` (`trans_id`, `id_plg`, `tgl_order`, `total_bayar`) VALUES
('1-06032022-065418', '1', '2022-03-06', 23875000),
('1-27022022-045014', '1', '2022-02-27', 23875000),
('2-09032022-050552', '2', '2022-03-09', 18295000);

-- --------------------------------------------------------

--
-- Table structure for table `web_order_detail`
--

CREATE TABLE `web_order_detail` (
  `trans_id` char(100) NOT NULL DEFAULT '',
  `kode_brg` char(20) NOT NULL DEFAULT '',
  `harga_jual` double DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `bayar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_order_detail`
--

INSERT INTO `web_order_detail` (`trans_id`, `kode_brg`, `harga_jual`, `qty`, `bayar`) VALUES
('1-06032022-065418', 'B002', 13625000, 1, 13625000),
('1-06032022-065418', 'B006', 10250000, 1, 10250000),
('1-27022022-045014', 'B002', 13625000, 1, 13625000),
('1-27022022-045014', 'B006', 10250000, 1, 10250000),
('2-09032022-050552', 'B002', 13625000, 1, 13625000),
('2-09032022-050552', 'B003', 4670000, 1, 4670000);

-- --------------------------------------------------------

--
-- Table structure for table `web_pelanggan`
--

CREATE TABLE `web_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kota` char(100) DEFAULT NULL,
  `provinsi` char(100) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `telp` char(20) DEFAULT NULL,
  `userID` char(20) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_pelanggan`
--

INSERT INTO `web_pelanggan` (`id`, `nama`, `alamat`, `kota`, `provinsi`, `email`, `telp`, `userID`, `PASSWORD`) VALUES
(1, 'edi', 'Jl Patimura No 5', 'Semarang', 'Jawa Tengah', 'edi@yahoo.com', '024898232', 'edi', '8457dff5491b024de6b03e30b609f7e8'),
(2, 'user1', '-', '-', '-', 'user1@yahoo.com', '-', 'user1', '24c9e15e52afc47c225b757e7bee1f9d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_barang`
--
ALTER TABLE `web_barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `web_kategori`
--
ALTER TABLE `web_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_order`
--
ALTER TABLE `web_order`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `web_order_detail`
--
ALTER TABLE `web_order_detail`
  ADD PRIMARY KEY (`trans_id`,`kode_brg`);

--
-- Indexes for table `web_pelanggan`
--
ALTER TABLE `web_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_kategori`
--
ALTER TABLE `web_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `web_pelanggan`
--
ALTER TABLE `web_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
