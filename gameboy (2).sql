-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Feb 25. 11:06
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `gameboy`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `games`
--

CREATE TABLE `games` (
  `g_ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `type_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `games`
--

INSERT INTO `games` (`g_ID`, `name`, `pic`, `type_ID`) VALUES
(1, 'Raid Over Moscow', '/pic/rom.jpg', 1),
(2, 'GhostBusters', '/pic/gb.jpg', 2),
(3, 'Wizzard of Wor', '/pic/wow.jpg', 1),
(4, 'Soccer', '/pic/s.jpg', 3),
(5, 'Pacman', '/pic/pm.jpg', 1),
(6, 'California Games', '/pic/cg.jpg', 3);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `type`
--

CREATE TABLE `type` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) DEFAULT 'UNKNOWN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `type`
--

INSERT INTO `type` (`t_id`, `t_name`) VALUES
(1, 'arcade'),
(2, 'action'),
(3, 'sport');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`g_ID`);

--
-- A tábla indexei `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
