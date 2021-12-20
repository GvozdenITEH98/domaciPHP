-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 03:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itehdom`
--

-- --------------------------------------------------------

--
-- Table structure for table `automobili`
--

CREATE TABLE `automobili` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `kubikaza` double NOT NULL,
  `konjaza` int(11) NOT NULL,
  `opis` text NOT NULL,
  `kilometraza` int(11) NOT NULL,
  `cena` double NOT NULL,
  `polovan` tinyint(1) NOT NULL,
  `gorivo` varchar(50) NOT NULL,
  `godina` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `automobili`
--

INSERT INTO `automobili` (`id`, `marka`, `naziv`, `kubikaza`, `konjaza`, `opis`, `kilometraza`, `cena`, `polovan`, `gorivo`, `godina`, `img`) VALUES
(1, 'Ford', 'Fiesta', 1.4, 166, 'auto u extra stanju\r\ndva kljuca ...\r\nkupac plaća samo registraciju', 150000, 3500, 1, 'BENZIN', 2018, 'https://images.unsplash.com/photo-1579272154060-4e7a4d0f5033?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=852&q=80'),
(2, 'Opel', 'Corsa D', 1.9, 150, 'Automobil je u odlicnom stanju mehanicki,lepo vuce ,motor lepo radi,ravnomerno i tiho bez cudnih vibracija i zvukova,ne dimi,na trapu je utegnut,nista ne lupa,kvacilo odlicno lepo odvaja,menjac takodje odlican,manuelna klima radi,odlican motor izuzetno zahvalan za odrzavanje i jeftin za registraciju,jako mali potrosac\r\nLimarijski u korektnom stanju sa po nekom sitnom parking ogrebotinom\r\nEnterijer ocuvan,kozni volan,fabricko odlicno ozvucenje sa cd pleyerom sa 2 usb ulaza', 200000, 6500, 1, 'Dizel', 2013, 'https://images.unsplash.com/photo-1579631962852-306c90e1c91f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=658&q=80'),
(3, 'Skoda', 'Superb', 2, 280, '3 – kraki multifunkcionalni kožni servo volan za radio i telefon podesiv u dve ose\r\nKožna ručica menjača\r\nHrom paket\r\nPatosnice\r\nNedeljiva zadnja klupa, deljiv i sklopiv naslon\r\nzadnjeg sedišta\r\nSvetla za čitanje\r\nTri sigurnosna pojasa pozadi\r\nPrednji naslon za ruku\r\nVozačevo i suvozačevo sedište podesivo po visini\r\nTri naslona za glavu pozadi\r\nPriprema za dečije sedište\r\nPaket za pušače ( prednja i zadnja pepeljara )\r\nElektro podesivi, sklopivi i grejani spoljašnji retrovizori sa automatskim zatamnjenjem\r\nComfort telefoniranje\r\nMaxi dot\r\nAirbag za vozača i suvozača, suvozačev airbag sa deaktivacijom\r\nPrednji bočni airbag-ovi\r\nVazdušne zavese\r\nAirbag za kolena vozača\r\nESC\r\nClimatronic - dvozonski klima uređaj sa elektronskom regulacijom\r\n', 1000, 25000, 0, 'Benzin', 2020, 'https://lh3.googleusercontent.com/proxy/146gBlp6jpXvhCjng8WStY_PedgwOE0ASwjnZDdDAyiuNCUz73j6SOfM3rjkOqZfTtvdAxhPVudE7yJOipy9CkvQwJ55g_8en-UmSfVcDnPeJ_IWBhNJxc34iB0Z_H_hHNv-AdHEoLZ6agG_t7S411pR5ik83k7J-NhSWGrpMC8fLegUt_O_mWThxolJ6r6xrjY'),
(6, 'Audi', 'A8', 3, 286, 'AUDI A8 50 TDI LONG, Hybrid,\r\n\r\nVozilo uveženo iz Nemačke od ovlašćenog AUDI Dilera,\r\n\r\nVozilo u najačem paketu opreme\r\n\r\nCena vozilo po cenovniku iznosi 156.936 Eura,\r\n\r\nVozilo je u fabričkoj garanciji do 2024 godine,\r\n\r\nUkoliko u našoj ponudi niste pronašli odgovarajuće vozilo - imamo rešenje za Vas.\r\n\r\nPružamo Vam mogućnost poručivanje modela po Vašoj želji.\r\n\r\nAUTOKOMERC POLOVNA VOZILA\r\n\r\nZa sve dodatne informacije. stojimo Vam na raspolaganju.', 21500, 79990, 1, 'DIZEL', 2019, 'https://wallpaperaccess.com/full/1620241.jpg'),
(7, 'Kia', 'Ceed', 1.6, 110, 'Kia je u fenomenalnom stanju u prvoj je fabrickoj boji bez ostecenja i ogrebotina na karoseriji.\r\nEnterijer je je maksimalno ocuvan,sve je na svom mestu i u funkciji.\r\nU voznji je kao nova,utegnuta,mekano kvacilo,motor radi kao benzinac bez trunke dima.( Motor ima lanac)!\r\nNove zimske gume!!!\r\nKia je u bukvalnom smislu kao nova,bez dodatnih ulaganja.\r\nUradjen je pregled od strane AMSS i dobijeno je uverenje,placeni su troskovi uvoza,prodaje se na ime kupca.', 185248, 6950, 1, 'DIZEL', 2013, 'https://images4.alphacoders.com/788/788489.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motori`
--

CREATE TABLE `motori` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `kubikaza` double NOT NULL,
  `konjaza` int(11) NOT NULL,
  `polovan` tinyint(1) NOT NULL,
  `kilometraza` int(11) NOT NULL,
  `cena` double NOT NULL,
  `img` text NOT NULL,
  `godina` int(11) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motori`
--

INSERT INTO `motori` (`id`, `marka`, `naziv`, `kubikaza`, `konjaza`, `polovan`, `kilometraza`, `cena`, `img`, `godina`, `opis`) VALUES
(1, 'BMW', 'R 1200 C James Bond', 1.2, 61, 1, 52055, 5800, 'https://images3.polovniautomobili.tv/user-images/thumbs/1688/16883345/54653c5c88d9-800x600.jpg', 1999, 'Motor uvezen iz Švajcarske, kupljen od prvog vlasnika. Plaćena carina porez i urađena homologacija, kupcu ostaje samo registracija. Odlično stanje, bez padova farbanja, poliranja, sitni tragovi korišćenja. Originalna kilometraza, moguca provera u BMW-u. Odlične gume i kočnice, dva ključa, ABS, grejanje ručica, maglenke, bmw koferi.... Moguć dogovor oko prevoza. Pozovite za više informacija.'),
(2, 'Triumph ', 'SPRINT 1050', 1.05, 125, 1, 47586, 3490, 'https://c4.wallpaperflare.com/wallpaper/74/787/703/2009-s-t-sprint-triumph-wallpaper-preview.jpg', 2006, '-Triumph u odličnom stanju,bez dodatnih ulaganja sem registracije.\r\n-Kompletno u prvoj boji,bez padova i klizanja,domaćinski održavan.\r\n-Uvoz CH,plaćena je carina i pdv,urađen je obavezan pregled u AMSS.\r\n-Motor ide na ime kupca i kupcu ostaje registracija u svom mestu.\r\n-ABS,bočni Triumph koferi sa unutrašnjim torbama,SW motech tank torba(brzo kačenje na čepu rezervoara).\r\n-Dva ključa,fabrički alat,manual knjižica,4 žmigavca,štender nogare.\r\n-Gume,lanac i lančanici,kočnice,akumulator,sve je u odličnom stanju,bez ulaganja je.\r\n-Cena nije fiksna,može zamena za drugi motocikli uz vašu doplatu.\r\n-Dogovor oko prevoza do kupca.\r\n-Više motora u ponudi.'),
(3, 'Kawasaki', 'Z 1000 R Edition', 1, 141, 1, 2445, 12000, 'https://vistapointe.net/images/kawasaki-z1000-5.jpg', 2017, 'Motorcikl potpuno opremljen karbonskim oplatama, rizominim rucicama, retrovizorima, stitnicima viljiske i deklova, kompletan Akrapovic izduv sa granama i dva topa. Vozen malo, po gradu.\r\nCena novog motorcikla iznosila je 14.500 e, a dodatne opreme 3.500 e, tako da je njegova nabavna vrednost oko 18.000 e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobili`
--
ALTER TABLE `automobili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motori`
--
ALTER TABLE `motori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobili`
--
ALTER TABLE `automobili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `motori`
--
ALTER TABLE `motori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
