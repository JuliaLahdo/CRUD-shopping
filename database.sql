-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 02, 2018 at 01:30 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `galant`
--

-- --------------------------------------------------------

--
-- Table structure for table `addToCart`
--

CREATE TABLE `addToCart` (
  `selectedProductID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE `userInfo` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `personalID` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`userID`, `firstName`, `lastName`, `personalID`, `address`, `postalcode`, `city`, `email`, `phone`, `username`, `password`) VALUES
(9, 'Julia', 'Lahdo', '889900-7722', 'Hättkvarnsgatan 7 lgh 1302', 17741, 'Järfälla', 'julia.lahdo@live.se', 765593277, 'Julias', '$2y$10$QmO72FjmdAWa1aPmF2rRd.Gi7lJQtyP4kOQgKKGQ4Nr3HZ.NFTLCG'),
(13, 'Niklas', 'Floren', '7384342', 'Hejgatan 2', 18872, 'Järfälla', 'nikki@gmail.com', 93849348, 'Nikki', '$2y$10$B2c4XN/F8jjaM4HjawDNNOSCWCGevw2Fir/BQiPGOIp3qHSFFpSbm'),
(14, 'Ulrics ', 'Bonnerstig', '19890528-6624', 'Bennebolsgatan 8', 16350, 'Spånga', 'u.bonnerstig@gmail.com', 727453322, 'liolei', '$2y$10$Nv4Xp6D1w6dMU04GI7r1PO4F4QmJD0Se3LivaD98FQfGcSbcXIeue'),
(15, 'Jesper', 'Orb', '900320-4499', 'Tulegatan 41', 13253, 'Stockholm', 'jesper@gmail.com', 738956422, 'JesperOrb', '$2y$10$.fFdRcRG4/3nxorB6gXf2eNLOShJ6lurC4nFAwm6lW70cArUvqrj6'),
(16, 'Aladdin', 'Kanngo', '199212083274', 'Luthagesplanaden 25', 75225, 'Uppsala', 'fatcat@hotmail.com', 708436362, 'fatcat', '$2y$10$QUJygzKOkOHcKmoLC4j.vu.Nzk5/U1DZzKyg9fdyDyntQXj9Dh6l.'),
(17, 'Erik', 'Målsäter', '337373-8888', 'Loremvägen 39', 19197, 'Orten', 'Sollentuna@bäst.se', 56789, 'yeee', '$2y$10$CBFJztZa.4ExJQgtm.byJ.f8u61DL3SOUONQ7BE5h5uBEaVZMFew.'),
(18, 'rebecca', 'kling', '19890807667', 'frejgatan 17', 11349, 'Stockholm', 'jesper@gmail.com', 738956422, 'rebecca', '$2y$10$osbN7knY7N3pURdVNrb2seWqbj.s2ppbuX6PK/NnYVGf408HMPgTK'),
(19, 'ronja', 'myhr', '19921202', 'hej', 5, 'mtown', 'ronja@mail.se', 666, 'rmyhr', '$2y$10$KrgsH3ud93.O0IPiihyy3Odrywmi9PeJWV726pHi612szTHlnJTMi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addToCart`
--
ALTER TABLE `addToCart`
  ADD PRIMARY KEY (`selectedProductID`);

--
-- Indexes for table `userInfo`
--
ALTER TABLE `userInfo`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addToCart`
--
ALTER TABLE `addToCart`
  MODIFY `selectedProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;