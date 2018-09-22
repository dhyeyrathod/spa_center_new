-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 07:11 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa_new_small`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email_id`, `contact_number`) VALUES
(1, 'admin', 'admin123', 'admin@admin.com', '9967313968');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `created_date`, `hotel_name`, `image`, `description`, `status`) VALUES
(3, '2018-09-21 23:44:52', 'Welcom Hotel Bengaluru', '9d5a381ea9f33aec30d9078c6e30f61d.jpg', '<p>We are pleased to introduce the WelcomHotel brand to the city of Bengaluru. This development blends the familiar with the new &ndash; My Fortune Bengaluru is now WelcomHotel Bengaluru.&nbsp;</p>\r\n\r\n<p>Bengaluru has emerged as one of India&rsquo;s most popular metropolitan cities due to its pre-eminent position as India&#39;s technology capital. The city boasts of a rich heritage, pleasant climate all year round and lush, landscaped gardens. Amidst this greenery stands WelcomHotel Bengaluru, an erstwhile MyFortune hotel that offers spirited and efficient service to the savvy traveller.&nbsp;</p>\r\n', 1),
(4, '2018-09-21 23:45:50', 'Shreyas Yoga Retreat', 'cc14ad0b629f14b8a98639ce31d20ac9.jpg', '<p>&quot;Athithi devo bhava&quot; is the defining philosophy at Shreyas. This literally means, &quot;a Guest is to be served as God.&quot; At Shreyas, we imbibe this philosophy broadly, believing that &quot;all are essentially divine&quot; and our relationships with each other and especially our guests should reflect this.Our guests are lovingly served with unparalleled personalized attention by a staff that practices yoga and endeavors to embody this philosophy. The staff is encouraged to serve guests as part of their spiritual discipline and not just as a job or career; serving is different from being servile because the focus is on connecting with the divinity inherent in each guest.</p>\r\n', 1),
(5, '2018-09-21 23:48:13', 'Hotel Vivanta Taj Yeshwantpur', '03e73b30e4024b148cbc37d262cb9093.jpg', '<p>The legacy of Bengaluru swells with pride and with good reason. Once a stronghold for the British, it has evolved from town to city to megacity and now, India&rsquo;s Silicon Valley. The Taj Yeshwantpur, Bengaluru complements the city&rsquo;s appetite for success with a vibrant unison of intelligent work environment, luxurious spaces and intuitive services.</p>\r\n\r\n<p>327 well-appointed rooms and luxury suites take every measure to ensure that no requirement is unmet. The business traveller will find its supreme services conducive to every meeting or communication. The leisure traveller will find abundant fascination in the recreational opportunities such as guided walking tours, shopping, prominent cultural landmarks such as The National Gallery of Modern Art and the Aeronautical Museum, colonial architecture and prominent art galleries. Whether it&rsquo;s the show stopping lobby or the striking stairway swirling around the chic chandelier that welcomes you, every inch distinctly reflects the Taj and what it stands for.&nbsp;&nbsp;</p>\r\n\r\n<p>Location-wise, this 5 star luxury hotel is 35 minutes by road from the international airport, minutes away from Yeshwantpur Railway Terminus, and a few steps away from the metro terminus. In fact, it is nestled amidst everything that&rsquo;s fantastic about Bengaluru. This strategic location gives the business travellers as well as the indulgent connoisseur an advantage.&nbsp;</p>\r\n\r\n<p>Other facilities include 18,000 square feet of conference and event venues, an independent convention centre, multicuisine dining options, signature experiences, health club and the renowned Jiva Spa.&nbsp;&nbsp;</p>\r\n\r\n<p>Stay a few days at our 5 star luxury hotel in Bengaluru. The memory of this city will be permanently engrained in your memory, as will the Taj experience.</p>\r\n', 1),
(6, '2018-09-21 23:49:01', 'The Oberoi Bangalore', '6348c1eda8be0239af1e9f694c0e8b1e.jpg', '<p>Nestled in lush, tropical grounds and equipped with the latest in technology, our luxury hotel The Oberoi, Bengaluru reflects and harmonises the dual personalities of Bengaluru the Garden City and major IT hub.</p>\r\n\r\n<p>The hotel is located in the centre of the city, close to the financial district, and is built around the 120 year old rain tree that sits at its centre; the jewel of the hotel&#39;s vast, exquisite gardens. It is the only one of the luxury hotels in Bengaluru that offers private balconies and garden views from each of its<a href=\"https://www.oberoihotels.com/hotels-in-bengaluru/rooms-suites/\">rooms and suites.</a>&nbsp;Guests can enjoy high speed Internet access for up to four devices, with our compliments, as well as Oberoi E&#39;nhance, an iPad interface that allows guests to manage everything from entertainment to in-room dining.</p>\r\n\r\n<p>Guests looking for a luxury dining&nbsp;<a href=\"https://www.oberoihotels.com/hotels-in-bengaluru/restaurants/\">restaurant in Bengaluru</a>&nbsp;will delight in our award winning Thai, contemporary Chinese, all day international fine dining restaurant and colonial style bar. Exquisitely decorated and refreshed with garden views, each offers a unique ambience, unparalleled cuisine and matchless service.</p>\r\n\r\n<p>At the end of a fulfilling day of business or sightseeing, the&nbsp;<a href=\"https://www.oberoihotels.com/hotels-in-bengaluru/spa-fitness\">Oberoi Spa in Bengaluru,</a>&nbsp;with its wide range of Eastern, Western and signature Oberoi treatments, is a wonderful place to unwind.</p>\r\n\r\n<p>Guests can book in advance and directly with us to enjoy special rates, exclusive privileges and&nbsp;<a href=\"https://www.oberoihotels.com/hotels-in-bengaluru/special-offers\">hotel offers.</a>&nbsp;We would be happy to take care of any business requirements or help ensure a relaxing holiday with loved ones. Our hotel offers are designed so that our guests have an unforgettable Oberoi experience, at unbeatable prices.</p>\r\n', 1),
(7, '2018-09-21 23:51:17', 'Sheraton Grand Bangalore Hotel', '638d04de5d4992edde3807459d33dd9c.jpg', '<p>Experience a modern version of Scottish luxury in the heart of the city at the Sheraton Grand Hotel &amp; Spa. Together with its award-winning One Spa and the Scottish brasserie One Square, this urban resort is the perfect base for exploring Edinburgh. Bright and spacious, all guestrooms feature our dreamily comfortable Sheraton Signature Sleep Experience&trade; beds, mood lighting, opaque glass-walled bathrooms and media hubs, with many also enjoying inspirational views of Edinburgh Castle. Guests on our Club Level have exclusive access to the Club Lounge, benefitting from breakfast, snacks and drinks throughout the day. Escape at One Spa with an unrivalled collection of heat and water. Soothe aching muscles in the Thermal Suite, cleanse in the enveloping steam of the Hammam and Aroma Grotto, before immersing yourself in our iconic rooftop Hydropool. One Square Restaurant serves a deliciously inventive range of seasonal favourites while the Bar impresses with an extensive collection of over 100 gins.</p>\r\n', 1),
(8, '2018-09-21 23:52:57', 'JW Marriott Bengaluru', '5c82c244b689cb64bd248ba22c30a747.jpg', '<p>Establishing a striking presence in Bangalore&#39;s city center, the JW Marriott Hotel Bengaluru welcomes travelers to India in memorable fashion. Located steps from the lush gardens of Cubbon Park and close to the UB City business district, our hotel offers a superb location from which to explore Bengaluru. Moreover, with our signature Marriott service and unmatched amenities, our hotel truly embodies a five-star experience. Relax in our spacious guest rooms and suites, which feature thoughtful details like private balconies and marble bathrooms. Take time to visit our fitness center and outdoor pool, or indulge in a signature spa treatment at the JW Spa. Foodies will delight in our many on-site dining options; from authentic Italian fare at Alba to poolside dining at Spice Terrace, there is something to satisfy everyone. Additionally, with nine event spaces, we&#39;re an ideal location for a business gathering or wedding in Bangalore. Come discover the JW Marriott Hotel Bengaluru - we look forward to your visit.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `services_description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_data` datetime NOT NULL,
  `meta_title` varchar(500) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `meta_keywords` varchar(500) NOT NULL,
  `youtube_code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_name`, `services_description`, `status`, `created_date`, `updated_data`, `meta_title`, `meta_description`, `meta_keywords`, `youtube_code`, `image`) VALUES
(2, 'Swedish Oil Massage', '<p>Swedish massage is well known as the classical or relaxing massage as it uses five main techniques; gliding and stroking, rubbing, rubbing, pounding and trembling.</p>\r\n', 1, '2018-09-21 16:25:17', '0000-00-00 00:00:00', '', '', '', 'asYxxtiWUyw?list=RDasYxxtiWUyw', '0b07e87691acd0431085875fa3dc62af.jpg'),
(3, 'Balinese Massage', '<p>Swedish massage is well known as the classical or relaxing massage as it uses five main techniques; gliding and stroking, rubbing, rubbing, pounding and trembling.</p>\r\n', 1, '2018-09-21 16:33:21', '0000-00-00 00:00:00', '', '', '', 'nZhLM-FeV9A?list=RDasYxxtiWUyw', '64c802c246b7102d35eed8223272d976.jpg'),
(4, 'Deep Tissue Massage', '<p>Swedish massage is well known as the classical or relaxing massage as it uses five main techniques; gliding and stroking, rubbing, rubbing, pounding and trembling.</p>\r\n', 1, '2018-09-21 16:34:08', '0000-00-00 00:00:00', '', '', '', 'EatzcaVJRMs?list=RDasYxxtiWUyw', '6d91e97f5cdfd99b544677a80ecc0d72.jpg'),
(5, 'Thai Dry Massage', '<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n\r\n<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n\r\n<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n\r\n<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n', 1, '2018-09-21 16:34:46', '0000-00-00 00:00:00', '', '', '', '47Tsuz5OhBU', '0f239b5662c51a517deba9c88d0862f7.jpg'),
(7, 'Neck & Back Massage', '<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n\r\n<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n\r\n<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n\r\n<p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>\r\n', 1, '2018-09-21 16:36:41', '0000-00-00 00:00:00', '', '', '', 'tsN9vouq-nk', '19a9ee221c1be0fa7bbd773007217201.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'site_contact_number', '000 000 0000'),
(2, 'site_emal_id', 'rinkipatel@gmail.com'),
(3, 'site_name', 'Rinki Patel'),
(4, 'site_location', 'Bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
