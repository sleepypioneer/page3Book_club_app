-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 12:29 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `length` int(20) NOT NULL,
  `shelf` varchar(255) NOT NULL,
  `amazon_link` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `date_read` date NOT NULL,
  `synopsis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `cover_image`, `title`, `author`, `rating`, `length`, `shelf`, `amazon_link`, `date_added`, `date_read`, `synopsis`) VALUES
(1, '', 'Aimee and Jaguar', 'Erica Fischer', '5', 0, 'poll', '', '0000-00-00', '0000-00-00', 'Array'),
(2, '', 'She Came to Stay', 'Simone de Beauvoir', '5', 0, 'poll', '', '0000-00-00', '0000-00-00', 'Array'),
(3, '', 'Camille Claudel', 'Ann Delbee', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(4, '', 'The Ministry of Utmost Happiness', 'Arundhati Roy', '5', 0, 'poll', '', '0000-00-00', '0000-00-00', 'Array'),
(5, '', 'Sex Object', 'Jessica Valenti', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(6, '', 'Headscarves and Hymens', 'Mona Eltahawy', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(7, '', 'We Are All Completely Beside Ourselves', 'Karen Joy Fowler', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(8, '', 'I am Malala', 'Malala Yousafzai', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(9, '', 'The Color Purple', 'Alice Walker', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(10, '', 'Wild Swans', 'Jung Chang', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(11, '', 'All That Man Is', 'David Szalay', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(12, '', 'Wild', 'Cheryl Strayed', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(13, '', 'Half a Yellow Sun', 'Chimamanda Ngozi Adichie', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(14, '', 'Americanah', 'Chimamanda Ngozi Adichie', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(15, '', 'My Brilliant Friend/The Story of a New Name/Those Who Leave and Those Who Stay', 'Elena Ferrante', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(16, '', 'The Bastard of Istanbul', 'Elif Shafak', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(17, '', 'A Hope More Powerful than the Sea', 'Melissa Fleming', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(18, '', 'Bel Canto', 'Ann Patchett', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(19, '', 'Swing Time', 'Zadie Smith', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(20, '', 'What Do Women Want?', 'Susie Orbach', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(21, '', 'Bodies', 'Susie Orbach', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(22, '', 'Just Kids', 'Patti Smith', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(23, '', 'Empress Dowager Cixi: The Concubine Who Launched Modern China', 'Jung Chang', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(24, '', 'Dinaâ€™s Book', 'HerbjÃ¸rg Wassmo (first part of a trilogy)', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(25, '', 'Lifeâ€™s Work', 'Willie J. Parker (April release)', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(26, '', 'The Descent of Man', 'Grayson Perry', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(27, '', 'Animal: The Autobiography of a Female Body ', 'Sara Pascoe', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(28, '', 'How to be a Woman', 'Caitlin Moran', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(29, '', 'Girl Up', 'Laura Bates', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(30, '', 'Nights at the Circus ', 'Angela Carter', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(31, '', 'Female Sexualisation', 'Frida Haug', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(32, '', 'Gender Trouble', 'Judith Butler', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(33, '', 'There Are More Beautiful Things Than Beyonce', 'Morgan Parker', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(34, '', 'Do Not Say We Have Nothing', 'Madeleine Thien ', '5', 0, 'Currently Reading', '', '0000-00-00', '0000-00-00', 'Array'),
(35, '', 'Why I am not a feminist: A feminist manifesto ', 'Jessa Crispin', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(36, '', 'Persepolis', 'Marjane Satrapi', '5', 0, 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
(37, 'TSHSTRH', 'SHTRH', 'THTRH', '5', 0, 'To Read', 'THTRH', '2018-02-13', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `publisher` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `publisher`, `headline`, `content`) VALUES
(1, 2, 'FREE BUTTONS! FREE CHOICE!', 'Wanted to share this button-making event ahead of the Bundestag debate on Paragraf 219a, a Nazi-era law that forbids doctors in Germany from offering information on abortions.<br><br>\r\n\r\n                                I can\'t make it due to work (booooo) but do help if you can and watch out for other events from the Buendnis!<br><br>\r\n\r\n                                The Bundestag debate is on February 22 and should be available as a livestream. If the Linke, SPD and Greens can get the liberal FDP to join the cause, they have a majority.<br><br>\r\n\r\n                                Next on the list is Paragraf 218, which criminalizes abortion (YES, ABORTION IS TECHNICALLY ILLEGAL IN GERMANY). But this is a marathon, not a sprint.<br><br>\r\n\r\n                                Tell your friends and join the campaign!'),
(2, 3, 'Zipjet Advert', 'I saw this awful ad on the way home and it\'s found it really upsetting. Not sure why I\'m posting other than to say I hope this Zipjet campaign gets targeted with some witty defacing soon!<br><br>\r\n\r\n                                Rich white successful \'Chris concentrates on the important things in life - not washing or ironing\'<br><br>\r\n\r\n                                I feel like it\'s the ultimate double-barrelled privileged, patriarchal put down, laugh in the face of what has always been \'women\'s work\'... I know there\'s so much misogynist advertising out there but I think this one is so insidious!'),
(3, 1, 'Still not voted for January\'s book? ', 'Roll up, roll up.... we\'ll announce the winner in the next days - to be discussed on 30th Jan! <br><br>\r\n\r\n                                Newbies - this is your chance to get involved and make your resolution to read more a reality!'),
(4, 1, 'Test', 'Takjfw:Ã–JKLBWNVOLÃ„-WbVÃ¶nwLÃ–MNV:');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(7, 'Jessica', 'Greene', 'onlinegurl@gmail.com', '$2y$10$vX10VI0VlywRCZhU22n2Ne8ItPq19ewrAVrahnVelwAtY38Yr1M1m', '1595af6435015c77a7149e92a551338e', 1),
(10, 'Jessica', 'Greene', 'jessica0greene@gmail.com', '$2y$10$egv.pV75LmG6pboMwX5yF.XkJ8xIAbHVDDhuueU.uDuC.w0tDpgEK', '6bc24fc1ab650b25b4114e93a98f1eba', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
