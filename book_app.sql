-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server Betriebssystem:        Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportiere Daten aus Tabelle book_app.books: ~36 rows (ungefähr)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
REPLACE INTO `books` (`id`, `cover_image`, `title`, `author`, `rating`, `length`, `voters`, `shelf`, `amazon_link`, `date_added`, `date_read`, `synopsis`) VALUES
	(1, '', 'Aimee and Jaguar', 'Erica Fischer', '5', 0, '[10,7]', 'poll', '', '0000-00-00', '0000-00-00', 'Information on this book'),
	(2, '', 'She Came to Stay', 'Simone de Beauvoir', '5', 0, '[12]', 'poll', '', '0000-00-00', '0000-00-00', 'She came to stay portraits the life of two sisters.'),
	(3, '', 'Camille Claudel', 'Ann Delbee', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(4, '', 'The Ministry of Utmost Happiness', 'Arundhati Roy', '5', 0, '', 'poll', '', '0000-00-00', '0000-00-00', 'A wonderful read about happiness.'),
	(5, '', 'Sex Object', 'Jessica Valenti', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(6, '', 'Headscarves and Hymens', 'Mona Eltahawy', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(7, '', 'We Are All Completely Beside Ourselves', 'Karen Joy Fowler', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(8, '', 'I am Malala', 'Malala Yousafzai', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(9, '', 'The Color Purple', 'Alice Walker', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(10, '', 'Wild Swans', 'Jung Chang', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(11, '', 'All That Man Is', 'David Szalay', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(12, '', 'Wild', 'Cheryl Strayed', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(13, '', 'Half a Yellow Sun', 'Chimamanda Ngozi Adichie', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(14, '', 'Americanah', 'Chimamanda Ngozi Adichie', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(15, '', 'My Brilliant Friend/The Story of a New Name/Those Who Leave and Those Who Stay', 'Elena Ferrante', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(16, '', 'The Bastard of Istanbul', 'Elif Shafak', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(17, '', 'A Hope More Powerful than the Sea', 'Melissa Fleming', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(18, '', 'Bel Canto', 'Ann Patchett', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(19, '', 'Swing Time', 'Zadie Smith', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(20, '', 'What Do Women Want?', 'Susie Orbach', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(21, '', 'Bodies', 'Susie Orbach', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(22, '', 'Just Kids', 'Patti Smith', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(23, '', 'Empress Dowager Cixi: The Concubine Who Launched Modern China', 'Jung Chang', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(24, '', 'Dinaâ€™s Book', 'HerbjÃ¸rg Wassmo (first part of a trilogy)', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(25, '', 'Lifeâ€™s Work', 'Willie J. Parker (April release)', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(26, '', 'The Descent of Man', 'Grayson Perry', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(27, '', 'Animal: The Autobiography of a Female Body ', 'Sara Pascoe', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(28, '', 'How to be a Woman', 'Caitlin Moran', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(29, '', 'Girl Up', 'Laura Bates', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(30, '', 'Nights at the Circus ', 'Angela Carter', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(31, '', 'Female Sexualisation', 'Frida Haug', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(32, '', 'Gender Trouble', 'Judith Butler', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(33, '', 'There Are More Beautiful Things Than Beyonce', 'Morgan Parker', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(34, '', 'Do Not Say We Have Nothing', 'Madeleine Thien ', '5', 0, '', 'Currently-Reading', '', '0000-00-00', '0000-00-00', 'Array'),
	(35, '', 'Why I am not a feminist: A feminist manifesto ', 'Jessa Crispin', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array'),
	(36, '', 'Persepolis', 'Marjane Satrapi', '5', 0, '', 'to-read', '', '0000-00-00', '0000-00-00', 'Array');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Exportiere Daten aus Tabelle book_app.meeting: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;

-- Exportiere Daten aus Tabelle book_app.notices: ~3 rows (ungefähr)
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
REPLACE INTO `notices` (`id`, `publisher`, `headline`, `content`) VALUES
	(1, 11, 'FREE BUTTONS! FREE CHOICE!', 'Wanted to share this button-making event ahead of the Bundestag debate on Paragraf 219a, a Nazi-era law that forbids doctors in Germany from offering information on abortions.<br><br>\r\n\r\n                                I can\'t make it due to work (booooo) but do help if you can and watch out for other events from the Buendnis!<br><br>\r\n\r\n                                The Bundestag debate is on February 22 and should be available as a livestream. If the Linke, SPD and Greens can get the liberal FDP to join the cause, they have a majority.<br><br>\r\n\r\n                                Next on the list is Paragraf 218, which criminalizes abortion (YES, ABORTION IS TECHNICALLY ILLEGAL IN GERMANY). But this is a marathon, not a sprint.<br><br>\r\n\r\n                                Tell your friends and join the campaign!'),
	(2, 10, 'Zipjet Advert', 'I saw this awful ad on the way home and it\'s found it really upsetting. Not sure why I\'m posting other than to say I hope this Zipjet campaign gets targeted with some witty defacing soon!<br><br>\r\n\r\n                                Rich white successful \'Chris concentrates on the important things in life - not washing or ironing\'<br><br>\r\n\r\n                                I feel like it\'s the ultimate double-barrelled privileged, patriarchal put down, laugh in the face of what has always been \'women\'s work\'... I know there\'s so much misogynist advertising out there but I think this one is so insidious!'),
	(3, 7, 'Still not voted for January\'s book? ', 'Roll up, roll up.... we\'ll announce the winner in the next days - to be discussed on 30th Jan! <br><br>\r\n\r\n                                Newbies - this is your chance to get involved and make your resolution to read more a reality!');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;

-- Exportiere Daten aus Tabelle book_app.poll: ~2 rows (ungefähr)
/*!40000 ALTER TABLE `poll` DISABLE KEYS */;
REPLACE INTO `poll` (`book_id`, `voter_id`, `datemeeting`) VALUES
	(1, 7, '2018-03-23'),
	(21, 10, '2018-03-23');
/*!40000 ALTER TABLE `poll` ENABLE KEYS */;

-- Exportiere Daten aus Tabelle book_app.users: ~5 rows (ungefähr)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `first_name`, `last_name`, `email`, `avatar`, `password`, `hash`, `active`, `voted`, `attending`) VALUES
	(7, 'Jessica', 'Greene', 'onlinegurl@gmail.com', '../assets/imgs/avatar.JPG', '$2y$10$vX10VI0VlywRCZhU22n2Ne8ItPq19ewrAVrahnVelwAtY38Yr1M1m', '1595af6435015c77a7149e92a551338e', 1, 0, 1),
	(10, 'Jessica', 'Greene', 'jessica0greene@gmail.com', '../assets/imgs/avatar.JPG\r\n', '$2y$10$egv.pV75LmG6pboMwX5yF.XkJ8xIAbHVDDhuueU.uDuC.w0tDpgEK', '6bc24fc1ab650b25b4114e93a98f1eba', 1, 0, 1),
	(11, 'bob', 'klein', 'bob@klein.de', '../assets/imgs/avatar.JPG\r\n', '$2y$10$HGJnVxOx0YES4eS8UEYxiuKHHFo.Q5eXaWr6zbrq/FJ5BIhrIwIpO', '0a09c8844ba8f0936c20bd791130d6b6', 1, 1, 0),
	(12, 'julia', 'bloggs', 'julia@bloggs.co.uk', '', '$2y$10$gkHNbxHNi6nCFG.hxzF3B.30WrnjnRSJY6thUf5uH6juTWJIBxvJe', 'c86a7ee3d8ef0b551ed58e354a836f2b', 0, 1, 0),
	(13, 'jessica', 'Greene', 'jessica@de.de', '', '$2y$10$pCMsy5bfLnWClTOUrh/vTuL.D8.iahedWeNnzgns1wQdt2ck0LN6K', 'b7892fb3c2f009c65f686f6355c895b5', 0, 0, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
