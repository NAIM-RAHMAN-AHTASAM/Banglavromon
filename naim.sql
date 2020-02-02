-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 10:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naim`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(100) NOT NULL,
  `about_description` text NOT NULL,
  `about_choose` text NOT NULL,
  `about_img` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `about_description`, `about_choose`, `about_img`, `status`) VALUES
(1, 'naim', 'ahtasam', '1.jpg', 0),
(2, 'nnnn', 'nnnn', '2.jpg', 0),
(3, 'welcome to about section', 'desgine, development, sagol, goru, gadha', '3.jpg', 0),
(4, 'naim', 'naim', '4.JPG', 0),
(5, 'বাংলা ভ্রমণ অ্যাডভেঞ্চারপ্রিয়দের জন্য একটি খোলা উঠান', 'Our meticulous planning, In-depth knowledge, Honest advice, Award-winning service', '5.JPG', 0),
(6, 'naim rahamn ', '\r\nOur meticulous planning, In-depth knowledge, Honest advice, Award-winning service,Financial protection \r\nEnsure that you will enjoy the most memorable holiday experience. ', '6.JPG', 0),
(7, 'বাংলা ভ্রমণ অ্যাডভেঞ্চারপ্রিয়দের জন্য একটি খোলা উঠান, যেখানে এর সদস্যরা নিজেদের মধ্যে ভ্রমণ ও আউটডোর একটিভিটি বিষয়ে তথ্য আদান-প্রদান করে। ট্র্যাভেলার্স অফ বাংলাদেশ ব্যাকপ্যাকিং মানসিকতার ভ্রমণকে উৎসাহিত করে। যা একদিক দিয়ে যেমন ভ্রমণটিকে স্বল্প খরচে সম্পন্ন করতে ও ভ্রমণকারীকে স্বনির্ভরশীল হতে শেখায়, অন্যদিকে আমাদের চলাফেরা কিংবা আচরণ ঐ স্থানের প্রকৃতি ও এর পারিপার্শ্বিকতায় যেন সর্বনিম্ন প্রভাব ফেলে, সেই অভ্যাসগুলো তৈরি করে।', 'Our meticulous planning, In-depth knowledge, Honest advice, Award-winning service,Financial protection,Ensure that you will enjoy the most memorable holiday experience. \r\n', '7.JPG', 0),
(8, 'বাংলা ভ্রমণ অ্যাডভেঞ্চারপ্রিয়দের জন্য একটি খোলা উঠান, যেখানে এর সদস্যরা নিজেদের মধ্যে ভ্রমণ ও আউটডোর একটিভিটি বিষয়ে তথ্য আদান-প্রদান করে। ট্র্যাভেলার্স অফ বাংলাদেশ ব্যাকপ্যাকিং মানসিকতার ভ্রমণকে উৎসাহিত করে। যা একদিক দিয়ে যেমন ভ্রমণটিকে স্বল্প খরচে সম্পন্ন করতে ও ভ্রমণকারীকে স্বনির্ভরশীল হতে শেখায়, অন্যদিকে আমাদের চলাফেরা কিংবা আচরণ ঐ স্থানের প্রকৃতি ও এর পারিপার্শ্বিকতায় যেন সর্বনিম্ন প্রভাব ফেলে, সেই অভ্যাসগুলো তৈরি করে।', 'Our meticulous planning, In-depth knowledge, Honest advice, Award-winning service,Financial protection,Ensure that you will enjoy the most memorable holiday experience. ', '8.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_banners`
--

CREATE TABLE `tb_banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_description` text NOT NULL,
  `banner_btn` varchar(50) NOT NULL,
  `banner_img` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_banners`
--

INSERT INTO `tb_banners` (`id`, `banner_title`, `banner_description`, `banner_btn`, `banner_img`, `status`) VALUES
(7, 'web design', 'web design', 'Your Registration is Successfully Done!!', '7.jpg', 0),
(8, 'web design', 'web designweb designweb designweb design', 'web design', '8.jpg', 0),
(9, 'বাংলা ভ্রমণ', 'আপনার ভ্রমণকে আরামদায়ক করে তুলতেই আমরা আছি আপনার পাশে।', 'যোগাযোগ করুন', '9.jpeg', 0),
(10, 'বাংলা ভ্রমণ', 'আপনার ভ্রমণকে আরামদায়ক করে তুলতেই আমরা আছি আপনার পাশে।', 'যোগাযোগ করুন', '10.jpg', 1),
(11, 'বাংলা ভ্রমণ', 'আপনার ভ্রমণকে আরামদায়ক করে তুলতেই আমরা আছি আপনার পাশে।', 'যোগাযোগ করুন', '11.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id` int(100) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_description` text NOT NULL,
  `status` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `blog_title`, `blog_description`, `status`, `user_id`) VALUES
(1, 'khalid', 'hosain hkkkkk', 1, 0),
(2, 'naim', ' How are your.....', 1, 0),
(3, 'naim', 'kkkkkkkkkkkkkkkkkkkkkk', 1, 0),
(4, 'kkkkkkkkkkkkkkkkkkkkkkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 1, 0),
(5, 'khaldikkk ', 'kfjkajdkfjdakjfkjasdkfjasdfasdfasedfasdfasdf', 1, 0),
(6, 'ami fahim', 'ami fahim\r\n', 1, 0),
(7, 'naimmmm', 'ami naim ahtasam', 1, 0),
(8, 'naimmmm', 'ahtasam', 1, 28),
(9, 'fahim ', 'fahim valo cele', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id`, `name`, `email`, `message`) VALUES
(1, 'Naim rahman ahtasam', 'naim.ahtasam@gmail.com', 'naim ahtasam'),
(2, 'Naim rahman ahtasam', 'naim.ahtasam@gmail.com', 'naim ahtasam'),
(3, 'WE', 'naim.ahtasam@gmail.com', 'WEWE'),
(4, 'naim', 'naim.ahtasam@gmail.com', 'wewewewe'),
(5, 'Naim rahman ahtasam', 'naim.ahtasam@gmail.com', 'naim naim'),
(6, '', '', ''),
(7, 'JAMIL', 'farhan.ornob1@gmail.com', 'HGDFDHGVBGHJVYHTFVGFDC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registration`
--

CREATE TABLE `tb_registration` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rpassword` varchar(100) DEFAULT NULL,
  `country` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `role` int(50) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registration`
--

INSERT INTO `tb_registration` (`id`, `name`, `email`, `password`, `rpassword`, `country`, `gender`, `hobbies`, `subject`, `message`, `bdate`, `photo`, `created_at`, `role`, `status`) VALUES
(9, 'naim', 'naim@gmail.com', 'NNnn11$$', 'NNnn11$$', 'USA', 'Male', 'cricket', 'ICT', 'rwerwerfg erfgwertg', '2020-01-14', '9.jpg', '2020-Jan-Tue 03:00:53', 1, 0),
(10, 'Rahman', 'rahman@gmail.com', 'RRrr11$$', 'RRrr11$$', 'Bangladesh', 'Male', 'cricket', 'Math', 'With the world going mobile, the importance of apps is increasing by the day. ', '2020-01-01', '10.jpg', '2020-Jan-Tue 11:28:44', 2, 0),
(11, 'Ahtasam', 'ahtasam@gmail.com', 'AAaa11$$', 'AAaa11$$', 'Argentina', 'Male', 'cricket', 'Physics,Chemistry', 'Web Development consists of two segments front end development and backend development.', '2020-01-20', '11.jpg', '2020-Jan-Tue 11:29:54', 3, 0),
(12, 'naim', 'farhan.ornob1@gmail.com', 'AAaa11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(13, 'achol', 'achol@gmail.com', 'AAaa11$$', 'AAaa11$$', 'Bangladesh', 'Female', 'cricket,chese', 'ICT,Physics', 'hi naim', '2020-01-06', '13.jpg', '2020-Jan-Mon 02:56:55', 0, NULL),
(14, 'nain', 'naimmmm.ahtasam@gmail.com', 'NNnn11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(15, 'naim', 'naim1@gmail.com', 'NNnn11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(16, 'naim', 'naim1@gmail.com', '$2y$10$FGTSsnoGG7i4hLxAYj7mzuG2qXTE15gIgEcEJXfR.Q8r2HOOTwt3y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(17, 'naim', 'naim12@gmail.com', '$2y$10$LfXhn1jDXbKevMrqYfa19.0hLIs.f8obPcMWDxYjysCiE517YgJOG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(18, 'naim', 'naim1@gmail.com', 'NNnn11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(19, 'achol', 'achol@gmail.com', 'AAaa11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(20, 'Ahtasam', 'achol1@gmail.com', 'AAaa11##', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(21, 'Ahtasam', 'achol1@gmail.com', 'AAaa11##', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(22, 'Ahtasam', 'achol1@gmail.com', 'AAaa11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(23, 'Ahtasam', 'achol1@gmail.com', 'AAaa11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(24, 'Ahtasam', 'achol1@gmail.com', 'AAaa11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(25, 'Ahtasam', 'achol1@gmail.com', 'AAaa11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(26, 'rahman', 'rahman@gmail.com', 'RRrr11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(27, 'fahim', 'fahim@gmail.com', 'FFff11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL),
(28, 'achol', 'khan@gmail.com', 'KKkk11$$', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `i` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE `tb_services` (
  `id` int(100) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_description` text NOT NULL,
  `service_img` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_services`
--

INSERT INTO `tb_services` (`id`, `service_title`, `service_description`, `service_img`, `status`) VALUES
(4, 'UX/UI Design', 'Motion Graphics To tell it briefly, motion graphics is the kind of graphics which has motion.', '4.png', 0),
(5, '', '', '5.jpg', 0),
(6, 'Digital Marketing', 'Digital Marketing is taking over the traditional marketing rapidly. More and more people are engaging with online information and getting habituated with online shopping. It is the platform for all.', '6.jpg', 0),
(7, 'dsfsd', 'dsfsdfdsfsdfdsfs sdgsdgsdfg sdgsdgdsf sdgsdg sdfsdg', '7.jpg', 0),
(8, 'Responsive Web Design', 'naim rahman ahtasm', '8.jpg', 0),
(9, 'মেঘের রাজ্য সাজেক ভ্যালী ', 'প্যাকেজের মধ্যে যা যা থাকবে______\r\n&gt;ঢাকা -খাগড়াছড়ি -ঢাকা বাস টিকেট।\r\n&gt;চান্দের গাড়ি\r\n&gt;খাবার\r\n&gt;সাজেকে ঢোকার টিকেট।\r\n&gt;রিসোর্টে থাকার ব্যবস্থা।\r\n&gt;আলুটিলা গুহার টিকেট, মশালের ব্যবস্থা।', '9.jpg', 0),
(10, 'সেইন্ট', '√√ যা যা থাকবেঃ-> ঢাকা -- টেকনাফ -- ঢাকা বাস টিকেট (নন-এসি)> টেকনাফ -- সেইন্টমার্টিন -- টেকনাফ শীপের টিকেট> সেইন্টমার্টিনে ১ রাত ২ দিন ঘুরার সুযোগ> ছেঁড়াদ্বীপ ভ্রমন> বীচের খুব কাছে রিসোর্টে থাকার ব্যবস্থা> আমরা যেহেতু সন্ধ্যার পরপরই ঢাকা থেকে টেকনাফের উদ্দেশ্যে রওনা করবো তাই যাত্রার পর রাতের খাবার সহ মোট সাত (৭) বেলা খাবারের ব্যবস্থা।> সামুদ্রিক মাছের বারবিকিউ ( চাইলে আপনি মুরগি দিয়েও করতে পারেন।)', '10.jpg', 0),
(11, 'মেঘের রাজ্য সাজেক ভ্যালী ', 'প্যাকেজের মধ্যে যা যা থাকবে', '11.jpg', 0),
(12, 'মেঘের রাজ্য সাজেক ভ্যালী ', 'প্যাকেজের মধ্যে যা যা থাকবে &gt;ঢাকা -খাগড়াছড়ি -ঢাকা বাস টিকেট। &gt;চান্দের গাড়ি &gt;খাবার &gt;সাজেকে ঢোকার টিকেট। &gt;রিসোর্টে থাকার ব্যবস্থা। &gt;আলুটিলা গুহার টিকেট, মশালের ব্যবস্থা।\r\n', '12.jpg', 1),
(13, 'সেইন্টমার্টিন ', 'যা যা থাকবেঃ- &gt; ঢাকা -- টেকনাফ -- ঢাকা বাস টিকেট (নন-এসি) &gt; টেকনাফ -- সেইন্টমার্টিন -- টেকনাফ শীপের টিকেট &gt; সেইন্টমার্টিনে ১ রাত ২ দিন ঘুরার সুযোগ &gt; ছেঁড়াদ্বীপ ভ্রমন &gt; বীচের খুব কাছে রিসোর্টে থাকার ব্যবস্থা', '13.jpg', 1),
(14, 'টাঙ্গুয়ার হাওড়, সুনামগঞ্জ', 'সুনামগঞ্জ ও আশেপাশের স্পটগুলো ঘুরাঘুরির পুর্ণাঙ্গ গাইডলাইন', '14.jpg', 1),
(15, 'জাফলং, সিলেট', 'সিলেটে পরিপূর্ণ ভ্রমণ ব্যবস্থাপনার নিশ্চয়তা দিচ্ছি আমরাই |', '15.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_banners`
--
ALTER TABLE `tb_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_registration`
--
ALTER TABLE `tb_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_services`
--
ALTER TABLE `tb_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_banners`
--
ALTER TABLE `tb_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_registration`
--
ALTER TABLE `tb_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_services`
--
ALTER TABLE `tb_services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
