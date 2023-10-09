-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql309.byetcluster.com
-- Waktu pembuatan: 09 Okt 2023 pada 02.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34779797_post`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text DEFAULT NULL,
  `tanggal_publikasi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `konten`, `tanggal_publikasi`) VALUES
(8, 'Al Fatihah', '<p>ALFATIHAH</p>\r\n<p style=\"text-align: right;\">&nbsp;Ø¨ÙØ³Ù’Ù…Ù Ù±Ù„Ù„Ù‘ÙŽÙ‡Ù Ù±Ù„Ø±Ù‘ÙŽØ­Ù’Ù…ÙŽÙ°Ù†Ù Ù±Ù„Ø±Ù‘ÙŽØ­ÙÙŠÙ…Ù</p>\r\n<p style=\"text-align: right;\">Ù±Ù„Ù’Ø­ÙŽÙ…Ù’Ø¯Ù Ù„ÙÙ„Ù‘ÙŽÙ‡Ù Ø±ÙŽØ¨Ù‘Ù Ù±Ù„Ù’Ø¹ÙŽÙ°Ù„ÙŽÙ…ÙÙŠÙ†ÙŽ</p>\r\n<p style=\"text-align: right;\">&nbsp;Ù±Ù„Ø±Ù‘ÙŽØ­Ù’Ù…ÙŽÙ°Ù†Ù Ù±Ù„Ø±Ù‘ÙŽØ­ÙÙŠÙ…Ù</p>\r\n<p style=\"text-align: right;\">&nbsp;Ù…ÙŽÙ°Ù„ÙÙƒÙ ÙŠÙŽÙˆÙ’Ù…Ù Ù±Ù„Ø¯Ù‘ÙÙŠÙ†Ù</p>\r\n<p style=\"text-align: right;\">Ø¥ÙÙŠÙ‘ÙŽØ§ÙƒÙŽ Ù†ÙŽØ¹Ù’Ø¨ÙØ¯Ù ÙˆÙŽØ¥ÙÙŠÙ‘ÙŽØ§ÙƒÙŽ Ù†ÙŽØ³Ù’ØªÙŽØ¹ÙÙŠÙ†Ù</p>\r\n<p style=\"text-align: right;\">Ù±Ù‡Ù’Ø¯ÙÙ†ÙŽØ§ Ù±Ù„ØµÙ‘ÙØ±ÙŽÙ°Ø·ÙŽ Ù±Ù„Ù’Ù…ÙØ³Ù’ØªÙŽÙ‚ÙÙŠÙ…ÙŽ</p>\r\n<p style=\"text-align: right;\">&nbsp;ØµÙØ±ÙŽÙ°Ø·ÙŽ Ù±Ù„Ù‘ÙŽØ°ÙÙŠÙ†ÙŽ Ø£ÙŽÙ†Ù’Ø¹ÙŽÙ…Ù’ØªÙŽ Ø¹ÙŽÙ„ÙŽÙŠÙ’Ù‡ÙÙ…Ù’ ØºÙŽÙŠÙ’Ø±Ù Ù±Ù„Ù’Ù…ÙŽØºÙ’Ø¶ÙÙˆØ¨Ù Ø¹ÙŽÙ„ÙŽÙŠÙ’Ù‡ÙÙ…Ù’ ÙˆÙŽÙ„ÙŽØ§ Ù±Ù„Ø¶Ù‘ÙŽØ§Ù“Ù„Ù‘ÙÙŠÙ†ÙŽ</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2023-10-07 05:53:50'),
(10, 'Project ExamBro', '<p><strong>*ð™µð™´ð™°ðšƒðš„ðšð™´ðš‚ ð™´ðš‡ð™°ð™¼ð™±ðšð™¾ ðš…ðŸ½*</strong> <br>---------------------------------------------------<br>ðš„ðšð™»= <a href=\"https://github.com/SecretDiscorder/baseexambro\">SAFEST BASE EXAM</a><br>---------------------------------------------------<br><strong><em>ð™¿ðš›ðšŽðšŸðšŽðš—ðš ð™²ðš‘ðšŽðšŠðš ðšŠðš—ðš ð™°ðš—ðšðš’ ð™·ðšŠðšŒðš”</em></strong><br><br>--ð™¸ðšðšœ ð™°ðš•ðš• ðš‚ðšŽðšŒðšžðš›ðš’ðšðš¢--<br><em> ð™°ð™½ðšƒð™¸ ð™¼ð™¾ð™³</em> <br><em>ð™°ð™½ðšƒð™¸ ð™³ð™´ðš… ð™¼ð™¾ð™³ð™´ </em><br><em> ð™°ð™½ðšƒð™¸ ðšð™¾ð™¾ðšƒ </em><br><em> ð™°ð™½ðšƒð™¸ ð™²ð™·ð™´ð™²ð™ºð™´ðš </em><br><em> ð™°ð™½ðšƒð™¸ ð™·ð™¾ð™¾ð™º </em><br><em> ð™°ð™½ðšƒð™¸ ðš‚ð™²ðšð™´ð™´ð™½ðš‚ð™·ð™¾ðšƒ </em><br><em> ð™°ð™½ðšƒð™¸ ðš‚ð™²ðšð™´ð™´ð™½ðšð™´ð™²ð™¾ðšð™³ </em><br><em> ð™°ð™½ðšƒð™¸ ð™µð™»ð™¾ð™°ðšƒð™¸ð™½ð™¶ ð™°ð™¿ð™¿ </em><br><em> ð™°ð™½ðšƒð™¸ ð™±ðš„ð™±ð™±ð™»ð™´ðš‚ ð™³ð™´ðš…ð™¸ð™²ð™´ðš‚ </em><br><em> ð™°ð™½ðšƒð™¸ ð™¼ðš„ð™»ðšƒð™¸ðš†ð™¸ð™½ð™³ð™¾ðš† ð™°ð™½ð™³ðšð™¾ð™¸ð™³ ðŸ·ðŸ¸+ </em><br><em> ð™°ð™½ðšƒð™¸ ðš‚ð™¿ð™»ð™¸ðšƒ ðš‚ð™²ðšð™´ð™´ð™½ </em><br><em> ð™°ð™½ðšƒð™¸ ðšð™´ð™²ð™¾ð™³ð™´ </em><br><em> ð™°ð™½ðšƒð™¸ ð™»ðš„ð™²ð™ºðšˆ ð™¿ð™°ðšƒð™²ð™·ð™´ðš </em><br><em> ð™°ð™½ðšƒð™¸ ð™¶ð™°ð™¼ð™´ ð™¶ðš„ð™°ðšð™³ð™¸ð™°ð™½ </em><br><em> ð™°ð™½ðšƒð™¸ ðš‚ð™¿ð™»ð™¸ðšƒ ð™³ð™°ð™½ ð™¹ð™´ð™½ð™³ð™´ð™»ð™° ð™¼ð™´ð™½ð™¶ð™°ð™¼ð™±ð™°ð™½ð™¶ </em><br><em> ð™°ð™½ðšƒð™¸ ð™²ð™·ð™´ð™°ðšƒð™¸ð™½ð™¶ </em><br><em> ð™°ð™½ðšƒð™¸ ð™¶ð™°ð™¼ð™´ ð™¼ð™¾ð™³ð™´ </em><br><em> ð™»ð™¾ð™²ð™º ð™°ð™¿ð™¿ <strong>(ð™¿ðš’ðš— ð™¼ðš˜ðšðšŽ)</strong> </em><br><em> ð™°ð™½ðšƒð™¸ ð™»ð™°ðšˆð™°ðš ð™±ð™´ð™»ð™°ð™ºð™°ð™½ð™¶<strong> (ðšðšŽðšŒðšŽðš—ðš)</strong> </em><br><small> <strong>ð™¿ðšð™¾ðšƒð™´ð™²ðšƒð™´ð™³ ð™³ð™°ð™½ ð™¿ð™°ð™²ð™ºð™´ð™³ ðš‹ðš¢ ð™¿ðš›ðš˜ðšðšŽðšŒðšðš˜ðš›</strong></small> <br><strong>ð™°ð™½ðšƒð™¸ ðšð™´ðš…ð™´ðšðš‚ð™´ ð™´ð™½ð™¶ð™¸ð™½ð™´ð™´ðšð™¸ð™½ð™¶</strong> ð™¾ðŸ¸ðš†ðšŽðš•ðš•&copy;&reg;</p>', '2023-10-07 12:29:14'),
(11, 'Java Program', '<p><img src=\"https://user-images.githubusercontent.com/139457966/273420837-cc42bcd3-86c1-44cb-873d-b33942286353.png\" width=\"100%\" height=\"100%\"></img> <h1 align=\"center\"><br>Contains 100+ Blocks <br>MERGING {20} COMPONENTS , <br>1- LOCKTASK <br>2-NETWORK <br>3-SCREENSHOT <br>4-PACKAGE MANAGER <br>5-HIDE BUTTON <br>6-HACKPROTECT <br>7-ANTIMOD <br>8-WEBVIEWTOOL <br>9-ALLFILEPERMISSION <br>10-PKGUTIL <br>11-DEVMODE <br>12-ORIENTATIONFix <br>13-DownloadToAsd <br>14-PACKAGEUTILITIES <br>15-HIDEFROMRECENT <br>16-HideNavBar <br>17-InstallApp <br>18-BRIGHTNESS <br>19-DOWNLOADFile <br>20-WebViewer <br><strong>MERGE 20 Components || in 1 called BimaAix.</strong> </h1><br><a href=\"https://wa.me/message/YDYJSZMSJJLSJ1\"><button id=\"loginbtn\">PAID</button></a></p>', '2023-10-08 01:33:33'),
(12, 'MIND MAPPING IPS', '<p style=\"text-align: center;\">Perubahan Sosial dan Globalisasi<iframe src=\"https://drive.google.com/file/d/1xjZgS0C4KvHtI7RWoBrXvUW9jz5y-nrS/preview?usp=sharing\" width=\"100%\" height=\"100%\"></iframe></p>', '2023-10-08 08:24:12'),
(13, 'AL-BAQARAH AYAT 255', '<p style=\"padding-left: 40px; text-align: right;\">&nbsp;</p>\r\n<p style=\"text-align: right;\">Ù±Ù„Ù„Ù‘ÙŽÙ‡Ù Ù„ÙŽØ§Ù“ Ø¥ÙÙ„ÙŽÙ°Ù‡ÙŽ Ø¥ÙÙ„Ù‘ÙŽØ§ Ù‡ÙÙˆÙŽ Ù±Ù„Ù’Ø­ÙŽÙ‰Ù‘Ù Ù±Ù„Ù’Ù‚ÙŽÙŠÙ‘ÙÙˆÙ…Ù Ù„ÙŽØ§ ØªÙŽØ£Ù’Ø®ÙØ°ÙÙ‡ÙÛ¥ Ø³ÙÙ†ÙŽØ©ÙŒ ÙˆÙŽÙ„ÙŽØ§ Ù†ÙŽÙˆÙ’Ù…ÙŒ Ù„Ù‘ÙŽÙ‡ÙÛ¥ Ù…ÙŽØ§ ÙÙÙ‰ Ù±Ù„Ø³Ù‘ÙŽÙ…ÙŽÙ°ÙˆÙŽÙ°ØªÙ ÙˆÙŽÙ…ÙŽØ§ ÙÙÙ‰ Ù±Ù„Ù’Ø£ÙŽØ±Ù’Ø¶Ù Ù…ÙŽÙ† Ø°ÙŽØ§ Ù±Ù„Ù‘ÙŽØ°ÙÙ‰ ÙŠÙŽØ´Ù’ÙÙŽØ¹Ù Ø¹ÙÙ†Ø¯ÙŽÙ‡ÙÛ¥Ù“ Ø¥ÙÙ„Ù‘ÙŽØ§ Ø¨ÙØ¥ÙØ°Ù’Ù†ÙÙ‡ÙÛ¦ ÙŠÙŽØ¹Ù’Ù„ÙŽÙ…Ù Ù…ÙŽØ§ Ø¨ÙŽÙŠÙ’Ù†ÙŽ Ø£ÙŽÙŠÙ’Ø¯ÙÙŠÙ‡ÙÙ…Ù’ ÙˆÙŽÙ…ÙŽØ§ Ø®ÙŽÙ„Ù’ÙÙŽÙ‡ÙÙ…Ù’ ÙˆÙŽÙ„ÙŽØ§ ÙŠÙØ­ÙÙŠØ·ÙÙˆÙ†ÙŽ Ø¨ÙØ´ÙŽÙ‰Ù’Ø¡Ù Ù…Ù‘ÙÙ†Ù’ Ø¹ÙÙ„Ù’Ù…ÙÙ‡ÙÛ¦Ù“ Ø¥ÙÙ„Ù‘ÙŽØ§ Ø¨ÙÙ…ÙŽØ§ Ø´ÙŽØ§Ù“Ø¡ÙŽ ÙˆÙŽØ³ÙØ¹ÙŽ ÙƒÙØ±Ù’Ø³ÙÙŠÙ‘ÙÙ‡Ù Ù±Ù„Ø³Ù‘ÙŽÙ…ÙŽÙ°ÙˆÙŽÙ°ØªÙ ÙˆÙŽÙ±Ù„Ù’Ø£ÙŽØ±Ù’Ø¶ÙŽ ÙˆÙŽÙ„ÙŽØ§ ÙŠÙŽÙ€Ù”ÙÙˆØ¯ÙÙ‡ÙÛ¥ Ø­ÙÙÙ’Ø¸ÙÙ‡ÙÙ…ÙŽØ§ÙˆÙŽÙ‡ÙÙˆÙŽ Ù±Ù„Ù’Ø¹ÙŽÙ„ÙÙ‰Ù‘Ù Ù±Ù„Ù’Ø¹ÙŽØ¸ÙÙŠÙ…Ù</p>', '2023-10-08 11:07:30'),
(21, 'Javascript Program', '<p><iframe src=\"https://pastebin.com/embed_iframe/qFKXwTxB\" style=\"border:none;width:100%\"></iframe></p>', '2023-10-08 12:54:09'),
(22, 'Python Program', '<p><iframe src=\"https://pastebin.com/embed_iframe/m83KZgAi\" style=\"border:none;width:100%\"></iframe><p>', '2023-10-08 13:03:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
