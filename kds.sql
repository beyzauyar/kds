-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 09 Haz 2019, 14:53:00
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kds`
--

DELIMITER $$
--
-- Yordamlar
--
DROP PROCEDURE IF EXISTS `sorgu`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sorgu` ()  NO SQL
SELECT hasta.hasta_ad,hasta.hasta_soyad,ilac.ilac_ad,etken_madde.etken_madde_ad,yanetki.yanetki_ad FROM hasta,recete,ilac,ilac_madde,etken_madde,yanetki_madde,yanetki,hasta_etki WHERE hasta.hasta_id=recete.hasta_id AND recete.ilac_id=ilac.ilac_id AND ilac.ilac_id=ilac_madde.ilac_id AND ilac_madde.etken_madde_id=etken_madde.etken_madde_id AND yanetki_madde.yanetki_id=yanetki.yanetki_id AND yanetki.yanetki_id=hasta_etki.yanetki_id AND hasta.hasta_id=hasta_etki.hasta_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgi`
--

DROP TABLE IF EXISTS `bilgi`;
CREATE TABLE IF NOT EXISTS `bilgi` (
  `rapor_id` int(16) NOT NULL AUTO_INCREMENT,
  `hasta_id` int(16) NOT NULL,
  `hasta_ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `hasta_soyad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `ilac_ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `yanetki_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `etken_madde_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`rapor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bilgi`
--

INSERT INTO `bilgi` (`rapor_id`, `hasta_id`, `hasta_ad`, `hasta_soyad`, `dogum_tarihi`, `ilac_ad`, `aciklama`, `yanetki_ad`, `cinsiyet`, `etken_madde_ad`, `firma_ad`) VALUES
(1, 1, 'Necip', 'Ergungor', '1947-01-01', 'Siprogut', '-', 'Kulak tikanikligi', 'erkek', 'siprofloksasin', 'Bilim Ilac'),
(2, 2, 'Beyza', 'Uyar', '1998-01-01', 'Siprogut', '-', 'Kulak tikanikligi', 'kadin', 'siprofloksasin', 'Bilim Ilac'),
(3, 3, 'Ela', 'Uyar', '2005-05-08', 'Siprogut', '-', 'Kulak agrisi', 'kadin', 'siprofloksasin', 'Bilim Ilac'),
(4, 3, 'Ela', 'Uyar', '2005-05-08', 'Benexol', '-', 'istah artisi', 'kadin', 'b1 vitamini', 'Bayer'),
(5, 4, 'Isil ', 'Uyar', '1977-05-08', 'Benexol', '-', 'istah artisi', 'kadin', 'b1 vitamini', 'Bayer'),
(6, 5, 'buse', 'Demirguresci', '1977-05-08', 'Benexol', '-', 'istah artisi', 'kadin', 'b1 vitamini', 'Bayer'),
(7, 6, 'Mesut', 'Uyar', '1977-05-08', 'Benexol', '-', 'istah artisi', 'kadin', 'b1 vitamini', 'Bayer'),
(8, 6, 'Mesut', 'Uyar', '1977-05-08', 'Benexol', '-', 'istah artisi', 'kadin', 'b1 vitamini', 'Bayer'),
(9, 7, 'Ayse', 'Ferhan', '1983-05-08', 'Benexol', '-', 'istah artisi', 'kadin', 'b1 vitamini', 'Bayer'),
(10, 8, 'Sanem', 'Ferhan', '2000-05-08', 'Benexol', '-', 'istah artisi', 'kadin', 'b1 vitamini', 'Bayer'),
(11, 8, 'Sanem', 'Ferhan', '2000-05-08', 'Benexol', '-', 'Hazimsizlik', 'kadin', 'b1 vitamini', 'Bayer'),
(12, 9, 'Seren', 'Calik', '1990-05-08', 'Benexol', '-', 'Hazimsizlik', 'kadin', 'b1 vitamini', 'Bayer'),
(13, 10, 'Mehmet', 'Calik', '1994-05-08', 'Benexol', '-', 'Bas agrisi', 'erkek', 'b1 vitamini', 'Bayer'),
(14, 10, 'Mehmet', 'Calik', '1994-05-08', 'Benexol', '-', 'Bas agrisi', 'erkek', 'b1 vitamini', 'Bayer'),
(15, 11, 'Yigit', 'Calik', '1994-05-08', 'Benexol', '-', 'yok', 'erkek', 'b1 vitamini', 'Bayer'),
(16, 12, 'Fatma', 'Ergungor', '1957-05-01', 'ventolin', '-', 'Tasikardi', 'kadin', 'salbutamol', 'GSK'),
(17, 13, 'Fatma', 'Ergungor', '1958-05-01', 'Devit-3', '-', 'Bulanti', 'kadin', 'D3 Vitamini', 'Deva'),
(18, 14, 'Hayat', 'Ersoy', '1990-08-01', 'oroferon', '-', 'Bulanti', 'kadin', 'Demir II sulfat', 'Kocak Farma'),
(19, 15, 'Ali', 'Ozsoy', '1942-05-18', 'Fevere', '-', 'Goguste agri', 'kadin', 'Sakkarin Sodyum', 'Gensu Pharma'),
(20, 16, 'Kemal', 'Sayer', '1970-05-18', 'Fevere', '-', 'Goguste agri', 'erkek', 'Sakkarin Sodyum', 'Gensu Pharma'),
(21, 17, 'Sadik', 'Kazoglu', '1950-05-18', 'Fevere', '-', 'Goguste agri', 'erkek', 'Sakkarin Sodyum', 'Gensu Pharma'),
(22, 10, 'Mehmet', 'Calik', '1994-05-08', 'Fevere', '-', 'Yorgunluk', 'erkek', 'Sakkarin Sodyum', 'Gensu Pharma'),
(23, 11, 'Yigit', 'Calik', '1994-05-08', 'ventolin', '-', 'titreme', 'Erkek', 'salbutamol', 'GSK'),
(24, 18, 'Ahmet', 'Kazoglu', '1950-05-18', 'ventolin', '-', 'Bas donmesi', 'erkek', 'salbutamol', 'GSK'),
(25, 19, 'Cemal', 'Kabak', '1989-08-01', 'APRANAX ', '-', 'Hipertansiyon', 'erkek', 'Naproksen sodyum ', 'Abdi Ibrahim'),
(26, 20, '', 'Kazoglu', '1950-05-18', 'APRANAX', '-', 'Kulak Cinlamasi', 'erkek', 'Naproksen Sodyum', 'Abdi Ibrahim'),
(27, 21, 'Selma', 'Kazoglu', '1950-05-18', 'APRANAX', '-', 'Kulak Cinlamasi', 'kadin', 'Naproksen Sodyum', 'Abdi Ibrahim'),
(28, 22, 'Aysel', 'Demirci', '1990-05-18', 'APRANAX', '-', 'Hipertansiyon', 'kadin', 'Naproksen Sodyum', 'Abdi Ibrahim'),
(29, 24, 'Fatma', 'Demirci', '1997-05-18', 'APRANAX', '-', 'Kaslarda Kasılma', 'kadin', 'Naproksen Sodyum', 'Abdi Ibrahim'),
(30, 2, 'Beyza', 'Uyar', '1998-01-01', 'APRANAX', '-', 'Kaslarda Kasılma', 'kadin', 'Naproksen Sodyum', 'Abdi Ibrahim'),
(31, 20, 'Kevser', 'Sol', '1998-01-01', 'Etodolak', '-', 'Mide Yanmasi', 'kadin', 'Tiyokolsikosid', 'Nobel '),
(32, 25, 'Ceren', 'Uyar', '1998-01-01', 'Etodolak', '-', 'Mide Yanmasi', 'kadin', 'Tiyokolsikosid', 'Nobel '),
(33, 26, 'Cemre', 'Ates', '2001-06-08', 'Etodolak', '-', 'El ve ayaklarda sislik', 'kadin', 'Tiyokolsikosid', 'Nobel'),
(34, 27, 'Selin', 'Ates', '1985-06-08', 'Etodolak', '-', 'El ve ayaklarda sislik', 'kadin', 'Tiyokolsikosid', 'Nobel'),
(35, 28, 'Fergel', 'Ates', '1988-06-08', 'Etodolak', '-', 'Karin Agrisi', 'kadin', 'Tiyokolsikosid', 'Nobel'),
(36, 28, 'Fergel', 'Ates', '1988-06-08', 'Aksef', '-', 'Hazimsizlik', 'kadin', 'Sefuroksim', 'Nobel'),
(37, 2, 'Beyza', 'Uyar', '1998-01-01', 'Aksef', '-', 'Hazimsizlik', 'kadin', 'Sefuroksim', 'Nobel'),
(38, 4, 'Isil', 'Uyar', '1977-05-08', 'Aksef', '-', 'El ve ayaklarda sislik', 'kadin', 'Sefuroksim', 'Nobel'),
(39, 4, 'Isil', 'Uyar', '1977-05-08', 'Aspirin', '-', 'Mide kanamasi', 'kadin', 'ASA', 'Bayer'),
(40, 5, 'Buse', 'Demirguresci', '1977-05-08', 'Aspirin', '-', 'Mide kanamasi', 'kadin', 'ASA', 'Bayer'),
(41, 6, 'Mesut', 'Uyar', '1977-05-08', 'Aspirin', '-', 'Bagirsak kanamasi', 'erkek', 'ASA', 'Bayer'),
(42, 29, 'busra ', 'demirguresci', '1997-01-01', 'Ventide', '-', 'Kalp Krizi', 'kadin', 'beklometazon dipropiyonat BP', 'GSK'),
(43, 1, 'Necip ', 'Ergungor', '1947-01-01', 'Ventide', '-', 'Kalp Krizi', 'erkek', 'beklometazon dipropiyonat BP', 'GSK'),
(44, 2, 'Beyza ', 'Uyar', '1998-01-01', 'Ventide', '-', 'Kalp Krizi', 'kadin', 'beklometazon dipropiyonat BP', 'GSK'),
(45, 4, 'Beyza ', 'Uyar', '1977-05-08', 'Ventide', '-', 'Bogazda Sislik', 'kadin', 'beklometazon dipropiyonat BP', 'GSK'),
(46, 30, 'Can ', 'Aydin', '1970-01-01', 'Devit-3', '-', 'istah artisi', 'erkek', 'D3 Vitamini', 'Deva'),
(47, 7789, 'ela', 'Demirguresci', '0001-01-01', 'arveles', 'sdf', 'istah artisi', 'kadin', 'Diklofenak potasyum', 'Nobel');

--
-- Tetikleyiciler `bilgi`
--
DROP TRIGGER IF EXISTS `etken`;
DELIMITER $$
CREATE TRIGGER `etken` BEFORE INSERT ON `bilgi` FOR EACH ROW INSERT INTO etken_madde(etken_madde_ad)
VALUES (new.etken_madde_ad)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `has`;
DELIMITER $$
CREATE TRIGGER `has` BEFORE INSERT ON `bilgi` FOR EACH ROW INSERT INTO hasta(hasta_id,hasta_ad,hasta_soyad,dogum_tarihi,cinsiyet)
VALUES (new.hasta_id,new.hasta_ad,new.hasta_soyad,new.dogum_tarihi,new.cinsiyet)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `ilac_ekleme`;
DELIMITER $$
CREATE TRIGGER `ilac_ekleme` BEFORE INSERT ON `bilgi` FOR EACH ROW INSERT INTO ilac(ilac_ad,firma_ad)
VALUES (new.ilac_ad,new.firma_ad)
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `yan`;
DELIMITER $$
CREATE TRIGGER `yan` BEFORE INSERT ON `bilgi` FOR EACH ROW INSERT INTO yanetki(yanetki_ad,aciklama)
VALUES (new.yanetki_ad,aciklama)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etken_madde`
--

DROP TABLE IF EXISTS `etken_madde`;
CREATE TABLE IF NOT EXISTS `etken_madde` (
  `etken_madde_id` int(16) NOT NULL AUTO_INCREMENT,
  `etken_madde_ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`etken_madde_id`)
) ENGINE=InnoDB AUTO_INCREMENT=592 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etken_madde`
--

INSERT INTO `etken_madde` (`etken_madde_id`, `etken_madde_ad`) VALUES
(1, 'atomoksetin'),
(26, 'Diklofenak potasyum'),
(27, 'Fluoksetin'),
(28, 'Demir II Sulfat'),
(29, 'Deksketoprofen'),
(30, 'Amoksisilin (INN)'),
(31, 'Naproksen sodyum'),
(32, 'Hidroksizin dihidroklor'),
(33, 'Laktoz monohidrat'),
(34, 'Titanyum dioksit (E 171)'),
(35, 'Sefaklor monohidrat'),
(36, 'Sodyum hidrojen sitrat monobazik'),
(37, 'Sodyum hidrojen karbonat'),
(38, 'Sodyum sulfat anhidrus'),
(39, 'Sodyum siklamat'),
(40, 'Sakkarin sodyum'),
(41, 'siprofloksasin'),
(42, 'Etodolak'),
(44, 'Sodyum nişasta glikolat'),
(45, 'Diklofenak potasyum'),
(46, 'SÃ¼kroz'),
(47, 'Essitalopram'),
(49, 'Fluoksetin'),
(51, 'Deksketoprofen '),
(52, 'D3 Vitamini'),
(72, 'siprofloksasin hidroklorur'),
(508, 'atomoksetin'),
(510, '-'),
(511, '-'),
(512, '-'),
(513, '-'),
(514, '-'),
(515, '-'),
(516, '-'),
(517, '-'),
(518, '-'),
(519, '-'),
(520, 'siprofloksasin'),
(521, 'siprofloksasin'),
(522, 'siprofloksasin'),
(523, 'siprofloksasin'),
(524, 'siprofloksasin'),
(525, 'b1 vitamini'),
(526, 'b1 vitamini'),
(527, 'b1 vitamini'),
(528, 'b1 vitamini'),
(529, 'b1 vitamini'),
(530, 'b1 vitamini'),
(531, 'b1 vitamini'),
(532, 'b1 vitamini'),
(533, 'b1 vitamini'),
(534, 'b1 vitamini'),
(535, 'b1 vitamini'),
(536, 'b1 vitamini'),
(538, 'salbutamol'),
(540, 'D3 Vitamini'),
(541, 'Demir II sulfat'),
(542, 'Sakkarin Sodyum'),
(543, 'Sakkarin Sodyum'),
(545, 'Sakkarin Sodyum'),
(546, 'Sakkarin Sodyum'),
(548, 'salbutamol'),
(552, 'salbutamol'),
(553, 'Naproksen sodyum '),
(558, 'Naproksen Sodyum'),
(560, 'Naproksen Sodyum'),
(561, 'Naproksen Sodyum'),
(562, 'Naproksen Sodyum'),
(563, 'Naproksen Sodyum'),
(571, 'Tiyokolsikosid'),
(573, 'Tiyokolsikosid'),
(574, 'Tiyokolsikosid'),
(575, 'Tiyokolsikosid'),
(576, 'Tiyokolsikosid'),
(578, 'Sefuroksim'),
(580, 'Sefuroksim'),
(581, 'Sefuroksim'),
(582, 'ASA'),
(583, 'ASA'),
(584, 'ASA'),
(585, 'beklometazon dipropiyonat BP'),
(586, 'beklometazon dipropiyonat BP'),
(588, 'beklometazon dipropiyonat BP'),
(589, 'beklometazon dipropiyonat BP'),
(590, 'D3 Vitamini'),
(591, 'Diklofenak potasyum');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hasta`
--

DROP TABLE IF EXISTS `hasta`;
CREATE TABLE IF NOT EXISTS `hasta` (
  `hasta_id` int(16) NOT NULL AUTO_INCREMENT,
  `hasta_ad` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hasta_soyad` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `cinsiyet` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`hasta_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7790 DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `hasta`
--

INSERT INTO `hasta` (`hasta_id`, `hasta_ad`, `hasta_soyad`, `dogum_tarihi`, `cinsiyet`) VALUES
(1, 'Necip ', 'Ergungor', '1947-01-01', 'erkek'),
(2, 'Beyza ', 'Uyar', '1998-01-01', 'kadin'),
(4, 'Beyza ', 'Uyar', '1977-05-08', 'kadin'),
(5, 'Buse', 'Demirguresci', '1977-05-08', 'kadin'),
(6, 'Mesut', 'Uyar', '1977-05-08', 'erkek'),
(10, 'Mehmet', 'Calik', '1994-05-08', ''),
(11, 'Yigit', 'Calik', '1994-05-08', 'Erkek'),
(13, 'Fatma', 'Ergungor', '1958-05-01', 'kadin'),
(14, 'Hayat', 'Ersoy', '1990-08-01', 'kadin'),
(15, 'Ali', 'Ozsoy', '1942-05-18', 'kadin'),
(16, 'Kemal', 'Sayer', '1970-05-18', ''),
(17, 'Sadik', 'Kazoglu', '1950-05-18', 'erkek'),
(18, 'Ahmet', 'Kazoglu', '1950-05-18', 'erkek'),
(19, 'Cemal', 'Kabak', '1989-08-01', 'erkek'),
(20, 'Kevser', 'Sol', '1998-01-01', 'kadin'),
(21, 'Selma', 'Kazoglu', '1950-05-18', 'kadin'),
(22, 'Aysel', 'Demirci', '1990-05-18', 'kadin'),
(24, 'Fatma', 'Demirci', '1997-05-18', 'kadin'),
(25, 'Ceren', 'Uyar', '1998-01-01', 'kadin'),
(26, 'Cemre', 'Ates', '2001-06-08', 'kadin'),
(27, 'Selin', 'Ates', '1985-06-08', 'kadin'),
(28, 'Fergel', 'Ates', '1988-06-08', 'kadin'),
(29, 'busra ', 'demirguresci', '1997-01-01', 'kadin'),
(30, 'Can ', 'Aydin', '1970-01-01', 'erkek'),
(7789, 'ela', 'Demirguresci', '0001-01-01', 'kadin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hasta_etki`
--

DROP TABLE IF EXISTS `hasta_etki`;
CREATE TABLE IF NOT EXISTS `hasta_etki` (
  `hasta_id` int(16) NOT NULL,
  `yanetki_id` int(16) NOT NULL,
  `yanetki_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  KEY `hasta_id` (`hasta_id`),
  KEY `yanetki_id` (`yanetki_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilac`
--

DROP TABLE IF EXISTS `ilac`;
CREATE TABLE IF NOT EXISTS `ilac` (
  `ilac_id` int(16) NOT NULL AUTO_INCREMENT,
  `ilac_ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `firma_ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ilac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11203 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilac`
--

INSERT INTO `ilac` (`ilac_id`, `ilac_ad`, `firma_ad`) VALUES
(1, 'atominex', 'Zentiva'),
(2, 'Prozac', 'Lilly'),
(3, 'oroferon', 'Kocak Farma'),
(4, 'ventolin', 'GSK'),
(5, 'atarax', 'UCB'),
(6, 'calpol', 'Kocak Farma'),
(7, 'kloroben', 'Drogsan'),
(8, 'Fevere ', 'Gensu Pharma'),
(9, 'AUGMENTIN BID 1000 mg 10 film tablet', 'GSK'),
(10, 'APRANAX FORTE 550 mg 20 tablet ', 'Abdiibrahim'),
(11, 'CEC 1000 mg 20 efervesan tablet ', 'Hexal'),
(12, 'CIPRO 500 mg 14 tablet', 'Biofarma'),
(13, 'ETOPAN 500 mg 14 film tablet ', 'Zentiva'),
(14, 'CATAFLAM 50 mg 20 draje', 'Novartis'),
(15, 'CIPRALEX 10 mg 28 tablet', 'Lundbeck'),
(16, 'arveles', 'A. Menarini Manufacturing'),
(17, 'Devit-3', 'Deva'),
(18, 'Siprogut ', 'Bilim Ilac'),
(19, 'lustral', 'Pfizer'),
(11149, 'ventolin', 'GSK'),
(11151, 'Devit-3', 'Deva'),
(11152, 'oroferon', 'Kocak Farma'),
(11153, 'Fevere', 'Gensu Pharma'),
(11157, 'Fevere', 'Gensu Pharma'),
(11159, 'ventolin', 'GSK'),
(11164, 'APRANAX ', 'Abdi Ä°brahim'),
(11182, 'Etodolak', 'Nobel '),
(11191, 'Aksef', 'Nobel'),
(11200, 'Ventide', 'GSK'),
(11201, 'Devit-3', 'Deva'),
(11202, 'arveles', 'Nobel');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilac_madde`
--

DROP TABLE IF EXISTS `ilac_madde`;
CREATE TABLE IF NOT EXISTS `ilac_madde` (
  `etken_madde_id` int(16) NOT NULL,
  `ilac_id` int(16) NOT NULL,
  KEY `etken_madde_id` (`etken_madde_id`),
  KEY `ilac_id` (`ilac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilac_madde`
--

INSERT INTO `ilac_madde` (`etken_madde_id`, `ilac_id`) VALUES
(27, 2),
(28, 3),
(30, 9),
(34, 5),
(33, 5),
(32, 5),
(35, 11),
(36, 11),
(37, 11),
(38, 11),
(39, 11),
(40, 8),
(41, 12),
(33, 13),
(42, 13),
(44, 13),
(45, 14),
(46, 14),
(47, 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `recete`
--

DROP TABLE IF EXISTS `recete`;
CREATE TABLE IF NOT EXISTS `recete` (
  `hasta_id` int(16) NOT NULL,
  `tarih` date NOT NULL,
  `ilac_id` int(11) NOT NULL,
  KEY `hasta_id` (`hasta_id`),
  KEY `ilac_id` (`ilac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yanetki`
--

DROP TABLE IF EXISTS `yanetki`;
CREATE TABLE IF NOT EXISTS `yanetki` (
  `yanetki_id` int(16) NOT NULL AUTO_INCREMENT,
  `yanetki_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`yanetki_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2644 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yanetki`
--

INSERT INTO `yanetki` (`yanetki_id`, `yanetki_ad`, `aciklama`) VALUES
(2560, 'uykusuzluk', ''),
(2562, 'istah artisi', ''),
(2563, 'istah artisi', ''),
(2564, 'TaÅŸikardi', ''),
(2565, 'Karin Agrisi', ''),
(2566, 'Kansizlik', ''),
(2567, 'Kansizlik', ''),
(2568, 'Kansizlik', ''),
(2569, 'Kansizlik', ''),
(2570, 'Kansizlik', ''),
(2571, 'Kulak tikanikligi', ''),
(2572, 'Kulak tikanikligi', ''),
(2573, 'Kulak tikanikligi', ''),
(2574, 'Kulak tikanikligi', ''),
(2575, 'Kulak tikanikligi', ''),
(2576, 'Kulak agrisi', ''),
(2577, 'istah artisi', ''),
(2578, 'istah artisi', ''),
(2579, 'istah artisi', ''),
(2580, 'istah artisi', ''),
(2581, 'istah artisi', ''),
(2582, 'istah artisi', ''),
(2583, 'istah artisi', ''),
(2584, 'Hazimsizlik', ''),
(2585, 'Hazimsizlik', ''),
(2586, 'Bas agrisi', ''),
(2587, 'Bas agrisi', ''),
(2588, 'yok', ''),
(2590, 'Tasikardi', ''),
(2592, 'Bulanti', ''),
(2593, 'Bulanti', ''),
(2594, 'Goguste agri', ''),
(2595, 'Goguste agri', ''),
(2597, 'Goguste agri', ''),
(2598, 'Yorgunluk', ''),
(2600, 'titreme', ''),
(2604, 'Bas donmesi', ''),
(2605, 'Hipertansiyon', ''),
(2610, 'Kulak Cinlamasi', ''),
(2612, 'Kulak Cinlamasi', ''),
(2613, 'Hipertansiyon', ''),
(2614, 'Kaslarda Kasılma', ''),
(2615, 'Kaslarda Kasılma', ''),
(2623, 'Mide Yanmasi', ''),
(2625, 'Mide Yanmasi', ''),
(2626, 'El ve ayaklarda sislik', ''),
(2627, 'El ve ayaklarda sislik', ''),
(2628, 'Karin Agrisi', ''),
(2630, 'Hazimsizlik', ''),
(2632, 'Hazimsizlik', ''),
(2633, 'El ve ayaklarda sislik', ''),
(2634, 'Mide kanamasi', ''),
(2635, 'Mide kanamasi', ''),
(2636, 'Bagirsak kanamasi', ''),
(2637, 'Kalp Krizi', ''),
(2638, 'Kalp Krizi', ''),
(2640, 'Kalp Krizi', ''),
(2641, 'Bogazda Sislik', ''),
(2642, 'istah artisi', ''),
(2643, 'istah artisi', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yanetki_madde`
--

DROP TABLE IF EXISTS `yanetki_madde`;
CREATE TABLE IF NOT EXISTS `yanetki_madde` (
  `etken_madde_id` int(16) NOT NULL,
  `yanetki_id` int(16) NOT NULL,
  KEY `yanetki_id` (`yanetki_id`),
  KEY `etken_madde_id` (`etken_madde_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `hasta_etki`
--
ALTER TABLE `hasta_etki`
  ADD CONSTRAINT `hasta_etki_ibfk_1` FOREIGN KEY (`hasta_id`) REFERENCES `hasta` (`hasta_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasta_etki_ibfk_2` FOREIGN KEY (`yanetki_id`) REFERENCES `yanetki` (`yanetki_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `ilac_madde`
--
ALTER TABLE `ilac_madde`
  ADD CONSTRAINT `ilac_madde_ibfk_1` FOREIGN KEY (`etken_madde_id`) REFERENCES `etken_madde` (`etken_madde_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ilac_madde_ibfk_2` FOREIGN KEY (`ilac_id`) REFERENCES `ilac` (`ilac_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `recete`
--
ALTER TABLE `recete`
  ADD CONSTRAINT `recete_ibfk_1` FOREIGN KEY (`hasta_id`) REFERENCES `hasta` (`hasta_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recete_ibfk_2` FOREIGN KEY (`ilac_id`) REFERENCES `ilac` (`ilac_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `yanetki_madde`
--
ALTER TABLE `yanetki_madde`
  ADD CONSTRAINT `yanetki_madde_ibfk_1` FOREIGN KEY (`yanetki_id`) REFERENCES `yanetki` (`yanetki_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `yanetki_madde_ibfk_2` FOREIGN KEY (`etken_madde_id`) REFERENCES `etken_madde` (`etken_madde_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
