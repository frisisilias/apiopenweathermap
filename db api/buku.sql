-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 03:14 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `publisher` varchar(255) CHARACTER SET utf8 NOT NULL,
  `year` int(20) NOT NULL,
  `isbn` bigint(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `category`, `image`, `title`, `author`, `publisher`, `year`, `isbn`, `language`, `rating`, `price`, `page`) VALUES
(1, 'Childrens Books', '', 'Seri Aku Cinta Indonesia : Wayang Daun Singkong ', 'Dian K.', 'Bhuana Ilmu Populer', 2017, 9786023948376, 'Indonesia', 0, 'IDR 27.000', 32),
(2, 'Horror, Mystery, Thriller & Suspense', '', '귀신이 들려주는 세계 공포 괴담: 한국', '(김혜련) Kim Hye-ryeon', '(재미북스) Jimbooks', 2014, 9788960243248, 'Korea', 5, 'KRW 9.500', 192),
(3, 'Childrens Books', '', 'Seri Aku Cinta Indonesia : Lampion Gresik yang Istimewa', 'Dian K.', 'Bhuana Ilmu Populer', 2017, 9786023948406, 'Indonesia', 0, 'IDR 23.800', 32),
(4, 'Dictionary', '', 'Kamus Basa Sunda - Indonesia , Indonesia - Sunda Untuk Pelajaran & Umum ', 'Yus R. Ismail, Dian Henrayana', 'Bhuana Ilmu Populer', 2019, 9786232164055, 'Indonesia', 0, 'IDR 98.000', 340),
(5, 'History', '', '불멸의 신화 이순신', '(C3 창작) C3 Creation', '(재미북스) Jimbooks', 2014, 9788960243293, 'Korea', 4, 'KRW 10.000', 288),
(6, 'Childrens Books', '', 'Edisi Indonesia: Kitty Dan Harta Karun Harimau Emas ', 'Paula Harrison', 'Bhuana Ilmu Populer', 2021, 9786230405174, 'Indonesia', 0, 'IDR 53.600', 128),
(7, 'Cookbooks, Food & Wine', '', 'Open Sandwiches: 70 Smorrebrod Ideas for Morning, Noon, and Night', 'Trine Hahnemann', 'Quadrille Publishing', 2018, 9781787131255, 'English', 4.8, 'USD 17.92', 144),
(8, 'History', '', 'Killing the Mob: The Fight Against Organized Crime in America (Bill O\'Reilly\'s Killing Series)', 'Bill O\'Reilly & Martin Dugard', 'St. Martin\'s Press', 2021, 9781250273659, 'English', 4.6, 'USD 18.00', 304),
(9, 'Religion', '', '성경 속 궁금증 - 95가지 질문에 대한 명쾌한 답', '(허영엽) Heo Young-yeop', '(가톨릭출판사) Catholic Publishing House', 2021, 9788932117843, 'Korea', 0, 'KRW 16.000', 374),
(10, 'Religion', 'https://img.ridicdn.net/cover/2056000003/xxlarge#1', '모두를 위한 이슬람 이슬람을 조금 더 자세히, 친절히 알려주는 안내서', '(쌀람누리 편집부 엮음) Compiled by the editorial department of Salamnuri', '(쌀람누리 출판) Salamnuri Publishing', 2016, 9791195572465, 'Korea', 5, 'KRW 10.000', 340),
(11, 'History', 'https://images-na.ssl-images-amazon.com/images/I/51FUwm-4xhL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg', 'Killing Crazy Horse: The Merciless Indian Wars in America (Bill O\'Reilly\'s Killing Series)', 'Bill O\'Reilly & Martin Dugard', 'Henry Holt and Co.', 2020, 9781627797047, 'English', 4.7, 'USD 13.95', 320),
(12, 'Business and Economics', 'https://ebooks.gramedia.com/ebook-covers/35788/big_covers/ID_BHIP2017MTH01JTAJD_B.jpg', 'Journey To Andalusia: Jelajah 3 Daulah', 'Marfuah Panji Astuti', 'Bhuana Ilmu Populer', 2017, 9786023943913, 'Indonesia', 4.2, 'IDR 110.000', 196),
(13, 'Dictionary', 'https://images-na.ssl-images-amazon.com/images/I/41SaSYGxXVS._SX331_BO1,204,203,200_.jpg', 'Mein Vokabelheft', 'Jörg Patrick', '‎Independently published', 2021, 9798532843646, 'German', 0, 'EUR 6.11', 120),
(14, 'Business and Economics', 'https://images-na.ssl-images-amazon.com/images/I/61y04z8SKEL._SX349_BO1,204,203,200_.jpg', 'Think and Grow Rich: The Landmark Bestseller Now Revised and Updated for the 21st Century (Think and Grow Rich Series)', 'Napoleon Hill', 'TarcherPerigee', 2005, 9781585424337, 'English', 4.7, 'USD 4.45', 320),
(15, 'History', 'https://pictures.abebooks.com/inventory/md/md30218038166.jpg', 'Panzer III und seine Abarten', 'Walter J. Spielberger', 'Motorbuch Verlag', 2019, 9783613041509, 'German', 4.8, 'EUR 19.95', 168),
(16, 'Cookbooks, Food & Wine', 'https://images-na.ssl-images-amazon.com/images/I/51Wd0CxpK0L._SX312_BO1,204,203,200_.jpg', 'Lievito Madre. Il Grande Libro di Consigli e Ricette per Principianti. Scopri l\'Antica Tradizione del Pane Fatto in Casa, Pizza, Dolci e Specialità Regionali.', 'Sapori D\'Italia ', 'Starfelia Ltd', 2021, 9781914140334, 'Italian', 4.3, 'EUR 24.49', 244),
(17, 'Cookbooks, Food & Wine', 'https://images-na.ssl-images-amazon.com/images/I/51gxEGCMofL._SX312_BO1,204,203,200_.jpg', '\r\nCucina di Casa Mia: Una guida pratica per cucinare autentici piatti italiani con ricette semplici e deliziose (Ultimate Italian Cookbook: A Practical And Effective Guide To The Authentic Way Of Cooking Italian Dishes With Easy And Delicious Italian Reci', 'Eleonora Di Puppo', 'Eleonora Di Puppo', 2021, 9781801779319, 'Italian', 0, 'EUR 32.97', 98),
(18, 'Religion', 'https://images-na.ssl-images-amazon.com/images/I/51YROZjUkaL._SX336_BO1,204,203,200_.jpg', 'The Modern Witch Tarot Deck (Modern Tarot Library)', 'Lisa Sterle', 'Sterling Ethos', 2019, 9781454938682, 'English', 4.9, 'USD 15.96', 56),
(19, 'Dictionary', 'https://images-na.ssl-images-amazon.com/images/I/51bDAvXRcxS._SX402_BO1,204,203,200_.jpg', 'Merriam-Webster Children\'s Dictionary, New Edition: Features 3,000 Photographs and Illustrations', 'DK', '‎DK Children', 2019, 9781465488824, 'English', 4.8, 'USD 7.37', 960),
(20, 'Religion', 'https://images-na.ssl-images-amazon.com/images/I/51xi+8pCRvL._SX350_BO1,204,203,200_.jpg', 'The Spell Book for New Witches: Essential Spells to Change Your Life', 'Ambrosia Hawthorn', 'Rockridge Press', 2020, 9781646110643, 'English', 4.8, 'USD 10.19', 244),
(21, 'Cookbooks, Food & Wine', 'https://images-na.ssl-images-amazon.com/images/I/51pIn9EUTFS._SX385_BO1,204,203,200_.jpg', 'Foolproof Freezer: 60 Fuss-Free Dishes that Make the Most of Your Freezer', 'Rebecca Woods', 'Quadrille Publishing', 2021, 9781787136595, 'English', 0, 'USD 19.99', 144),
(22, 'Cookbooks, Food & Wine', 'https://images-na.ssl-images-amazon.com/images/I/519wkdM9EgL._SX404_BO1,204,203,200_.jpg', 'The Essential Vegan Air Fryer Cookbook: 75 Whole Food Recipes to Fry, Bake, and Roast', 'Tess Challis', 'Rockridge Press', 2019, 9781641524131, 'English', 0, 'USD 14.59', 168),
(23, 'History', 'https://images-na.ssl-images-amazon.com/images/I/51VvnOHY-7L._SX336_BO1,204,203,200_.jpg', 'Um Die Historie in Ein Besseres Licht Zu Setzen.: Historische Forschung in Wurttemberg Vom Humanismus Bis Zur Schwelle Des 21. Jahrhunderts', 'Nicole Bickhoff & Albrecht Ernst ', 'Kohlhammer', 2021, 9783170252660, 'German', 0, 'EUR 24.57', 210),
(24, 'Horror, Mystery, Thriller & Suspense', 'https://m.media-amazon.com/images/I/51Di8Ut4BgS.jpg', 'Mörderische Brise: Ein Fall für Clara Clüver. Küsten-Krimi', 'Christian Humberg', 'Lübbe', 22, 9783404185085, 'German', 0, 'EUR 11.00', 352),
(25, 'Horror, Mystery, Thriller & Suspense\r\n', 'https://m.media-amazon.com/images/I/51TRKaM1raS.jpg', 'Kalt lächelt die See: Ein Guernsey-Krimi', 'Ellis Corbet', 'Lübbe', 2022, 9783404185115, 'German', 0, 'EUR 10.16', 352),
(26, 'Science Fiction & Fantasy', '', 'Harry Potter and the Sorcerer\'s Stone (Harry Potter, #1)', 'J.K. Rowling', 'Scholastic Inc.', 2003, 9780747546245, 'English', 4.47, 'USD 13.49', 309),
(27, 'Science Fiction & Fantasy', '', 'Harry Potter and the Chamber of Secrets (Harry Potter, #2)', 'J.K. Rowling', 'Scholastic Inc.', 2000, 9780439554893, 'English', 4.43, 'USD 11.94', 341),
(28, 'Science Fiction & Fantasy', '', 'Harry Potter and the Prisoner of Azkaban (Harry Potter, #3)', 'J.K. Rowling', 'Scholastic Inc.', 2004, 9780439655484, 'English', 4.57, 'USD 11.54', 435),
(29, 'Science Fiction & Fantasy', '', 'Harry Potter and the Goblet of Fire (Harry Potter, #4)', 'J.K. Rowling', 'Scholastic Inc.', 2002, 9780747546245, 'English', 4.56, 'USD 25.89', 734),
(30, 'Science Fiction & Fantasy', '', 'Harry Potter and the Order of the Phoenix (Harry Potter, #5)', 'J.K. Rowling', 'Scholastic Inc.', 2004, 9780439358071, 'English', 4.5, 'USD 9.68', 870),
(31, 'Science Fiction & Fantasy', '', 'Harry Potter and the Half-Blood Prince (Harry Potter, #6)', 'J.K. Rowling', 'Scholastic Inc.', 2006, 9780439784542, 'English', 4.57, 'USD 11.53', 652),
(32, 'Science Fiction & Fantasy', '', 'Harry Potter and the Deathly Hallows (Harry Potter, #7)', 'J.K. Rowling', 'Arthur A. Levine Books', 2009, 9780545139700, 'English', 4.62, 'USD 20.69', 759),
(33, 'Health, Fitness & Dieting', '', 'Organ Transplantation (Health and Medical Issues Today)', 'David Petechuk', 'Greenwood', 2006, 9780313335426, 'English', 3, 'USD 54.43', 216),
(34, 'Cookbooks, Food & Wine', '', 'Anti Inflammatory Cookbook - 50 Slow Cooker Recipes With Anti - Inflammatory Ingredients: Great For Gout! (Slow Cooker Cookbooks)', 'Kate Marsh', 'CreateSpace Independent Publishing Platform', 2015, 9781514196236, 'English', 3.7, 'USD 10.47', 168),
(35, 'Crafts, Hobbies & Home', '', 'Leopard Geckos (Complete Herp Care)', 'Gerald Merker', 'TFH Publications, Inc.', 2006, 9780793828838, 'English', 4, 'USD 10.95', 128),
(36, 'Childrens Books', '', 'Fantasy League', 'Mike Lupica', 'Puffin Books', 2015, 9780147514943, 'English', 4.2, 'USD 6.80', 320),
(37, 'Crafts, Hobbies & Home', '', 'Mosaics Inside & Out: Patterns and Inspirations for 17 Mosaic Projects', 'Doreen Mastandrea', 'Quarry Books', 2001, 9781564967428, 'English', 3.1, 'USD 14.99', 128),
(38, 'Business and Economics', '', 'A Social Security Owner\'s Manual, 3rd Edition: Your Guide to Social Security Retirement, Dependent\'s, and Survivor\'s Benefits', 'Jim Blankenship', 'CreateSpace Independent Publishing Platform', 2015, 9781505396607, 'English', 3.94, 'USD 14.98', 182),
(39, 'Business and Economics', '', 'The Bond Book, Third Edition: Everything Investors Need to Know About Treasuries, Municipals, GNMAs, Corporates, Zeros, Bond Funds, Money Market Funds, and More', 'Annette Thau', 'McGraw-Hill Education', 2010, 9780071664707, 'English', 4, 'USD 15.42', 448),
(40, 'Cookbooks, Food & Wine', '', 'The Ultimate Rice Cooker Cookbook', 'Beth Hensperger', 'Harvard Common Press', 2012, 9781558326675, 'English', 3.8, 'USD 10.71', 386),
(41, 'Crafts, Hobbies & Home', 'https://images-na.ssl-images-amazon.com/images/I/61eysdZ+1RL._SX352_BO1,204,203,200_.jpg', 'I Am Confident, Brave & Beautiful: A Coloring Book for Girls', 'Hopscotch Girls', 'Hopscotch Girls', 2017, 9780692927991, 'English', 4.8, 'USD 6.99', 24),
(42, 'Crafts, Hobbies & Home', 'https://images-na.ssl-images-amazon.com/images/I/51TUyw4PB8L._SX368_BO1,204,203,200_.jpg', 'Floret Farm\'s Cut Flower Garden: Grow, Harvest, and Arrange Stunning Seasonal Blooms (Gardening Book for Beginners, Floral Design and Flower Arranging Book)', 'Erin Benzakein, Julie Chai, & Michele M. Waite ', 'Chronicle Books', 2017, 9781452145761, 'English', 4.9, 'USD 21.48', 0),
(43, 'Crafts, Hobbies & Home', 'https://images-na.ssl-images-amazon.com/images/I/513r6bpAIRL._SX218_BO1,204,203,200_QL40_FMwebp_.jpg', 'Encyclopedia of Herbal Medicine: 550 Herbs and Remedies for Common Ailments', 'Andrew Chevallier', 'DK', 2016, 9781465449818, 'English', 4.8, 'USD 24.49', 336),
(44, 'Health, Fitness & Dieting', 'https://images-na.ssl-images-amazon.com/images/I/41D3enj6JVS._SX324_BO1,204,203,200_.jpg', 'The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma', 'Bessel van der Kolk M.D.', 'Penguin Books', 2015, 9780143127741, 'English', 4.8, 'USD 8.99', 464),
(45, 'Health, Fitness & Dieting', 'https://images-na.ssl-images-amazon.com/images/I/51Q3amxXZYL._SX351_BO1,204,203,200_.jpg', 'Crystals for Beginners: The Guide to Get Started with the Healing Power of Crystals', 'Karen Frazier', 'Althea Press', 2017, 9781623159917, 'English', 4.8, 'USD 8.09', 206),
(46, 'Business and Economics', 'https://images-na.ssl-images-amazon.com/images/I/41rmlYrIb+L._SX311_BO1,204,203,200_.jpg', 'Principio di Pareto: Come funziona la regola 80/20: lavora poco, preoccupati di meno, ottieni più successo e divertiti', 'Luca Canizzaro', 'Independently published', 2021, 9798709814646, 'Italian', 4.3, 'EUR 9.88', 138),
(47, 'Business and Economics', 'https://images-na.ssl-images-amazon.com/images/I/41iMq4VdL2L._SX311_BO1,204,203,200_.jpg', 'Les habitudes des millionnaires: Comment devenir millionnaire avec les bonnes habitudes', 'Luca Canizzaro', 'Independently published', 2020, 9798576946808, 'Franch', 4.4, 'EUR 9.72', 106),
(48, 'Business and Economics', 'https://images-na.ssl-images-amazon.com/images/I/41T7mqZFzeL._SX322_BO1,204,203,200_.jpg', 'La dette odieuse de l\'Afrique: Comment l\'endettement et la fuite des capitaux ont saigné un continent', 'Léonce Ndikumana, & James K. Boyce', 'Amalion Publishing', 2013, 9782359260229, 'Franch', 4.6, 'EUR 18.68', 208),
(49, 'History', 'https://images-na.ssl-images-amazon.com/images/I/51l3siD5dgL._SX339_BO1,204,203,200_.jpg', 'Le marché de l\'art sous l\'occupation', 'Emmanuelle Polack', 'Tallandier', 2019, 9791021020894, 'Franch', 4.7, 'EUR 28.16', 304),
(50, 'History', 'https://images-na.ssl-images-amazon.com/images/I/513dGC+2xPL._SX350_BO1,204,203,200_.jpg', 'Forêt de Tronçais (La) - Cérilly et ses environs (Mémoire en Images locaux)', 'Mémoire de Cérilly et ses environs', 'Editions Sutton', 2010, 9782813802279, 'Franch', 0, 'EUR 20.99', 128);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
