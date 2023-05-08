-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Czas generowania: 08 Maj 2023, 11:12
-- Wersja serwera: 5.7.39
-- Wersja PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gloBlog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `POSTY`
--

CREATE TABLE `POSTY` (
  `id` int(6) UNSIGNED NOT NULL,
  `Tytul` varchar(250) NOT NULL,
  `Opis` varchar(5000) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `serca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `POSTY`
--

INSERT INTO `POSTY` (`id`, `Tytul`, `Opis`, `reg_date`, `serca`) VALUES
(533, 'Pierwszy post na Blogu!', 'Jest to pierwszy post na blogu, zawsze jestem pierwszy', '2023-05-08 09:23:26', 42),
(535, 'Co to jest na czym polega programowanie?', 'Programowanie polega na projektowaniu, tworzeniu, testowaniu i utrzymywaniu kodu źródłowego programów komputerowych oraz urządzeń wyposażonych w mikrokontrolery. Programista w swojej codziennej pracy wykorzystuje wiedzę z wielu dziedzin.', '2023-05-08 09:22:55', 82),
(536, 'Owca', 'Owca[13] (Ovis) – rodzaj ssaka z podrodziny antylop (Antilopinae) w obrębie rodziny wołowatych (Bovidae).\r\n\r\nZasięg występowania\r\nRodzaj obejmuje gatunki występujące w Azji i Ameryce Północnej[14][15][16].\r\n\r\nMorfologia\r\nDługość ciała 94–199 cm, długość ogona 5,5–17 cm, długość ucha 9–14,5 cm, długość tylnej stopy 27,9–46 cm, wysokość w kłębie 68–135 cm; masa ciała samic 25–104 kg, samców 36–175 kg[15].\r\n\r\nSystematyka\r\nEtymologia\r\nOvis: łac. ovis „owca”[17].\r\nAries: łac. aries „baran”[18]. Gatunek typowy: Ovis aries Linnaeus, 1758.\r\nMusimon: gr. μουσμων mousmōn „sardyńskie zwierzę”, najprawdopodobniej muflon[19]. Gatunek typowy: Musimon asiaticus Pallas, 1776 (= Capra ammon Linnaeus, 1758).\r\nMusmon: gr. μουσμων mousmōn „sardyńskie zwierzę”, najprawdopodobniej muflon[19]. Nazwa zastępcza dla Ovis Linnaeus, 1758.\r\nAmmon: gr. Ἄμμων Ámmōn „Amon”, od egipsk. Amon, Amun lub Amen „ten, który jest ukryty”, nazwa Jowisza, czczonego w Afryce pod postacią barana[20]. Nazwa zastępcza dla Ovis Linnaeus, 1758.\r\nIxalus: gr. ιξαλος ixalos „skaczący, zwinny”[21]. Gatunek typowy: Ixalus probaton Ogilby, 1837 (nomen dubium).\r\nCaprovis: zbitka wyrazowa nazw rodzajów: Capra Linnaeus, 1758 (koziorożec) oraz Ovis Linnaeus, 1758 (owca)[22]. Gatunek typowy: Ovis musimon Pallas, 1811 (= Ovis aris Linnaeus, 1758).\r\nArgali: mongolska nazwa dla dzikiej owcy[23]. Gatunek typowy: Aegoceros argali Pallas, 1811 (= Ovis ammon Linnaeus, 1758).\r\nPachyceros: gr. παχυς pakhus „wielki, gruby”[24]; κερας keras, κερατος keratos „róg”[25]. Gatunek typowy: Ovis nivicola Eschscholtz, 1829.\r\n', '2023-05-08 09:23:37', 22),
(537, 'Autor bloga:', 'Jakub Maniak \r\n4Ti/5(Na ten moment)', '2023-05-08 09:22:04', 404),
(538, 'Nowy post', 'to jest najnowszy post!', '2023-05-08 09:23:55', 9),
(539, 'Losowość', 'Wszystkie posty na stronie głównej są losowo wyświetlane!', '2023-05-08 09:22:36', 172),
(540, 'SYSTEM SERC', 'System serc może kiedyś będzie zrobiony. \r\nPozdrawiam!', '2023-05-08 09:28:40', 333);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `POSTY`
--
ALTER TABLE `POSTY`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `POSTY`
--
ALTER TABLE `POSTY`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
