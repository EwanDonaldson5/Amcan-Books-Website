-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2017 at 01:56 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HNDEDONALDSON`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `movie` varchar(60) DEFAULT NULL,
  `comment` text,
  `post_date` datetime DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`post_id`, `first_name`, `last_name`, `movie`, `comment`, `post_date`) VALUES
(5, 'Admin', 'Admin', 'test2', 'test2', '2016-12-14 10:47:15'),
(6, 'Admin', 'Admin', 'test3', 'test3', '2016-12-14 10:48:55'),
(10, 'Admin', 'Admin', '1776', 'Test Message: This book was a great read!', '2017-05-29 09:27:52'),
(11, 'Admin', 'Admin', 'test', 'test', '2017-05-29 09:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total`, `order_date`) VALUES
(5, 65, 230.00, '2016-12-07 12:24:24'),
(13, 65, 30.00, '2016-12-12 16:47:28'),
(14, 65, 10.00, '2016-12-12 16:51:30'),
(15, 65, 40.00, '2016-12-12 16:58:10'),
(16, 65, 10.00, '2016-12-12 16:59:05'),
(17, 65, 34.00, '2016-12-13 19:50:44'),
(18, 65, 90.00, '2016-12-13 20:09:28'),
(19, 65, 40.00, '2016-12-13 20:14:19'),
(20, 65, 10.00, '2016-12-14 09:45:14'),
(21, 65, 100.00, '2016-12-18 22:06:56'),
(22, 72, 20.00, '2017-01-11 15:41:19'),
(23, 65, 10.00, '2017-01-28 13:21:27'),
(31, 1, 2374.60, '2017-05-16 21:51:04'),
(32, 1, 27.66, '2017-05-20 21:17:14'),
(33, 1, 18.66, '2017-05-20 21:23:51'),
(34, 1, 7.99, '2017-05-20 21:27:03'),
(35, 1, 8.89, '2017-05-24 12:57:38'),
(36, 1, 32.86, '2017-05-25 08:10:45'),
(37, 1, 7.99, '2017-05-29 21:24:28'),
(38, 1, 16.88, '2017-05-30 10:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `screen1`
--

CREATE TABLE IF NOT EXISTS `screen1` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `desc` varchar(20) NOT NULL,
  `item_price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen1`
--

INSERT INTO `screen1` (`item_id`, `item_name`, `time`, `desc`, `item_price`) VALUES
(3, 'Minions', '10.10', 'Adult', 4.95),
(4, 'Minions', '10.10', 'Junior', 2.95);

-- --------------------------------------------------------

--
-- Table structure for table `screen2`
--

CREATE TABLE IF NOT EXISTS `screen2` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL,
  `desc` varchar(20) NOT NULL,
  `item_price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen2`
--

INSERT INTO `screen2` (`item_id`, `item_name`, `time`, `desc`, `item_price`) VALUES
(1, 'Finding Nemo ', '10.15', 'Adult', 4.95),
(2, 'Finding Nemo', '10.15', 'Junior', 2.95);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `item_name` varchar(3000) NOT NULL,
  `blurb` varchar(30000) NOT NULL,
  `item_id` int(25) NOT NULL,
  `item_price` decimal(4,2) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `image` varchar(30000) NOT NULL,
  `author` varchar(2000) NOT NULL,
  `category` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`item_name`, `blurb`, `item_id`, `item_price`, `item_qty`, `image`, `author`, `category`) VALUES
('1776', 'David McCullough''s book 1776 covers just that, the most important year of the revolutionary war. Even though the war does not officially end until the Treaty of Paris is signed in 1783, the reader follows Washington and his men through losses and miserable retreats, as well as his big successes against Cornwallis and Rall.', 1, 8.89, 11, 'images/books/history/1776.png', 'David McCullough', 'history'),
('Dark Money', 'From the bestselling author of The Dark Side, an electrifying work of investigative journalism that uncovers the powerful group of immensely wealthy ideologues who are shaping the fate of America. In her new preface, Jane Mayer discusses the results of the most recent election and Donald Trump''s victory, and how, despite much discussion to the contrary, this was a huge victory for the billionaires who have been pouring money in the American political system.', 2, 7.99, 5, 'images/books/history/DarkMoney.png', 'Jane Mayer', 'history'),
('An Indigenous Peoples'' History of the United States', 'Today in the United States, there are more than five hundred federally recognized Indigenous nations comprising nearly three million people, descendants of the fifteen million Native people who once inhabited this land. The centuries-long genocidal program of the US settler-colonial regimen has largely been omitted from history.', 3, 10.89, 16, 'images/books/history/Indigenous.png', 'Roxanne Dunbar-Ortiz', 'history'),
('An Army at Dawn', 'The liberation of Europe and the destruction of the Third Reich is a story of courage and enduring triumph, of calamity and miscalculation. In this first volume of the Liberation Trilogy, Rick Atkinson shows why no modern reader can understand the ultimate victory of the Allied powers without a grasp of the great drama that unfolded in North Africa in 1942 and 1943.', 4, 6.99, 6, 'images/books/history/AnArmy.png', 'Rick Atkinson', 'history'),
('The Worst Hard Time', 'Egan tells an extraordinary tale in this visceral account of how America''s great, grassy plains turned to dust, and how the ferocious plains winds stirred up an endless series of "black blizzards" that were like a biblical plague: "Dust clouds boiled up, ten thousand feet or more in the sky, and rolled like moving mountains" in what became known as the Dust Bowl. But the plague was man-made, as Egan shows.', 5, 17.89, 31, 'images/books/history/WorstHard.png', 'Timothy Egan', 'history'),
('Paddle-to-the-Sea', 'Paddle to the Sea is a historical fictional book describing the travels of a wooden carved Indian.  Since all the events in the story could realistically have happened in the historical American waterways. For instance, the figure getting caught in a sawmill on its journey is an entirely plausible occurrence for the time.', 6, 8.99, 77, 'images/books/geography/Paddle.png', 'Holling C. Holling', 'geography'),
('The Geography of Nowhere', 'The Geography of Nowhere traces America''s evolution from a nation of Main Streets and coherent communities to a land where every place is like no place in particular, where the cities are dead zones and the countryside is a wasteland of cartoon architecture and parking lots', 7, 17.99, 77, 'images/books/geography/Nowhere.png', 'James Howard Kunstler', 'geography'),
('Geography and Geographers', '''Geography and Geographers'' surveys the major trends in human geography since 1945 in the English-speaking world and sets their appreciation within the context of economic, social and political changes.', 8, 7.98, 43, 'images/books/geography/Geographers.png', 'Ron Johnston', 'geography'),
('How the States Got Their Shapes', '"For anyone who''s been confounded by the largest of all jigsaw puzzles, the one that carved out those fifty weirdly formed states, here is the solution. It''s history, it''s geography, it''s comedy, it''s indispensable."--ANDRO LINKLATER, author of The Fabric of America: How Our Borders and Boundaries Shaped the Country and Forged Our National Identity.', 9, 9.77, 65, 'images/books/geography/States.png', 'Mark Stein', 'geography'),
('American Capitals: A Historical Geography', 'State capitals are an indelible part of the American psyche, spatial representations of state power and national identity. Learning them by heart is a rite of passage in grade school, a pedagogical exercise that emphasizes the importance of committing place-names to memory.', 10, 6.54, 56, 'images/books/geography/Capitals.png', 'Christian Montes', 'geography'),
('Mario Batali--Big American Cookbook', 'Mario Batali counts 26 restaurants, ten cookbooks, numerous television shows, and three Eataly marketplaces among his ever-expanding empire of Deliciousness. He cookbooks include the James Beard Award winning Molto Italiano: 327 Simple Italian Recipes (2005) and his most recent cookbook, America--Farm to Table.', 11, 12.98, 32, 'images/books/cooking/Mario.png', 'Mario Batali', 'cooking'),
('Momofuku (cookbook)', 'Chef David Chang''s first cookbook is long, laced with profanity and full of complicated, labor-intensive recipes, many of which require obscure ingredients like kochukaru (Korean chili powder) and sliced country jowl. In food circles, it''s one of the most highly anticipated books of the year.', 12, 12.99, 18, 'images/books/cooking/Momofuku.png', 'David Chang', 'cooking'),
('The New American Cooking', 'Joan Nathan, the author of Jewish Cooking in America, An American Folklife Cookbook, and many other treasured cookbooks, now gives us a fabulous feast of new American recipes and the stories behind them that reflect the most innovative time in our culinary history.', 13, 16.99, 74, 'images/books/cooking/NewAmerican.png', 'Joan Nathan', 'cooking'),
('Seven Fires: Grilling the Argentine Way', 'The Argentines grill more meat per capita than any nation on earth. Francis Mallmann was raised in the mountains of Patagonia, trained in the great kitchens of Europe, and returned home to become the top chef in Buenos Aires and the biggest star on South American food television', 14, 17.56, 44, 'images/books/cooking/SevenFires.png', 'Peter Kaminsky', 'cooking'),
('Ottolenghi: The Cookbook', 'Ottolenghi is one of the most iconic and dynamic restaurants in the country. Its unique blend of exquisite, fresh food, abundantly presented in a cutting-edge, elegant environment, has imaginatively redefined people''s dining expectations', 15, 10.89, 41, 'images/books/cooking/Ottolenghi.png', 'Sami Tamimi', 'cooking'),
('Heartbreak Hotel: An Alex Delaware Novel', 'Alex Delaware and LAPD detective Milo Sturgis investigate the death of Alex''s most mysterious patient to date in the sensational new thriller from the master of suspense, #1 New York Times bestselling author Jonathan Kellerman.', 16, 16.99, 61, 'images/books/bestsellers/Heartbreak.png', 'Jonathan Kellerman', 'bestsellers'),
('Rules of Civility: A Novel', 'The New York Times bestselling novel that "enchants on first reading and only improves on the second" (The Philadelphia Inquirer)', 17, 17.99, 71, 'images/books/bestsellers/Rules.png', 'Amor Towles', 'bestsellers'),
('My Sister''s Grave (The Tracy Crosswhite Series Book 1)', 'Tracy Crosswhite has spent twenty years questioning the facts surrounding her sister Sarah''s disappearance and the murder trial that followed. She doesn''t believe that Edmund House—a convicted rapist and the man condemned for Sarah''s murder—is the guilty party.', 18, 15.99, 72, 'images/books/bestsellers/MySisters.png', 'Robert Dugoni', 'bestsellers'),
('Echoes in Death: An Eve Dallas Novel (In Death, Book 44)', 'Echoes in Death, the chilling new suspense novel from #1 New York Times bestselling author J.D. Robb is the perfect entry point into the compelling In Death police procedural series featuring Lieutenant Eve Dallas.', 19, 10.78, 43, 'images/books/bestsellers/Echoes.png', 'J.D. Robb', 'bestsellers'),
('What If?: Serious Scientific Answers to Absurd Hypothetical Questions', 'From the creator of the wildly popular webcomic xkcd, hilarious and informative answers to important questions you probably never thought to ask.', 20, 13.99, 27, 'images/books/bestsellers/What.png', 'Randall Munroe', 'bestsellers'),
('test5', 'test5', 21, 4.67, 34, 'test5', 'test5', 'test5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` char(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `reg_date`) VALUES
(1, 'Admin', 'Admin', 'Admin', '4e7afebcfbae000b22c7c85e5560f89a2a0280b4', '2016-11-27 00:02:56'),
(62, 'Ewan', 'Donaldson', 'EwanSwagMoneyBigBucks', '152443a1324a036a62d49b92348f8498667919a1', '2016-11-09 11:24:17'),
(63, 'Ewan', 'Donaldson', 'EwanFamalamalam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2016-11-23 10:55:59'),
(64, 'E', 'D', 'ewan@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2016-11-23 11:02:58'),
(66, 'Ewan', 'Donaldson', 'signmein@gmail.com', '152443a1324a036a62d49b92348f8498667919a1', '2016-11-30 09:14:04'),
(67, 'Tay', 'Tay', 'Tay@gmail.com', '3ef79f0177326cce3871d9ede3674ffc8a53d201', '2016-12-07 12:32:27'),
(68, 'E', 'D', 'ED', '5fbc6add7068213ed3e627ffd2e1fcc92e6c0ef5', '2016-12-09 18:47:24'),
(70, 'Tay', 'Tay', 'Tay', '3ef79f0177326cce3871d9ede3674ffc8a53d201', '2016-12-14 10:15:09'),
(71, 'adam', 'dam', 'adam', '0e18f44c1fec03ec4083422cb58ba6a09ac4fb2a', '2016-12-14 10:23:48'),
(72, 'Sharon', 'Martin', 'sm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-01-11 12:12:20'),
(73, 'Ewan', 'Donaldson', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-01-28 13:22:24'),
(74, 'o', 'o', 'o', '7a81af3e591ac713f81ea1efe93dcf36157d8376', '2017-02-17 20:59:59'),
(75, 'Ewan', 'Donaldson', 'test@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-02-17 21:50:48'),
(76, 'Ewan', 'Donaldson', 'try', '3240aa0fe3ca15051680641a59e8d7b61c286b23', '2017-02-17 22:04:16'),
(77, 'Ewan', 'Donaldson', 'testemail@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2017-02-20 13:17:43'),
(78, 'Ewantest', 'Ewantest', 'Ewantest', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-02-20 13:27:01'),
(79, 'Registertest', 'Regiatertest', 'Registertest', '8efd86fb78a56a5145ed7739dcb00c78581c5375', '2017-02-20 13:29:27'),
(80, 'Registerteste', 'Regiaterteste', 'Ewanteste', '58e6b3a414a1e090dfc6029add0f3555ccba127f', '2017-02-20 13:30:22'),
(82, 'A', 'A', 'A', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-02-20 13:52:07'),
(83, 'Ewan', 'Donaldson', 'test@gmail.co.uk', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-03-23 22:06:20'),
(84, 'q', 'q', 'q', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', '2017-03-23 23:09:54'),
(85, 'Ewan', 'Donaldson', 'test@gmail.com2', '05a8ea5382b9fd885261bb3eed0527d1d3b07262', '2017-03-25 20:44:36'),
(86, 'ffafafaw', 'fwafwaawf', 'awfwaffwa', '54fd1711209fb1c0781092374132c66e79e2241b', '2017-03-25 20:59:02'),
(87, 'abc', 'abc', 'abc@gmail', '81fe8bfe87576c3ecb22426f8e57847382917acf', '2017-03-26 18:46:20'),
(88, 'abcd', 'abcd', 'abcd@gmail', '4aeb195cd69ed93520b9b4129636264e0cdc0153', '2017-03-26 19:28:20'),
(89, 'T', 'est', 'test1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2017-03-26 19:31:40'),
(90, '1', '2', '3', '1b6453892473a467d07372d45eb05abc2031647a', '2017-03-26 19:34:03'),
(91, 'ads', 'add', 'adsdd', '4aeb195cd69ed93520b9b4129636264e0cdc0153', '2017-03-26 19:40:57'),
(92, 'adfg', 'fg', 'adfghj', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', '2017-03-27 20:49:59'),
(93, 'gg', 'gg', 'gg', 'f3226f91f77a87d909b8920adc91f9a301a7316b', '2017-03-27 20:55:17'),
(94, 'Hugh', 'Jass', 'bigbustycoons@gmail.ca', '48689564a8ef348159c142bd40ffed7f846c8ff6', '2017-03-28 07:13:02'),
(95, 'Kciron', 'Erkibld', 'lol', '403926033d001b5279df37cbbe5287b7c7c267fa', '2017-03-28 07:19:29'),
(96, 'Sharon', 'Martin', 'test@test.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2017-04-18 08:28:16'),
(97, 'f', 'f', 'f', '4a0a19218e082a343a1b17e5333409af9d98f0f5', '2017-04-18 12:09:36'),
(98, 'ee', 'ee', 'ee@ee', '1f444844b1ca616009c2b0e3564fecc065872b5b', '2017-05-02 08:20:44'),
(99, 'suck', 'my', 'dick@dick.com', '7e26dbc06435f993cc5ce97b6a56e43af617888d', '2017-05-02 09:04:02'),
(100, 'tt', 'tt', 'tt', '8c1017982b2032cc059203e3d83dd0ee2e7a86b3', '2017-05-02 10:08:06'),
(101, 'Test2121', 'Test', 'test@test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-05-04 08:20:15'),
(102, 'Kyle', 'Stewart', 'Kyle1234', 'dddd5d7b474d2c78ebbb833789c4bfd721edf4bf', '2017-05-09 18:42:59'),
(103, 'e', 'w', 'andon', '458b7c43babd3b016ca7ab14156b910a649b7441', '2017-05-11 17:22:07'),
(104, 'test2', 'test2', 'test2', '109f4b3c50d7b0df729d299bc6f8e9ef9066971f', '2017-05-11 17:25:40'),
(105, 'big', 'wank', 'bigwank@wank.com', '63aef6ff8e1e37cc18ce1b02b5a1534fa1a7cd6c', '2017-05-13 19:17:27'),
(107, 'Ura', 'Twat', 'UraTwat@twatsicle.com', '455bc9a19e8679c4da017b3bd3e433c476d0c586', '2017-05-13 20:22:45'),
(108, 'r', 'r', 'r', '4dc7c9ec434ed06502767136789763ec11d2c4b7', '2017-05-25 08:24:33'),
(109, 'gimp', 'gimp', 'gimp@gimp.com', 'e505a25e825e782accd6990c7b13b6d4aecf65cc', '2017-05-29 17:03:48'),
(110, '123', '123', '1', '356a192b7913b04c54574d18c28d46e6395428ab', '2017-05-30 10:34:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
