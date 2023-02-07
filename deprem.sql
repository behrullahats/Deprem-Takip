-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Şub 2023, 22:44:07
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deprem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `analiz`
--

CREATE TABLE `analiz` (
  `analiz_id` int(11) NOT NULL,
  `toplam_yikilan_bina` varchar(500) NOT NULL,
  `toplam_yarali` varchar(500) NOT NULL,
  `toplam_kurtarilan` varchar(500) NOT NULL,
  `toplam_vefat` varchar(500) NOT NULL,
  `toplam_kurtarilmayi_bekleyen` varchar(500) NOT NULL,
  `tarih_gun` int(1) NOT NULL,
  `tarih_ay` varchar(50) NOT NULL,
  `tarih_yil` varchar(50) NOT NULL,
  `bugunki_kurtarilan` varchar(500) NOT NULL,
  `bugunki_vefat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `analiz`
--

INSERT INTO `analiz` (`analiz_id`, `toplam_yikilan_bina`, `toplam_yarali`, `toplam_kurtarilan`, `toplam_vefat`, `toplam_kurtarilmayi_bekleyen`, `tarih_gun`, `tarih_ay`, `tarih_yil`, `bugunki_kurtarilan`, `bugunki_vefat`) VALUES
(10, '2818', '5385', '2470', '912', 'Bilinmiyor', 6, 'Şubat', '2023', '2470', '912 '),
(11, '5,775', '24,443', '8,000', '5,434', 'Bilinmiyor', 7, 'Şubat', '2023', '5,530', '4522');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `analiz`
--
ALTER TABLE `analiz`
  ADD PRIMARY KEY (`analiz_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `analiz`
--
ALTER TABLE `analiz`
  MODIFY `analiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
