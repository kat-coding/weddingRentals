-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Nov 08, 2022 at 01:12 AM
-- Server version: 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orangegr_walnut`
--

-- --------------------------------------------------------

DROP TABLE `customers`;
DROP TABLE `extras`;
DROP TABLE `reservations`;

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `email` varchar(128) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `phone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`email`, `fname`, `lname`, `phone`) VALUES
('test01@email.com', 'Test01', 'Last01', '253-010-0101'),
('test02@email.com', 'Test02', 'Last02', '253-020-0202'),
('test03@email.com', 'Test03', 'Last03', '253-303-0303'),
('test04@email.com', 'Test04', 'Last04', '253-404-0404'),
('test05@email.com', 'Test05', 'Last05', '253-505-0505'),
('test06@email.com', 'Test06', 'Last06', '253-606-0606'),
('test07@email.com', 'Test07', 'Last07', '206-777-7777'),
('test08@email.com', 'Test08', 'Last08', '253-888-0808'),
('test09@email.com', 'Test09', 'Last09', '253-999-9999');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `reservationID` varchar(64) NOT NULL,
  `extrasJSON` text NOT NULL,
  `extrasCode` int(32) NOT NULL,
  `hexArborQty` int(8) DEFAULT NULL,
  `vintageSofaQty` int(8) DEFAULT NULL,
  `antiqueGallonQty` int(8) DEFAULT NULL,
  `wineJugsQty` int(8) DEFAULT NULL,
  `clearBallJarsQty` int(8) DEFAULT NULL,
  `blueBallJarsQty` int(8) DEFAULT NULL,
  `deliveryQty` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`reservationID`, `extrasJSON`, `extrasCode`, `hexArborQty`, `vintageSofaQty`, `antiqueGallonQty`, `wineJugsQty`, `clearBallJarsQty`, `blueBallJarsQty`, `deliveryQty`) VALUES
('2022-11-28_25394_98_Last02', '[\"Vintage Sofa\",\"Blue Antique Ball Jars\",\"Delivery\"]', 98, 0, 1, 0, 0, 0, 1, 1),
('2022-11-30_443169_105_Last01', '[\"Hexagon Arbor\",\"XL Wine Jugs\",\"Blue Antique Ball Jars\",\"Delivery\"]', 105, 1, 0, 0, 1, 0, 1, 1),
('2022-12-20_2085667_9_Last03', '[\"Hexagon Arbor\",\"XL Wine Jugs\"]', 9, 1, 0, 0, 1, 0, 0, 0),
('2022-12-28_130834_65_Last07', '[\"Hexagon Arbor\",\"Delivery\"]', 65, 1, 0, 0, 0, 0, 0, 1),
('2023-01-20_2166579_70_Last08', '[\"Vintage Sofa\",\"Antique Gallon Jugs\",\"Delivery\"]', 70, 0, 1, 1, 0, 0, 0, 1),
('2023-02-22_1048337_101_Last01', '[\"Hexagon Arbor\",\"Antique Gallon Jugs\",\"Blue Antique Ball Jars\",\"Delivery\"]', 101, 1, 0, 1, 0, 0, 1, 1),
('2023-02-22_33554196_64_Last04', '[\"Delivery\"]', 64, 0, 0, 0, 0, 0, 0, 1),
('2023-04-26_33554229_66_Last05', '[\"Vintage Sofa\",\"Delivery\"]', 66, 0, 1, 0, 0, 0, 0, 1),
('2023-05-24_122932_33_Last06', '[\"Hexagon Arbor\",\"Blue Antique Ball Jars\"]', 33, 1, 0, 0, 0, 0, 1, 0),
('2023-07-19_1007377_64_Last09', '[\"Delivery\"]', 64, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservationID` varchar(64) NOT NULL,
  `customerID` varchar(64) NOT NULL,
  `dateUnix` int(32) NOT NULL,
  `dateHuman` date NOT NULL,
  `signSet` varchar(32) NOT NULL,
  `package` text NOT NULL,
  `packageCode` int(32) NOT NULL,
  `packageJSON` text NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservationID`, `customerID`, `dateUnix`, `dateHuman`, `signSet`, `package`, `packageCode`, `packageJSON`, `status`) VALUES
('2022-11-28_25394_98_Last02', 'test02@email.com', 1669593600, '2022-11-28', 'Modern Round', 'Pick Four', 25394, '[\"Large Custom Welcome (round center becomes a keepsake)\",\"Large Magnetic Rectangular (Find Your Seat, Cocktails, Let%27s Party, or customize)\",\"2 Selections of Small Square Bracket Signs (In Loving Memory, Gifts & Cards, Take One, and/or customize)\",\"2 Selections of Small Horizontal Bracket Signs (Guestbook, Programs, Mr. & Mrs. Take One, Gifts and Cards,  and/or customize)\"]', 'new'),
('2022-11-30_443169_105_Last01', 'test01@email.com', 1669766400, '2022-11-30', 'Layered Arch', 'Pick Six', 443169, '[\"Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)\",\"3 piece seating chart half arch set (print service for cards is available for a small additional fee)\",\"Up to 2 Sunset Small signs (Please Sign Our Guestbook, Gifts & Cards, In Loving Memory)\",\"1 Double Half Arch Medium sign (Cheers, The Bar, Guestbook, or Custom Acrylic Text)\",\"Unplugged Ceremony sign\",\"Hairpin Record Player Prop\"]', 'new'),
('2022-12-20_2085667_9_Last03', 'test03@email.com', 1671494400, '2022-12-20', 'Vintage Mirror', 'Gold', 2085667, '[\"Welcome Sign with custom names & date & large wrought iron easel\",\"Antique Typewriter Rental with customized message (100 words or less)\",\"Leather Domed Trunk with u201ccardsu201d mirror with stand\",\"Guestbook mirror with stand\",\"Take One small vanity mirror\",\"1 Large Full Custom Mirror (50 words or less) with large wrought iron easel\",\"1 Medium Full Custom Mirror (20 words or less)  with large wrought iron easel\",\"1 Small Custom Mirror (10 words or less) with wrought iron easel\",\"Custom Mirror SMALL (up to 12 words) $40\",\"Custom Mirror MEDIUM (up to 24 words) $60\"]', 'new'),
('2022-12-28_130834_65_Last07', 'test07@email.com', 1672185600, '2022-12-28', 'Modern Round', 'Full Set', 130834, '[\"Large Custom Welcome (round center becomes a keepsake)\",\"Large Magnetic Rectangular (Find Your Seat, Cocktails, Let%27s Party, or customize)\",\"1-30 free standing table numbers\",\"Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)\",\"Set of Reserved signs (5)\",\"2 Selections of Small Square Bracket Signs (In Loving Memory, Gifts & Cards, Take One, and/or customize)\",\"2 Selections of Small Horizontal Bracket Signs (Guestbook, Programs, Mr. & Mrs. Take One, Gifts and Cards,  and/or customize)\",\"1 Medium Table Top  (Unplugged Ceremony, or Magnetic Sign with Cocktails heading,  In Loving Memory heading or customize\",\"All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake\"]', 'new'),
('2023-01-20_2166579_70_Last08', 'test08@email.com', 1674172800, '2023-01-20', 'Vintage Mirror', 'Pick Six', 2166579, '[\"Welcome Sign with custom names & date & large wrought iron easel\",\"Antique Typewriter Rental with customized message (100 words or less)\",\"Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application\",\"Table Numbers 1-30\",\"1 Large Full Custom Mirror (50 words or less) with large wrought iron easel\",\"Customer Mirror LARGE (up to 60 words) $80\"]', 'new'),
('2023-02-22_1048337_101_Last01', 'test01@email.com', 1677024000, '2023-02-22', 'Layered Arch', 'Full Set', 1048337, '[\"Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)\",\"3 piece seating chart half arch set (print service for cards is available for a small additional fee)\",\"Table numbers 1-30\",\"Gold Card option04 with choice of Gifts & Cards sign\",\"5 Reserved signs\",\"Up to 2 Double Half Arch Small signs (Gifts & Cards, Take One, Dont Mind if I Do, In Loving Memory)\",\"Up to 2 Sunset Small signs (Please Sign Our Guestbook, Gifts & Cards, In Loving Memory)\",\"1 Double Half Arch Medium sign (Cheers, The Bar, Guestbook, or Custom Acrylic Text)\",\"1 Double Full Arch Medium sign (Signature Drinks, or Custom Acrylic Text)\",\"Unplugged Ceremony sign\",\"Hairpin Record Player Prop\",\"%22Mr & Mrs%22 Custom Head Table Keepsake is a free gift in addition to the items above\"]', 'new'),
('2023-02-22_33554196_64_Last04', 'test04@email.com', 1677024000, '2023-02-22', 'Dark Walnut', 'Full Package', 33554196, '[\"Welcome to Our Beginning Round (24 in. diameter, with easel) or Rectangular (35.5 x 21 with easel)\",\"Find your Seat  (35.5 x 21 organizer with 30 clips & easel)\",\"Table Numbers, double-sided (Numbers 1-30, 3.5 x 9)\",\"Antique Jug with Honeymoon Fund (jug & mini-hanger, 4.75 x 10) (2pc)\",\"Mr. & Mrs. Head Table Sign with small easel 7.25 x 22.5\",\"We know that you would be here today if Heaven weren%27t so far away  (10 x 10.5 memorial sign or seat saver with small easel)\",\"Here comes the Bride ring bearer carrier  (10.25 x 17.25 with cord)\",\"Better & Together Chair Hangers (with cord 10.25 x 17.25) (2pc)\",\"Please Sign our Guestbook (self standing 7.25 x 16)\",\"Just Married & Thank You (reversible photo-shoot prop 7.25 x 31)\",\"Take One (7.25 x 7.25)\",\"Programs (7.25 x 16)\",\"Enjoy the Moment, no photography please 10.5 in. x 17 in. with small easel\",\"8 Reserved signs (3.5 in. x 12 in.  4 with cord hanger option) (8pc)\",\"Antique Leather and Wooden Trunk with Cards Banner\",\"1 Corinthians 13 signs ($99 additional)\",\"Vintage Typewriter with Message to Guests ($99 additional)\"]', 'new'),
('2023-04-26_33554229_66_Last05', 'test05@email.com', 1682467200, '2023-04-26', 'Rustic Wood', 'Pick Four', 33554229, '[\"Welcome to Our Beginning Round (24 in. diameter, with easel) or Rectangular (35.5 x 21 with easel)\",\"Find your Seat  (35.5 x 21 organizer with 30 clips & easel)\",\"Table Numbers, double-sided (Numbers 1-30, 3.5 x 9)\",\"Antique Jug with Honeymoon Fund (jug & mini-hanger, 4.75 x 10) (2pc)\",\"Mr. & Mrs. Head Table Sign with small easel 7.25 x 22.5\",\"We know that you would be here today if Heaven weren%27t so far away  (10 x 10.5 memorial sign or seat saver with small easel)\",\"Here comes the Bride ring bearer carrier  (10.25 x 17.25 with cord)\",\"Better & Together Chair Hangers (with cord 10.25 x 17.25) (2pc)\",\"Please Sign our Guestbook (self standing 7.25 x 16)\",\"Just Married & Thank You (reversible photo-shoot prop 7.25 x 31)\",\"Take One (7.25 x 7.25)\",\"Programs (7.25 x 16)\",\"Enjoy the Moment, no photography please 10.5 in. x 17 in. with small easel\",\"8 Reserved signs (3.5 in. x 12 in.  4 with cord hanger option) (8pc)\",\"Antique Leather and Wooden Trunk with Cards Banner\",\"1 Corinthians 13 signs ($99 additional)\",\"Vintage Typewriter with Message to Guests ($99 additional)\"]', 'new'),
('2023-05-24_122932_33_Last06', 'test06@email.com', 1684886400, '2023-05-24', 'Dark Walnut', 'Pick Four', 122932, '[\"We know that you would be here today if Heaven weren%27t so far away  (10 x 10.5 memorial sign or seat saver with small easel)\",\"Here comes the Bride ring bearer carrier  (10.25 x 17.25 with cord)\",\"Better & Together Chair Hangers (with cord 10.25 x 17.25) (2pc)\",\"Please Sign our Guestbook (self standing 7.25 x 16)\"]', 'new'),
('2023-07-19_1007377_64_Last09', 'test09@email.com', 1689724800, '2023-07-19', 'Layered Arch', 'Full Set', 1007377, '[\"Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)\",\"3 piece seating chart half arch set (print service for cards is available for a small additional fee)\",\"Table numbers 1-30\",\"Gold Card option04 with choice of Gifts & Cards sign\",\"5 Reserved signs\",\"Up to 2 Sunset Small signs (Please Sign Our Guestbook, Gifts & Cards, In Loving Memory)\",\"1 Double Full Arch Medium sign (Signature Drinks, or Custom Acrylic Text)\",\"Unplugged Ceremony sign\",\"Hairpin Record Player Prop\",\"%22Mr & Mrs%22 Custom Head Table Keepsake is a free gift in addition to the items above\"]', 'new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`reservationID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
