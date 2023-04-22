-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 01:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capitalxch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `image_id` varchar(100) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_id`, `image`) VALUES
(38, '11665586685.jpeg', '21665586685.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kyc`
--

CREATE TABLE IF NOT EXISTS `kyc` (
  `kyc_id` int(11) NOT NULL,
  `kyc_user_id` varchar(200) DEFAULT NULL,
  `kyc_session` varchar(200) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_number` mediumtext DEFAULT NULL,
  `country_code` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `year` varchar(200) DEFAULT NULL,
  `month` varchar(200) DEFAULT NULL,
  `day` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `zip_code` varchar(200) DEFAULT NULL,
  `apartment_number` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `image` varchar(300) DEFAULT NULL,
  `image2` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT 'pending' COMMENT 'pending, active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

CREATE TABLE IF NOT EXISTS `nft` (
  `nft_id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft`
--

INSERT INTO `nft` (`nft_id`, `image`, `name`, `amount`, `description`, `date`) VALUES
(2, '2E609D44-9A83-4893-8F08-C0CC114E7B05.jpeg', 'Abstraction 259', '2.18', 'Lorem ipsum dolor sit amet consectetur adipisicing...flex', '2022-09-12 17:30:51'),
(3, '887EE526-C9B9-45E0-B6F7-35A18D8A4409-1-300x300.png', 'Abstraction', '2.18', 'Lorem ipsum dolor sit amet consectetur adipisicing...', '2022-09-12 17:31:28'),
(4, '1D03CA7C-BD60-4067-BAC4-C24EDEDBDFE7-1-300x300.png', 'Abstraction 284', '0.18', 'Lorem ipsum dolor sit amet consectetur adipisicing...', '2022-09-12 17:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `nft_collections`
--

CREATE TABLE IF NOT EXISTS `nft_collections` (
  `collections_id` int(11) NOT NULL,
  `collections_name` varchar(200) DEFAULT NULL,
  `collections_image` varchar(200) DEFAULT NULL,
  `collections_price` varchar(200) DEFAULT NULL,
  `collections_bid_price` varchar(200) DEFAULT NULL,
  `collections_status` varchar(200) DEFAULT 'pending',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft_collections`
--

INSERT INTO `nft_collections` (`collections_id`, `collections_name`, `collections_image`, `collections_price`, `collections_bid_price`, `collections_status`, `date`) VALUES
(2, 'Abstraction', '2E609D44-9A83-4893-8F08-C0CC114E7B05.jpeg', '2.18', '245', 'pending', '2022-10-08 01:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(200) DEFAULT NULL,
  `package_min` varchar(200) DEFAULT NULL,
  `package_max` varchar(200) DEFAULT NULL,
  `package_interest` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_min`, `package_max`, `package_interest`) VALUES
(1, 'Silver', '500', '4999', '10'),
(2, 'Gold', '5000', '14999', '15'),
(3, 'Diamond', '15000', '49999', '20'),
(4, 'Elite', '50000', '100000', '25');

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE IF NOT EXISTS `profit` (
  `profit_id` int(11) NOT NULL,
  `profit_user_id` varchar(200) DEFAULT NULL,
  `profit_amount` varchar(200) DEFAULT NULL,
  `start` varchar(200) DEFAULT NULL,
  `end` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT 'inprogress',
  `stage` varchar(300) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profit`
--

INSERT INTO `profit` (`profit_id`, `profit_user_id`, `profit_amount`, `start`, `end`, `status`, `stage`, `date`) VALUES
(9, 'xcode', '100', '29', '30', 'inprogress', 'increase', '2022-09-23 09:10:43'),
(10, 'Frnak', '50', '29', '30', 'inprogress', 'increase', '2022-09-23 09:11:12'),
(11, 'Frnak', '50', '29', '30', 'inprogress', 'increase', '2022-09-23 09:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE IF NOT EXISTS `random` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `country` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `amount` varchar(300) DEFAULT NULL,
  `text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `random`
--

INSERT INTO `random` (`id`, `name`, `country`, `type`, `amount`, `text`) VALUES
(1, 'Jennifer ', 'USA', 'deposited', '5000', 'from USA just withdrew $10,200'),
(2, 'Frank Greg', 'England', 'withdrew', '2000', 'from England just deposited $50,000 \n'),
(3, 'Luke Fredrick', 'Uganda', 'deposited', '8400', 'from Uganda just created an account\n'),
(4, 'Austin Gz', 'Hungary', 'deposited', '2700', 'from Hungary just deposited $20,500'),
(5, 'Willson Quest', 'London', 'withdrew', '5400', 'from London just withdrew $63,500 \n'),
(6, 'Wealth John', 'South Africa', 'withdrew', '2300', 'from London just withdrew $90,200'),
(7, 'Amos Nat', 'Australia', 'deposited', '3400', 'from Australia just withdrew $60,550'),
(8, 'Jason ', 'Denmark', 'withdrew', '3900', 'from Denmark just deposited $17,350'),
(9, 'Kelvin ', 'Canada', 'deposited', '3900', 'from Canada just deposited $30,300'),
(10, 'Michael ', 'Belgium', 'withdrew', '10500', 'from USA just created an account'),
(11, 'Andrew', 'India', 'deposited', '11400', 'from India just withdrew $65,900'),
(12, 'Peter Steve', 'Ireland', 'withdrew', '12500', 'from Ireland just withdrew $105,000'),
(13, 'Wolly Scott', 'Australia', 'deposited', '7300', 'from USA just deposited $15,000'),
(14, 'Godson Lupez', 'Denmark', 'withdrew', '5900', 'from USA just deposited $35,300'),
(15, NULL, NULL, NULL, NULL, 'from USA  just deposited $38,100'),
(16, NULL, NULL, NULL, NULL, 'from Brazil just withdrew $56,000'),
(17, NULL, NULL, NULL, NULL, 'from France just withdrew $67,900'),
(18, NULL, NULL, NULL, NULL, 'from France just withdrew $50,500'),
(19, NULL, NULL, NULL, NULL, 'from Netherland just deposited $67,950 \n'),
(20, NULL, NULL, NULL, NULL, 'from Netherland just deposited $27,500 \n'),
(21, NULL, NULL, NULL, NULL, 'from USA just withdrew $58,000'),
(22, NULL, NULL, NULL, NULL, 'from USA just withdrew $33,620'),
(23, NULL, NULL, NULL, NULL, 'from USA just created an account'),
(24, NULL, NULL, NULL, NULL, 'from USA just created an account'),
(25, NULL, NULL, NULL, NULL, 'from London just withdrew $63,500 \n'),
(26, NULL, NULL, NULL, NULL, 'Fredric M. from Tunisia just withdrew $45,000 \r\n'),
(27, NULL, NULL, NULL, NULL, 'Fernandez David from Tunisia just created an account'),
(28, NULL, NULL, NULL, NULL, 'Fernandez David from Tunisia just deposited $23,600'),
(29, NULL, NULL, NULL, NULL, 'Chamberlain from Tunisia just withdrew $50,900'),
(30, NULL, NULL, NULL, NULL, 'Gregory F. from London just withdrew $40,100'),
(31, NULL, NULL, NULL, NULL, 'Barbara M. from London just deposited $15,000'),
(32, NULL, NULL, NULL, NULL, 'Barbara M. from London just created an account'),
(33, NULL, NULL, NULL, NULL, 'McCann from London just deposited $25,000'),
(34, NULL, NULL, NULL, NULL, 'Barry J. from Sweden just withdrew $160,000'),
(35, NULL, NULL, NULL, NULL, 'Leonard N. from Sweden just withdrew $80,000'),
(36, NULL, NULL, NULL, NULL, 'Gardner from France just withdrew $85,000'),
(37, NULL, NULL, NULL, NULL, 'Zachary M. from France just withdrew $55,000'),
(38, NULL, NULL, NULL, NULL, 'Elizabeth G. from USA just created an account'),
(39, NULL, NULL, NULL, NULL, 'Nat Fred from Australia just withdrew $46,000'),
(40, NULL, NULL, NULL, NULL, 'Jacobs G. from USA just withdrew $66,000');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `website_name` varchar(250) DEFAULT NULL,
  `website_url` varchar(250) DEFAULT NULL,
  `website_email` varchar(250) DEFAULT NULL,
  `admin_mail` varchar(250) DEFAULT NULL,
  `tidio_link` varchar(250) DEFAULT NULL,
  `bitcoin_address` varchar(250) DEFAULT NULL,
  `eth_address` varchar(300) DEFAULT NULL,
  `usdt_address` varchar(300) DEFAULT NULL,
  `withdrawal_pin` varchar(300) DEFAULT NULL,
  `bitcoin_img` varchar(300) DEFAULT NULL,
  `eth_img` varchar(300) DEFAULT NULL,
  `usdt_img` varchar(300) DEFAULT NULL,
  `logo_img` varchar(300) DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `website_url`, `website_email`, `admin_mail`, `tidio_link`, `bitcoin_address`, `eth_address`, `usdt_address`, `withdrawal_pin`, `bitcoin_img`, `eth_img`, `usdt_img`, `logo_img`, `token`) VALUES
(1, 'ElitecryptoFX', 'https://elitecryptofxtrade.com/en', 'support@elitecryptofxtrade.com', 'orjikeyz7@gmail.com', 'code.tidio.co/zdpvdsrtypf3xit2rnt351vowt1kd7zk.js1', '33NTZr9jHUv1W55xbbLbgEhTatQyYRxybR', 'QQ33NTZr9jHUv1W55xbbLbgEhTatQyYRxybR', 'ZZ33NTZr9jHUv1W55xbbLbgEhTatQyYRxybR', '284021', 'qrcode1666195614.jpg', 'qrcode11666195614.jpg', 'qrcode21666195614.jpg', 'dashboard-logo1673605480.png', '915423');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_user_id` varchar(200) DEFAULT NULL,
  `transaction_name` varchar(200) DEFAULT NULL,
  `transaction_type` varchar(200) DEFAULT NULL,
  `transaction_status` varchar(200) DEFAULT NULL,
  `t_mode` varchar(300) DEFAULT NULL,
  `transaction_amount` varchar(200) DEFAULT NULL,
  `eth` varchar(300) DEFAULT NULL,
  `wallet_address` varchar(300) DEFAULT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp(),
  `trade_won` varchar(200) DEFAULT '0',
  `trade_loss` varchar(200) DEFAULT '0',
  `method` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `transaction_user_id`, `transaction_name`, `transaction_type`, `transaction_status`, `t_mode`, `transaction_amount`, `eth`, `wallet_address`, `transaction_date`, `trade_won`, `trade_loss`, `method`) VALUES
(102, 'xcode', 'Super Admin', 'deposit', 'success', 'BTC', '103', '', NULL, '2022-11-04 09:25:04', '0', '0', NULL),
(103, 'xcode', NULL, 'Signal Plan', 'pending', NULL, '1500', NULL, NULL, '2022-11-25 11:02:32', '0', '0', NULL),
(104, 'xcode', 'Super Admin', 'deposit', 'loss', 'usdt/gpg', '100', NULL, NULL, '2022-11-29 09:31:58', '0', '0', 'sell'),
(105, 'xcode', 'Super Admin', 'trade', 'won', NULL, '150', NULL, NULL, '2022-11-29 11:02:36', '0', '0', 'buy'),
(106, 'xcode', 'Super Admin', 'deposit', 'success', NULL, '1000', NULL, NULL, '2022-11-29 14:13:52', '0', '0', NULL),
(107, 'xcode', 'Super Admin', 'trade', 'pending', 'AMAZON COM INC', '1000', NULL, NULL, '2022-11-29 23:24:34', '0', '0', 'Sell'),
(108, 'xcode', 'Super Admin', 'trade', 'loss', 'FACEBOOK INC', '500', NULL, NULL, '2022-11-29 23:25:49', '0', '0', 'buy'),
(109, 'xcode', 'Super Admin', 'deposit', 'pending', NULL, '1000', NULL, NULL, '2022-12-05 15:25:09', '0', '0', NULL),
(110, 'xcode', 'Super Admin', 'deposit', 'pending', NULL, '1000', NULL, NULL, '2022-12-05 15:25:37', '0', '0', NULL),
(111, 'xcode', 'Super Admin', 'withdrawal', 'pending', NULL, '1000', NULL, NULL, '2022-12-05 15:26:15', '0', '0', NULL),
(112, 'xcode', 'Super Admin', 'withdrawal', 'success', NULL, '1000', NULL, NULL, '2022-12-05 15:26:22', '0', '0', NULL),
(113, 'xcode', 'Super Admin', 'withdrawal', 'pending', NULL, '1000', NULL, NULL, '2022-12-05 15:26:35', '0', '0', NULL),
(114, 'xcode', 'Super Admin', 'withdrawal', 'pending', NULL, '1000', NULL, NULL, '2022-12-05 15:26:37', '0', '0', NULL),
(115, 'xcode', 'Super Admin', 'withdrawal', 'pending', NULL, '1000.00', NULL, NULL, '2022-12-05 17:41:20', '0', '0', NULL),
(116, 'xcode', 'Super Admin', 'deposit', 'pending', 'BTC', '1046', '', NULL, '2023-01-14 05:10:28', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `balance` varchar(250) DEFAULT '0',
  `profit` varchar(300) DEFAULT '0',
  `bonus` varchar(300) DEFAULT '0',
  `won` varchar(300) DEFAULT '0',
  `loss` varchar(300) DEFAULT '0',
  `eth_balance` varchar(300) DEFAULT '0',
  `username` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `country` varchar(300) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `image` varchar(300) DEFAULT 'avatar.png',
  `phone_number` varchar(250) DEFAULT NULL,
  `package` varchar(250) DEFAULT NULL,
  `package_status` varchar(200) DEFAULT NULL,
  `status` varchar(250) DEFAULT 'pending',
  `mode` varchar(200) DEFAULT 'dark',
  `currency` varchar(250) DEFAULT '$',
  `token` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `account_number` varchar(300) DEFAULT NULL,
  `account_name` varchar(300) DEFAULT NULL,
  `bank` varchar(300) DEFAULT NULL,
  `swift_code` varchar(300) DEFAULT NULL,
  `bitcoin_wallet` varchar(300) DEFAULT NULL,
  `eth_wallet` varchar(300) DEFAULT NULL,
  `cash_app` varchar(300) DEFAULT NULL,
  `paypal` varchar(300) DEFAULT NULL,
  `acct_status` varchar(300) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `role`, `full_name`, `balance`, `profit`, `bonus`, `won`, `loss`, `eth_balance`, `username`, `email`, `password`, `country`, `gender`, `image`, `phone_number`, `package`, `package_status`, `status`, `mode`, `currency`, `token`, `date`, `account_number`, `account_name`, `bank`, `swift_code`, `bitcoin_wallet`, `eth_wallet`, `cash_app`, `paypal`, `acct_status`) VALUES
(1, 'xcode', 'admin', 'Super Admin', '1500', '1200', '100', '9', '20', '62.6', 'Admin', 'admin@gmail.com', '5997733', 'bras', 'Male', 'avatar.png', '0901252732', 'Silver', 'pending', 'kyc', 'dark', '$', 'SDuw5S2I0073ALJ', '2022-09-09 02:57:27', '111', 'sdsd', '32', 'asdf', 'asdfasdf', 'asdfasdf', 'asdf', 'pasd@gmai.ci', '0'),
(9, 'michaela', NULL, 'mich', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, 'avatar.png', NULL, NULL, NULL, 'pending', 'dark', '$', NULL, '2022-11-05 10:37:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(10, 'frnak', NULL, 'frnak', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, 'avatar.png', NULL, NULL, NULL, 'pending', 'dark', '$', NULL, '2022-11-05 10:38:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(11, 'Lk7uw13BXor1d1svfYaU', NULL, 'wallet1034@gmail.com', '0', '0', '0', '0', '0', '0', 'wallet1034@gmail.com', 'wallet1034@gmail.com', 'wallet1034@gmail.com', 'American Samoa', NULL, 'avatar.png', 'wallet1034@gmail.com', NULL, NULL, 'pending', 'dark', '$', '346502', '2022-12-08 13:09:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`kyc_id`);

--
-- Indexes for table `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`nft_id`);

--
-- Indexes for table `nft_collections`
--
ALTER TABLE `nft_collections`
  ADD PRIMARY KEY (`collections_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`profit_id`);

--
-- Indexes for table `random`
--
ALTER TABLE `random`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `kyc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nft`
--
ALTER TABLE `nft`
  MODIFY `nft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nft_collections`
--
ALTER TABLE `nft_collections`
  MODIFY `collections_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profit`
--
ALTER TABLE `profit`
  MODIFY `profit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `random`
--
ALTER TABLE `random`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
