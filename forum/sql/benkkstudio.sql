-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 08:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benkkstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_des` varchar(255) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_des`, `created`, `username`) VALUES
(1, 'python', 'Python is an interpreted, high-level and general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace.', '0000-00-00', ''),
(2, 'JavaScript', 'JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-or', '0000-00-00', ''),
(3, 'Django', 'Django is a Python-based free and open-source web framework that follows the model-template-views architectural pattern. It is maintained by the Django Software Foundation, an American independent organization established as a 501 non-profit.', '0000-00-00', ''),
(4, 'Flask', 'Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries. It has no database abstraction layer, form validation, or any other components where pre-existing third-party', '0000-00-00', ''),
(5, 'Kotlin', 'Kotlin is a cross-platform, statically typed, general-purpose programming language with type inference. Kotlin is designed to interoperate fully with Java, and the JVM version of Kotlin\'s standard library depends on the Java Class Library, but type infere', '0000-00-00', ''),
(6, 'Dirt', 'Dart is an open-source general-purpose programming language. It is originally developed by Google and later approved as a standard by ECMA. Dart is a new programming language meant for the server as well as the browser. Introduced by Google, the Dart SDK ', '0000-00-00', ''),
(11, 'prasun', 'prasun bokachoda', '0000-00-00', ''),
(15, 'fghghg', 'jhjhjhjhjhj', '0000-00-00', 'jjjjjjjjjjjjj'),
(23, 'aaaaaaa', 'aaaaaaaaaaa', '0000-00-00', 'sayan8013cocacc@gmail.com'),
(24, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaa', '0000-00-00', 'sayan8013cocacc@gmail.com'),
(25, 'aaaaaaaaaaaa', 'sssssssssssssss', '0000-00-00', 'sayan8013cocacc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `sno` int(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`sno`, `email`, `pass`, `uuid`, `time`) VALUES
(4, 'sayan8013cocacc@gmail.com', '$2y$10$ux93UnXqSljDyq5ttL4ojepn0FEcOpeJVyy0b5zuzyMlORKSK0i6y', '', '0000-00-00 00:00:00'),
(5, 'sayan8013cocacc2@gmail.com', '$2y$10$iDoaqH2ekxnfjB41BK00YODHig7wAyXIkQ.VGBjWz7d.fFpVGpnF2', '', '0000-00-00 00:00:00'),
(6, 'sayan8013cocacc3@gmail.com', '$2y$10$FdOAXfNecBth6RwZR4HdfeA7N.DS/OdRt2dxo.3WEq.7JqyA.8Qnu', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_des` text NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_des`, `thread_user_id`, `thread_cat_id`, `timestamp`) VALUES
(91, 'Guest', 'aa', 0, 3, '2021-02-23 13:22:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `sno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
