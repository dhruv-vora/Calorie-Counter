-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 04:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `author_first` varchar(50) DEFAULT NULL,
  `author_last` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `author_first`, `author_last`, `created`) VALUES
(1, 'Kale Chicken Caesar Salad', 'I donâ€™t have an issue eating healthy as long as it taste good!  This Kale Caesar Salad is addictive!  The homemade garlic herb croutons and garlic caesar dressing might just make you eat a salad every day of the week!  Hope you enjoy!  And SHARE the Kale Caesar love!\r\n\r\nKALE CHICKEN CAESAR SALAD\r\n\r\nINGREDIENTS:\r\n\r\nSALAD:\r\n2 cups chopped kale\r\n2 cups chopped romaine lettuce\r\n2 cups chopped chicken\r\nÂ½ cup sliced grape tomatoes\r\nÂ¼ cup shredded parmesan cheese\r\nÂ¼ cup lemon juice\r\n\r\nCAESAR DRESSING:\r\n1 tablespoon crushed garlic\r\n2 tablespoons Dijon mustard\r\n1 teaspoon anchovy paste\r\nÂ¼ cup apple cider vinegar\r\nÂ¾ cup Hellmanâ€™s Mayo\r\nÂ½ cup extra virgin olive oil\r\nÂ½ cup grated parmesan cheese\r\nÂ½ cup lemon juice\r\n1-2 tablespoons ground black pepper\r\n1-2 tablespoons sea salt\r\n\r\nCROUTONS:\r\n1 cup chopped sour dough bread\r\nÂ½ cup melted unsalted butter\r\n1 tablespoon sea salt\r\nÂ½ tablespoon ground black pepper\r\n2-3 tablespoons Italian seasoning\r\n2-3 tablespoons extra virgin olive oil\r\n\r\nREADY, SET, GO:\r\n\r\nAdd to large bowl kale, romaine, chicken, tomatoes, parmesan cheese, and lemon juice, set aside\r\nLETâ€™S MAKE THE CROUTONS: in medium bowl add croutons, melted butter, sea salt, ground black pepper and Italian seasoning, fold together\r\nHeat extra virgin olive oil in a sautÃ© pan over medium heat, add croutons and sear until crispy\r\nLETâ€™S MAKE THE CAESAR DRESSING: in small bowl add mayo, crushed garlic, Dijon mustard, anchovy paste, apple cider vinegar, olive oil, grated parmesan cheese, lemon juice, black pepper and sea salt, whisk until fully incorporated\r\nPour Caesar dressing on salad and toss, top with croutons, ENJOY', 'Dhruv', 'Vora', '2017-10-03 18:25:24'),
(2, 'Lemon Blueberry Butter Cake', 'This lemon blueberry butter cake is melt in your mouth delicious!  I donâ€™t know if there is much else to say here because this dessert seriously had me speechless.  I topped mine with vanilla bean ice cream to make this indulgence fly over the moon!  I hope you enjoy.\r\n\r\nLemon Blueberry Butter Cake\r\n\r\nINGREDIENTS:\r\n\r\nCake:\r\nLemon cake mix\r\nÂ¼ cup lemon juice\r\n1 large beaten egg\r\n1 stick melted butter\r\nNon-stick cooking spray\r\n\r\nFilling:\r\n8 ounces mascarpone cheese\r\n2 large eggs beaten\r\n1 tablespoon vanilla extract\r\n1 cup floured blueberries (dust blue berries with 2 teaspoons of flour)\r\n2 cups confectioners sugar (plus Â¼ cup)\r\n1/4 cup lemon juice\r\n\r\nREADY, SET, GO:\r\n\r\n1. Pre-heat oven to 350, spray baking pan with non-stick spray or butter and lightly flour to prevent sticking\r\n2. Add cake mix, lemon juice, egg and 1 stick melted butter together in bowl. Whisk together until fulling incorporated. Pour cake mixture into baking pan and spread evenly and set aside\r\n3. LETâ€™S MAKE THE FILLING: add mascarpone cheese, 2 eggs, vanilla extract and 2 cups confectioners sugar (add confectioners sugar slowly) to bowl and whisk together until fully incorporated. Gently fold in floured blueberries.  Pour filling on top of cake mixture and spread evenly\r\n4. Bake 30-40 minutes, remove from oven. Mix Â¼ lemon juice and Â¼ cup confectioners sugar and brush mixture all over top', 'abc', 'def', '2017-10-03 18:30:37'),
(3, 'Gouda and Cheddar Garlic Biscuits', 'I just took Red Lobster Cheddar Biscuits up a notch!  Smile â€“ I LOVE Red Lobster Cheddar Biscuits so as I normally do when I eat food I love, I go home and try to not just replicate but toss my own delicious spin on them.  HOME RUN!  Try them you will not regret it!  So easy and so freakin frat yummy!\r\n\r\nGouda and Cheddar Garlic Biscuits\r\n\r\nINGREDIENTS:\r\n\r\n2 cups self-rising wheat flour\r\n1 cup cold unsalted butter cut into small chunks\r\n1 cup cold buttermilk\r\nÂ½ cup shredded cheddar\r\nÂ½ cup shredded gouda\r\n1 teaspoon sea salt\r\n1 teaspoon granulated sugar\r\n2 tablespoons granulated garlic\r\n4 tablespoons seafood seasoning\r\nÂ¼ cup melted butter (mix in Â¼ cup finely chopped cilantro)\r\nAn additional Â¼ cup melted butter (mix in Â¼ cup finely chopped cilantro)\r\n\r\nREADY, SET, GO:\r\n\r\n1. Pre-heat oven to 425, line baking pan with parchment paper or non-stick foil\r\n2. Add flour and cold butter to bowl, use pastry blender or knife to combine flour and butter, add sea salt, sugar, garlic, and seafood seasoning, stir\r\n3. Add Â¼ cup melted butter and cilantro mixture, buttermilk and gouda and cheddar cheese, fold together, do not overwork\r\n4. Use ice cream scooper or spoon to scoop out dough and add to lined baking pan 2 inches apart\r\n5. Bake 13-15 minutes, remove from oven and brush with Â¼ cup melted butter and cilantro mixture\r\n*This recipe will yield 8-10 biscuits', 'abc', 'hg', '2017-10-03 18:36:19'),
(7, 'article1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Dhruv', 'Vora', '2017-10-13 23:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `tempblogs`
--

CREATE TABLE `tempblogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `author_first` varchar(50) DEFAULT NULL,
  `author_last` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempblogs`
--

INSERT INTO `tempblogs` (`id`, `title`, `body`, `author_first`, `author_last`, `created`) VALUES
(4, 'article2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'poi', 'qwe', '2017-10-13 23:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `first` varchar(30) NOT NULL,
  `last` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `calorie` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `password`, `calorie`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$ZLqcXhJBXjzf47oE5uaL5.LykpxlgZDzEtNgtixq7ii5Fw2Xz/q/a', NULL),
(11, 'Dhruv', 'Vora', 'dhruv@gmail.com', '$2y$10$96Z.JSnPIgsbUdj0hM2FH.hKPX/0/7J/YDsLS3TimFTa5PVnnpyMm', NULL),
(12, 'abc', 'hg', 'xyz@gmail.com', '$2y$10$5YVZE1vNHv4isdoVnrGtOOzff3S2tigs4y/LFc16ZR/yawUFsfiFu', NULL),
(13, 'qwe', 'qwe', 'qwe@gmail.com', '$2y$10$lDN2hlakpFd1O5VQBgeyKOCC26/vip8fXREzIjNjYEAA5C97xFVxO', NULL),
(14, 'vinc', 'coishd', 'rush@gmail.xom', '$2y$10$E5CKpPj.ae6xe3qyOLLgu.PxPTqZko9Jd58mQSntoTMmXBgROg5fS', NULL),
(16, 'abc', 'def', 'abc@gmail.com', '$2y$10$iz34X10XoduDTQvKOPQDDOnnJ9Fth3vfOED/HgQDdI6th7FLZoKB6', NULL),
(18, 'poi', 'qwe', 'poi@gmail.com', '$2y$10$2l6MKMT21cjks0F2ZNkPq.hlkBzJi1zS8B3hNnPf24evi19Qr2bU2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempblogs`
--
ALTER TABLE `tempblogs`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tempblogs`
--
ALTER TABLE `tempblogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
