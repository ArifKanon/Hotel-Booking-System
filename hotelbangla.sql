-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 03:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(5) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `name1` varchar(30) NOT NULL,
  `name2` varchar(30) NOT NULL,
  `details1` varchar(200) NOT NULL,
  `details2` varchar(200) NOT NULL,
  `cost_a1` int(30) NOT NULL,
  `cost_a2` int(30) NOT NULL,
  `cost_a3` int(30) NOT NULL,
  `cost_b1` int(30) NOT NULL,
  `cost_b2` int(30) NOT NULL,
  `cost_b3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `img1`, `img2`, `name1`, `name2`, `details1`, `details2`, `cost_a1`, `cost_a2`, `cost_a3`, `cost_b1`, `cost_b2`, `cost_b3`) VALUES
(1, '../images/places/Dhaka/lm1.jpg', '../images/places/Dhaka/gh1.jpg', 'Le Meridien', 'Dhaka Gulshan Hotel', 'Nikunja-2,Khilkhet,Dhaka <br><br>\r\nOne person room rent: 100$<br>\r\nTwo person room rent: 120$<br>\r\nFamily room rent: 150$<br><br>', 'Gulshan,Dhaka <br><br>\r\nOne person room rent: 80$<br>\r\nTwo person room rent: 100$<br>\r\nFamily room rent: 130$<br><br>', 100, 120, 150, 80, 100, 130),
(2, '../images/places/chattogram/rb1.jpg', '../images/places/chattogram/pc1.jpg', 'The Radisson Blu Chattogram', 'The Peninsula Chittagong', 'Shahid Saifuddin Khaled Rd, Lalkhan Bazar Cir, Chattogram<br><br>One person room rent: 90$<br>Two person room rent: 110$<br>Family room rent: 130<br><br>', 'CDA Avenue, O.R. Nizam Road, Bulbul Center, Chattogram<br><br>One person room rent: 60$<br>Two person room rent: 80$<br>Family room rent: 100$<br><br>', 90, 110, 130, 60, 80, 100),
(3, '../images/places/sylhet/sp1.jpg', '../images/places/sylhet/rs1.jpg', 'Hotel Star Pacific', 'Rose View Hotel', 'East Dargah Gate, Sylhet<br><br>One person room rent: 70$<br>Two person room rent: 80$<br>Family room rent: 90$<br><br>', 'Shahjalal Upashahar Main Rd, Sylhet<br><br>One person room rent: 90$<br>Two person room rent: 100$<br>Family room rent: 110$<br><br>', 70, 80, 90, 90, 100, 110),
(4, '../images/places/cox\'s_bazar/sbr1.jpg', '../images/places/cox\'s_bazar/lbh1.jpg', 'Sayeman Beach Resort', 'Long Beach Hotel', 'Marine Drive, Road, Cox\'s Bazar<br><br>One person room rent: 100$<br>Two person room rent: 120$<br>Family room rent: 140$<br><br>', 'Kalatoli, Hotel-Motel Zone, Cox\'s Bazar<br><br>One person room rent: 90$<br>Two person room rent: 100$<br>Family room rent: 110$<br><br>', 100, 120, 140, 90, 100, 110),
(5, '../images/places/sundarban/r1.jpg', '../images/places/sundarban/amb1.jpg', 'Hotel Royal International', 'Hotel Ambassador', 'KDA Avenue Khan Jahan Ali Road, Royal Mor, Khulna<br><br>One person room rent: 80$<br>Two person room rent: 100$<br>Family room rent: 110$<br><br>', 'Ghos Road, Helatala Rd, Khulna<br><br>One person room rent: 60$<br>Two person room rent: 70$<br>Family room rent: 80$<br><br>', 80, 100, 110, 60, 70, 80),
(6, '../images/places/bandarban/rv1.jpg', '../images/places/bandarban/nl1.jpg', 'Hotel River View Bandarban', 'Nilachol Nilambori Resort', 'Nilachal Porjoton Complex, Bandarban<br><br>One person room rent: 80$<br>Two person room rent: 90$<br>Family room rent: 110$<br><br>', 'Sodok O Jonopod Rd, Bandarban<br><br>One person room rent: 85$<br>Two person room rent: 100$<br>Family room rent: 120$<br><br>', 85, 100, 120, 80, 90, 110);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bId` int(5) NOT NULL,
  `b_uId` int(5) NOT NULL,
  `bName` varchar(40) NOT NULL,
  `bRoomNum` int(4) NOT NULL,
  `bCost` int(6) NOT NULL,
  `bDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bId`, `b_uId`, `bName`, `bRoomNum`, `bCost`, `bDate`) VALUES
(1, 1, 'Hotel Bangla', 1, 1, '2020-05-20 11:43:46'),
(2, 222, 'Rose View Hotel', 2, 200, '2020-05-20 12:05:56'),
(3, 454, 'Nilachol Nilambori Resort', 3, 540, '2020-05-20 12:31:40'),
(4, 454, 'Nilachol Nilambori Resort', 3, 540, '2020-05-20 12:32:07'),
(6, 333, 'Hotel Royal International', 1, 200, '2020-05-20 12:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empId` varchar(10) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empId`, `firstName`, `lastName`, `gender`, `address`, `email`, `phone`, `salary`) VALUES
('311', 'Abir', 'Rahman', 'Male', 'Banani', 'ab@gmail.com', '01761206455', '50000'),
('997', 'Kirat', 'Mamun', 'Male', 'Mohammadpur', 'kirat@gmail.com', '01744319424', '60000'),
('999', 'Tareq', 'Ahmed', 'Male', 'bas', 'b@a.com', '12345`', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `img1` varchar(60) NOT NULL,
  `img2` varchar(60) NOT NULL,
  `img3` varchar(60) NOT NULL,
  `img4` varchar(60) NOT NULL,
  `facility` varchar(200) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `img1`, `img2`, `img3`, `img4`, `facility`, `details`) VALUES
(1, 'Le Meridien', '../images/places/Dhaka/lm2.jpg', '../images/places/Dhaka/lm3.jpg', '../images/places/Dhaka/lm4.jpg', '../images/places/Dhaka/lm5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'A brilliant travel experience awaits guests of Le Méridien Dhaka. Ideal for both business and leisure travel, our hotel welcomes you with a prime location in Bangladesh\'s capital city, tastefully designed rooms and a wealth of smart amenities. Unwind in our spacious hotel rooms and suites, showcasing thoughtful details like complimentary Wi-Fi access, plush bedding, a flat-screen TV, a mini-bar and a luxurious bathroom. You\'ll be thrilled with our hotel\'s selection of six dining options, featuring a trattoria-style Italian restaurant and a chic lobby lounge; we also boast a tranquil spa and a breathtaking rooftop infinity pool. If you\'re interested in hosting a business or social event here in Bangladesh, make use of 45,000 square feet of adaptable venue space, enhanced by on-site event planning and catering. Our hotel is just two miles from Dhaka Airport, plus is near Uttara and the U.S. Embassy, making Le Méridien Dhaka the perfect choice for your visit to Bangladesh.'),
(2, 'Dhaka Gulshan Hotel', '../images/places/Dhaka/gh2.jpg', '../images/places/Dhaka/gh3.jpg', '../images/places/Dhaka/gh4.jpg', '../images/places/Dhaka/gh5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'The new Renaissance Dhaka Gulshan Hotel is located in the most dynamic and inspiring neighborhood of Gulshan Avenue. The hotel is only 20 minutes away from Hazrat Shahjalal International Airport, with a distinctive local character that dictates the atmosphere & experiences for guests. Discover sophisticated elements & uber design throughout the 211 stylish rooms & suites. The infinity rooftop temperature-controlled pool with stunning city vista view will take your breath away. Eclectic dining options include restaurants: BAHAR - specializing in local & international cuisine; a vibrant Gulshan Baking Company with world class bakeries & fresh brews. Enjoy gourmet food from around the globe in our specialized fusion restaurant - SEAR. Relax at the Spa & Salon with our signature world class services. The hotel also has a 24-hour Fitness Center for all our guests.'),
(3, 'The Radisson Blu Chattogram', '../images/places/chattogram/rb2.jpg', '../images/places/chattogram/rb3.jpg', '../images/places/chattogram/rb4.jpg', '../images/places/chattogram/rb5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'Hotel guests can wake up to scenic views of Chattogram\r\nAs the city\'s premiere upscale international hotel, the Radisson Blu Chattogram Bay View offers guests an unforgettable lodging experience in Chattogram. Stay within walking distance of M. A. Aziz Stadium and Chittagong Club Limited in this commercial capital, and enjoy proximity to popular destinations like Cox\'s Bazar. The hotel lies just a 10-minute drive from the city\'s business hub and 40 minutes from Shah Amanat International Airport (CGP).\r\nStart your morning with our complimentary Super Breakfast buffet, then head to one of our numerous restaurants and bars for lunch or dinner to savor international cuisine, freshly pressed juices, and classic cocktails. After a full day of meetings, unwind with a swim in our circular infinity pool, a refreshing beverage from the pool bar, or a therapeutic treatment at the spa. Our Business Class lounge and the city\'s largest pillarless event facility make us the perfect choice for confere'),
(4, 'The Peninsula Chittagong', '../images/places/chattogram/pc2.jpg', '../images/places/chattogram/pc3.jpg', '../images/places/chattogram/pc4.jpg', '../images/places/chattogram/pc5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'Situated at the prestigious GEC circle of the Port City, our hotel provide superior services combining western sophistication and Chittgonian hospitality in a scenic and convenient location. Discover this unique retreat for business or pleasure just minutes from the commercial center surrounded by famous retail shops, restaurants and corporate offices.\r\n\r\nThe Peninsula Chittagong Hotel offers a premier setting for conferences, meetings, and corporate events. Treat your colleagues to a gracious environment, where personalized service is the standard. For your next important event, choose from our wide range of meetings rooms and venue options.'),
(5, 'Hotel Star Pacific', '../images/places/sylhet/sp2.jpg', '../images/places/sylhet/sp3.jpg', '../images/places/sylhet/sp4.jpg', '../images/places/sylhet/sp5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'welcomes you to the city of the great saint Hazrat Shahjalal. Situated at the heart of the city and very close to most of the local attractions, we offer you to enjoy warm hospitality, and comfort for your business and leisure needs. Our newly established property is designed to keep you pleased from the moment you step in.'),
(6, 'Rose View Hotel', '../images/places/sylhet/rs2.jpg', '../images/places/sylhet/rs3.jpg', '../images/places/sylhet/rs4.jpg', '../images/places/sylhet/rs5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'Rose View Hotel welcomes you to enjoy comfort and luxury, a place where you will find exceptional five star facilities and world class hospitality.\r\n\r\nThe Hotel features 140 fully equipped deluxe and suite rooms, an extensive array of restaurant outlets catering for international and local palates, fully equipped fitness centre, sauna and steam, authentic Thai Spa, heated roof top swimming pool, the only fully stocked licensed bar in the City and a full range of meeting and event facilities ideal for business and private gatherings for up to 1000 people.\r\n\r\nConveniently and centrally located from the shopping and business districts, served by Osmani International Airport, national train networks and accessible via the main road links connecting the city to Dhaka, Rose View Hotel combines style, warmth and convenience with a dash of creativity to deliver an experience that is like no other.\r\n'),
(7, 'Sayeman Beach Resort', '../images/places/cox\'s_bazar/sbr2.jpg', '../images/places/cox\'s_bazar/sbr3.jpg', '../images/places/cox\'s_bazar/sbr4.jpg', '../images/places/cox\'s_bazar/sbr5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'After fifty years of glorious past, Sayeman Beach Resort revives its famed legacy of comfort, elegance and impeccable service. An eminent landmark constructed in 1964, this legendary first private hotel of Cox’s Bazar is reborn, infusing modern sophistication into this vintage-chic, iconic hotel at a new beachfront location of Marine Drive, Kolatoli, Cox’s Bazar.\r\nWith its richly historic past, the Hotel Sayeman now fully becomes a part of the exciting and rapidly changing present with the addition of a modern, elegant luxury ocean front hotel. The beauty of Cox’s Bazar – the climate, the panoramic ocean views, the sandy beaches, plus the rich culture and history along with the warmth of the sun – is what attracts people here. And the Sayeman Beach Resort provides you exactly just that with extraordinary comfort, luxury and services.\r\n'),
(8, 'Long Beach Hotel', '../images/places/cox\'s_bazar/lbh2.jpg', '../images/places/cox\'s_bazar/lbh3.jpg', '../images/places/cox\'s_bazar/lbh4.jpg', '../images/places/cox\'s_bazar/lbh5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'Encompassing the spectacular views of Cox’s Bazar, Long Beach Hotel stands very close to the hills and sea-beach, offering world class facilities and exhilarating experience to its guests. Whether you are planning a great vacation, the sweetest of honeymoons or a cozy business tour, you would prefer our beach hotel for your relaxing stay. Imagine that the 120 km astonishing longest beach in the world is just five-minute walk away from your room, providing an exuberant sensation in your mind and filling your heart with magnificent joy. Starting from Cox’s Bazar’s longest beach view to the comforts which you would be looking for are all here, making Long Beach Hotel the perfect choice for business, romance and holiday travel. Make your every move easy in Cox’s Bazar by staying with us.'),
(9, 'Hotel Royal International', '../images/places/sundarban/r2.jpg', '../images/places/sundarban/r3.jpg', '../images/places/sundarban/r4.jpg', '../images/places/sundarban/r5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'We have been serving with Hotel Royal International Ltd. since 1986. It is the first 10 storied building in Khulna City. It is a pioneer international standard hotel and located in the heart of a very affluent neighborhood in Khulna city and which is newly renovated offering you all the luxuries and services of an international hotel with all personal comforts and coziness of home in the traditional essence of its warm hospitality in 44 exquisitely furnished rooms. It’s our family Business.'),
(10, 'Hotel Ambassador', '../images/places/sundarban/amb1.jpg', '../images/places/sundarban/amb2.jpg', '../images/places/sundarban/amb3.jpg', '../images/places/sundarban/amb4.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'Hotel Ambassador situated in Khulna, Bangladesh and close to Sheikh Abu Naser International Cricket Stadium. It takes time less than 60 minutes drive from Jessore Air Port while 40 minutes drive to historical “Shatt-Gomboz Mosque”, Khan Jahan Ali Mazzar at Bagerhat from Hotel Ambassador. A few hours drive by car and engine boat to world largest mangrove forest Sundarban.\r\nOur luxurious retreat offers a calming respite from the hustle and bustle of downtown Khulna, where contemporary comforts will refresh your senses. Take in the local culture where fascinating sights and sounds abound within close proximity to the Hotel Ambassador.\r\nRejuvenate with our state-of-the-art facilities and complimentary wireless Internet access is available in public areas and a computer station is located on site. This hotel features business amenities Plus a business center, a big meeting/conference room and secretarial services. Dining options at the hotel include a restaurant along with a coffee shop. Th'),
(11, 'Hotel River View Bandarban', '../images/places/bandarban/rv2.jpg', '../images/places/bandarban/rv3.jpg', '../images/places/bandarban/rv4.jpg', '../images/places/bandarban/rv5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'Guests can make the most of all that the lively city has to offer. With its convenient location, the property offers easy access to the city\'s must-see destinations'),
(12, 'Nilachol Nilambori Resort', '../images/places/bandarban/nl2.jpg', '../images/places/bandarban/nl3.jpg', '../images/places/bandarban/nl4.jpg', '../images/places/bandarban/nl5.jpg', '<ul><li>Free Wifi</li><li>Free Parking</li><li>Breakfast</li><li>Air Condition</li></ul>', 'For travelers who want to take in the sights and sounds of Bandarban, Nilachol Nilambori Resort is the perfect choice. From here, guests can make the most of all that the lively city has to offer. With its convenient location, the property offers easy access to the city\'s must-see destinations.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `status` int(5) NOT NULL,
  `id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`status`, `id`, `password`) VALUES
(0, '111', '111'),
(2, '123', '123'),
(2, '12334', 'asdf'),
(2, '1234', '1234'),
(2, '123455', '13456'),
(2, '222', '222'),
(2, '232', '232'),
(1, '311', '311'),
(2, '323', '323'),
(2, '333', '333'),
(2, '343', '343'),
(2, '3456', 'adfdasf'),
(2, '444', '444'),
(2, '454', '454'),
(1, '456', '456'),
(2, '55555', 'jgjkgkj'),
(2, '666', '666'),
(2, '6767', 'asdf'),
(2, '7777', 'jgjkgkj'),
(2, '878', '878'),
(2, '888', '888'),
(2, '987', '987'),
(2, '997', '997'),
(1, '999', '999'),
(2, 'adf', '567'),
(2, 'asd', '7997'),
(2, 'sad', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `firstName`, `lastName`, `gender`, `address`, `email`, `phone`) VALUES
('123', 'Zerin', 'Khatun', 'Female', 'Mirpur', 'zeh@oulook.com', '0185467832'),
('12334', 'soumik', 'islam', ' Male', 'Amdipara', 'souumik@out.com', '12324'),
('1234', 'Ashik', 'Talukdar', 'Male', 'Gaibandha', 'ashik@gmail.com', '0152199999'),
('123455', 'sakib', 'rahman', ' Male', '1234', 'a@gmail.com', '1234'),
('222', 'Soumik', 'Khondokar', ' Male', 'Thanapara', 'soumik@oulook.com', '015792347912'),
('232', 'Abrar', 'Ahmed', ' Male', 'Dhaka', 'abrar@outook.com', '01712334455'),
('323', 'Sakib', 'Sikdar', ' Male', 'Barokona', 'sikdar@gmail.com', '0176342345'),
('333', 'Faruk', 'Abdullah', 'Male', 'Gulshan', 'fa@gmail.com', '0176555555'),
('343', 'adsf', 'adfa', ' Female', 'adfa', 'a@a.com', '134'),
('3456', 'asdf', 'adf', ' Male', 'adf', 'adf', 'adf'),
('444', 'Fahmida', 'Khatu', 'Female', 'Mirpur', 'fah@oulook.com', '0185467832'),
('454', 'Md', 'Amin', ' Male', 'adf', 'adf@d.com', '123'),
('55555', 'asdf', 'adf', ' Male', 'adfadf', '01730261618', '1324'),
('666', 'Fatima', 'Khanam', 'Female', 'Kuril', 'ak@outlook.com', '0176800000'),
('6767', 'soumik', 'islam', ' Male', 'Amdipara', 'souumik@out.com', '12324'),
('7777', 'asdf', 'adf', ' Male', 'adfadf', '01730261618', '1324'),
('878', 'asdf', 'asdf', ' Female', 'adf', 'adf', 'adf'),
('888', 'Atif', 'Aslam', 'Male', 'Pakistan', 'atif@gmail.com', '08888882342'),
('987', 'Aftab', 'Ahmed', 'Male', 'Dhaka', 'af@gmail.com', '016233333'),
('adf', 'asdf', 'af', ' Male', 'adfadf', 'adfa', 'adf'),
('asd', 'asdf', 'af', ' Female', 'adfadf', 'vetkirat@gmail.com', '1324');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bId`,`b_uId`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
