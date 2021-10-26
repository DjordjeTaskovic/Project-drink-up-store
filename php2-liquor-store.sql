-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 01:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2-liquor-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `availabilities`
--

CREATE TABLE `availabilities` (
  `id` int(11) NOT NULL,
  `state` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `availabilities`
--

INSERT INTO `availabilities` (`id`, `state`) VALUES
(1, 'Not in stock'),
(2, 'Sale'),
(3, 'New Arival'),
(4, 'Best Seller');

-- --------------------------------------------------------

--
-- Table structure for table `availability_product`
--

CREATE TABLE `availability_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `availability_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `availability_product`
--

INSERT INTO `availability_product` (`id`, `product_id`, `availability_id`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 3),
(5, 5, 2),
(6, 6, 4),
(7, 7, 4),
(8, 8, 2),
(9, 9, 3),
(13, 4, 2),
(14, 11, 3),
(15, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(750) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `info`, `date`) VALUES
(1, 'A Bartender’s Guide', 'Liqueurs, on the other hand, are liquors that have had some kind of sweetener added to them. They’re also often flavored with various herbs, fruits, or spices, and they generally sit around 15-30% ABV (alcohol by volume) but can go as high as 55% ABV.\r\n\r\nHowever, the flavoring and the ABV aren’t strict requirements. What matters for a liqueur to be called a liqueur is that it has been sweetened in some way. Otherwise, they’re just flavored liquors.', '23 April 2020'),
(2, 'The 7 Most Commonly Used Liquors', 'We’re going to take a look at each of these spirits in detail, what makes them different, and clear up any of the confusing terminology surrounding them.\r\n\r\nThe liquors that we’re going to look at are:\r\n\r\nVodka\r\nGin\r\nWhisky (or Whiskey?)\r\nRum\r\nTequila\r\nBrandy\r\nVermouth (technically not a liquor, but important for bartenders to know about nonetheless)', '12 Dec 2020'),
(3, 'What is Liquor', 'So here are some very basic explanations:\r\n\r\nFermentation is the process of turning sugars into alcohol. That’s how beer, wine, and ciders are made.\r\n\r\n Distillation turns fermented beverages into much stronger versions of themselves by separating the alcohol from the water. By removing the water, the alcohol in the liquid becomes much more concentrated.', '02 July 2021'),
(4, 'Here\'s how you Become a Pro Bartender', 'To truly benefit from bartending, you need to be good at your job. The manual covers everything you need to know to confidently work in the majority of bars around the world.\r\n\r\n LIVE THE DREAM\r\nWith the job and skills firmly secured, the only limitation is your imagination. Whether you choose to travel the world or save for a mortgage, the decision is yours.', '15 March 2021');

-- --------------------------------------------------------

--
-- Table structure for table `blog_image`
--

CREATE TABLE `blog_image` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_image`
--

INSERT INTO `blog_image` (`id`, `image_id`, `blog_id`) VALUES
(1, 10, 2),
(2, 11, 1),
(3, 12, 3),
(4, 13, 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Brandy'),
(2, 'Gin'),
(3, 'Rum'),
(4, 'Tequila'),
(5, 'Vodka'),
(6, 'Whiskey');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`) VALUES
(5, 5, 6),
(8, 8, 6),
(12, 1, 3),
(13, 2, 6),
(14, 3, 6),
(15, 6, 6),
(16, 7, 3),
(17, 4, 2),
(18, 9, 2),
(20, 11, 1),
(21, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `subject`, `message`) VALUES
(1, 'nikolas-john@gmail.com', 'Request of a licence permit', 'Text for request of a licence permit...');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `alt`) VALUES
(1, 'prod-1.jpg', 'Product 1'),
(2, 'prod-2.jpg', 'Product 2'),
(3, 'qW9qBF6xIszWEgGEkT7st1Yk9pBc05Y6fhxCIpGQ.jpg', 'Product 3'),
(4, '4N4f04EmQaLliDadgsY2xnNpdVeG6rjf9A0c2Iyq.jpg', 'Product 4'),
(5, 'udcCqHQtoXoCb9DDTd4CvEFYeIvULk2vnd4cUZSz.jpg', 'Product 5'),
(6, 'aj2aHHCSeNbLgCCN7KDfMqOAWpAFgJrpyJ5bmLdO.jpg', 'Product 6'),
(7, '70KoheJlBJgTuWWWXTyCglvXMoAW6ZfY35c2tdMh.jpg', 'Product 7'),
(8, 'czylkpMI2OLLTXgjJYp3ro2lLlvDy8HrGRXee5Ex.jpg', 'Product 8'),
(9, 'prod-9.jpg', 'Product 9'),
(10, 'image-1.jpg', 'Image 1'),
(11, 'image-2.jpg', 'Image 2'),
(12, 'image-3.jpg', 'Image 3'),
(13, 'image-4.jpg', 'Image 4'),
(15, '0Dc59Qea4O7PWyg7kk0IyR7ZFRu2tiLGCwmDxRPr.jpg', NULL),
(17, 'ofmF1BS80y54nSip9YaTGdoVynItnZXXlC16lNmy.jpg', NULL),
(18, 'UriKM5tfz8haTLS164l6LpE3kbevWOBxQqEehsCg.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_product`
--

CREATE TABLE `image_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_product`
--

INSERT INTO `image_product` (`id`, `product_id`, `image_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(12, 11, 17),
(13, 12, 18);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `text`) VALUES
(1, 'home', 'Home'),
(2, 'store', 'Store'),
(4, 'contacthome', 'Contact'),
(5, 'home#blogs', 'Blogs');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` float NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `name`, `price`, `quantity`, `subtotal`) VALUES
(1, 4, 9, 'Citadelle', '85.98', 1, '85.98'),
(2, 2, 9, 'Jim Beam Kentucky Straigh', '79.00', 1, '79.00'),
(3, 4, 9, 'Citadelle', '85.98', 2, '171.96'),
(8, 1, 11, 'Bacardi 151', '49.00', 1, '49.00'),
(9, 8, 11, 'Jameson Irish Whiskey', '89.99', 1, '89.99');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''' ''',
  `price` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `info`, `price`, `date`) VALUES
(1, 'Bacardi 151', 'Is a discontinued brand of highly alcoholic rum made by Bacardi Limited of Hamilton, Bermuda. It is named for its alcohol proof level of 151, that is, 75.5% alcohol by volume. This is much higher than typical rum, which averages around 35%–40% alcohol by volume. Bacardi 151 was sold in the United States and Canada from at least 1963 until 2016.', '149.00', '2021-03-10 15:21:03'),
(2, 'Jim Beam Kentucky Straigh', 'Manufactured in Clermont, Kentucky, by Beam Suntory, a subsidiary of Suntory Holdings in Osaka, Japan. It is one of the best-selling bourbon brands in the world [1]. Since 1795, seven generations of the Beam family have been involved in the production of whiskey in the company that produces it. The brand name became \"Jim Beam\" in 1943 [2] as part of a business startup.', '119.00', '2021-03-10 15:21:03'),
(3, 'The Glenlivet', 'Scotland that produces single malt Scotch whisky. It is the oldest legal distillery in the parish of Glenlivet, and the production place of the Scottish whisky of the same name. It was founded in 1824 and has operated almost continuously since.', '123.00', '2021-03-10 15:21:03'),
(4, 'Citadelle', 'Citadelle Gin is a French brand of gin that was first released in 1996. It is produced by Maison Ferrand in Cognac, France. It is named after the only Royal Distillery in the 18th century that was built in Dunkirk, France.[3] It is packaged in a decorated bottle that notes each of the 19 botanicals used in its production.[', '111.98', '2021-03-10 15:21:03'),
(5, 'Johnnie Walker | Black Label', 'Johnnie Walker is a brand of Scotch whiskey produced by Diagio, and its origin is from Kilmarnock, Scotland. It is the most widespread type of whiskey in the world, with a market in almost every country, with annual sales of over 130 million bottles.', '144.11', '2021-03-10 15:21:03'),
(6, 'Macallan', 'The Macallan was matured only in oak sherry casks brought to the distillery from Jerez de la Frontera, Spain. Beginning in 2004, The Macallan introduced a new main product, the Fine Oak series, with the whisky mellowed in bourbon oak casks as well as sherry ones.', '132.00', '2021-03-10 15:21:03'),
(7, 'Old Monk', 'Old Monk Rum is an iconic vatted Indian dark rum, launched in 1954.[1] It is blended and aged for a minimum of 7 years. It is a dark rum with a distinct vanilla flavour, with an alcohol content of 42.8%.[2] It is produced in Ghaziabad, Uttar Pradesh.', '149.00', '2021-03-10 15:21:03'),
(8, 'Jameson Irish Whiskey', 'Jameson (/ˈdʒeɪməsən/ or /ˈdʒɛməsən/) is a blended Irish whiskey produced by the Irish Distillers subsidiary of Pernod Ricard. Originally one of the six main Dublin Whiskeys at the Jameson Distillery Bow St., Jameson is now distilled at the New Midleton Distillery in County Cork.', '179.99', '2021-03-10 15:21:03'),
(9, 'Hendrick\'s', 'Hendrick\'s Gin is a brand of gin produced by William Grant & Sons at the Girvan distillery, Scotland, and launched in 1999.[2] It was invented by Lesley Gracie, a Yorkshire native, who was hired by William Grant & Sons to work in new liquid development for some of their products.', '137.00', '2021-03-10 15:21:03'),
(11, 'Licor Beirão', 'Production began in the 19th century in Lousã, in the Beira region, from where it got its name (Beirão means \"from Beira\"). It is made from a double distillation of seeds and herbs, including mint, cinnamon, cardamom and lavender, from all over the world.', '172.00', '2021-05-04 10:55:29'),
(12, 'Grenadine', 'The drink gets its name from the way it is commonly consumed; the usual procedure is to leave about a fifth of the glass empty to allow the drink to fizz, then to hold one\'s hand over the top of the glass and then slam it onto a hard surface to mix it. The slamming action releases gas bubbles from the mixed drink causing it to foam vigorously.', '172.00', '2021-05-04 11:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `date`) VALUES
(1, 'Nick', 'Madison', 'incorporate-nick@reso.com', '7857026d6a29c150eebc37dfbd9e2b89', 'Valumovski Street 208', '2021-05-04 11:46:13'),
(2, 'Jennifer', 'Peterson', 'jenniferp@rogers.ca', '7e06a892b61cc2448fe48dfbd9bb8ad9', '160 Amphitheatre Parkway', '2021-05-04 11:51:32'),
(3, 'Frank', 'Jeferson', 'frank-inco@yahho.com', 'deb878d1c46c5cd3d3fc494932cf6875', '700 W Pender Street', '2021-05-04 11:51:32'),
(4, 'John', 'Chage', 'nikosen-john@gmail.com', '639ab71c627b326ef49957dc1062763e', '541 Del Medio Avenue', '2021-05-04 11:45:20'),
(5, 'Djordje', 'Taskovic', 'djordje.mystore@gmail.com', 'a936f00a86cde31705c8384324f62622', 'Valumovski Street 208', '2021-04-17 12:30:23'),
(8, 'Nikolas', 'Cage', 'nikolas-john@gmail.com', '8e980d0cd7d430ff7bbba14378a9a23c', 'Banningtons 22', '2021-04-15 16:40:38'),
(9, 'Jack', 'Badinski', 'badinski-jack@gmail.com', '299fa5b3d7695c4872456bded02aca40', 'Banningtons 22', '2021-04-15 16:54:15'),
(10, 'Patrik', 'Zinnev', 'zinnev-ink@gmail.com', '3dd9a0f8c62f6b204ca8649ecca9d598', 'Banningtons 22', '2021-04-15 17:03:12'),
(11, 'Ross', 'Wassington', 'rossom-experience@yahoo.com', '38395f5303fde6e5a5821ff5516d8b26', 'Banningtons 22', '2021-04-15 17:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `id_user`, `id_role`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 8, 1),
(7, 9, 1),
(8, 10, 1),
(9, 11, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availability_product`
--
ALTER TABLE `availability_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `availability_id` (`availability_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_image`
--
ALTER TABLE `blog_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img` (`image_id`),
  ADD KEY `id_blog` (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`product_id`),
  ADD KEY `id_cat` (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`product_id`),
  ADD KEY `id_img` (`image_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_role`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `availability_product`
--
ALTER TABLE `availability_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_image`
--
ALTER TABLE `blog_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `availability_product`
--
ALTER TABLE `availability_product`
  ADD CONSTRAINT `availability_product_ibfk_1` FOREIGN KEY (`availability_id`) REFERENCES `availabilities` (`id`),
  ADD CONSTRAINT `availability_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `blog_image`
--
ALTER TABLE `blog_image`
  ADD CONSTRAINT `blog_image_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `blog_image_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `image_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `image_product_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
