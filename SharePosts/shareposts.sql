-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 05:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shareposts`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(1, 9, 'Erant sanctus ex per', 'Lorem ipsum dolor sit amet, ad modo propriae scriptorem vim. At tempor eripuit his. Veritus intellegam nam id. Vim feugiat voluptaria consetetur ei, cu soluta dolores periculis usu, est etiam gubergren prodesset ut.\r\n\r\nVeniam iudicabit ne nam, eros autem suavitate ut usu. Adhuc eruditi docendi sed ad, cu tota equidem euripidis vel. Mei aeque adolescens ex, ne odio mediocritatem nec. Errem audiam graecis sea no, id legere laoreet dignissim eos.\r\n\r\nScripta sadipscing dissentiet quo ne. Ubique corrumpit sadipscing eum et. Hinc mundi facilisis mei no. Illum tempor usu ea. Ea mel odio delenit periculis, delenit dolorem scribentur eos eu. Qui ipsum nonumy splendide at, molestiae dissentiunt definitionem per id.\r\n\r\nErant sanctus ex per. Tamquam accusata et sed, mei te natum molestiae. Zril affert nam ad. No vis ullum instructior.\r\n\r\nSit ea odio magna ceteros, mei nonumy philosophia concludaturque ne. Cu primis adolescens mea. An est facilis mnesarchum, te vix case habemus vituperata. Et dicat ullum ornatus vim. Cu accumsan splendide delicatissimi nam. Ei viris maluisset quo, id usu utamur scripta lucilius, vim sonet dolor no.', '2018-04-23 00:41:17'),
(2, 10, 'Veniam iudicabit ne nam', 'Lorem ipsum dolor sit amet, ad modo propriae scriptorem vim. At tempor eripuit his. Veritus intellegam nam id. Vim feugiat voluptaria consetetur ei, cu soluta dolores periculis usu, est etiam gubergren prodesset ut.\r\n\r\nVeniam iudicabit ne nam, eros autem suavitate ut usu. Adhuc eruditi docendi sed ad, cu tota equidem euripidis vel. Mei aeque adolescens ex, ne odio mediocritatem nec. Errem audiam graecis sea no, id legere laoreet dignissim eos.', '2018-04-23 00:43:19'),
(3, 10, 'Nisi ut aliquid ex ea', 'Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?', '2018-04-23 17:50:36'),
(4, 9, 'Nullam et velit laoreet', 'Suspendisse neque erat, dapibus consectetur nunc at, mollis lobortis turpis. Praesent sagittis libero quam, ut volutpat enim interdum vitae. In porta posuere eleifend. Phasellus tellus quam, rhoncus dapibus elementum vitae, gravida quis velit. Nullam eget lacinia magna. Sed at maximus nisl. Ut vestibulum imperdiet sem, sit amet egestas massa sodales id. Pellentesque varius diam vel vehicula ultrices. Pellentesque luctus orci vitae nulla condimentum, in iaculis augue pellentesque. Nulla vulputate, lorem a scelerisque sodales, mauris lorem commodo justo, sed lacinia dolor lorem feugiat ante. In quis nunc porta, dapibus nisl quis, sagittis libero. Etiam eget ligula in lectus bibendum molestie. Aenean molestie, mauris et rhoncus euismod, massa turpis imperdiet massa, eu tincidunt ligula tortor a ex. Nullam et velit laoreet, suscipit nisl rutrum, laoreet ex.', '2018-04-23 17:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(9, 'John Doe', 'jdoe@email.com', '$2y$10$X5cpXHMkoi3c0ZJ8MTA3HuGbd3kc2/Q3ptUsPjPmTt0F3trXhkMUm', '2018-04-21 23:04:39'),
(10, 'Tung Pham', 'tp@email.com', '$2y$10$CRUv6eG5r/PGdevq7uzUX.nFhqq4KP9HZM3VkerkaEDbxz4Yj0KEW', '2018-04-22 21:45:47'),
(11, 'Jane Doe', 'jd@email.com', '$2y$10$ZB5CzHeOZktpfotUvB0CD.KnmqvHRUfZEwjwKM02rL/Mx8sf7LSJi', '2018-04-23 13:57:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
