-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2020, 12:21:41
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stajyerdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personeller_tbl`
--

CREATE TABLE `personeller_tbl` (
  `Personel_ID` int(50) NOT NULL,
  `Personel_Isim` varchar(20) COLLATE utf16_turkish_ci NOT NULL,
  `Personel_Soyisim` varchar(20) COLLATE utf16_turkish_ci NOT NULL,
  `Personel_Unvan` varchar(20) COLLATE utf16_turkish_ci NOT NULL,
  `Personel_Sifre` varchar(10) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `personeller_tbl`
--

INSERT INTO `personeller_tbl` (`Personel_ID`, `Personel_Isim`, `Personel_Soyisim`, `Personel_Unvan`, `Personel_Sifre`) VALUES
(1, 'Pelin', 'Karahanlı', 'Sekreter', '123456aa'),
(2, 'Bihter', 'Adıgüzel', 'Sekreter', '123abc456'),
(3, 'Ayşe', 'Aydoğan', 'Sekreter', '654321aa'),
(50, 'Muhammet', 'Yorulmaz', 'Öğr. Gör. Dr.', '111111aa'),
(51, 'Ahmet Turgut', 'Tuncer', 'Dr. Öğr. Gör.', '1111100000'),
(52, 'Emre Öner', 'Tartan', 'Öğr. Gör.', 'onertartan');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `personeller_tbl`
--
ALTER TABLE `personeller_tbl`
  ADD PRIMARY KEY (`Personel_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
