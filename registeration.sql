-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2025 at 07:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registeration`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` int(11) NOT NULL,
  `productid` varchar(20) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `producttype` varchar(30) NOT NULL,
  `productdescription` text NOT NULL,
  `productcolour` varchar(50) NOT NULL,
  `productprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`userid`, `productid`, `productname`, `producttype`, `productdescription`, `productcolour`, `productprice`, `quantity`) VALUES
(1, 'product16', 'Log wood table', 'Sandal Wood Finish', 'Description: Made with log wood, Solid base, Long lasting', 'Striped Gray', 800, 3),
(2, 'product12', 'Dining Table', 'Industrial', 'Description: Used broken tiles for top finish, Applied protection layer, Also can be used for living room decor as well', 'Metallic', 1000, 1),
(3, 'product11', 'Table chair set', 'Center', 'Description: Made from Recycled tyres, Suitable for garden', 'Orange', 550, 3),
(4, 'product11', 'Table chair set', 'Center', 'Description: Made from Recycled tyres, Suitable for garden', 'Orange', 550, 4);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ImageID` varchar(10) NOT NULL,
  `productImage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImageID`, `productImage`) VALUES
('product1', 'static/uploads/Chair1.png'),
('product10', 'static/uploads/Sofa4.png'),
('product11', 'static/uploads/Sofa5.png'),
('product12', 'static/uploads/Table1.png'),
('product13', 'static/uploads/Table2.png'),
('product14', 'static/uploads/Table3.png'),
('product15', 'static/uploads/Table4.png'),
('product16', 'static/uploads/Table5.png'),
('product17', 'static/uploads/Table6.png'),
('product18', 'static/uploads/Table7.png'),
('product19', 'static/uploads/Table8.png'),
('product2', 'static/uploads/Chair2.png'),
('product20', 'static/uploads/Tablecumsofa.png'),
('product3', 'static/uploads/Chair3.png'),
('product4', 'static/uploads/Chair4.png'),
('product5', 'static/uploads/Chair5.png'),
('product6', 'static/uploads/Chair6.png'),
('product7', 'static/uploads/Sofa1.png'),
('product8', 'static/uploads/Sofa2.png'),
('product9', 'static/uploads/Sofa3.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image_path`) VALUES
(1, 'Exploring the Tranquil Beauty ', 'As the morning sun gently casts its golden hue over the horizon, it heralds the beginning of a journey through the serene landscapes that grace our world. Nature\'s canvas unfolds before us, offering a breathtaking spectacle of tranquility and beauty that transcends mere words.\r\n\r\nIn the heart of the countryside lies a hidden gem, a secluded valley cocooned by majestic mountains. Embarking on a winding trail, the crisp air carries whispers of ancient tales woven into the fabric of the land. Each step forward unveils a picturesque vista, where emerald meadows stretch into the distance, embracing crystal-clear streams that meander like silver ribbons.\r\n\r\nThe symphony of nature orchestrates a harmonious blend of sights and sounds. Towering trees sway gently in the breeze, their leaves rustling like a melodious overture. The symphony of bird songs resonates through the air, creating a rhythm that resonates with the beating heart of the earth itself.\r\n\r\nAmidst this serene haven, a cascading waterfall emerges—a masterpiece sculpted by time\'s patient hand. Its waters cascade down in graceful torrents, creating an ethereal mist that dances in the morning light. Here, time seems to stand still, allowing one to immerse in the sheer wonder of nature\'s artistry.\r\n\r\nThe embrace of nature offers a sanctuary, a refuge from the chaos of modernity. It whispers stories of resilience, reminding us of the innate beauty that exists in simplicity. The serenity of these landscapes serves as a gentle reminder to pause, breathe, and reconnect with the essence of life.\r\n\r\nAs the day progresses, the canvas of the sky transforms into a palette of colors. The sun, in its descent, paints the horizon in hues of amber and crimson, bidding adieu to the day. With each passing moment, the landscape transforms, casting shadows that weave a narrative of fleeting beauty.\r\n\r\nIn the twilight\'s embrace, the stars emerge, adorning the night sky like diamonds strewn across dark velvet. The quietude of the night brings a different kind of enchantment—a tranquil serenity that envelopes the soul, inviting introspection and contemplation.\r\n\r\nIn these moments, surrounded by the untouched splendor of nature, one realizes the profound connection that exists between humanity and the earth. It\'s a bond woven into the very fabric of our existence—a reminder of our responsibility to cherish and preserve these sanctuaries for generations to come.\r\n\r\nAs the journey through these serene landscapes draws to a close, it leaves an indelible mark upon the heart—a testament to the enduring allure and tranquility that nature graciously bestows upon us. It\'s an invitation to seek solace in the simplicity of nature and embrace the timeless beauty that surrounds us.\r\n\r\nIn these landscapes, where nature\'s brushstrokes paint a masterpiece, one discovers not only the beauty of the world but also the beauty within oneself—an exploration that transcends boundaries and leaves an everlasting imprint on the soul.\r\n\r\n\r\n\r\n\r\n\r\nAs the morning sun gently casts its golden hue over the horizon, it heralds the beginning of a journey through the serene landscapes that grace our world. Nature\'s canvas unfolds before us, offering a breathtaking spectacle of tranquility and beauty that transcends mere words.\r\n\r\nIn the heart of the countryside lies a hidden gem, a secluded valley cocooned by majestic mountains. Embarking on a winding trail, the crisp air carries whispers of ancient tales woven into the fabric of the land. Each step forward unveils a picturesque vista, where emerald meadows stretch into the distance, embracing crystal-clear streams that meander like silver ribbons.\r\n\r\nThe symphony of nature orchestrates a harmonious blend of sights and sounds. Towering trees sway gently in the breeze, their leaves rustling like a melodious overture. The symphony of bird songs resonates through the air, creating a rhythm that resonates with the beating heart of the earth itself.\r\n\r\nAmidst this serene haven, a cascading waterfall emerges—a masterpiece sculpted by time\'s patient hand. Its waters cascade down in graceful torrents, creating an ethereal mist that dances in the morning light. Here, time seems to stand still, allowing one to immerse in the sheer wonder of nature\'s artistry.\r\n\r\nThe embrace of nature offers a sanctuary, a refuge from the chaos of modernity. It whispers stories of resilience, reminding us of the innate beauty that exists in simplicity. The serenity of these landscapes serves as a gentle reminder to pause, breathe, and reconnect with the essence of life.\r\n\r\nAs the day progresses, the canvas of the sky transforms into a palette of colors. The sun, in its descent, paints the horizon in hues of amber and crimson, bidding adieu to the day. With each passing moment, the landscape transforms, casting shadows that weave a narrative of fleeting beauty.\r\n\r\nIn the twilight\'s embrace, the stars emerge, adorning the night sky like diamonds strewn across dark velvet. The quietude of the night brings a different kind of enchantment—a tranquil serenity that envelopes the soul, inviting introspection and contemplation.\r\n\r\nIn these moments, surrounded by the untouched splendor of nature, one realizes the profound connection that exists between humanity and the earth. It\'s a bond woven into the very fabric of our existence—a reminder of our responsibility to cherish and preserve these sanctuaries for generations to come.\r\n\r\nAs the journey through these serene landscapes draws to a close, it leaves an indelible mark upon the heart—a testament to the enduring allure and tranquility that nature graciously bestows upon us. It\'s an invitation to seek solace in the simplicity of nature and embrace the timeless beauty that surrounds us.\r\n\r\nIn these landscapes, where nature\'s brushstrokes paint a masterpiece, one discovers not only the beauty of the world but also the beauty within oneself—an exploration that transcends boundaries and leaves an everlasting imprint on the soul.\r\n\r\nAs the morning sun gently casts its golden hue over the horizon, it heralds the beginning of a journey through the serene landscapes that grace our world. Nature\'s canvas unfolds before us, offering a breathtaking spectacle of tranquility and beauty that transcends mere words.\r\n\r\nIn the heart of the countryside lies a hidden gem, a secluded valley cocooned by majestic mountains. Embarking on a winding trail, the crisp air carries whispers of ancient tales woven into the fabric of the land. Each step forward unveils a picturesque vista, where emerald meadows stretch into the distance, embracing crystal-clear streams that meander like silver ribbons.\r\n\r\nThe symphony of nature orchestrates a harmonious blend of sights and sounds. Towering trees sway gently in the breeze, their leaves rustling like a melodious overture. The symphony of bird songs resonates through the air, creating a rhythm that resonates with the beating heart of the earth itself.\r\n\r\nAmidst this serene haven, a cascading waterfall emerges—a masterpiece sculpted by time\'s patient hand. Its waters cascade down in graceful torrents, creating an ethereal mist that dances in the morning light. Here, time seems to stand still, allowing one to immerse in the sheer wonder of nature\'s artistry.\r\n\r\nThe embrace of nature offers a sanctuary, a refuge from the chaos of modernity. It whispers stories of resilience, reminding us of the innate beauty that exists in simplicity. The serenity of these landscapes serves as a gentle reminder to pause, breathe, and reconnect with the essence of life.\r\n\r\nAs the day progresses, the canvas of the sky transforms into a palette of colors. The sun, in its descent, paints the horizon in hues of amber and crimson, bidding adieu to the day. With each passing moment, the landscape transforms, casting shadows that weave a narrative of fleeting beauty.\r\n\r\nIn the twilight\'s embrace, the stars emerge, adorning the night sky like diamonds strewn across dark velvet. The quietude of the night brings a different kind of enchantment—a tranquil serenity that envelopes the soul, inviting introspection and contemplation.\r\n\r\nIn these moments, surrounded by the untouched splendor of nature, one realizes the profound connection that exists between humanity and the earth. It\'s a bond woven into the very fabric of our existence—a reminder of our responsibility to cherish and preserve these sanctuaries for generations to come.\r\n\r\nAs the journey through these serene landscapes draws to a close, it leaves an indelible mark upon the heart—a testament to the enduring allure and tranquility that nature graciously bestows upon us. It\'s an invitation to seek solace in the simplicity of nature and embrace the timeless beauty that surrounds us.\r\n\r\nIn these landscapes, where nature\'s brushstrokes paint a masterpiece, one discovers not only the beauty of the world but also the beauty within oneself—an exploration that transcends boundaries and leaves an everlasting imprint on the soul.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'static/uploads/Blogg.png'),
(2, 'The Hidden Value of Scrap Prod', 'In today\'s world, sustainability and resourcefulness are crucial, yet scrap products are often overlooked despite their immense potential. Items like metals, plastics, electronics, and old furniture, which may seem like waste, can be repurposed, recycled, or sold for profit. Recycling scrap products not only reduces landfill waste but also conserves energy and raw materials, making industries more sustainable. Valuable scraps such as iron, copper, aluminum, and electronic components contain reusable materials like gold and silver. Even plastic waste, wood, and glass can be transformed into new products, reducing environmental impact. The scrap industry provides economic opportunities, with individuals and businesses trading discarded materials for cash or turning them into creative, upcycled items. Ultimately, scrap products are not just trash but hidden resources that contribute to a greener planet and a thriving circular economy.', 'static/uploads/scrap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` varchar(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productRating` decimal(8,0) NOT NULL,
  `productDescription` text NOT NULL,
  `productcategory` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productRating`, `productDescription`, `productcategory`) VALUES
('product1', 'Iron Frame chair', 4, 'Description: Made with Iron Frame, Carpet Rope, Knotted by Hands', 'Chair'),
('product10', 'Sleeping basket for babies', 3, 'Description: Made from recycled tyre, Comfortable, Protected edge areas', 'Sofa'),
('product11', 'Table chair set', 4, 'Description: Made from Recycled tyres, Suitable for garden', 'Sofa'),
('product12', 'Dining Table', 3, 'Description: Used broken tiles for top finish, Applied protection layer, Also can be used for living room decor as well', 'Table'),
('product13', 'Fancy Table', 4, 'Description: Used recycled CDs for decoration, Can be used for living room, study, dining etc.', 'Table'),
('product14', 'Skate board table', 2, 'Description: Made with wooden skateboard, Can be used as a shoe shelf, also for keeping mobile and laptops', 'Table'),
('product15', 'Center table', 5, 'Description: Made with recycled glass bottles, Fancy for living room decor', 'Table'),
('product16', 'Log wood table', 3, 'Description: Made with log wood, Solid base, Long lasting', 'Table'),
('product17', 'Centre Table', 4, 'Description: Made using recycled magazines, cardboard, glass, Just for living room decoration', 'Table'),
('product18', 'Tea Table', 3, 'Description: Colourful glasses on cardboard, Protection layer applied, Also can be used in garden', 'Table'),
('product19', 'Mini table', 2, 'Description:Cardboard base, Jute rope, Wooden legs for support', 'Table'),
('product2', 'Wooden Chair', 3, 'Description: Steel Frame, Made by reusing wooden cloth hangers', 'Chair'),
('product20', 'Mini Table cum chair', 3, 'Description: Made using tyre and jute rope, Can be both used as a mini table and a chair', 'Table'),
('product3', 'Student Study Chair', 5, 'Description: Comfortable, Attractive', 'Chair'),
('product4', 'Garden Chair', 3, 'Description: Iron frame, Rope Knotted by hands', 'Chair'),
('product5', 'Refurbished Chair', 3, 'Description: Made with Polka Dots Clothes, Study room use, Office Room Use, Easy rotation', 'Chair'),
('product6', 'Office chair', 4, 'Description: Easy rotation, Smooth rotation and Bendable, Comfy seat', 'Chair'),
('product7', 'Mini sofa for living room', 5, 'Description: Made using leftover furniture, Cover made by clothes,Specifically for living room', 'Sofa'),
('product8', 'Sofa seat cum table', 3, 'Description: Made using tyre and ropes, Used for both table and a sofa', 'Sofa'),
('product9', 'Comfortable sofa', 3, 'Description:Made with recycled tyres, Attached sofa, Comfortable for all places', 'Sofa');

-- --------------------------------------------------------

--
-- Table structure for table `regdata`
--

CREATE TABLE `regdata` (
  `name` varchar(20) NOT NULL,
  `telphone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `des` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regdata`
--

INSERT INTO `regdata` (`name`, `telphone`, `email`, `password`, `gender`, `des`) VALUES
('Sandeep Sarkar', '6045327631', 'ss@gmail.com', 'Sandeep5', 'male', 'Artisian'),
('Ronit Yadav', '6432908777', 'ads@gmail.com', 'ro56#', 'male', 'Artisian'),
('Suraj Jain', '7065235623', 'sj@gmail.com', 'suraj12', 'male', 'Artisian'),
('Samar Roy', '7953247568', 'sr@gmail.com', 'snki45', 'male', 'Normal_Use'),
('Niraj Chop', '8798743213', 'a@a.com', 'abc123', 'male', 'Normal_Use'),
('Deepshika Singh', '9864231083', 'ds@gmail.com', 'abchgs14', 'female', 'Artisian');

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `VariationID` int(11) NOT NULL,
  `ProductID` varchar(11) NOT NULL,
  `Types` varchar(30) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`VariationID`, `ProductID`, `Types`, `Color`, `Stock`, `Price`) VALUES
(0, 'product2', 'None', 'None', 4, 600),
(1, 'product7', 'Recliner', 'Brown', 8, 1000),
(2, 'product7', 'Recliner', 'Grey', 12, 1000),
(3, 'product7', 'Recliner', 'Peach', 5, 1000),
(4, 'product7', 'Settee', 'Light Pink', 5, 600),
(5, 'product7', 'Settee', 'Maroon', 3, 600),
(6, 'product7', 'Settee', 'White ', 6, 600),
(7, 'product7', 'Mini Couch', 'Matt Black', 4, 800),
(8, 'product7', 'Mini Couch', 'Green', 10, 800),
(9, 'product7', 'Mini Couch', 'Sky Blue', 3, 800),
(10, 'product9', 'Mini Couch', 'Multi', 3, 200),
(11, 'product9', 'Mini Couch', 'Black and White Stripes', 3, 200),
(12, 'product9', 'Mini Couch', 'Red with Yellow dots', 7, 200),
(13, 'product9', 'Dining seat', 'Brown', 4, 700),
(14, 'product9', 'Dining seat', 'Coffee', 3, 700),
(15, 'product9', 'Dining seat', 'Cream', 2, 700),
(16, 'product11', 'Dining', 'Green', 2, 900),
(17, 'product11', 'Dining', 'Wood', 3, 900),
(18, 'product11', 'Dining', 'Peach', 5, 900),
(19, 'product11', 'Center', 'Blue', 4, 550),
(20, 'product11', 'Center', 'Orange', 4, 550),
(21, 'product11', 'Center', 'Yellow', 4, 550),
(22, 'product12', 'Traditional', 'Brown', 7, 1500),
(23, 'product12', 'Traditional', 'Oak', 3, 1500),
(24, 'product12', 'Traditional', 'Dark Brown', 6, 1500),
(25, 'product12', 'Industrial', 'Silver', 2, 1000),
(26, 'product12', 'Industrial', 'Metallic', 6, 1000),
(27, 'product12', 'Industrial', 'Light gold', 3, 1000),
(28, 'product12', 'Round', 'Wooden', 7, 600),
(29, 'product12', 'Round', 'Light Maroon', 4, 600),
(30, 'product12', 'Round', 'Light Brown', 3, 600),
(31, 'product13', 'Round', 'Light Gold', 3, 400),
(32, 'product13', 'Round', 'Metallic black', 2, 400),
(33, 'product13', 'Round', 'Wood', 5, 400),
(34, 'product13', 'Oval', 'Light Maroon', 4, 700),
(35, 'product13', 'Oval', 'Red', 6, 700),
(36, 'product13', 'Oval', 'Silver', 5, 700),
(37, 'product15', 'Wooden', 'None', 12, 350),
(38, 'product15', 'Glass', 'None', 7, 650),
(39, 'product15', 'Wooden with Walnut Finish', 'None', 4, 400),
(40, 'product16', 'Glass Top', 'Almond', 4, 300),
(41, 'product16', 'Glass Top', 'Oak Brown', 6, 300),
(42, 'product16', 'Sandal Wood Finish', 'Striped Gray', 6, 800),
(43, 'product16', 'Sandal Wood Finish', 'Brown', 3, 800),
(44, 'product17', 'Wooden Stand and Base', 'Multi', 7, 200),
(45, 'product17', 'Steel Stand and Glass Base', 'Silver', 3, 450),
(46, 'product18', 'Iron Stand', 'Multi', 4, 300),
(47, 'product18', 'Iron Stand', 'Red', 6, 300),
(48, 'product18', 'Iron Stand', 'Blue', 5, 300),
(49, 'product18', 'Aluminium Stand', 'Multi ', 4, 160),
(50, 'product18', 'Aluminium Stand', 'Red', 6, 160),
(51, 'product18', 'Aluminium Stand', 'Green', 3, 160),
(52, 'product19', 'none', 'none', 5, 200),
(53, 'product20', 'None', ' None', 4, 200),
(54, 'product1', 'Iron and Steel', 'Blue', 5, 400),
(55, 'product1', 'copper', 'Blue', 5, 400),
(56, 'product3', 'None', 'None', 3, 500),
(57, 'product4', 'None', 'None', 6, 700),
(60, 'product5', 'None', 'None', 2, 504),
(61, 'product6', 'None', 'None', 3, 380);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImageID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `regdata`
--
ALTER TABLE `regdata`
  ADD PRIMARY KEY (`telphone`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`VariationID`),
  ADD KEY `variations_ProductId_fr` (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ImageId_fr` FOREIGN KEY (`ImageID`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `variations`
--
ALTER TABLE `variations`
  ADD CONSTRAINT `variations_ProductId_fr` FOREIGN KEY (`ProductID`) REFERENCES `products` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
