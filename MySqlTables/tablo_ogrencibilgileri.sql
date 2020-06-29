-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2020, 12:21:33
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
-- Tablo için tablo yapısı `tablo_ogrencibilgileri`
--

CREATE TABLE `tablo_ogrencibilgileri` (
  `OgrKayitNo` int(50) DEFAULT NULL,
  `OgrStajKod` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL,
  `OgrStajYer` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL,
  `OgrBasTar` date DEFAULT NULL,
  `OgrBitTar` date DEFAULT NULL,
  `OgrStajYazi` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL,
  `OgrEndYazi` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL,
  `OgrOgrAciklama` varchar(50) COLLATE utf16_turkish_ci DEFAULT NULL,
  `OgrStajEvrak` int(50) DEFAULT NULL,
  `OgrChckBasDil` int(50) DEFAULT NULL,
  `OgrChckKabYazi` int(50) DEFAULT NULL,
  `OgrChckMusBel` int(50) DEFAULT NULL,
  `OgrKmlkFot` int(50) DEFAULT NULL,
  `OgrStajDegForm` int(50) DEFAULT NULL,
  `OgrNo` int(50) NOT NULL,
  `OgrStajRap` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `tablo_ogrencibilgileri`
--

INSERT INTO `tablo_ogrencibilgileri` (`OgrKayitNo`, `OgrStajKod`, `OgrStajYer`, `OgrBasTar`, `OgrBitTar`, `OgrStajYazi`, `OgrEndYazi`, `OgrOgrAciklama`, `OgrStajEvrak`, `OgrChckBasDil`, `OgrChckKabYazi`, `OgrChckMusBel`, `OgrKmlkFot`, `OgrStajDegForm`, `OgrNo`, `OgrStajRap`) VALUES
(375, 'END300', 'Ankara Bilişim A.Ş', '2020-06-01', '2020-07-10', 'END300 tamamlandı.', 'Gerekli bilgiler kazanıldı.', 'İlginize Arz Ederim.', 1, 1, 1, 1, 1, 0, 21897885, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tablo_ogrencibilgileri`
--
ALTER TABLE `tablo_ogrencibilgileri`
  ADD PRIMARY KEY (`OgrNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
