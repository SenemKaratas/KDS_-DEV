-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Haz 2019, 11:38:51
-- Sunucu sürümü: 5.7.23
-- PHP Sürümü: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `atm_cihazi_yeri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `atm`
--

DROP TABLE IF EXISTS `atm`;
CREATE TABLE IF NOT EXISTS `atm` (
  `atm_no` int(11) NOT NULL AUTO_INCREMENT,
  `atm_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `atm_adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`atm_no`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `atm`
--

INSERT INTO `atm` (`atm_no`, `atm_ad`, `atm_adres`) VALUES
(1, 'Adnan Kahveci ', 'Adnan Kahvecı Cad.No:119/D Sırınyer Izmır ATM'),
(2, 'Atadan ', 'Atadan Cad. No:1 ATM'),
(3, 'Buca Egitim Fak.', 'Buca Eğitim Fak. Uğur Mumcu Cad. No:5 ATM'),
(4, 'Buca Koop.', 'Buca Koop Mah. Mevki 1410 Sok. ATM'),
(5, 'Buca Otoyol Çıkışı', 'Buca Otoyol Çıkışı Kuruçeşme ATM'),
(6, 'Çamlıpark ', 'Çamlıpark Sıt. Buca Koop. 203/10 Sokak No:4 ATM'),
(7, 'DEU Adalet', 'DEU Adalet Yuksek Okulu ATM'),
(8, 'DEU İİBF', 'D.E.U. Iktısadı Ve Id.Bıl.Fak.24.Sok.No:2 ATM'),
(9, 'Dedekorkut ', 'Dedekorkut Cad. Yedıgoller Is Mrk.Evka1 Konut ATM'),
(10, 'DEU İşletme', 'Dokuz Eylul Unv.Isletme Fak.Kaynaklar Mevkıı ATM'),
(11, 'DEU Tınaztepe', 'Dokuz Eylul Unv.Tınaztepe Kamp.Sosyal.Tes.Bın ATM \r\n '),
(12, 'ESHOT Genel M.', 'Eshot Genel Müdürlüğü Gediz ATM'),
(13, 'Fevzi Çakmak ', 'Fevzı Cakmak Cd.No:133/A-B Yıkıkkemer ATM'),
(14, 'İnönü', 'Inonu Mah.682.Sok.No:66 ATM'),
(15, 'Kozağaç', 'Kozagac Mah.255 Sok.No:7/A ATM'),
(16, 'Menderes ', 'Menderes Cad. ATM'),
(17, 'Nato Karargahı ', 'Nato Karargahı Sırınyer ATM');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `atm_kullanim_orani`
--

DROP TABLE IF EXISTS `atm_kullanim_orani`;
CREATE TABLE IF NOT EXISTS `atm_kullanim_orani` (
  `kullanim_id` int(11) NOT NULL AUTO_INCREMENT,
  `ocak` int(11) NOT NULL,
  `subat` int(11) NOT NULL,
  `mart` int(11) NOT NULL,
  `nisan` int(11) NOT NULL,
  `mayis` int(11) NOT NULL,
  PRIMARY KEY (`kullanim_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `atm_kullanim_orani`
--

INSERT INTO `atm_kullanim_orani` (`kullanim_id`, `ocak`, `subat`, `mart`, `nisan`, `mayis`) VALUES
(1, 326, 456, 125, 564, 425),
(2, 436, 536, 469, 459, 852),
(3, 458, 759, 845, 297, 169),
(4, 256, 102, 452, 123, 456),
(5, 456, 746, 254, 124, 103),
(6, 102, 236, 102, 402, 325),
(7, 123, 412, 265, 305, 602),
(8, 124, 103, 453, 103, 100),
(9, 103, 156, 412, 126, 103),
(10, 103, 156, 135, 410, 201),
(11, 103, 456, 156, 136, 521),
(12, 107, 109, 127, 165, 412),
(13, 124, 156, 398, 198, 412),
(14, 146, 424, 412, 478, 102),
(15, 145, 447, 254, 105, 92),
(16, 123, 632, 201, 305, 410),
(17, 412, 413, 452, 103, 92);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici_no` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yas` int(11) NOT NULL,
  `kart_turu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mahalle` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kullanici_no`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_no`, `kullanici`, `yas`, `kart_turu`, `mahalle`) VALUES
(1, 'Deniz Uzun', 22, 'ogrenci', 'Yıldız Mah.'),
(2, 'Apo Arslan', 25, 'yetiskin', 'Buca Koop Mah.'),
(3, 'İrem Emek', 26, 'ogrenci', 'Adatepe Mah.'),
(4, 'Aysen Özen', 20, 'ogrenci', 'Yeşilbağlar Mah.'),
(5, 'Şerif Tezcan', 25, 'ogrenci', 'Buca Koop Mah.'),
(6, 'Yılmaz Dağ', 22, 'yetiskin', 'Göksu Mah.'),
(7, 'Deniz Aktaş', 22, 'yetiskin', 'Yıldız Mah.'),
(8, 'Mehmet Yılmaz', 22, 'ogrenci', 'Göksu Mah.'),
(9, 'Melda Güzey', 25, 'ogrenci', 'Buca Koop Mah.'),
(10, 'Uğur Oğur', 26, 'yetiskin', 'Yıldız Mah.'),
(11, 'Ali Alkan', 40, 'yetiskin', 'Göksu Mah.'),
(12, 'İsmail Kar', 45, 'yetiskin', 'Göksu Mah.'),
(13, 'Turhan Köroğlu', 22, 'ogrenci', 'Yıldız Mah.'),
(14, 'Ali Su', 20, 'ogrenci', 'Buca Koop Mah.'),
(15, 'Sezer Çoban', 20, 'ogrenci', 'Buca Koop Mah.'),
(16, 'Sema Dadük', 20, 'ogrenci', 'Atatürk Mah.'),
(17, 'Esat Kara', 20, 'ogrenci', 'Cumhuriyet Mah.'),
(18, 'Dilek Kabasakal', 25, 'yetiskin', 'Dicle Mah.'),
(19, 'Ali Yılmaz', 22, 'ogrenci', 'Zafer Mah.'),
(20, 'Bengisu Zan', 26, 'yetiskin', 'Cumhuriyet Mah.'),
(21, 'Seren Kar', 40, 'yetiskin', 'Adatepe Mah.'),
(22, 'Necdet Kar', 45, 'yetiskin', 'Cumhuriyet Mah.'),
(23, 'Duygu Seven', 22, 'ogrenci', 'Buca Koop Mah.'),
(24, 'Sinan Sezen', 22, 'ogrenci', 'Cumhuriyet Mah.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanim_atm`
--

DROP TABLE IF EXISTS `kullanim_atm`;
CREATE TABLE IF NOT EXISTS `kullanim_atm` (
  `atm_no` int(11) NOT NULL,
  `kullanim_id` int(11) NOT NULL,
  UNIQUE KEY `atm_no` (`atm_no`),
  UNIQUE KEY `kullanim_id` (`kullanim_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanim_atm`
--

INSERT INTO `kullanim_atm` (`atm_no`, `kullanim_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanim_sube`
--

DROP TABLE IF EXISTS `kullanim_sube`;
CREATE TABLE IF NOT EXISTS `kullanim_sube` (
  `sube_no` int(11) NOT NULL,
  `kullanim_id` int(11) NOT NULL,
  UNIQUE KEY `sube_no` (`sube_no`),
  UNIQUE KEY `kullanim_id` (`kullanim_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanim_sube`
--

INSERT INTO `kullanim_sube` (`sube_no`, `kullanim_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nufus`
--

DROP TABLE IF EXISTS `nufus`;
CREATE TABLE IF NOT EXISTS `nufus` (
  `mah_id` int(11) NOT NULL AUTO_INCREMENT,
  `mahalle` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `2014` int(11) NOT NULL,
  `2015` int(11) NOT NULL,
  `2016` int(11) NOT NULL,
  `2017` int(11) NOT NULL,
  `2018` int(11) NOT NULL,
  PRIMARY KEY (`mah_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `nufus`
--

INSERT INTO `nufus` (`mah_id`, `mahalle`, `2014`, `2015`, `2016`, `2017`, `2018`) VALUES
(1, 'Göksu Mah.', 1560, 1803, 2106, 3847, 5860),
(2, 'Yıldız Mah.', 1360, 1935, 2687, 4850, 7583),
(3, 'Buca Koop Mah.', 1936, 2573, 3164, 6751, 9463),
(4, 'Atatürk Mah.', 1329, 1682, 1973, 2463, 3542),
(5, 'Adatepe Mah.', 1857, 2197, 2634, 3421, 4631),
(6, 'Kuruçeşme Mah. ', 1210, 1796, 2469, 3265, 4120),
(7, 'Çamlık Mah.', 1065, 1496, 1788, 2886, 3076),
(8, 'Dicle Mah.', 932, 1146, 1489, 2105, 2943),
(9, 'Zafer Mah.', 540, 988, 1296, 1986, 2570),
(10, 'Cumhuriyet Mah.', 235, 631, 1008, 1736, 2156);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sube`
--

DROP TABLE IF EXISTS `sube`;
CREATE TABLE IF NOT EXISTS `sube` (
  `sube_no` int(11) NOT NULL AUTO_INCREMENT,
  `sube_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sube_adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`sube_no`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sube`
--

INSERT INTO `sube` (`sube_no`, `sube_ad`, `sube_adres`) VALUES
(1, 'Buca Şubesi', 'Buca/İzmir Şubesi'),
(2, 'DEU Tınaztepe Şubesi', 'Dokuz Eylül Üniversitesi-Tınaztepe/İzmir Şubesi '),
(3, 'Gediz Mah. Şubesi', 'Gediz Mahallesi-Buca/İzmir Şubesi'),
(4, 'Menderes Cad. Şubesi', 'Menderes Caddesi/İzmir Şubesi'),
(5, 'Nato Şubesi', 'Nato/İzmir (BŞ) Şubesi'),
(6, 'Stadyum Şubesi', 'Stadyum-Buca/İzmir Şubesi'),
(7, 'Şirinyer Şubesi', 'Şirinyer/İzmir Şubesi'),
(8, 'Yıkıkkemer Şubesi', 'Yıkıkkemer-Buca/İzmir Şubesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sube_kullanim_orani`
--

DROP TABLE IF EXISTS `sube_kullanim_orani`;
CREATE TABLE IF NOT EXISTS `sube_kullanim_orani` (
  `kullanim_id` int(11) NOT NULL,
  `ocak` int(11) NOT NULL,
  `subat` int(11) NOT NULL,
  `mart` int(11) NOT NULL,
  `nisan` int(11) NOT NULL,
  `mayis` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sube_kullanim_orani`
--

INSERT INTO `sube_kullanim_orani` (`kullanim_id`, `ocak`, `subat`, `mart`, `nisan`, `mayis`) VALUES
(1, 1256, 1463, 1263, 1336, 1002),
(2, 1635, 1023, 1423, 1203, 1069),
(3, 1426, 1023, 1203, 1654, 956),
(4, 1236, 1702, 1265, 1054, 1362),
(5, 1423, 1032, 1596, 1263, 896),
(6, 1233, 1026, 1032, 1456, 1256),
(7, 1254, 1565, 1025, 1045, 1563),
(8, 1256, 1862, 1563, 1263, 1035);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
