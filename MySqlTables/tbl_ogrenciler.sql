-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2020, 12:21:24
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
-- Tablo için tablo yapısı `tbl_ogrenciler`
--

CREATE TABLE `tbl_ogrenciler` (
  `OgrNo` int(8) NOT NULL,
  `OgrTcNo` bigint(11) NOT NULL,
  `OgrAd` varchar(20) COLLATE utf16_turkish_ci NOT NULL,
  `OgrSoyad` varchar(20) COLLATE utf16_turkish_ci NOT NULL,
  `OgrSinif` int(4) NOT NULL,
  `OgrCepNo` bigint(11) NOT NULL,
  `OgrEposta` varchar(30) COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `tbl_ogrenciler`
--

INSERT INTO `tbl_ogrenciler` (`OgrNo`, `OgrTcNo`, `OgrAd`, `OgrSoyad`, `OgrSinif`, `OgrCepNo`, `OgrEposta`) VALUES
(21897885, 32898556221, 'Ahmet', 'Hamsici', 3, 534, 'ahmethamsici@hotmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_ogrenciler`
--
ALTER TABLE `tbl_ogrenciler`
  ADD PRIMARY KEY (`OgrNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
