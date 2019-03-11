-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 02, 2018 at 01:38 PM
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
  `phone` varchar(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`userID`, `firstName`, `lastName`, `personalID`, `address`, `postalcode`, `city`, `email`, `phone`, `username`, `password`) VALUES
(20, 'Jesper', 'Orb', '909866-6273', 'Tulegatan 41', 17412, 'Stockholm', 'jesper@orb.com', '073729345', 'JesperOrb', '$2y$10$jeq9.Vz/uCSIAk8JU27qsOuTWPuEB3i2lvFDgtZtyJQO91qzkFQaa');

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
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;