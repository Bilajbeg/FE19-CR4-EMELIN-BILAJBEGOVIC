-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 04:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be19_cr4_emelin_ bilajbegovic_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be19_cr4_emelin_ bilajbegovic_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be19_cr4_emelin_ bilajbegovic_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ISBN` int(15) NOT NULL,
  `short_description` varchar(700) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_adress` varchar(255) NOT NULL,
  `publisher_date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_adress`, `publisher_date`, `status`) VALUES
(1, 'Book Test', 'https://cdn.pixabay.com/photo/2018/01/17/18/43/book-3088775_1280.jpg', 978112233, 'To Kill a Mockingbird is a thought-provoking novel by Harper Lee, set in a small Southern town during the Great Depression. Through the innocent eyes of young Scout Finch, readers witness the complexities of racial injustice and moral growth. Atticus Finch, Scout\'s father and a principled lawyer, defends a black man accused of raping a white woman, defying societal norms. The narrative unfolds with themes of prejudice, empathy, and the search for truth. Lee\'s eloquent storytelling captivates the', 'Book', 'Author Test', 'Test last Name', 'HarperCollins', 'New York, USA', '1960-07-11', 1),
(2, 'Ein neuer Tag', 'https://cdn.pixabay.com/photo/2015/07/27/20/16/book-863418_1280.jpg', 978445566, '\"The Great Gatsby\" is a timeless masterpiece penned by F. Scott Fitzgerald, set in the roaring 1920s. It unravels a story of Jay Gatsby, a mysterious millionaire with an alluring past, who relentlessly pursues his lost love, Daisy Buchanan. Amidst lavish parties and opulent extravagance, the novel delves into the decadence and disillusionment of the Jazz Age. Fitzgerald skillfully portrays the clash between old money and new wealth, highlighting the unattainable American Dream.', 'Book', 'Autor', 'Nachname', 'Scholastic', 'New York, USA', '1925-04-10', 1),
(3, '1984', 'https://m.media-amazon.com/images/I/81BExVLr8sL._AC_UY218_.jpg', 978225577, '\"1984\" by George Orwell is a dystopian novel set in a totalitarian society ruled by the oppressive Party led by Big Brother. The story follows Winston Smith, a Party member who secretly rebels against the regime\'s mind control and propaganda. As he seeks truth and individuality, Winston risks everything in a society where even thoughts are monitored and dissent is punished. Orwell\'s gripping narrative explores themes of surveillance, censorship, and the manipulation of truth. ', 'Book', 'George', 'Orwell', 'Scholastic', 'London, UK', '1949-06-08', 1),
(4, 'Harry Potter and the S.Stone', 'https://m.media-amazon.com/images/I/71u-cpucTRL._AC_UY218_.jpg', 978003355, '\"Harry Potter and the Sorcerers Stone\" is a captivating tale of a young wizard, Harry Potter, who discovers his magical heritage and embarks on an incredible journey at Hogwarts School of Witchcraft and Wizardry. Filled with friendship, adventure, and the battle between good and evil, this enchanting novel introduces readers to a world of spells, potions, and mythical creatures. With its charming characters and imaginative plot.', 'Book', 'J.K.', 'Rowling', 'Scholastic', 'New York, USA', '1997-06-26', 1),
(5, 'The Catcher in the Rye', 'https://m.media-amazon.com/images/I/618XWn5fD5L._AC_UY218_.jpg', 978110088, 'Coming-of-age novel by J.D. Salinger', 'Book', 'J.D.', 'Salinger', 'Little, Brown and Company', 'Boston, USA', '1951-07-16', 0),
(6, 'Pride and Prejudice', 'https://m.media-amazon.com/images/I/61G0xX1io3L._AC_UY218_.jpg', 978020509, 'Jane Austen\'s romantic novel', 'Book', 'Jane', 'Austen', 'Little, Brown and Company', 'London, UK', '1813-01-28', 1),
(7, 'The Shawshank Redemption', 'https://cdn.pixabay.com/photo/2017/09/21/13/32/girl-2771936_1280.jpg', 123456789, 'Hallo dies ist ein Versuch!', 'DVD', 'Frank', 'Darabont', 'Warner Bros.', 'Los Angeles, USA', '1994-09-23', 1),
(9, 'Moby-Dick', 'https://m.media-amazon.com/images/I/61guE9BQp0L._AC_UY218_.jpg', 978123456, 'Herman Melville\'s epic novel', 'Book', 'Herman', 'Melville', 'Wordsworth Editions', 'New York, USA', '1851-10-18', 0),
(10, 'The Lord of the Rings', 'https://m.media-amazon.com/images/I/51t0Z0DfEfL._AC_UY218_.jpg', 978334455, '\"The Lord of the Rings\" is an epic fantasy trilogy by J.R.R. Tolkien, set in the enchanting world of Middle-earth. The story follows the perilous quest to destroy the One Ring, a powerful artifact that could bring darkness to the world. Frodo Baggins, a humble hobbit, is tasked with the burden of carrying the Ring, aided by a diverse fellowship of companions. As they traverse majestic landscapes and face formidable foes, the tale weaves themes of courage, friendship, and the battle between good and evil. Tolkien\'s masterful storytelling and richly imagined world have captured the hearts of readers, making it a timeless classic in the realm of fantasy literature.', 'Book', 'J.R.R.', 'Tolkien', 'Mariner Books', 'London, UK', '1954-07-29', 1),
(18, 'Once upon a time', 'https://cdn.pixabay.com/photo/2018/01/17/18/43/book-3088775_1280.jpg', 798010203, 'Here is a small description.', 'book', 'Richard', 'John', 'Warner Bros.', 'New York, USA', '1986-05-01', 0),
(19, 'Emelin way to Paris', 'https://cdn.pixabay.com/photo/2013/11/28/10/36/road-220058_1280.jpg', 123456789, 'Hi this is my way to Paris', 'book', 'Emelin', 'Bilajbegovic', 'Warner Bros.', 'New York, USA', '1999-06-02', 0),
(20, 'The new way to study', 'https://cdn.pixabay.com/photo/2019/04/15/12/32/einstein-4129246_1280.jpg', 798123456, 'Einsteins new book how to learn for your studies......', 'book', 'Professor', 'Einstein', 'Scholastic', 'London, UK', '2005-10-08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
