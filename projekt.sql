-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Maj 2022, 15:00
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `wiek` int(3) NOT NULL,
  `staz` int(3) NOT NULL,
  `stanowisko` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `wydzial` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `pensja` decimal(10,2) NOT NULL,
  `data_dodania` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `wiek`, `staz`, `stanowisko`, `wydzial`, `pensja`, `data_dodania`) VALUES
(1, 'Jan', 'Kowalski', 50, 12, 'kierownik', 'magazyn', '10432.12', '2022-04-26'),
(2, 'Anna', 'Walkowiak', 29, 5, 'asystentka', 'logistyczyny', '21876.32', '2022-04-26'),
(3, 'Michał', 'Gnaciński', 27, 2, 'programista', 'informatyczny', '18233.22', '2022-04-26'),
(4, 'Tomasz', 'Linuks', 45, 14, 'prezes', 'zarzad', '53231.44', '2022-04-26'),
(5, 'Piotr', 'Ewald', 20, 1, 'programista', 'informatyczny', '16424.32', '2022-04-26'),
(6, 'Marcin', 'Jeżak', 29, 3, 'kierowca', 'Logistyczny', '28284.00', '2022-05-11'),
(7, 'Michał', 'Białas', 32, 5, 'kierownik', 'Magazyn', '84311.00', '2022-05-11');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
