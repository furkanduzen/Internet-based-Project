-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Haz 2023, 17:13:26
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `unikanews`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` text COLLATE utf8_turkish_ci NOT NULL,
  `mphoto` text COLLATE utf8_turkish_ci NOT NULL,
  `msubject` text COLLATE utf8_turkish_ci NOT NULL,
  `mmessage` text COLLATE utf8_turkish_ci NOT NULL,
  `mdate` text COLLATE utf8_turkish_ci NOT NULL,
  `goster` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `names`, `mphoto`, `msubject`, `mmessage`, `mdate`, `goster`) VALUES
(2, 'deneme', 'safranboluevleri.jpg', 'deneme', 'fgkldfşdlfmbşsdlfmbsdfşlbmsdğiflşbmsdfibmdsfği sfdbşmfsdbşilmsfbilşfmsdbşdflmsbişdfmsbidmsbis sifblşmösfdşbimösşdfbmösdüfşlbösüd,bds fdsblöfsdblöfbüösfdbüösfbüslöfbüsdföbsfdbösf sfblösfübösfübösfübösfüdböüföbföbf bööbfböfsöbsföbsföbsföbsüdpfbösfdübösüpföb', '03.06.2023', 1),
(4, 'admin', 'Bisiklet Festivali_map convention.jpg', 'Bisiklet Festivali', 'gkldfşdlfmbşsdlfmbsdfşlbmsdğiflşbmsdfibmdsfği sfdbşmfsdbşilmsfbilşfmsdbşdflmsbişdfmsbidmsbis sifblşmösfdşbimösşdfbmösdüfşlbösüd,bds fdsblöfsdblöfbüösfdbüösfbüslöfbüsdföbsfdbösf sfblösfübösfübösfübösfüdböüföbföbf', '03.06.2023', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_turkish_ci NOT NULL,
  `pass` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `bdate` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`, `bdate`) VALUES
(1, 'furkan', 'f1234', 'furkan@gmail.com', '29.05.2023'),
(2, 'admin', 'admin', 'furkan@hotmail.com', '29.05.2023'),
(3, 'furkand7_fd', '88888888', 'furkanduzen@yahoo.com','29.05.2023');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
