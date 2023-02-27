-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 05:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Big Hotel'),
(2, 'Business'),
(3, 'City'),
(4, 'Country');

-- --------------------------------------------------------

--
-- Table structure for table `category_tour`
--

CREATE TABLE `category_tour` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tour`
--

INSERT INTO `category_tour` (`category_id`, `category_name`) VALUES
(1, 'Long Tour'),
(2, 'Business'),
(3, 'City'),
(4, 'Country');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `person_comment` text NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `person_email` varchar(100) NOT NULL,
  `date_and_time` varchar(100) NOT NULL,
  `comment_status` varchar(30) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `person_comment`, `person_name`, `person_email`, `date_and_time`, `comment_status`, `post_id`) VALUES
(3, 'This is a very nice website.', 'Abir', 'test@gmail.com', 'Mar 29, 2020 at 03:05 pm', 'Active', 10),
(4, 'Excellent service', 'David', 'david@gmail.com', 'Mar 29, 2020 at 03:19 pm', 'Inactive', 10),
(6, 'szd', 'dfg', 'hossenf465@gmail.com', 'Nov 03, 2022 at 11:09 am', 'Active', 18),
(8, 'adsf', 'dfg', 'sdfg@gmail.com', 'Nov 07, 2022 at 09:26 pm', 'Active', 2),
(10, 'asf', 'dfg', 'hossenf465@gmail.com', 'Nov 07, 2022 at 09:52 pm', 'Active', 10),
(12, 'sdf', 'dfg', 'hossenf465@gmail.com', 'Nov 11, 2022 at 10:42 pm', 'Inactive', 11),
(13, 'sdf', 'dfg', 'hossenf465@gmail.com', 'Nov 11, 2022 at 10:52 pm', 'Inactive', 11),
(14, 'sdf', 'dfg', 'hossenf465@gmail.com', 'Nov 11, 2022 at 10:56 pm', 'Inactive', 11),
(15, 'sdf', 'dfg', 'hossenf465@gmail.com', 'Nov 11, 2022 at 10:56 pm', 'Inactive', 11);

-- --------------------------------------------------------

--
-- Table structure for table `comment_tour`
--

CREATE TABLE `comment_tour` (
  `comment_id` int(11) NOT NULL,
  `person_comment` text NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `person_email` varchar(100) NOT NULL,
  `date_and_time` varchar(100) NOT NULL,
  `comment_status` varchar(30) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_tour`
--

INSERT INTO `comment_tour` (`comment_id`, `person_comment`, `person_name`, `person_email`, `date_and_time`, `comment_status`, `post_id`) VALUES
(9, 'Nice Review thanks for this information.', 'Faruq', 'hossenf465@gmail.com', 'Nov 15, 2022 at 11:32 pm', 'Active', 15),
(10, 'Nice Review thanks for this information.', 'Faruq', 'hossenf465@gmail.com', 'Nov 15, 2022 at 11:35 pm', 'Inactive', 15),
(11, 'asdf', 'nice', 'hossenf465@gmail.com', 'Jan 02, 2023 at 11:37 pm', 'Inactive', 16),
(12, 'asdf', 'nice', 'hossenf465@gmail.com', 'Jan 02, 2023 at 11:37 pm', 'Inactive', 16),
(13, 'nice place', 'Faruq Hossain', 'Tourgridebangla55@gmail.com', 'Jan 02, 2023 at 11:44 pm', 'Inactive', 16);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_phone` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_password` varchar(100) NOT NULL,
  `cust_hash` varchar(200) NOT NULL,
  `cust_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_phone`, `cust_email`, `cust_password`, `cust_hash`, `cust_active`) VALUES
(3, 'david', '', 'david@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 1),
(4, 'faruq', '01729991421', 'far@gmail.com', '202cb962ac59075b964b07152d234b70', '88d193895a859ac0a36def09750b071b', 0),
(5, 'faruq Hossain', '01729991421', 'hosenf465@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'bd7cf02e630be72eeb9ebc0fbaaf799a', 0),
(6, 'faruq', '01729991421', 'hossenf465@gmail.com', '202cb962ac59075b964b07152d234b70', '5b4b2cb26f8f1792588329317484b86c', 1),
(10, 'ttyty', '01729991421', 'tourguidebd2700@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'e896e63e8d3a5e50de4179580eff67e6', 0),
(11, 'asdf', '4657', 'tourguidebd2700@gmail.com', '202cb962ac59075b964b07152d234b70', '4c03fb3b9e1b8b8f14ed5d858c4f6907', 0),
(12, 'faruq Hossain', '01729991421', 'fa@gmail.com', '202cb962ac59075b964b07152d234b70', 'b800fdcbb15f6c165a40e19b3f458c98', 0),
(22, 'faruq Hossain', '01729991421', 'tourguidebd2700@gmail.com', '202cb962ac59075b964b07152d234b70', '256a44ff4e7ff23c085e78d67d0d151e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `et_id` int(11) NOT NULL,
  `et_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`et_id`, `et_content`) VALUES
(1, 'Hi {{subscriber_name}},\r\n\r\nPlease visit again to our website. We have bring an awesome blog post for you. Post is here: \r\n\r\n{{post_url}}\r\n\r\nThank you!\r\nArefin\r\nCEO\r\nAAA Company');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `map` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `name`, `address`, `contact`, `website`, `map`) VALUES
(2, 'Kushtia Pediatric Hospital (শিশু হাসপাতাল )', 'Housing- A Block, Kushtia, Bangladesh', '01711473800', 'https://cumaps.net/en/BD/--pediatric-hospital-kushtia-p245165', 'https://goo.gl/maps/8zekaiEPAx3vzo6C7'),
(3, 'Kushtia Hikmah Hospital & Diagnostic Center', 'Ram Chandra Ray Chowdhury Rd, Kushtia, Bangladesh', '01712154657', 'https://vymaps.com/BD/Hikmah-Diagnostic-Center-389196/', 'https://goo.gl/maps/ryUFY4rWWJwVwy237'),
(4, 'Kushtia Lalon Shah Hospital and diagnostic center (লালন শাহ্ ডায়াগনষ্টিক সেন্টার,কুষ্টিয়া)', 'গোরস্থান মসজিদের কাছে, জেনারেল হাসপাতালের পূর্ব পাশে R. C. R. C. Road, Courtpara, Kushtia-7000, Bang', '(কাউন্টার) 01720870299 (হুদা) 01712063189 (হিরো) 01712714215 (আমানত) 01718068239 (দিপু) 01771-977777', 'https://www.helpnotice.net/2021/09/lalon-shah-diagnostic-centrekushtia.html', 'https://goo.gl/maps/ZkpBnitXt4eNgusW7'),
(5, 'Kushtia Doctor\'s Lab (ডক্টরস ল্যাব)', 'Ram Chandra Ray Chowdhury Rd, Kushtia, Bangladesh', '01716-352923', 'https://www.cybo.com/BD-biz/doctors-lab', 'https://goo.gl/maps/zkXHFi6HRF2nKpNC7'),
(6, 'Kushtia Amin Specialized Hospital', 'M.U.Bhuyan Road, Kushtia, Bangladesh', '01728-704009', 'https://cumaps.net/en/BD/amin-specialized-hospital-p245142', 'https://goo.gl/maps/NniiXnWaFEYAfRDL7'),
(7, 'Kushtia Tohiron Nessa Hospital ', 'Alauddinnagar, Kumarkhali, 7010 Kushtia, Dhaka, Bangladesh', '01788400050 or 01717406653', 'https://vymaps.com/BD/Tohiron-Nessa-Hospital-300807903650211/', 'https://goo.gl/maps/NGF4cgnDY3eM4MuK8'),
(8, 'Kushtia Boishakhi Clinic', 'Courtpara, Kushtia, Bangladesh W43G+7GP, Kushtia', '01721751707', 'https://cumaps.net/en/BD/boishakhi-clinic-p245153', 'https://goo.gl/maps/DvBScQjAUNfJHb4u7'),
(9, 'Kushtia Popular Diagnostic Centre Ltd.', 'City Tower - House No.1, Mir Mosharraf Hossain Road, Coart Para, ', '09666 787817 or 09613 787817,', 'https://www.populardiagnostic.com/our-branches/30/Kushtia', 'https://goo.gl/maps/HGcLwKTx1oLF83Pm6'),
(10, 'Kushtia Sono Hospital Ltd.(Sono Tower-1)', 'M. M. Hossain Rd, Kushtia 7000, Bangladesh OR Science Faculty, Mir Mosharaf Hossain Rd, Kushtia 7000', '01751-642522', 'https://cumaps.net/en/BD/sono-hospital-ltdsono-tower-1-p245140', 'https://goo.gl/maps/SJxMdYctR6BUi28KA'),
(11, 'Kushtia School Health Clinics of ', 'M. M. Hossain Rd, Kushtia, Bangladesh', '0 1712-529508', 'http://www.communityclinic.gov.bd/.', 'https://goo.gl/maps/xpAUrQNRBPuMhYQi7'),
(12, 'Kushtia SONO Hospital 2', 'Kushtia 7000, Bangladesh Kushtia District, Khulna Division  Get Directions', '01770-997352', 'https://www.bizsouthasia.com/BD/sono-hospital-01770-997352', 'https://goo.gl/maps/5Y88CmKsTXavRXA28'),
(13, 'Kushtia The Heart Center', 'W42J+X88, পুরাতন কাটাইখানার মোড়, কুষ্টিয়া, Mir Mosharaf Hossain Rd, Kushtia 7000', '01731-687398 ', 'https://vymaps.com/BD/The-Heart-Center-57847/', 'https://goo.gl/maps/S3UYJY4HMgUP2RtX6'),
(14, 'Kushtia Dr. Mannan Heart Hospital', 'Palan Boxr Rd, Kushtia, Bangladesh Kushtia District, Khulna Division  Get Directions', '01711-354826', 'https://www.bizsouthasia.com/BD/dr-mannan-heart-hospital-01711-354826', 'https://goo.gl/maps/o9DNDfwAxEtQA7e17'),
(15, 'Kustia Daibetic Haspatal', 'no', ' no', 'no', 'https://goo.gl/maps/r4aTkzvazDkBFhxi9'),
(16, 'Kushtia Mujibur Rahman Memorial Diabetic Hospital', '7000, Hospital Rd, কুষ্টিয়া 7000, Bangladesh', 'no', 'https://www.hospitalby.com/bangladesh-hospital/bangabandhu-sheikh-mujibur-rahman-diabetes-kushtia.by', 'https://goo.gl/maps/7hemPGjrHkTnnwAVA'),
(17, 'Kushtia General Hospital', 'Hospital Rd, Kushtia 7000, Bangladesh', '01730-324798', 'https://www.helpnotice.net/2021/05/all-details-in-kushtia-general-hospital.html', 'https://goo.gl/maps/32TGkBBm4Zf35cZ59'),
(18, 'Kushtia Rotary Specialized Healthcare & Hospital', '16 Chand Mohammad Rd, Kushtia 7000', '01779-134770', 'https://rckushtia.org', 'https://goo.gl/maps/HuVVLPAFWRwajtP56'),
(19, 'Kushtia Rotary Specialized Healthcare & Hospital', '16 Chand Mohammad Rd, Kushtia 7000', '01779-134770', 'https://rckushtia.org', 'https://goo.gl/maps/HuVVLPAFWRwajtP56'),
(20, 'Kushtia Mother and Child Health Care Center', 'W46G+M3M, Kushtia', 'no', 'http://facilityregistry.dghs.gov.bd/org_profile.php?org_code=10023365', 'https://goo.gl/maps/DssiNPBrxTFDguXZ7'),
(21, 'Kushtia Ad-Din Hospital', '19/1, Chand Mohammad Road, Thanapara, Kushtia, Bangladesh', 'Manager: 01713488532, Ambulance: 01713488427', 'https://ad-din.org/Doctors-Appo/index.php?page=doctors2&hid=8', 'https://goo.gl/maps/CbmVxtuzyDSeUUAz5'),
(22, 'Kushtia BRB Hospital, ', 'Kushtia 7000, Bangladesh Kushtia District Kushtia Express BD road', 'no', 'https://brbhospital.com', 'https://goo.gl/maps/Sn6p6W6vUinYfp3W6'),
(23, 'Kushtia Dar-Us Shefa Private Hospital', 'W439+JP6, Kushtia - Jhenaidah Hwy, কুষ্টিয়া 7000', '01706-895929', 'https://www.bizsouthasia.com/BD/dar-us-shefa-private-hospital-01706-895929', 'https://goo.gl/maps/ggDo13f1VbDZxm4o6'),
(24, 'Choudhury Nurun Nahar General Hospital', 'Kushtia, 14, R. A. Khan Chowdhary Road, Thana Para, Kushtia Khulna.', '01754418266', 'https://daktarbhai.com/hospital/840', 'https://goo.gl/maps/9tdKUgc5TRiahYVk6'),
(25, 'Kushtia Kazi Pharmacy ', 'V4R5+7WH, Infront of Chowdhury Nurun Nahar General hospital, fultola', 'no', 'https://medicare24.online/p/25552 ', 'https://goo.gl/maps/j1o4HgwezsaThALS8'),
(26, 'Kushtia Upoma Diagnostic Centre', '91, Khulna, Kushtia, Kushtia Sadar,', '01712-952961 or 01740932839', 'no', 'https://goo.gl/maps/7hW9pag5xw6eAob37'),
(27, 'T B HOSPITAL KUSHTIA', 'M. M. Hossain Road, Kushtia, Bangladesh', 'no', 'https://www.hospitalby.com/bangladesh-hospital/t-b-hospital-kushtia.by/', 'https://goo.gl/maps/BCTj6kqYoQoGNvs58'),
(28, 'Kushtia Chest Disease Clinic', 'Kushtia', 'no', 'no', 'no'),
(29, 'kushtia surgical clinic', 'Kushtia', '01715001087', 'surgicalclinic41@gmail.com', 'https://goo.gl/maps/HgzUUFgW7SFZGSLc9'),
(30, 'Kashem Clinic Kushtia', 'Kushtia W42J+7J5, Dr Ayen Duddin Ahmmed Road, ', '01711106609', 'https://www.clinicaddress.com/kashem-clinic-kushtia-sadar', 'https://goo.gl/maps/6NRPNRkwALd7K8VV9'),
(31, 'Imdad Setara Khan Kedney Center', 'Kushtia ,পেয়ারাতলা, Bangladesh', '0 1716-161599', 'https://cumaps.net/en/BD/imdad-setara-khan-kedney-center-p245149', 'https://goo.gl/maps/qFeCTmVvxYVHKmcy7'),
(32, 'Kushtia Greenlab Diagnostic Center, Kushtia', 'ল্যাব কেয়ার ভবন, Dr Ayen Duddin Ahmmed Road, Kushtia', 'no', 'no', 'https://goo.gl/maps/U2S4Cxf3SXVpyyv27'),
(33, 'Kushtia গ্রীনল্যাব মেডিকেল সার্ভিসেস, কুষ্টিয়া। Green Lab Medical Services, ', '৪৮, মাহাতাব উদ্দিন সড়ক, কাটাইখানা মোড়, কুষ্টিয়া।', 'ফোনঃ ০২৪৭৭৭৮২২৬১ সিরিয়ালের জন্যঃ ০১৭০৭-১১৩১৮৮ বিস্তারিত তথ্যের জন্যঃ ০১৮৭০-৭০৭৪৪৪, ০১৮৮৮-০৩১৫১০ রাশ', 'https://www.helpnotice.net/2021/12/green-lab-medical-services-kushtia.html', 'no'),
(34, 'Kushtia Boishakhi Clinic', 'W43G+7GP, Kushtia', '01721751707', 'W43G+7GP, Kushtia', 'https://goo.gl/maps/kcLvGHp6hgyU3FEB7'),
(35, 'Kushtia Seva Diagonostic Center', 'W43H+7Q6, Kushtia', 'no', 'W43H+7Q6, Kushtia', 'https://goo.gl/maps/Wf9ssjex52wyN9SY8'),
(36, 'Kushtia Maa Dental Care', 'Kushtia Polytechnic Institute(In front of 2nd gate), Dr. M.A. Kashem\'s building, Mir Mosharaf Hossai', '01686783014', 'https://mapsus.net/BD/maa-dental-care-244797', 'https://goo.gl/maps/w2xjbHq1dKezt5pN8'),
(37, 'Kushtia ডলফিন ডায়াগনস্টিক সেন্টার', 'Kushtia ডলফিন ডায়াগনস্টিক সেন্টার', '01749-813300', 'https://www.facebook.com/dolphin.dgc', 'https://goo.gl/maps/P9vEviP5c9iooqma6'),
(38, 'Dr Abdus Salam Chamber Kushtia', ' Kushtia, Bangladesh', 'no', 'no', 'https://goo.gl/maps/UY6YQBsZbFwc3tN6A'),
(39, 'Kushtia Orthopedic And General Hospital', 'V4XG+H4P, Kushtia', '01793626242', 'no', 'https://goo.gl/maps/uBWX1DLJZs2RwYQy7'),
(40, 'Kushtia Marium Clinic', 'Keramot Ali Lane, Kushtia, Bangladesh', 'no', 'https://www.helpmecovid.com/bd/251101_marium-clinic', 'https://goo.gl/maps/VFy3hTB71Ye6LKSGA'),
(41, 'Kushtia Familly Dental Care', 'W45J+F4M, Kushtia', '01717442144', 'W45J+F4M, Kushtia', 'https://goo.gl/maps/9XYEitCv9j4BrMsT7'),
(47, 'Faruq Hosssain', 'Khulna, Bangladesh', '01729991421', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `feature_id` int(11) NOT NULL,
  `feature_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`feature_id`, `feature_icon`) VALUES
(1, 'fa-cogs'),
(2, 'fa-linkedin'),
(5, 'fa-hotel'),
(6, 'fa-road'),
(7, 'fa-puzzle-piece');

-- --------------------------------------------------------

--
-- Table structure for table `feature_language`
--

CREATE TABLE `feature_language` (
  `fl_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `lang_code` varchar(10) CHARACTER SET latin1 NOT NULL,
  `feature_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `feature_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feature_language`
--

INSERT INTO `feature_language` (`fl_id`, `feature_id`, `lang_code`, `feature_title`, `feature_text`) VALUES
(1, 1, 'en', '24 Hour Service', 'We are always here for you with 24 hours service. '),
(2, 1, 'bn', '10 ঘন্টা সার্ভিস', 'আমরা সবসময় আপনার জন্য 24 ঘন্টা সেবা সঙ্গে এখানে.'),
(30, 5, 'en', 'Hotel Service', 'We can provide the best hotel for your tour.'),
(31, 5, 'bn', ' হোটেল পরিষেবা', 'We provide the best hotels for your visit.'),
(32, 6, 'en', 'Route Service', 'Your see your chose place for find best route in the places.'),
(33, 6, 'bn', ' রুট সার্ভিস', 'জায়গাগুলিতে সেরা রুট খোঁজার জন্য আপনি আপনার বেছে নেওয়া জায়গাটি দেখুন৷'),
(34, 7, 'en', 'Sefty Services', 'We provide best Sefty Services.'),
(35, 7, 'bn', ' নিরাপত্তা সেবা', 'আমরা সেরা সেফটি পরিষেবা প্রদান করি।');

-- --------------------------------------------------------

--
-- Table structure for table `feature_old`
--

CREATE TABLE `feature_old` (
  `feature_id` int(11) NOT NULL,
  `feature_title` varchar(200) NOT NULL,
  `feature_text` text NOT NULL,
  `feature_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_old`
--

INSERT INTO `feature_old` (`feature_id`, `feature_title`, `feature_text`, `feature_icon`) VALUES
(2, 'Beverages included', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.', 'fa-glass'),
(3, 'Stay First, Pay After!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.', 'fa-credit-card'),
(4, '24 Hour Restaurant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.', 'fa-cutlery'),
(5, 'Spa Service', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.', 'fa-tint');

-- --------------------------------------------------------

--
-- Table structure for table `feature_tour`
--

CREATE TABLE `feature_tour` (
  `feature_id` int(11) NOT NULL,
  `feature_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_tour`
--

INSERT INTO `feature_tour` (`feature_id`, `feature_icon`) VALUES
(1, 'fa-cogs'),
(2, 'fa-linkedin'),
(3, 'fa-facebok'),
(4, 'fa-facebook');

-- --------------------------------------------------------

--
-- Table structure for table `feature_tour_language`
--

CREATE TABLE `feature_tour_language` (
  `fl_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `lang_code` varchar(10) CHARACTER SET latin1 NOT NULL,
  `feature_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `feature_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feature_tour_language`
--

INSERT INTO `feature_tour_language` (`fl_id`, `feature_id`, `lang_code`, `feature_title`, `feature_text`) VALUES
(1, 1, 'en', '24 Hour Service', 'We are always here for you with 24 hours service. '),
(2, 1, 'bn', ' 12 ঘন্টা পরিষেবা', 'আমরা সবসময় আপনার জন্য 24 ঘন্টা সেবা সঙ্গে এখানে.');

-- --------------------------------------------------------

--
-- Table structure for table `feature_tour_old`
--

CREATE TABLE `feature_tour_old` (
  `feature_id` int(11) NOT NULL,
  `feature_title` varchar(200) NOT NULL,
  `feature_text` text NOT NULL,
  `feature_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lang_id` int(11) NOT NULL,
  `lang_code` varchar(10) NOT NULL,
  `lang_name` varchar(50) NOT NULL,
  `lang_default` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lang_id`, `lang_code`, `lang_name`, `lang_default`) VALUES
(1, 'en', 'English', ''),
(2, 'bn', 'Bangla', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `language_tour`
--

CREATE TABLE `language_tour` (
  `lang_id` int(11) NOT NULL,
  `lang_code` varchar(10) NOT NULL,
  `lang_name` varchar(50) NOT NULL,
  `lang_default` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_tour`
--

INSERT INTO `language_tour` (`lang_id`, `lang_code`, `lang_name`, `lang_default`) VALUES
(1, 'en', 'English', ''),
(2, 'bn', 'Bangla', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_title`) VALUES
(1, 'feature_add.php', 'Add Feature'),
(2, 'feature_delete.php', 'Delete Feature'),
(3, 'feature_edit.php', 'Edit Feature'),
(4, 'feature_view.php', 'View Feature'),
(5, 'index.php', 'Dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `txnid` varchar(200) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `paid_amount` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `card_cvv` varchar(3) NOT NULL,
  `card_month` varchar(10) NOT NULL,
  `card_year` varchar(10) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `cust_id`, `cust_name`, `cust_email`, `txnid`, `payment_date`, `payment_method`, `paid_amount`, `card_number`, `card_cvv`, `card_month`, `card_year`, `payment_status`, `payment_id`) VALUES
(5, 6, 'faruq', 'hossenf465@gmail.com', '', '2022-11-03 11:05:38', 'PayPal', '20', '', '', '', '', 'Pending', '1667451938'),
(6, 5, 'faruq Hossain', 'hosenf465@gmail.com', '', '2022-11-09 13:41:06', 'PayPal', '1565', '', '', '', '', 'Pending', '1667979666'),
(8, 5, 'faruq Hossain', 'hosenf465@gmail.com', 'ch_3M2HplGTuPxoc4fR3sWFOKHc', '2022-11-09 23:10:18', 'Stripe', '1025', '4242 4242 4242 4242', '234', '11', '2022', 'Completed', '1668013818'),
(9, 5, 'faruq Hossain', 'hosenf465@gmail.com', '', '2022-11-11 20:35:17', 'PayPal', '65', '', '', '', '', 'Pending', '1668177317'),
(10, 5, 'faruq Hossain', 'hosenf465@gmail.com', '', '2022-11-11 20:39:58', 'PayPal', '1000', '', '', '', '', 'Pending', '1668177598'),
(11, 9, '', 'developer@gmail.com', '', '2022-11-16 00:09:33', 'PayPal', '312', '', '', '', '', 'Pending', '1668535773'),
(12, 9, '', 'developer@gmail.com', '', '2022-11-16 00:13:02', 'PayPal', '20', '', '', '', '', 'Pending', '1668535982'),
(13, 9, '', 'developer@gmail.com', '', '2022-11-16 00:20:41', 'PayPal', '50', '', '', '', '', 'Pending', '1668536441'),
(14, 9, '', 'developer@gmail.com', '', '2022-11-16 00:21:30', 'PayPal', '83', '', '', '', '', 'Pending', '1668536490'),
(15, 12, 'faruq Hossain', 'fa@gmail.com', '', '2022-11-23 12:50:42', 'PayPal', '78', '', '', '', '', 'Pending', '1669186242'),
(16, 12, 'faruq Hossain', 'fa@gmail.com', '', '2022-11-26 20:31:39', 'PayPal', '78', '', '', '', '', 'Pending', '1669473099'),
(17, 12, 'faruq Hossain', 'fa@gmail.com', '', '2022-11-27 19:53:16', 'PayPal', '40', '', '', '', '', 'Pending', '1669557196'),
(18, 12, 'faruq Hossain', 'fa@gmail.com', '', '2022-12-24 00:31:29', 'PayPal', '20', '', '', '', '', 'Pending', '1671820289'),
(19, 12, 'faruq Hossain', 'fa@gmail.com', '', '2023-01-01 17:22:05', 'PayPal', '25', '', '', '', '', 'Pending', '1672572125'),
(20, 12, 'faruq Hossain', 'fa@gmail.com', '', '2023-01-06 02:59:24', 'PayPal', '25', '', '', '', '', 'Pending', '1672952364'),
(21, 12, 'faruq Hossain', 'fa@gmail.com', '', '2023-01-16 11:27:01', 'PayPal', '25', '', '', '', '', 'Pending', '1673846821'),
(22, 12, 'faruq Hossain', 'fa@gmail.com', '', '2023-01-21 23:09:05', 'PayPal', '45', '', '', '', '', 'Pending', '1674320945'),
(23, 22, 'faruq Hossain', 'tourguidebd2700@gmail.com', '', '2023-01-24 02:17:45', 'PayPal', '5775', '', '', '', '', 'Pending', '1674505065'),
(24, 22, 'faruq Hossain', 'tourguidebd2700@gmail.com', '', '2023-01-24 12:38:32', 'PayPal', '500', '', '', '', '', 'Pending', '1674542312'),
(25, 22, 'faruq Hossain', 'tourguidebd2700@gmail.com', '', '2023-01-24 23:48:18', 'PayPal', '1', '', '', '', '', 'Pending', '1674582498'),
(26, 22, 'faruq Hossain', 'tourguidebd2700@gmail.com', '', '2023-01-24 23:52:27', 'PayPal', '2', '', '', '', '', 'complete', '1674582747');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `payment_detail_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `checkin_date` varchar(10) NOT NULL,
  `checkin_date_value` varchar(50) NOT NULL,
  `checkout_date` varchar(10) NOT NULL,
  `checkout_date_value` varchar(50) NOT NULL,
  `room_price` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`payment_detail_id`, `room_id`, `cust_id`, `checkin_date`, `checkin_date_value`, `checkout_date`, `checkout_date_value`, `room_price`, `qty`, `payment_id`) VALUES
(10, 5, 5, '2022-11-10', '1668016800', '2022-11-12', '1668189600', '45', 1, '1667979666'),
(11, 1, 5, '2022-11-09', '1667930400', '2022-11-10', '1668016800', '20', 2, '1668012898'),
(12, 3, 5, '2022-11-15', '1668448800', '2022-11-16', '1668535200', '1000', 1, '1668012898'),
(13, 3, 5, '2022-11-10', '1668016800', '2022-11-11', '1668103200', '1000', 1, '1668013818'),
(14, 2, 5, '2022-11-10', '1668016800', '2022-11-11', '1668103200', '25', 1, '1668013818'),
(15, 7, 5, '2022-11-11', '1668103200', '2022-11-12', '1668189600', '65', 1, '1668177317'),
(16, 3, 5, '2022-11-11', '1668103200', '2022-11-12', '1668189600', '1000', 1, '1668177598'),
(17, 1, 9, '2022-11-17', '1668621600', '2022-11-18', '1668708000', '78/8000tk', 4, '1668535773'),
(18, 1, 9, '2022-11-23', '1669140000', '2022-11-26', '1669399200', '20', 1, '1668535982'),
(19, 2, 9, '2022-11-26', '1669399200', '2022-11-28', '1669572000', '25', 2, '1668536441'),
(20, 3, 9, '2022-11-16', '1668535200', '2022-11-17', '1668621600', '83/9500tk', 1, '1668536490'),
(21, 1, 12, '2022-11-24', '1669226400', '2022-11-25', '1669312800', '78/8000tk', 1, '1669186242'),
(22, 1, 12, '2022-11-26', '1669399200', '2022-11-27', '1669485600', '78/8000tk', 1, '1669473099'),
(23, 4, 12, '2022-11-28', '1669572000', '2022-11-29', '1669658400', '40', 1, '1669557196'),
(24, 1, 12, '2022-12-25', '1671904800', '2022-12-26', '1671991200', '20', 1, '1671820289'),
(25, 2, 12, '2023-01-03', '1672682400', '2023-01-04', '1672768800', '25', 1, '1672572125'),
(26, 2, 12, '2023-01-07', '1673028000', '2023-01-08', '1673114400', '25', 1, '1672952364'),
(27, 2, 12, '2023-01-17', '1673892000', '2023-01-19', '1674064800', '25', 1, '1673846821'),
(28, 1, 12, '2023-01-20', '1674151200', '2023-01-21', '1674237600', '20', 1, '1674320945'),
(29, 2, 12, '2023-01-21', '1674237600', '2023-01-22', '1674324000', '25', 1, '1674320945'),
(30, 1, 22, '2023-01-24', '1674496800', '2023-01-25', '1674583200', '5775', 1, '1674505065'),
(31, 5, 22, '2023-01-24', '1674496800', '2023-01-25', '1674583200', '500', 1, '1674542312'),
(32, 1, 22, '2023-01-24', '1674496800', '2023-01-25', '1674583200', '1', 1, '1674582498'),
(33, 2, 22, '2023-01-24', '1674496800', '2023-01-26', '1674669600', '2', 1, '1674582747');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tour`
--

CREATE TABLE `payment_tour` (
  `p_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `txnid` varchar(200) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `paid_amount` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `card_cvv` varchar(3) NOT NULL,
  `card_month` varchar(10) NOT NULL,
  `card_year` varchar(10) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tour_detail`
--

CREATE TABLE `payment_tour_detail` (
  `payment_detail_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `checkin_date` varchar(10) NOT NULL,
  `checkin_date_value` varchar(50) NOT NULL,
  `checkout_date` varchar(10) NOT NULL,
  `checkout_date_value` varchar(50) NOT NULL,
  `room_price` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `photo_name` varchar(100) NOT NULL,
  `photo_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `photo_name`, `photo_category_id`) VALUES
(1, 'gallery_photo_1.jpg', 1),
(2, 'gallery_photo_2.jpg', 2),
(3, 'gallery_photo_3.jpg', 1),
(4, 'gallery_photo_4.jpg', 2),
(5, 'gallery_photo_5.jpg', 1),
(6, 'gallery_photo_6.jpg', 3),
(7, 'gallery_photo_7.jpg', 1),
(8, 'gallery_photo_8.jpg', 2),
(9, 'gallery_photo_9.jpg', 2),
(10, 'gallery_photo_10.jpg', 3),
(11, 'gallery_photo_11.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `photo_category`
--

CREATE TABLE `photo_category` (
  `photo_category_id` int(11) NOT NULL,
  `photo_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_category`
--

INSERT INTO `photo_category` (`photo_category_id`, `photo_category_name`) VALUES
(1, 'Rooms'),
(2, 'Restaurant'),
(3, 'Swimming Pool');

-- --------------------------------------------------------

--
-- Table structure for table `photo_tour`
--

CREATE TABLE `photo_tour` (
  `photo_id` int(11) NOT NULL,
  `photo_name` varchar(100) NOT NULL,
  `photo_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_tour`
--

INSERT INTO `photo_tour` (`photo_id`, `photo_name`, `photo_category_id`) VALUES
(12, 'gallery_photo_12.jpg', 4),
(13, 'gallery_photo_13.png', 5),
(14, 'gallery_photo_14.jpg', 6),
(19, 'gallery_photo_19.png', 7),
(20, 'gallery_photo_20.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `photo_tour_category`
--

CREATE TABLE `photo_tour_category` (
  `photo_category_id` int(11) NOT NULL,
  `photo_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_tour_category`
--

INSERT INTO `photo_tour_category` (`photo_category_id`, `photo_category_name`) VALUES
(4, 'Cox-Bazar'),
(5, 'Sajek'),
(6, 'Sain Martin'),
(7, 'sdfgsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_short_description` text NOT NULL,
  `post_description` text NOT NULL,
  `post_photo` varchar(200) NOT NULL,
  `post_day` varchar(2) NOT NULL,
  `post_month` varchar(2) NOT NULL,
  `post_year` varchar(4) NOT NULL,
  `total_view` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_short_description`, `post_description`, `post_photo`, `post_day`, `post_month`, `post_year`, `total_view`, `user_id`) VALUES
(2, 'Post Title 2', 'Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 Post Item 2 ', '<p>Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2&nbsp;Post Item 2 v</p>\r\n', 'post_2.jpg', '06', '02', '2020', 11, 1),
(8, 'Post Item 3 ', 'Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 Post Item 3 ', '<p>Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;Post Item 3&nbsp;</p>\r\n', 'post_8.jpg', '23', '12', '2019', 1, 1),
(9, 'Post Item 4 ', 'Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 Post Item 4 ', '<p>Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4&nbsp;Post Item 4 vv</p>\r\n', 'post_9.jpg', '01', '10', '2019', 6, 1),
(10, 'Post Item 5 ', 'Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 Post Item 5 ', '<p>Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;Post Item 5&nbsp;</p>\r\n', 'post_10.jpg', '18', '03', '2020', 110, 1),
(11, 'Post Item 6', 'Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 Post Item 6 ', '<p>Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;Post Item 6&nbsp;</p>\r\n', 'post_11.jpg', '28', '03', '2020', 7, 1),
(12, 'Post Item 7', 'Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 Post Item 7 ', '<p>Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;Post Item 7&nbsp;</p>\r\n', 'post_12.jpg', '28', '03', '2020', 1, 1),
(18, 'VV', 'VV', '<p>VV</p>\r\n', 'post_18.jpg', '01', '04', '2020', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `post_category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`post_category_id`, `post_id`, `category_id`) VALUES
(3, 2, 1),
(4, 2, 3),
(5, 2, 4),
(13, 8, 2),
(14, 9, 4),
(15, 10, 1),
(16, 11, 1),
(17, 11, 2),
(18, 12, 1),
(24, 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_tag_id`, `post_id`, `tag_name`) VALUES
(1, 2, 'khulna'),
(8, 2, 'barishal'),
(9, 2, 'rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `post_tour`
--

CREATE TABLE `post_tour` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_short_description` text NOT NULL,
  `post_description` text NOT NULL,
  `post_photo` varchar(200) NOT NULL,
  `post_day` varchar(2) NOT NULL,
  `post_month` varchar(2) NOT NULL,
  `post_year` varchar(4) NOT NULL,
  `total_view` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tour`
--

INSERT INTO `post_tour` (`post_id`, `post_title`, `post_short_description`, `post_description`, `post_photo`, `post_day`, `post_month`, `post_year`, `total_view`, `user_id`) VALUES
(3, 'Kuakata Sea Beach, Bangladesh: Breathtaking views of the dawn and sunset', 'Kuakata Sea Beach, Bangladesh: breathtaking views of the sunrise and sunset', '<p>Kuakata, also known as the &quot;Sagar Kannya,&quot; or &quot;Daughter of the Sea,&quot; is a picturesque traveler&#39;s paradise in Bangladesh&#39;s southern region. It is one of the most stunning and alluring locations for tourists and business travelers. In addition to the nation, Kuakata is now well-known on a global scale. Anyone may view the sunrise and sunset from the same spot on the beach. Kuakata is well known for its amazing natural beauty. Are you contemplating a trip to Sagar Kanya Kuakata? Here are some important travel suggestions.</p>\r\n\r\n<h2><ins><strong>Name,&nbsp;location,&nbsp;and&nbsp;history&nbsp;of&nbsp;Kuakata,&nbsp;Japan</strong></ins></h2>\r\n\r\n<p>The word &quot;Kuya,&quot; which means &quot;well,&quot; is the source of the name Kuakata (water that comes from the ground). The Mughal emperors are said to have expelled the Arakanese from Burma in the 18th century, who then landed on Rangabali Island off the coast of the Bay of Bengal and settled in what is now Kuakata.</p>\r\n\r\n<p>They built numerous wells here since there was a drinking water shortage at the time. Thus, the area was given the name Kuakata. Although it is a well-known concept, you can find this information practically anywhere, including on Wikipedia. This information, however, might not be entirely correct.</p>\r\n\r\n<p>Buddhist and Hindu populations both make pilgrimages to Kuakata. The sacred Maghi Purnima and Ras Purnima celebrations take place here, and they have a huge following. The pilgrims participate in the customary fair as well as a holy bath in the bay on this particular day.</p>\r\n\r\n<p>Kuakata is situated in the Patuakhali District&#39;s Kalapara Upazila. It is located in the southern region of Bangladesh, some 320 kilometers (200 miles) south of Dhaka, and 70 kilometers from the administrative center of the Patuakhali district.</p>\r\n\r\n<h2><ins><strong>How do you get to Kuakata?</strong></ins></h2>\r\n\r\n<p>Through the launch, you can access the road or the river. However, whichever route you choose, you will arrive there by 9 or 10 a.m.</p>\r\n\r\n<p><strong>By Road:</strong></p>\r\n\r\n<p>Road travel from Dhaka to Kuakata takes 380 kilometers. Many buses travel to Kuakata from Dhaka, including the Hanif Paribahan, Golden Line Paribahan, Survi Paribahan, Sakura Paribahan, and Druti Paribahan. Buses depart for Kuakata at the Gabtoli bus stop. These buses cost between Tk. 800- and Tk. 1000 per person, while AC buses cost Tk. 1000 and above. You can stroll to the beach from where the buses drop you off. Bus travel from Dhaka to Kuakata takes roughly 13 hours.</p>\r\n\r\n<h2><ins><strong>Launch from Dhaka to Kuakata through Barisal:</strong></ins></h2>\r\n\r\n<p>The Barisal river is used by the largest and most opulent launches in the nation. The opening of the Barisal route has made a great deal of people feel at ease when they travel. Between 9 and 9:30 p.m., Dhaka Sadarghat launches depart. The cost is roughly Tk. 200&ndash;300 on the deck and Tk. 1000&ndash;2000 or more in the cabin. The river port at Barisal travels to the Rupatali bus stop from whence you can board the Kuakata bus. It will take about 3 hours to go there by bus, which will cost you between 250 and 350 Tk.</p>\r\n\r\n<h2><ins><strong>Launch from Dhaka to Kuakata through Patuakhali:</strong></ins></h2>\r\n\r\n<p>Many people opt to travel to Kuakata via the Patuakhali water route because of the close proximity of the two cities. Between six and seven o&#39;clock in the evening, the Patuakhali launches began their journey from Dhaka Sadarghat. The cost is roughly Tk. 300&ndash;400 on the deck and Tk. 1000&ndash;3000 or more in the cabin. You must take an auto or rickshaw from the Patuakhali River Port to the bus stop, and then a bus will take you to Kuakata. Bus fares range from 150 to 200 Tk. Kuakata can be reached in roughly 2 hours.</p>\r\n\r\n<h2><ins><strong>What is there to see and do in Kuakata?</strong></ins></h2>\r\n\r\n<p>Kuakata offers several places to visit. The sea beach is Kuakata&#39;s primary draw. A beach that is about 18 kilometers long and 1 km wide offers a stunning blend of breathtaking natural beauty all around it. This area is blessed with protected woodlands that allow a number of mesmerizing lakes to flow through them. Kuakata&#39;s attractiveness is enhanced by the presence of coconut trees close to the beach, a sizable mangrove forest in Fatra across from the Ecopark, and the Andhra Manik estuary beneath the National Park. Additionally, Kuakata is known for its shutki Palli, red crab island, and Gangamati beach.</p>\r\n\r\n<p>Observing the sunrise on the Kuakata tour is the most fascinating aspect. To see the dawn, you must go to Gangamati Char early in the day. The island of Crab is located east of Gangamati. Red crabs can be found in great numbers riding about the island. A significant location for the Buddhist community is Misripara Buddhist Monastery, which is visible if you travel a bit further inland from Red Crab Island along Vheribad Road. A hundred-year-old boat can be found if you continue on the road to the left from Kuakata Zero Point. A wooden boat measuring 72 feet long and 24 feet wide was discovered in 2012 as a result of the beach&#39;s erosion.</p>\r\n\r\n<p>In addition to these, you can explore the east half of the Sundarban, the Rupali Island, the Kauar Char, the Zhou Forest, and the Kuakata National Park.</p>\r\n\r\n<h2><ins><strong>Living expenses in Kuakata</strong></ins></h2>\r\n\r\n<p>Two Daak bungalows and Sagar Kanya Tourism Holiday Homes are located in Kuakata. Additionally, there are a number of rest stops at LGED, roads and highways, district council, and Rakhine Culture Academy. However, prior approval from the relevant department must be obtained in order to stay at these locations. In addition, more than 50 residential hotels and motels have been opened on private initiative in this tourist city. These hotels and motels have nightly rates that start at Tk. 600 and go up based on the level of service. There are also several eateries where you can eat.</p>\r\n\r\n<h2><ins><strong>Precaution</strong></ins></h2>\r\n\r\n<p>Even during the wet season, the sea is still fairly choppy. Therefore, you must use caution while at sea. It is best to avoid diving into the water if the signal is still present. Watch your infant if you have one with you. Additionally, walking in the dark at night is dangerous. Make sure you have a torch with you. While leaving, make a note of the phone number for the tourist police. You are always welcome to seek assistance from the tourist police.</p>\r\n\r\n<h2><ins><strong>A good time to visit Kuakata is:</strong></ins></h2>\r\n\r\n<p>Anytime of the year is a good time to visit Kuakata. However, as the weather is calm and quiet, it is advised to travel throughout the fall and winter (October to March). You can witness a bare-bones version of Kuakata if you visit during the summer. In the summer, you may witness the powerful waves pounding the shore.</p>\r\n', 'post_3.jpg', '15', '11', '2022', 20, 1),
(15, 'Visit Sajek, where the sky is the limit.', 'The only significant mountainous region in Bangladesh is in the southeast, where Sajek is situated. Sajek Valley is currently one of the most well-liked travel spots in our nation. Your heart will be warmed by the breathtaking vista of the mountains and the cotton-like cloud. Traveling to the Sajek Valley will provide you with a wealth of captivating tourist sites, sky-touching mountains covered in deep vegetation, and stunning clouds.\r\n\r\nIf you\'re considering visiting Sajek, a few fundamental questions can cross your mind, such as:\r\n\r\nHow can I get to Sajek?\r\nSajek Valley is best visited in the spring.\r\nSajek\'s attractive locations\r\nHotels and dining establishments.\r\nHow can I get to Sajek?', '<p><ins><strong>Khagrachari to Dhaka (Sajek)</strong></ins></p>\r\n\r\n<p>Sajek is located in the Rangamati District, however if you&#39;re coming from Dhaka, the most straightforward and practical route is through the Khagrachori District. You must take the road from Dhaka to Khagrachari. You can choose your preferred form of transportation. You can either take your own private transportation or you can travel by bus, which offers a variety of options for AC and Non-AC busses including Hanif, Saudia Paribahan, Shyamoli, Shanti Paribahan, S. Alam, Eagle, BRTC, Saint Martin, Relax Paribahan, and others. An tip is to be sure to get your tickets a little sooner if you intend to visit during a holiday.</p>\r\n\r\n<p><strong>Khagrachari to Dhaka (Sajek)</strong></p>\r\n\r\n<p>Sajek is located in the Rangamati District, however if you&#39;re coming from Dhaka, the most straightforward and practical route is through the Khagrachori District. You must take the road from Dhaka to Khagrachari. You can choose your preferred form of transportation. You can either take your own private transportation or you can travel by bus, which offers a variety of options for AC and Non-AC busses including Hanif, Saudia Paribahan, Shyamoli, Shanti Paribahan, S. Alam, Eagle, BRTC, Saint Martin, Relax Paribahan, and others. An tip is to be sure to get your tickets a little sooner if you intend to visit during a holiday.</p>\r\n\r\n<p>There, you will go with an army escort that is only available twice daily. Therefore, you will have to wait till the following day if you happen to miss that. When you go to Dighinala, if you have time, you can also go to Hazagarh Jhorna. You will travel through Bagaihat, Machalong Bazar, and Ruilui bazar on your trip from Dighinala to Sajek. You will forget about all the road fatigue when you look at the rows of hills and the lush horizon.</p>\r\n\r\n<p><strong>When to visit Sajek Valley is ideal</strong></p>\r\n\r\n<p><a href=\"https://ibb.co/hf593Pd\" target=\"_self\"><img alt=\"https://ibb.co/hf593Pd\" src=\"https://ibb.co/hf593Pd\" style=\"border-style:solid; border-width:55px; float:right; height:55px; margin:5px 55px; width:55px\" /></a>All four seasons are beautiful in the Sajek Valley. Every season brings forth a different hue of nature&#39;s unmatched splendor. While the winter months offer a stunning view and chilly weather, the rainy season is the best time to experience it while surrounded by dancing clouds. You can enjoy the water falls both in dry summer months and during rainy seasons.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Attractive places in Sajek</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogp019jxawV6hMo9rcs-H1oiOLlIyKqNcI.jpg\" style=\"height:308px; width:526px\" /></strong></p>\r\n\r\n<p>One of Sajek&#39;s biggest draws is the picturesque landscape. Your heart will be won over by the stunning rows of mountains and valleys tucked away beneath the cloud cover. Three different types of nature can be found here. The temperature peaks during the day and then drops when the sun sets. The area has its unique charm during the rainy season when one mountain is covered in rain and the other is illuminated by a rainbow. It is genuinely a fantastic encounter.</p>\r\n\r\n<p><img alt=\"\" src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blog71zdkeXySW1Lp6e3LLS22T02SY3LJxh7.jpg\" style=\"height:302px; width:537px\" /></p>\r\n\r\n<p>Sajek&#39;s Konglak hill is a popular destination for travelers. The Lusai community lives in the last settlement of Sajek Valley, Konglak. You can see the Indian Lusai Hills, where the Karnafuli River has its beginnings, from the Konglak Hills. The Kamalak fountain can be enjoyed after a two-hour hike via Ruului Para. Many people also refer to this lovely fountain as the waterfall Padaam Toisha Jharna or the fountain Sikam Toisha Jharna (waterfall). Visit these waterfalls during the rainy season to enjoy them.</p>\r\n\r\n<p><img alt=\"\" src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogjEJLm33VsMXQBhfQQmTiWKe6Fvwu6RJk.jpg\" style=\"height:319px; width:479px\" /></p>\r\n\r\n<p>From dawn until sunset, Sajek continues on exposing its splendor. If one visits Sajek, they should never miss the dawn or sunset. The Helipad is the ideal location to see this view. The sky will begin to shimmer just after sunset as billions of stars become visible in the open, bright sky. While traveling back from there, you can glance about and see indigenous people&#39;s way of life.</p>\r\n\r\n<p>Ethnic communities make up the Sajek Valley&#39;s indigenous population. One of them Among the notables are Chakma, Marma, Tripura, Pankua, Lushai, and Sagma. Women appear to become more active in the local economy. tea shops, restaurants, and roadside stands Women predominate in markets. The majority of people are kind and inviting.and welcoming. A significant commerce there is early morning fruit and vegetable picking. Bengali is not their first language, yet the young people speak English with assurance.</p>\r\n\r\n<p><img alt=\"\" src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogG68gzUhhmjLek-OECG1Kr3JcLFxjZtld.jpg\" style=\"height:429px; width:322px\" /></p>\r\n\r\n<p>You should spend a day or two in Khagrachori on your way back from Sajek. The Horticulture Park, Alutila Guha (cave), Risang Jhorna (waterfall), and lovely old Buddhist monasteries are all located there. Numerous plant nurseries also contain a variety of flower fields, making them ideal locations for photo shoots.</p>\r\n\r\n<p><strong>Accommodation and restaurants</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogJJ3bAvY-oOB9xvfKymuderhpfRamoYGd.jpg\" style=\"height:355px; width:474px\" /></p>\r\n\r\n<p>In Sajek, there are more than 50 resorts and native cottages where visitors can spend the night. If you are planning a trip, it is best to make reservations sooner to secure a high-quality room with a breathtaking view. Since it is a popular tourist destination, it is frequently inhabited. Your stay in the echo-friendly cottages will be a memorable one. Almost every home guarantees a decently lovely view. There is a stunning resort that the Armies developed, but you need permission and must make reservations through Army authorities. Additional reasonably priced inns and resorts include Sajek Resort, Runmoy Resort, Megh Machang, Jumghor Eco Resort, and Meghpunji Resort.</p>\r\n\r\n<p><img alt=\"\" src=\"https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/blogV66BpP9hvZFy1tx1_0WaLKs1ybcBW0gr.jpg\" style=\"height:308px; width:534px\" /></p>\r\n\r\n<p>If you let the resorts know ahead of time, they will make the appropriate arrangements for you. All of the resorts offer food arrangements. There are restaurants there that provide pretty excellent food that you may sample as well. You can even sample some of the native people&#39;s home cooking. Their tea, which is served in bamboo cups, and the incredible Birani, which is cooked inside bamboo, are both must-tries. Additionally, the eateries serve delicious finger-licking BBQ dinners. When visiting Sajek, one should never pass up the chance to try these.</p>\r\n\r\n<p>One last piece of advice for a hassle-free trip is to plan your journey in advance to avoid problems. You might be overcharged while hiring cars and making reservations.</p>\r\n', 'post_15.jpg', '15', '11', '2022', 22, 1),
(16, 'Moinok Ghat (Dhaka) ', 'Moinok Ghat (Dhaka) in one like of mini Cox\'s bazar.', '<p>Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.</p>\r\n\r\n<p><strong>Boat Journey</strong></p>\r\n\r\n<p><a href=\"https://www.messenger.com/messenger_media/?attachment_id=2577549955718695&amp;message_id=mid.%24cAAAAA47Hmi2LpNBsWGFc4sVEaY9L&amp;thread_id=100012345468363\"><img alt=\"\" src=\"https://scontent.xx.fbcdn.net/v/t1.15752-9/321660050_2577549959052028_1017257244055912492_n.jpg?stp=dst-jpg_s403x403&amp;_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=aee45a&amp;_nc_ohc=deZJp6SDV90AX_m3raD&amp;_nc_ad=z-m&amp;_nc_cid=0&amp;_nc_ht=scontent.xx&amp;oh=03_AdRAafsipXMuWiMa-ncDMQFPZOzGM6us5CbRRobD2stH1w&amp;oe=63DA810C\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.messenger.com/messenger_media/?attachment_id=697307385237141&amp;message_id=mid.%24cAAAAA47Hmi2LpNBsWGFc4sVEaY9L&amp;thread_id=100012345468363\"><img alt=\"\" src=\"https://scontent.xx.fbcdn.net/v/t1.15752-9/322664535_697307388570474_5339338151348702881_n.jpg?stp=dst-jpg_p403x403&amp;_nc_cat=100&amp;ccb=1-7&amp;_nc_sid=aee45a&amp;_nc_ohc=zRoTb99IfSsAX_7d3Pc&amp;_nc_ad=z-m&amp;_nc_cid=0&amp;_nc_ht=scontent.xx&amp;oh=03_AdRPEvfSqHXHYT5duzHstIs0V6PVcYC4tii7PsGivRBL2w&amp;oe=63DA7B37\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'post_16.jpg', '02', '01', '2023', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_tour_category`
--

CREATE TABLE `post_tour_category` (
  `post_category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tour_category`
--

INSERT INTO `post_tour_category` (`post_category_id`, `post_id`, `category_id`) VALUES
(5, 3, 2),
(6, 3, 4),
(7, 3, 1),
(33, 15, 2),
(34, 15, 1),
(35, 16, 3),
(36, 16, 4),
(37, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_tour_tag`
--

CREATE TABLE `post_tour_tag` (
  `post_tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tour_tag`
--

INSERT INTO `post_tour_tag` (`post_tag_id`, `post_id`, `tag_name`) VALUES
(6, 6, 'text'),
(19, 16, 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `reply_id` int(11) NOT NULL,
  `person_comment` text NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `person_email` varchar(100) NOT NULL,
  `date_and_time` varchar(100) NOT NULL,
  `reply_status` varchar(30) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `person_comment`, `person_name`, `person_email`, `date_and_time`, `reply_status`, `comment_id`) VALUES
(4, 'You are correct.', 'Smith', 'smith@gmail.com', 'Mar 29, 2020 at 03:59 pm', 'Active', 3),
(6, 'I do not agree. Service is bad.', 'Amanda', 'amanda@gmail.com', 'Mar 29, 2020 at 04:00 pm', 'Active', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reply_tour`
--

CREATE TABLE `reply_tour` (
  `reply_id` int(11) NOT NULL,
  `person_comment` text NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `person_email` varchar(100) NOT NULL,
  `date_and_time` varchar(100) NOT NULL,
  `reply_status` varchar(30) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply_tour`
--

INSERT INTO `reply_tour` (`reply_id`, `person_comment`, `person_name`, `person_email`, `date_and_time`, `reply_status`, `comment_id`) VALUES
(3, 'Thanks', 'hosen', 'Tourgridebangla55@gmail.com', 'Nov 15, 2022 at 11:53 pm', 'Active', 9);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Developer'),
(2, 'Admin'),
(3, 'Manager'),
(5, 'Blogger'),
(6, '5');

-- --------------------------------------------------------

--
-- Table structure for table `role_access`
--

CREATE TABLE `role_access` (
  `role_access_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `access_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_access`
--

INSERT INTO `role_access` (`role_access_id`, `role_id`, `page_id`, `access_status`) VALUES
(1, 3, 1, 1),
(2, 3, 2, 1),
(3, 3, 3, 0),
(4, 3, 4, 0),
(9, 5, 1, 1),
(10, 5, 2, 0),
(11, 5, 3, 0),
(12, 5, 4, 0),
(13, 3, 5, 1),
(14, 5, 5, 1),
(15, 6, 1, 1),
(16, 6, 2, 0),
(17, 6, 3, 1),
(18, 6, 4, 0),
(19, 6, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(200) NOT NULL,
  `room_short_description` text NOT NULL,
  `room_description` text NOT NULL,
  `room_featured_photo` varchar(100) NOT NULL,
  `room_overview` text NOT NULL,
  `room_facility` text NOT NULL,
  `room_price` varchar(10) NOT NULL,
  `room_total` int(11) NOT NULL,
  `room_show_on_home` varchar(3) NOT NULL,
  `room_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_short_description`, `room_description`, `room_featured_photo`, `room_overview`, `room_facility`, `room_price`, `room_total`, `room_show_on_home`, `room_type_id`) VALUES
(1, 'Nascent Gardenia ResidenceOpens (Deluxe Double Room)', 'Deluxe Double Room (extra-large double bed)                                                                                                                                                                                                                        \r\n\r\nLocation:- House#17, Road#1, Block#B, Niketon, Gulshan-1, 1212 Dhaka, Bangladesh –\r\n', '<p>You&#39;re eligible for a Genius discount at Nascent Gardenia Residence! To save at this property, all you have to do is&nbsp;<a href=\"https://account.booking.com/auth/oauth2?state=UuAF7Z5nRh6deddVdJ0N2S223pfoortuWIqCsBTsJCd9j0hCL7vKQ6YAa7jHIsO4rSF0U1Sw8nlb8XoL8_E8rH2RPZsg_8n_Ipw3DmzhJqWjnVT3469USH6ngGQ8oJ1exBk4TYe15Ez4JE13vncSRLiES79TedIvZwdGm0EGy_Pj6GpwbHi7WSLESLUOwJja8ImKvTi7EO0n3QcyBgt59RJKJmuEkH2PnZVIzzs7Ijjo7LDcQk0LgpPkTuEl-y5AuFVeeFoO9icYCsgc4sVIqNmjvwy9dkFf6P5ZqvwvfJ1QSRoPqJ2KkevkUjQfboY8y1m04Y7WXBhyqnm6V_Ab6TDjFisN4aD7vlNwIC7zvR9RUdbY2cSYR64eTV9far3kqp86keFA5LiKYf5bCS0isJA8DkzBBQqPtSSrWjondAZN9iYXawRvTv1x66XZ8P5Rbqi4pkxGNo4khbLAanv_2Qn3_xBEuvRO-M6IulkxSDkB7UT6UsOSGuSu9XQzUcqcuU1NScwQfOHHag5rONBVczaIJcpKb5VDuFpxTR_L7ROEAqhPkxDvfferE-GW1-sJP2bX49KYuunjHc7qhUmAkcIFkwjvFmq7HO2Vk_anjrOVG-eRDLwgbILkSN1ERgq7u-klte37Pftdck5f8rgR3rMnw9vbFogYzf0nRIfqmvexiCQIcZJjJU-pp5ZvpsTGvwk8Sv1IYtMyfTlNiD1gmg8kmaVPS5bdy5PV5L0A4c4K_NXj96hwgQfQh1Tqp_zkvI4TzEHGX_G13srrn5jvDsZ1iWXMzgRPJt3AiYOpmCbGX5R7ISxwZgNF8rSx_CPkEpK9K8wLSB3tTDkhy1ze6Cwu1VQndzf4Z-YEGspqu2wR_26fxriX9NXh6mee6ClngbqjwMVbCh1yCfnf6jvE4Ti9KbhSntXjjXQy6JMukKhVTKkvE7ZiXU9R-bFtZR3VRaz9Pi8jx0DRlPJzH43Ln6kMkw&amp;dt=1674381411&amp;bkng_action=hotel&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fsecure.booking.com%2Flogin.html%3Fop%3Doauth_return&amp;client_id=vO1Kblk7xX9tUn2cpZLS&amp;aid=309654&amp;lang=en-gb\">sign in</a>.</p>\r\n\r\n<p>Situated in Dhaka, 1.7 km from AUST, Nascent Gardenia Residence features accommodation with a fitness centre, free private parking and a shared lounge. With free WiFi, this 4-star hotel offers a shared kitchen and room service. The accommodation provides a concierge service, a tour desk and currency exchange for guests.</p>\r\n\r\n<p>At the hotel rooms include air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a shower, free toiletries and a hairdryer. Rooms have a kettle, while certain rooms have a kitchen with a microwave. At Nascent Gardenia Residence each room is equipped with bed linen and towels.</p>\r\n\r\n<p>Breakfast is available each morning, and includes buffet, &agrave; la carte and continental options. At the accommodation you will find a restaurant serving Chinese, British and Indian cuisine. Vegetarian, vegan and gluten-free options can also be requested.</p>\r\n\r\n<p>Speaking Bengali, English and Hindi, staff at the 24-hour front desk can help you plan your stay.</p>\r\n\r\n<p>Consulate of Singapore is 2.1 km from Nascent Gardenia Residence, while BRAC University is 1.6 km from the property. The nearest airport is Hazrat Shahjalal International Airport, 8 km from the hotel.</p>\r\n\r\n<p>Couples particularly like the location &mdash; they rated it&nbsp;<strong>8.0</strong>&nbsp;for a two-person trip.</p>\r\n', 'room_1.png', '<p><span class=\"marker\">1 extra-large double bed</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>* View, * Free toiletries, * Shower,Bathrobe, Safety deposit box, *Toilet, *Sofa, *Fireplace, *Towels, *Linen, *Socket near the bed, *Cleaning products, *Desk, *Seating Area, *Private entrance, *TV, Slippers, *Refrigerator, *Mosquito net, *Telephone, *Ironing facilities, *Satellite channels, *Tea/Coffee maker, *Iron, *Hairdryer, *Additional toilet, *Dressing room, *Towels/sheets (extra fee), *Wake up service/Alarm clock, *Electric kettle, *Outdoor furniture, *Cable channels, *Wake-up service, *Alarm clock, *Executive lounge access, *Tumble dryer, *Wardrobe or closet, *Upper floors accessible by elevator, *Clothes rack, * Drying rack for clothing, *Toilet paper,*Entire unit wheelchair accessible, * Single-room air conditioning for guest accommodation,* Hand sanitiser, * Carbon monoxide detector</li>\r\n</ul>\r\n', '<p><strong>?</strong> <strong>Airport shuttle (free)</strong></p>\r\n\r\n<p><strong>? Fitness centre</strong></p>\r\n\r\n<p><strong>? Non-smoking rooms</strong></p>\r\n\r\n<p><strong>? Room service</strong></p>\r\n\r\n<p><strong>? Restaurant</strong></p>\r\n\r\n<p><strong>? Free WiFi</strong></p>\r\n\r\n<p><strong>? Free parking</strong></p>\r\n\r\n<p><strong>?</strong> <strong>Facilities for disabled guests</strong></p>\r\n\r\n<p><strong>?</strong> <strong>Tea/coffee maker in all rooms </strong></p>\r\n\r\n<p><strong>? Fabulous breakfast</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', 2, 'Yes', 1),
(2, 'Nascent Gardenia ResidenceOpens (Twin Room)', '2 single beds \r\nComfy beds, 8.8 – Based on 10 reviews\r\nThis twin room features a tea/coffee maker, executive lounge access and bathrobe.', '<p>You&#39;re eligible for a Genius discount at Nascent Gardenia Residence! To save at this property, all you have to do is&nbsp;<a href=\"https://account.booking.com/auth/oauth2?state=UuAF7Z5nRh6deddVdJ0N2S223pfoortuWIqCsBTsJCd9j0hCL7vKQ6YAa7jHIsO4rSF0U1Sw8nlb8XoL8_E8rH2RPZsg_8n_Ipw3DmzhJqWjnVT3469USH6ngGQ8oJ1exBk4TYe15Ez4JE13vncSRLiES79TedIvZwdGm0EGy_Pj6GpwbHi7WSLESLUOwJja8ImKvTi7EO0n3QcyBgt59RJKJmuEkH2PnZVIzzs7Ijjo7LDcQk0LgpPkTuEl-y5AuFVeeFoO9icYCsgc4sVIqNmjvwy9dkFf6P5ZqvwvfJ1QSRoPqJ2KkevkUjQfboY8y1m04Y7WXBhyqnm6V_Ab6TDjFisN4aD7vlNwIC7zvR9RUdbY2cSYR64eTV9far3kqp86keFA5LiKYf5bCS0isJA8DkzBBQqPtSSrWjondAZN9iYXawRvTv1x66XZ8P5Rbqi4pkxGNo4khbLAanv_2Qn3_xBEuvRO-M6IulkxSDkB7UT6UsOSGuSu9XQzUcqcuU1NScwQfOHHag5rONBVczaIJcpKb5VDuFpxTR_L7ROEAqhPkxDvfferE-GW1-sJP2bX49KYuunjHc7qhUmAkcIFkwjvFmq7HO2Vk_anjrOVG-eRDLwgbILkSN1ERgq7u-klte37Pftdck5f8rgR3rMnw9vbFogYzf0nRIfqmvexiCQIcZJjJU-pp5ZvpsTGvwk8Sv1IYtMyfTlNiD1gmg8kmaVPS5bdy5PV5L0A4c4K_NXj96hwgQfQh1Tqp_zkvI4TzEHGX_G13srrn5jvDsZ1iWXMzgRPJt3AiYOpmCbGX5R7ISxwZgNF8rSx_CPkEpK9K8wLSB3tTDkhy1ze6Cwu1VQndzf4Z-YEGspqu2wR_26fxriX9NXh6mee6ClngbqjwMVbCh1yCfnf6jvE4Ti9KbhSntXjjXQy6JMukKhVTKkvE7ZiXU9R-bFtZR3VRaz9Pi8jx0DRlPJzH43Ln6kMkw&amp;dt=1674381411&amp;bkng_action=hotel&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fsecure.booking.com%2Flogin.html%3Fop%3Doauth_return&amp;client_id=vO1Kblk7xX9tUn2cpZLS&amp;aid=309654&amp;lang=en-gb\">sign in</a>.</p>\r\n\r\n<p>Situated in Dhaka, 1.7 km from AUST, Nascent Gardenia Residence features accommodation with a fitness centre, free private parking and a shared lounge. With free WiFi, this 4-star hotel offers a shared kitchen and room service. The accommodation provides a concierge service, a tour desk and currency exchange for guests.</p>\r\n\r\n<p>At the hotel rooms include air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a shower, free toiletries and a hairdryer. Rooms have a kettle, while certain rooms have a kitchen with a microwave. At Nascent Gardenia Residence each room is equipped with bed linen and towels.</p>\r\n\r\n<p>Breakfast is available each morning, and includes buffet, &agrave; la carte and continental options. At the accommodation you will find a restaurant serving Chinese, British and Indian cuisine. Vegetarian, vegan and gluten-free options can also be requested.</p>\r\n\r\n<p>Speaking Bengali, English and Hindi, staff at the 24-hour front desk can help you plan your stay.</p>\r\n\r\n<p>Consulate of Singapore is 2.1 km from Nascent Gardenia Residence, while BRAC University is 1.6 km from the property. The nearest airport is Hazrat Shahjalal International Airport, 8 km from the hotel.</p>\r\n\r\n<p>Couples particularly like the location &mdash; they rated it&nbsp;<strong>8.0</strong>&nbsp;for a two-person trip.</p>\r\n', 'room_2.jpg', '<p>2 Single Bed&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>* View, * Free toiletries, * Shower,Bathrobe, Safety deposit box, *Toilet, *Sofa, *Fireplace, *Towels, *Linen, *Socket near the bed, *Cleaning products, *Desk, *Seating Area, *Private entrance, *TV, Slippers, *Refrigerator, *Mosquito net, *Telephone, *Ironing facilities, *Satellite channels, *Tea/Coffee maker, *Iron, *Hairdryer, *Additional toilet, *Dressing room, *Towels/sheets (extra fee), *Wake up service/Alarm clock, *Electric kettle, *Outdoor furniture, *Cable channels, *Wake-up service, *Alarm clock, *Executive lounge access, *Tumble dryer, *Wardrobe or closet, *Upper floors accessible by elevator, *Clothes rack, * Drying rack for clothing, *Toilet paper,*Entire unit wheelchair accessible, * Single-room air conditioning for guest accommodation,* Hand sanitiser, * Carbon monoxide detector</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Upper floors accessible by elevator</li>\r\n	<li>Entire unit wheelchair accessible</li>\r\n	<li>Linen</li>\r\n	<li>Dressing room</li>\r\n	<li>Alarm clock</li>\r\n	<li>Wardrobe or closet</li>\r\n	<li>Hand sanitiser</li>\r\n	<li>Tea/Coffee maker</li>\r\n	<li>Minibar</li>\r\n	<li>Air conditioning</li>\r\n	<li>Safety deposit box</li>\r\n	<li>Soundproofing</li>\r\n	<li>Private entrance</li>\r\n	<li>Mosquito net</li>\r\n	<li>Ironing facilities</li>\r\n	<li>Iron</li>\r\n	<li>Carbon monoxide detector</li>\r\n	<li>Refrigerator</li>\r\n	<li>Electric kettle</li>\r\n	<li>Cleaning products</li>\r\n	<li>Tumble dryer</li>\r\n	<li>Sofa</li>\r\n	<li>Fireplace</li>\r\n	<li>Desk</li>\r\n	<li>Seating Area</li>\r\n	<li>TV</li>\r\n	<li>Telephone</li>\r\n	<li>Satellite channels</li>\r\n	<li>Flat-screen TV</li>\r\n	<li>Cable channels</li>\r\n	<li>Outdoor furniture</li>\r\n	<li>Socket near the bed</li>\r\n	<li>Clothes rack</li>\r\n	<li>Drying rack for clothing</li>\r\n	<li>Wake up service/Alarm clock</li>\r\n	<li>Wake-up service</li>\r\n	<li>Executive lounge access</li>\r\n	<li>Single-room air conditioning for guest accommodation</li>\r\n</ul>\r\n', '2', 5, 'Yes', 1),
(4, 'khulna (Double Hotel)', 'Room Description 3 Room Description 3 Room Description 3 ', '<p>Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;Room Description 3&nbsp;</p>\r\n', 'room_4.jpg', '<p>Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;Room Overview 3&nbsp;</p>\r\n', '<p>Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;Room Facility 3&nbsp;</p>\r\n', '40', 2, 'No', 2),
(5, 'Sylhet (Twin Room)', 'Room Description 4 Room Description 4 Room Description 4 ', '<p>Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;Room Description 4&nbsp;</p>\r\n', 'room_5.jpg', '<p>Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;Room Overview 4&nbsp;</p>\r\n', '<p>Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;Room Facility 4&nbsp;</p>\r\n', '4', 2, 'Yes', 3),
(8, 'Nascent Gardenia ResidenceOpens (Deluxe Suite)', 'Room size 34 m²\r\n1 extra-large double bed \r\nComfy beds, 8.8 – Based on 10 reviews\r\nThis suite has a fireplace, tea/coffee maker and tumble dryer.', '<p>You&#39;re eligible for a Genius discount at Nascent Gardenia Residence! To save at this property, all you have to do is&nbsp;<a href=\"https://account.booking.com/auth/oauth2?state=UuAF7Z5nRh6deddVdJ0N2S223pfoortuWIqCsBTsJCd9j0hCL7vKQ6YAa7jHIsO4rSF0U1Sw8nlb8XoL8_E8rH2RPZsg_8n_Ipw3DmzhJqWjnVT3469USH6ngGQ8oJ1exBk4TYe15Ez4JE13vncSRLiES79TedIvZwdGm0EGy_Pj6GpwbHi7WSLESLUOwJja8ImKvTi7EO0n3QcyBgt59RJKJmuEkH2PnZVIzzs7Ijjo7LDcQk0LgpPkTuEl-y5AuFVeeFoO9icYCsgc4sVIqNmjvwy9dkFf6P5ZqvwvfJ1QSRoPqJ2KkevkUjQfboY8y1m04Y7WXBhyqnm6V_Ab6TDjFisN4aD7vlNwIC7zvR9RUdbY2cSYR64eTV9far3kqp86keFA5LiKYf5bCS0isJA8DkzBBQqPtSSrWjondAZN9iYXawRvTv1x66XZ8P5Rbqi4pkxGNo4khbLAanv_2Qn3_xBEuvRO-M6IulkxSDkB7UT6UsOSGuSu9XQzUcqcuU1NScwQfOHHag5rONBVczaIJcpKb5VDuFpxTR_L7ROEAqhPkxDvfferE-GW1-sJP2bX49KYuunjHc7qhUmAkcIFkwjvFmq7HO2Vk_anjrOVG-eRDLwgbILkSN1ERgq7u-klte37Pftdck5f8rgR3rMnw9vbFogYzf0nRIfqmvexiCQIcZJjJU-pp5ZvpsTGvwk8Sv1IYtMyfTlNiD1gmg8kmaVPS5bdy5PV5L0A4c4K_NXj96hwgQfQh1Tqp_zkvI4TzEHGX_G13srrn5jvDsZ1iWXMzgRPJt3AiYOpmCbGX5R7ISxwZgNF8rSx_CPkEpK9K8wLSB3tTDkhy1ze6Cwu1VQndzf4Z-YEGspqu2wR_26fxriX9NXh6mee6ClngbqjwMVbCh1yCfnf6jvE4Ti9KbhSntXjjXQy6JMukKhVTKkvE7ZiXU9R-bFtZR3VRaz9Pi8jx0DRlPJzH43Ln6kMkw&amp;dt=1674381411&amp;bkng_action=hotel&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fsecure.booking.com%2Flogin.html%3Fop%3Doauth_return&amp;client_id=vO1Kblk7xX9tUn2cpZLS&amp;aid=309654&amp;lang=en-gb\">sign in</a>.</p>\r\n\r\n<p>Situated in Dhaka, 1.7 km from AUST, Nascent Gardenia Residence features accommodation with a fitness centre, free private parking and a shared lounge. With free WiFi, this 4-star hotel offers a shared kitchen and room service. The accommodation provides a concierge service, a tour desk and currency exchange for guests.</p>\r\n\r\n<p>At the hotel rooms include air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a shower, free toiletries and a hairdryer. Rooms have a kettle, while certain rooms have a kitchen with a microwave. At Nascent Gardenia Residence each room is equipped with bed linen and towels.</p>\r\n\r\n<p>Breakfast is available each morning, and includes buffet, &agrave; la carte and continental options. At the accommodation you will find a restaurant serving Chinese, British and Indian cuisine. Vegetarian, vegan and gluten-free options can also be requested.</p>\r\n\r\n<p>Speaking Bengali, English and Hindi, staff at the 24-hour front desk can help you plan your stay.</p>\r\n\r\n<p>Consulate of Singapore is 2.1 km from Nascent Gardenia Residence, while BRAC University is 1.6 km from the property. The nearest airport is Hazrat Shahjalal International Airport, 8 km from the hotel.</p>\r\n\r\n<p>Couples particularly like the location &mdash; they rated it&nbsp;<strong>8.0</strong>&nbsp;for a two-person trip.</p>\r\n', 'room_8.jpg', '<p>1 extra-large double bed</p>\r\n\r\n<ul>\r\n	<li>* View, * Free toiletries, * Shower,Bathrobe, Safety deposit box, *Toilet, *Sofa, *Fireplace, *Towels, *Linen, *Socket near the bed, *Cleaning products, *Desk, *Seating Area, *Private entrance, *TV, Slippers, *Refrigerator, *Mosquito net, *Telephone, *Ironing facilities, *Satellite channels, *Tea/Coffee maker, *Iron, *Hairdryer, *Additional toilet, *Dressing room, *Towels/sheets (extra fee), *Wake up service/Alarm clock, *Electric kettle, *Outdoor furniture, *Cable channels, *Wake-up service, *Alarm clock, *Executive lounge access, *Tumble dryer, *Wardrobe or closet, *Upper floors accessible by elevator, *Clothes rack, * Drying rack for clothing, *Toilet paper,*Entire unit wheelchair accessible, * Single-room air conditioning for guest accommodation,* Hand sanitiser, * Carbon monoxide detector</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Upper floors accessible by elevator</li>\r\n	<li>Entire unit wheelchair accessible</li>\r\n	<li>Linen</li>\r\n	<li>Dressing room</li>\r\n	<li>Alarm clock</li>\r\n	<li>Wardrobe or closet</li>\r\n	<li>Hand sanitiser</li>\r\n	<li>Tea/Coffee maker</li>\r\n	<li>Minibar</li>\r\n	<li>Air conditioning</li>\r\n	<li>Safety deposit box</li>\r\n	<li>Soundproofing</li>\r\n	<li>Private entrance</li>\r\n	<li>Mosquito net</li>\r\n	<li>Ironing facilities</li>\r\n	<li>Iron</li>\r\n	<li>Carbon monoxide detector</li>\r\n	<li>Refrigerator</li>\r\n	<li>Microwave</li>\r\n	<li>Electric kettle</li>\r\n	<li>Kitchen</li>\r\n	<li>Cleaning products</li>\r\n	<li>Tumble dryer</li>\r\n	<li>Sofa</li>\r\n	<li>Fireplace</li>\r\n	<li>Desk</li>\r\n	<li>Seating Area</li>\r\n	<li>TV</li>\r\n	<li>Telephone</li>\r\n	<li>Satellite channels</li>\r\n	<li>Flat-screen TV</li>\r\n	<li>Cable channels</li>\r\n	<li>Outdoor furniture</li>\r\n	<li>Socket near the bed</li>\r\n	<li>Clothes rack</li>\r\n	<li>Drying rack for clothing</li>\r\n	<li>Wake up service/Alarm clock</li>\r\n	<li>Wake-up service</li>\r\n	<li>Executive lounge access</li>\r\n	<li>Single-room air conditioning for guest accommodation</li>\r\n</ul>\r\n', '7,219', 5, 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_feature`
--

CREATE TABLE `room_feature` (
  `room_feature_id` int(11) NOT NULL,
  `room_feature_name` varchar(100) NOT NULL,
  `room_feature_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_feature`
--

INSERT INTO `room_feature` (`room_feature_id`, `room_feature_name`, `room_feature_icon`) VALUES
(1, 'Free Internet', 'fa fa-globe'),
(2, '100 SQ Meter', 'fa fa-microchip'),
(3, 'Relax Mode Shower', 'fa fa-shower'),
(4, 'Private Balcony', 'fa fa-bullhorn'),
(5, 'Bathtub', 'fa fa-bathtub'),
(6, 'Breakfast', 'fa fa-coffee');

-- --------------------------------------------------------

--
-- Table structure for table `room_photo`
--

CREATE TABLE `room_photo` (
  `room_photo_id` int(11) NOT NULL,
  `room_photo` varchar(100) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_photo`
--

INSERT INTO `room_photo` (`room_photo_id`, `room_photo`, `room_id`) VALUES
(12, 'room_photo_12.jpg', 5),
(13, 'room_photo_13.jpg', 5),
(18, 'room_photo_18.jpg', 2),
(19, 'room_photo_19.jpg', 2),
(20, 'room_photo_20.jpg', 2),
(21, 'room_photo_21.png', 1),
(22, 'room_photo_22.jpg', 1),
(23, 'room_photo_23.jpg', 1),
(24, 'room_photo_24.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `room_room_feature`
--

CREATE TABLE `room_room_feature` (
  `room_room_feature_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_room_feature`
--

INSERT INTO `room_room_feature` (`room_room_feature_id`, `room_id`, `room_feature_id`) VALUES
(17, 4, 1),
(18, 4, 2),
(19, 4, 3),
(20, 5, 4),
(21, 5, 5),
(22, 5, 6),
(40, 1, 1),
(41, 1, 2),
(42, 1, 3),
(43, 1, 4),
(44, 1, 5),
(45, 1, 6),
(46, 2, 1),
(47, 2, 2),
(48, 2, 3),
(49, 2, 4),
(50, 2, 5),
(51, 2, 6),
(52, 8, 1),
(53, 8, 2),
(54, 8, 3),
(55, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL,
  `room_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type_name`) VALUES
(1, 'Dhaka'),
(2, 'Khulna'),
(3, 'Sylhet'),
(5, 'Chittagonj'),
(6, 'Cox\'sbazar');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_title`, `service_text`) VALUES
(1, 'Our Menus', 'Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 Service 1 '),
(2, 'Events', 'Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 Service 2 '),
(3, 'Kids', 'Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 Service 3 '),
(5, 'Ambulance', 'Our ambulance are always ready for you. When you will need, you can call in this number +122 999 3322. We will reach at your room as early as possible. ');

-- --------------------------------------------------------

--
-- Table structure for table `service_tour`
--

CREATE TABLE `service_tour` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_tour`
--

INSERT INTO `service_tour` (`service_id`, `service_title`, `service_text`) VALUES
(7, 'Our Tours', '<p><img alt=\"\" src=\"https://www.pexels.com/photo/green-and-blue-peacock-feather-674010/\" style=\"width:120px\" />nice product</p>\r\n'),
(8, 'Events', '<p>service 2service 2service 2service 2service 2service 2service 2service 2service 2service 2service 2service 2</p>\r\n'),
(10, 'Kids', '&nbsp;Kids&nbsp;Kids&nbsp;Kids&nbsp;Kids&nbsp;Kids&nbsp;Kids&nbsp;Kids&nbsp;Kids&nbsp;Kids\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `top_bar_email` varchar(100) NOT NULL,
  `top_bar_phone` varchar(100) NOT NULL,
  `top_bar_show` varchar(3) NOT NULL,
  `footer_address` text NOT NULL,
  `footer_phone` varchar(100) NOT NULL,
  `footer_email` varchar(100) NOT NULL,
  `footer_website` varchar(100) NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_how_many_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `top_bar_email`, `top_bar_phone`, `top_bar_show`, `footer_address`, `footer_phone`, `footer_email`, `footer_website`, `footer_copyright`, `footer_how_many_post`) VALUES
(1, 'tourguidebd55@gmail.com', '01729991421', 'Yes', 'Ashuliya, Savar, Dhaka (1207)', '01729991421', 'tourguidebd55@gmail.com', 'http://www.tourguidebangla.com', 'Copyright 2022, All Rights Reserved.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_subtitle` varchar(200) NOT NULL,
  `slider_button_text` varchar(100) NOT NULL,
  `slider_button_url` varchar(100) NOT NULL,
  `slider_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_subtitle`, `slider_button_text`, `slider_button_url`, `slider_photo`) VALUES
(1, 'The Best Hotel In Bangladesh (Tour Guide Bangla)', 'You are welcome to our hotel', 'Find Hotel', 'http://localhost/tourhotel/index.php', 'slider_1.jpg'),
(2, '', '', '', '', 'slider_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_home`
--

CREATE TABLE `slider_home` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_subtitle` varchar(200) NOT NULL,
  `slider_button_text` varchar(100) NOT NULL,
  `slider_button_url` varchar(100) NOT NULL,
  `slider_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_home`
--

INSERT INTO `slider_home` (`slider_id`, `slider_title`, `slider_subtitle`, `slider_button_text`, `slider_button_url`, `slider_photo`) VALUES
(1, 'The Tour Guid Bangla Is The Best Website', 'Are you considering going to our website?', 'Visit Now', 'http://localhost/tourhotel/home.php', 'sliderhome_1.jpg'),
(3, 'Tour Places Tour Guide Bangla', 'The majority of tourist destinations are in Bangladesh.', 'Go to Tour ', 'http://localhost/tourhotel/tour/index.php', 'sliderhome_3.jpg'),
(4, 'Find Hotel', 'Most gorgeous hotels may be found in Bangladesh.', 'Find Your Hotel', 'http://localhost/tourhotel/index.php', 'sliderhome_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_tour`
--

CREATE TABLE `slider_tour` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_subtitle` varchar(200) NOT NULL,
  `slider_button_text` varchar(100) NOT NULL,
  `slider_button_url` varchar(100) NOT NULL,
  `slider_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_tour`
--

INSERT INTO `slider_tour` (`slider_id`, `slider_title`, `slider_subtitle`, `slider_button_text`, `slider_button_url`, `slider_photo`) VALUES
(26, 'The Best Tour Places in Bangladesh (Tour Guide Bangla)', 'Choose the finest locations for you.', 'Find Here', 'http://localhost/tourhotel/tour/index.php', 'slidertour_26.jpg'),
(30, '', '', '', '', 'slidertour_30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_hash` varchar(200) NOT NULL,
  `s_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`s_id`, `s_name`, `s_email`, `s_hash`, `s_active`) VALUES
(2, 'Arefin 1', 'arefin2k@gmail.com', '', 1),
(3, 'Arefin 2', 'bloggerarefin@gmail.com', '', 1),
(9, 'ff', 'hossenf465@gmail.com', '52660a535ac5bf14c9b8c38b2152ffc9', 0),
(10, 'far', 'hossenf465@gmail.com', 'd57b92f4945fcb971a13c8dd07d3cdf8', 0),
(11, 'far', 'hossenf465@gmail.com', '985003732852575b95262c0008e165e5', 0),
(12, 'far', 'hossenf465@gmail.com', 'c5fec5734eb7e62c10bda86d82e0ee4b', 0),
(13, 'far', 'hossenf465@gmail.com', 'dc2add36f4dfe4b2592e5144b4c1a0b4', 0),
(14, 'far', 'hossenf465@gmail.com', '98709b855ad075b1af9f28bcfc3d603a', 0),
(15, 'far', 'hossenf465@gmail.com', '7e272739a4fe0935e6c62153a761e71a', 0),
(16, 'far', 'hossenf465@gmail.com', '509d8499b774ccd2061f3cb6489ea846', 0),
(17, 'far', 'hossenf465@gmail.com', '781297cc8bae5691755e751b5de3ace9', 0),
(18, 'far', 'hossenf465@gmail.com', '3644398b58b0c41557f3d1ca19e4314b', 0),
(19, 'far', 'hossenf465@gmail.com', 'e5f197494db8e5489484eb6881f4ade1', 0),
(20, 'far', 'hossenf465@gmail.com', 'dec0fb646ebc48f46670165e08739f11', 0),
(21, 'far', 'hossenf465@gmail.com', 'ca9a216d4239fcbaba81b32cfbaebe6e', 0),
(22, 'far', 'hossenf465@gmail.com', '432c87b44b35e721d0fc3a8fc10111eb', 0),
(23, 'far', 'hossenf465@gmail.com', '3cd887450dba5a71a76242b0e407477a', 0),
(24, 'far', 'hossenf465@gmail.com', '1fa1b710687d55bde22fd083187e4c15', 0),
(25, 'far', 'hossenf465@gmail.com', 'b27f26cc5ab4410b87e877252d0e5aab', 0),
(26, 'far', 'hossenf465@gmail.com', '2311a6e76caa5b3f0ebc8a6f9401d4af', 0),
(27, 'far', 'hossenf465@gmail.com', '93bf21c01b3597191d7922dffb0475bb', 0),
(28, 'far', 'hossenf465@gmail.com', 'ac83f77c0a596a9c43d361af7a281e21', 0),
(29, 'far', 'hossenf465@gmail.com', 'e6c2ace432c184d66368d01235181293', 0),
(30, 'far', 'hossenf465@gmail.com', 'ee52bcfe4d3b71a2cfc9eb2659857ecc', 0),
(31, 'far', 'hossenf465@gmail.com', 'cb6125b9e89febf3f7cb40ea546f3c2d', 0),
(32, 'far', 'hossenf465@gmail.com', '84712bc1804759c8f5b01d57a964401f', 0),
(33, 'far', 'hossenf465@gmail.com', 'a82d0e5755be916074ecaaa9690b6fa4', 0),
(34, 'far', 'hossenf465@gmail.com', 'e5436dbf0c8e27ad2bf454dee08e5ced', 0),
(35, 'far', 'hossenf465@gmail.com', '5020c44a9edf8a0f62231ee20694ebb7', 0),
(36, 'far', 'hossenf465@gmail.com', '5a36d7e87fdc7a12234382f73941f484', 0),
(37, 'far', 'hossenf465@gmail.com', '8ac0b411e3e1671b59262a48b293239b', 0),
(38, 'far', 'hossenf465@gmail.com', '3ecb46422f3c222a51d7aec9acccb1fb', 0),
(39, 'far', 'hossenf465@gmail.com', 'dbb871b24bf232e9a1a91d0b62d1e6c6', 0),
(40, 'far', 'hossenf465@gmail.com', '79ad0309ace36359361d6a9b154452e8', 0),
(41, 'far', 'hossenf465@gmail.com', '5574ce839edc55a82cec15bc5f87da13', 0),
(42, 'far', 'hossenf465@gmail.com', 'b5a72b570d05c6b709c531ccd9e51589', 0),
(43, 'far', 'hossenf465@gmail.com', '4da071e42d051a36a4d1da7325892dde', 0),
(44, 'far', 'hossenf465@gmail.com', 'eefb9695b637e535e7ad417a3e788536', 0),
(45, 'far', 'hossenf465@gmail.com', '8858e417e6f7a0e1ff65d789736ec2c6', 0),
(46, 'far', 'hossenf465@gmail.com', '3e024326367ac95ae715eb5131ce05ea', 0),
(47, 'far', 'hossenf465@gmail.com', 'c569b6a42db0def4d2b2c88cfc986750', 0),
(48, 'far', 'hossenf465@gmail.com', 'aff44a1a0abc12d376a51a6136493b22', 0),
(49, 'far', 'hossenf465@gmail.com', '98105e39c24d2b70d3c8793fec6ffa53', 0),
(50, 'far', 'hossenf465@gmail.com', 'a96170352b592c88afd8cc67ceeaf482', 0),
(51, 'far', 'hossenf465@gmail.com', '861aa26c4e722c7f45173e4e6a3b4b59', 0),
(52, 'far', 'hossenf465@gmail.com', '2bc0daaa4db4203397b5cb2e3da957ec', 0),
(53, 'far', 'hossenf465@gmail.com', '337314362c1ef30f7790dcfce9c4446a', 0),
(54, 'far', 'hossenf465@gmail.com', 'ae13c9f10cb1eff9eacb8079cc14803f', 0),
(55, 'far', 'hossenf465@gmail.com', '9ac0a68f37a6b5ac06e93aac151b3fda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `person_name_designation` varchar(200) NOT NULL,
  `person_comment` text NOT NULL,
  `person_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `person_name_designation`, `person_comment`, `person_photo`) VALUES
(8, 'aaa', 'aaa', 'person_8.jpg'),
(9, 'bbb', 'bbb', 'person_9.jpg'),
(10, 'ccc', 'ccc', 'testimonial_10.jpg'),
(11, 'adsf', 'asdf', 'person_11.png'),
(12, 'asdf', 'asdf', 'person_12.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_tour`
--

CREATE TABLE `testimonial_tour` (
  `testimonial_id` int(11) NOT NULL,
  `person_name_designation` varchar(200) NOT NULL,
  `person_comment` text NOT NULL,
  `person_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial_tour`
--

INSERT INTO `testimonial_tour` (`testimonial_id`, `person_name_designation`, `person_comment`, `person_photo`) VALUES
(13, 'Md faruq', 'ewtr', 'testimonial_13.jpg'),
(14, 'fauq', 'nice', 'person_14.jpg'),
(15, 'Faruq Hossain', 'afgasdf', 'person_15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(200) NOT NULL,
  `room_short_description` text NOT NULL,
  `room_description` text NOT NULL,
  `room_featured_photo` varchar(100) NOT NULL,
  `room_overview` text NOT NULL,
  `room_facility` text NOT NULL,
  `room_price` varchar(10) NOT NULL,
  `room_day` varchar(255) NOT NULL,
  `room_total` int(11) NOT NULL,
  `room_show_on_home` varchar(3) NOT NULL,
  `room_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`room_id`, `room_name`, `room_short_description`, `room_description`, `room_featured_photo`, `room_overview`, `room_facility`, `room_price`, `room_day`, `room_total`, `room_show_on_home`, `room_type_id`) VALUES
(1, 'Kuakata sea beach', 'In the Patuakhali district, on Bangladesh\'s southernmost point, is the Kuakata, a scenic seaside resort. It is located about 70 miles from the district headquarters and roughly 320 kilometres south of the country\'s capital, Dhaka.', '<p><ins><span class=\"marker\"><strong>Day 00 Dhaka to Kuakata</strong></span></ins></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Bus departs for Kuakata at 20.00 hours.</p>\r\n	</li>\r\n	<li>\r\n	<p>late-night bus ride.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><ins><span class=\"marker\"><strong>Day 01 Kuakata</strong></span></ins>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Arrive at 07.00 hours in the morning.</p>\r\n	</li>\r\n	<li>\r\n	<p>Enter hotel and eat breakfast.</p>\r\n	</li>\r\n	<li>\r\n	<p>Indulge yourself.</p>\r\n	</li>\r\n	<li>\r\n	<p>At a hotel overnight.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><ins><span class=\"marker\"><strong>Day 02 Kuakata</strong></span></ins></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Visit Gongamoti Chor in the morning and take in the sunrise. (self).</p>\r\n	</li>\r\n	<li>\r\n	<p>Having breakfast</p>\r\n	</li>\r\n	<li>\r\n	<p>After dark, visit a Buddhist temple (self).</p>\r\n	</li>\r\n	<li>\r\n	<p>A night or more.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><ins><span class=\"marker\"><strong>Day 03 Kuakata</strong></span></ins></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Enjoy your free time after breakfast.</p>\r\n	</li>\r\n	<li>\r\n	<p>Begins leaving for Dhaka at 1900 hours.</p>\r\n	</li>\r\n	<li>\r\n	<p>Late-night bus ride.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><ins><span class=\"marker\"><strong>Day 00&nbsp;Kuakata to Dhaka</strong></span></ins></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Reach Dhaka.</p>\r\n	</li>\r\n	<li>\r\n	<p>Go back to your cozy house.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; --- End of Tour ---</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'room_1.jpg', '<p><strong>Etymology</strong></p>\r\n\r\n<p>The word &quot;kua&quot; (the Bengali word for &quot;well&quot;), which was dug on the shore by the early Rakhine settlers (Burmese tribes) in search of collecting drinking water, is where the name Kuakata came from. They arrived on the Kuakata coast in the 18th century after the Burmese extremists drove them out of Arakan (Myanmar). [5] Subsequently, it has become customary for Rakhaine tribes to dig wells for water in their surrounding areas.</p>\r\n\r\n<p><strong>Geography</strong></p>\r\n\r\n<p>Kuakata is located in the Patuakhali District&#39;s Kalapara Upazila. [6] It is about 70 kilometers (43 miles) from the district headquarters and 320 kilometers (200 miles) south of Dhaka, the country&#39;s capital.</p>\r\n\r\n<p><strong>Demographics</strong></p>\r\n\r\n<p>Kuakata&#39;s population was 9,077 people, with 2,065 homes, as of the 2011 Bangladesh census.</p>\r\n\r\n<p><strong>Culture</strong></p>\r\n\r\n<p>Hindu and Buddhist populations both make pilgrimages to Kuakata. During the festivals of &quot;Rush Purnima&quot; and &quot;Maghi Purnima,&quot; countless worshippers come here. On these days, pilgrims attend the customary fairs and take holy baths in the bay. [1] The Goutama Buddha statue and two 200-year-old wells are located in a Buddhist temple that is 100 years old.</p>\r\n\r\n<p><strong>Tourism</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>National Park of Kuakata.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ecopark in Kuakata.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fatra Forest.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Of Kuakata, well.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Buddhist monastery in Shima.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Keranipara Rakhaine village.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Port Alipur.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>The Buddhist monastery in Mishripara.</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>The Gangamati Forest.</strong></p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Free Breakfast.</li>\r\n	<li>Hotel Include.</li>\r\n	<li>Couple tour.</li>\r\n	<li>Single tour.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '7tk', '3 DAYS - 2 NIGHTS', 9, 'Yes', 3),
(3, 'Sajek Valley', 'The Sajek valley is recognized for its pristine surroundings, which include hills covered in grassland, thick forests, and mountains. The Kachalong and the Machalong are two of the many tiny rivers that run through the mountains.', '<p>Sajek Valley is an emerging tourist spot in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in the Rangamati District. The valley is 1,476 feet (450 m) above sea level. Sajek valley is known as the Queen of Hills &amp; Roof of Rangamati. Sajek is located in the verdant hills of Kasalong range of mountains amidst the serene and exotic beauty of nature. Lofty mountains, dense forest, sprawling grasslands and miles of hilly tracks feature the valley. The simple and basic indigenous lifestyle of local people is just fabulous for visitors to spend a day.</p>\r\n', 'room_3.jpg', '<p><strong>Origin of name</strong></p>\r\n\r\n<p>The Sajek River, which flows from the Karnafuli River, gave the Sajek Valley its name. Bangladesh and India are divided by the Sajek River.</p>\r\n\r\n<p><strong>Location</strong></p>\r\n\r\n<p>The union of Sajek is situated in the Chittagong Hill Tracts&#39; north. It is located 95 kilometers (59 miles) north of Rangamati city and is part of Baghaichori Upazila in the Rangamati hill district. It is 67 kilometers (42 km) north-east of Khagrachhari town. East of Sajek, in Mizoram, India, is where Bangladesh and Mizoram&#39;s borders meet.&nbsp;</p>\r\n\r\n<p><strong>Nature</strong></p>\r\n\r\n<p>The native people of Sajek valley are ethnic minorities. Among them Chakma, Marma, Tripura, Pankho, Kaibarta, Lushai, other indigenous Assamese communities, and Sagma are mentionable. Women seem to be more involved in economic activities here. [citation needed] Tea stalls, food joints and roadside marketplaces are dominated by women. [citation needed] Picking fruits and vegetables early in the morning is a common trade here. [citation needed] They are not fluent in Bengali, but the young population speak some English.</p>\r\n\r\n<p><strong>People and culture</strong></p>\r\n\r\n<p>Native inhabitants of the Sajek Valley are an ethnic minority. Chakma, Marma, Tripura, Pankho, Kaibarta, Lushai, other native Assamese communities, and Sagma should be mentioned among them. In this place, women appear to be more active in economic activities. [Needs citation] Women predominate at tea shops, restaurants, and roadside markets. [Needs citation] It is a normal practice here to pick fruits and vegetables in the early morning hours. [Needs citation] The young population speaks some English but does not speak Bengali well.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<ul>\r\n	<li>Free Breakfast.</li>\r\n	<li>Hotel Include.</li>\r\n	<li>Couple tour.</li>\r\n	<li>Single tour.</li>\r\n</ul>\r\n', '8tk', '4 DAYS - 5 NIGHT', 4, 'Yes', 3),
(4, 'St. Martin\'s Island', 'As the southernmost point of Bangladesh, St. Martin\'s Island (Bengali: ) is a tiny island (area only 3 km2) in the northeastern Bay of Bengal, about 9 km south of the tip of the Cox\'s Bazar-Teknaf peninsula. ', '<p>As the southernmost point of Bangladesh, St. Martin&#39;s Island (Bengali: ) is a tiny island (area only 3 km2) in the northeastern Bay of Bengal, about 9 km south of the tip of the Cox&#39;s Bazar-Teknaf peninsula. Chera Dwip is the name of a small neighboring island that is cut off by high tide. It is located at the mouth of the Naf River, about 8 kilometers (5 miles) west of Myanmar&#39;s northwest coast.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'room_4.jpg', '<p>The sole coral island in Bangladesh is Saint Martin&#39;s, a tiny island with an area of approximately eight square kilometers. During a tide, the landmass that is visible recedes. It is located in teknaf, which is also known as the pearl of the sea, about 10 kilometers from the mainland. The government-owned ferry, which travels in around two hours each way, is the safest mode of transportation. Visitors can remain for a day or two, spend a few hours, and then leave the same day. One and a half days of touring are doable because of the ferry&#39;s schedule. It will be a once-in-a-lifetime experience to unwind and have fun in the idyllic setting of a blue sky and coconut trees, swim in the clear water, snorkel in the lagoon, and take a walk in the fresh air.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n', '<ul>\r\n	<li>Free Breakfast.</li>\r\n	<li>Hotel Include.</li>\r\n	<li>Couple tour.</li>\r\n	<li>Single tour.</li>\r\n</ul>\r\n', '2tk', '1 DAYS - 2 NIGHT', 3, 'Yes', 3),
(5, 'Moinok Ghat (Dhaka) ', 'Moinok Ghat (Dhaka) in one like of mini Cox\'s bazar.', '<p>Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.</p>\r\n', 'room_5.jpg', '<p>Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.</p>\r\n', '<p>Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.Moinok Ghat (Dhaka) in one like of mini Cox&#39;s bazar.</p>\r\n', '5', '2 days', 2, 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_feature`
--

CREATE TABLE `tour_feature` (
  `room_feature_id` int(11) NOT NULL,
  `room_feature_name` varchar(100) NOT NULL,
  `room_feature_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_feature`
--

INSERT INTO `tour_feature` (`room_feature_id`, `room_feature_name`, `room_feature_icon`) VALUES
(1, 'Free Internet', 'fa fa-globe'),
(2, 'Nice Hotel', 'fa fa-h-square'),
(4, 'Private Room', 'fa fa-bed'),
(6, 'Breakfast Include', 'fa fa-coffee'),
(8, 'Comfortable bus', 'fa fa-bus');

-- --------------------------------------------------------

--
-- Table structure for table `tour_photo`
--

CREATE TABLE `tour_photo` (
  `room_photo_id` int(11) NOT NULL,
  `room_photo` varchar(100) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_photo`
--

INSERT INTO `tour_photo` (`room_photo_id`, `room_photo`, `room_id`) VALUES
(1, 'tour_photo_1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_tour_feature`
--

CREATE TABLE `tour_tour_feature` (
  `room_room_feature_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_tour_feature`
--

INSERT INTO `tour_tour_feature` (`room_room_feature_id`, `room_id`, `room_feature_id`) VALUES
(35, 1, 1),
(36, 1, 6),
(37, 3, 1),
(38, 3, 4),
(39, 3, 6),
(40, 3, 8),
(49, 4, 1),
(50, 4, 2),
(51, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tour_type`
--

CREATE TABLE `tour_type` (
  `room_type_id` int(11) NOT NULL,
  `room_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_type`
--

INSERT INTO `tour_type` (`room_type_id`, `room_type_name`) VALUES
(1, 'Single Tour 2 day'),
(2, 'Double Tour'),
(3, 'Multiple Tour'),
(4, 'Family Tour');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_bio` text NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_hash` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_full_name`, `user_img`, `user_bio`, `user_email`, `user_password`, `user_hash`, `role_id`) VALUES
(1, 'Faruq Hossain', '', 'Proin venenatis, diam in iaculis venenatis, ante lacus dictum dolor, sed laoreet nisl dui vel magna. Cras pulvinar tortor quis dolor viverra vel scelerisque magna suscipit. Maecenas nec placerat augue. Cras feugiat imperdiet nulla ut feugiat. Vestibulum nunc enim, consequat ac euismod vel, commodo eget nulla. Donec augue est, consectetur posuere dapibus non, aliquam tempor ligula. Suspendisse potenti. Cras vel vestibulum dolor L.orem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed turpis neque. In auctor, odio eget luctus lobortis!', 'developer@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1),
(2, 'Faruq Hossain', '', '', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 2),
(3, 'Sabbir Ahmed', '', '', 'sabbir@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 3),
(7, 'Tanjim Hossain', '', '', 'tanjim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 5),
(8, 'far', '', '', 'hossenf465@gmail.com', '1234', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `category_tour`
--
ALTER TABLE `category_tour`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_tour`
--
ALTER TABLE `comment_tour`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`et_id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `feature_language`
--
ALTER TABLE `feature_language`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `feature_old`
--
ALTER TABLE `feature_old`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `feature_tour`
--
ALTER TABLE `feature_tour`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `feature_tour_language`
--
ALTER TABLE `feature_tour_language`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `feature_tour_old`
--
ALTER TABLE `feature_tour_old`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `language_tour`
--
ALTER TABLE `language_tour`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`payment_detail_id`);

--
-- Indexes for table `payment_tour`
--
ALTER TABLE `payment_tour`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `payment_tour_detail`
--
ALTER TABLE `payment_tour_detail`
  ADD PRIMARY KEY (`payment_detail_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `photo_category`
--
ALTER TABLE `photo_category`
  ADD PRIMARY KEY (`photo_category_id`);

--
-- Indexes for table `photo_tour`
--
ALTER TABLE `photo_tour`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `photo_tour_category`
--
ALTER TABLE `photo_tour_category`
  ADD PRIMARY KEY (`photo_category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`post_category_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`post_tag_id`);

--
-- Indexes for table `post_tour`
--
ALTER TABLE `post_tour`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_tour_category`
--
ALTER TABLE `post_tour_category`
  ADD PRIMARY KEY (`post_category_id`);

--
-- Indexes for table `post_tour_tag`
--
ALTER TABLE `post_tour_tag`
  ADD PRIMARY KEY (`post_tag_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `reply_tour`
--
ALTER TABLE `reply_tour`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_access`
--
ALTER TABLE `role_access`
  ADD PRIMARY KEY (`role_access_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_feature`
--
ALTER TABLE `room_feature`
  ADD PRIMARY KEY (`room_feature_id`);

--
-- Indexes for table `room_photo`
--
ALTER TABLE `room_photo`
  ADD PRIMARY KEY (`room_photo_id`);

--
-- Indexes for table `room_room_feature`
--
ALTER TABLE `room_room_feature`
  ADD PRIMARY KEY (`room_room_feature_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_tour`
--
ALTER TABLE `service_tour`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `slider_home`
--
ALTER TABLE `slider_home`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `slider_tour`
--
ALTER TABLE `slider_tour`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `testimonial_tour`
--
ALTER TABLE `testimonial_tour`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tour_feature`
--
ALTER TABLE `tour_feature`
  ADD PRIMARY KEY (`room_feature_id`);

--
-- Indexes for table `tour_photo`
--
ALTER TABLE `tour_photo`
  ADD PRIMARY KEY (`room_photo_id`);

--
-- Indexes for table `tour_tour_feature`
--
ALTER TABLE `tour_tour_feature`
  ADD PRIMARY KEY (`room_room_feature_id`);

--
-- Indexes for table `tour_type`
--
ALTER TABLE `tour_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_tour`
--
ALTER TABLE `category_tour`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment_tour`
--
ALTER TABLE `comment_tour`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `et_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feature_language`
--
ALTER TABLE `feature_language`
  MODIFY `fl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `feature_old`
--
ALTER TABLE `feature_old`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `feature_tour`
--
ALTER TABLE `feature_tour`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feature_tour_language`
--
ALTER TABLE `feature_tour_language`
  MODIFY `fl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feature_tour_old`
--
ALTER TABLE `feature_tour_old`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `language_tour`
--
ALTER TABLE `language_tour`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `payment_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment_tour`
--
ALTER TABLE `payment_tour`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_tour_detail`
--
ALTER TABLE `payment_tour_detail`
  MODIFY `payment_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `photo_category`
--
ALTER TABLE `photo_category`
  MODIFY `photo_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photo_tour`
--
ALTER TABLE `photo_tour`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `photo_tour_category`
--
ALTER TABLE `photo_tour_category`
  MODIFY `photo_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `post_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `post_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_tour`
--
ALTER TABLE `post_tour`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post_tour_category`
--
ALTER TABLE `post_tour_category`
  MODIFY `post_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `post_tour_tag`
--
ALTER TABLE `post_tour_tag`
  MODIFY `post_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reply_tour`
--
ALTER TABLE `reply_tour`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_access`
--
ALTER TABLE `role_access`
  MODIFY `role_access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_feature`
--
ALTER TABLE `room_feature`
  MODIFY `room_feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_photo`
--
ALTER TABLE `room_photo`
  MODIFY `room_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `room_room_feature`
--
ALTER TABLE `room_room_feature`
  MODIFY `room_room_feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_tour`
--
ALTER TABLE `service_tour`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider_home`
--
ALTER TABLE `slider_home`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider_tour`
--
ALTER TABLE `slider_tour`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonial_tour`
--
ALTER TABLE `testimonial_tour`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tour_feature`
--
ALTER TABLE `tour_feature`
  MODIFY `room_feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tour_photo`
--
ALTER TABLE `tour_photo`
  MODIFY `room_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_tour_feature`
--
ALTER TABLE `tour_tour_feature`
  MODIFY `room_room_feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tour_type`
--
ALTER TABLE `tour_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
