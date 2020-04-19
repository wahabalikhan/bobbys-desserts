-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 19, 2020 at 09:13 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bobbys_desserts`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` tinytext NOT NULL,
  `product_price` double NOT NULL,
  `product_description` longtext NOT NULL,
  `special` int(1) NOT NULL DEFAULT '0',
  `vegetarian` int(1) NOT NULL DEFAULT '0',
  `gluten_free` int(1) NOT NULL DEFAULT '0',
  `image_directory` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `special`, `vegetarian`, `gluten_free`, `image_directory`) VALUES
(1, 'belgium chocolate waffle', 7.99, 'Rich soft and fluffy waffles coated in milk belgium chocolate with a generous scoop of vanilla ice cream and topped with fresh strawberries.', 0, 1, 1, 'assets/img/products/product_image_1.png'),
(2, 'kinder bueno waffle', 7.99, 'Similar to the belgium chocolate waffle but what distinguishes this from that product is pieces of white kinder bueno are sprinkled on top of the waffle and are drizzled in milk chocolate. ', 1, 1, 0, 'assets/img/products/product_image_2.png'),
(3, 'strawberry delight crepe', 5.99, 'Fresh crepe wrapped around delicious strawberries and whipped cream and chocolate and to finish it off, a drizzle of rich dark chocolate.', 1, 0, 1, 'assets/img/products/product_image_3.png'),
(4, 'nutella spread crepe', 5.99, 'Thick, sweet nutella spread on a fresh crepe containing only the freshest of fruits such as bananas and strawberries topped with a scoop of vanilla ice cream.', 1, 1, 0, 'assets/img/products/product_image_4.png'),
(5, 'bubblegum sundae', 4.59, 'A tall glass of bubblegum ice cream topped with strawberry and chocolate sauce and a handful of rainbow sprinkles and a cherry on top.', 0, 1, 0, 'assets/img/products/product_image_5.png'),
(6, 'minty sundae', 4.59, 'Minty ice cream filled with mint chocolate aero pieces that enrich the taste of the dessert. The glass is decorated inside with swirls of milk chocolate sauce.', 0, 0, 1, 'assets/img/products/product_image_6.png'),
(7, 'plain cheesecake', 4.99, 'A plain digestive biscuit base with fresh cottage cheese to dominate the dessert. It is topped with a fresh, bright red cherry and a drizzle of chocolate around the plate.', 0, 1, 1, 'assets/img/products/product_image_7.png'),
(8, 'chocolate chip cookie dough', 6.99, 'Fresh and out of the oven cookie dough filled with rich milk chocolate chips and softly baked to perfection.', 0, 0, 0, 'assets/img/products/product_image_8.png'),
(9, 'chocolate fudge cake', 4.99, 'A thick slice of milk chocolate fudge cake that melts at its arrival. Made to satisfy your taste buds, the cake comes with a big scoop of vanilla ice cream to fuse with the bitter dark chocolate taste.', 0, 1, 1, 'assets/img/products/product_image_9.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;