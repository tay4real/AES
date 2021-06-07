-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 01:47 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(2, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5b1920d546a15', '5b1920d54f461'),
('5b1920d58f243', '5b1920d599485'),
('5b1920d5be51d', '5b1920d7a02d6'),
('5b1920d83e49a', '5b1920d845c9a'),
('5b1920d8692e2', '5b1920d8753a4'),
('5b1920d8bedd9', '5b1920d8c81d4'),
('5b1920d904d3d', '5b1920d90b0f1'),
('5b1920d92d8a2', '5b1920d933bf9'),
('5b1920d956414', '5b1920d95c726'),
('5b1920d97ef04', '5b1920d985277'),
('5b1920d9bb9f3', '5b1920d9c2c03'),
('5b1920d9e9b97', '5b1920d9f0e16'),
('5b1920da1e48e', '5b1920da257f1'),
('5b1920da63d40', '5b1920da6a1c2'),
('5b1920da979c6', '5b1920daa0633'),
('5b1920dac2ca3', '5b1920dad5cee'),
('5b1920db12769', '5b1920db1891c'),
('5b1920db3b27c', '5b1920db41478'),
('5b1920db63d72', '5b1920db69fb3'),
('5b1920db8c8ec', '5b1920db92b3d'),
('5b193301bddee', '5b193301d885d'),
('5b19330211f3a', '5b1933021f81e'),
('5b19330243943', '5b1933024ae89'),
('5b19330294f7a', '5b1933029c42e'),
('5b193302e58d1', '5b193302f0ec6'),
('5b1933033282e', '5b193303387f0'),
('5b1933036c0f0', '5b19330374199'),
('5b1933039cffb', '5b193303a477b'),
('5b193303c5ba4', '5b193303cd311'),
('5b193304025d2', '5b1933040fbcd'),
('5b19330432939', '5b193304387c3'),
('5b1933046163f', '5b19330468bb1'),
('5b1933048cbfa', '5b19330494450'),
('5b193304bd988', '5b193304c5051'),
('5b1933050714a', '5b1933050d154'),
('5b19330538657', '5b19330540209'),
('5b193305611c8', '5b19330568bd7'),
('5b19330591710', '5b193305978f0'),
('5b193305bd652', '5b193305c51e0'),
('5b193305ee36b', '5b19330601b72'),
('5b1e71f8ed653', '5b1e71f939685'),
('5b212203c0c80', '5b212203cc13b'),
('5b212203f41e9', '5b212204089c8'),
('5d53cd0d4c817', '5d53cd0dc4d73'),
('5d53cd0e711d8', '5d53cd0e792ca'),
('5d53cd0ed1d7a', '5d53cd0ee56b1'),
('5d53cd1197c35', '5d53cd12e6cb7'),
('5d53cd143e6d7', '5d53cd1449542'),
('5d53cd14c74a2', '5d53cd1516508'),
('5d53cd195016e', '5d53cd1a01398'),
('5d53cd1a63411', '5d53cd1a81f8c'),
('5d53cd1adc2f9', '5d53cd1b054eb'),
('5d53cd1c10b25', '5d53cd1c4d04f'),
('5d53cdee56c82', '5d53cdee969df'),
('5d53cdef33005', '5d53cdef38ef0'),
('5d53cdef94789', '5d53cdefb13ec'),
('5d53cdf0e7f07', '5d53cdf11c49d'),
('5d53cdf14e983', '5d53cdf157698'),
('5d53cdf1f2973', '5d53cdf20c8e4'),
('5d53cdf28c3ac', '5d53cdf29819f'),
('5d53cdf31875a', '5d53cdf331bd0'),
('5d53cdf3bd791', '5d53cdf3c390d'),
('5d53cdf42a152', '5d53cdf4301ff'),
('5d53cdf98a785', '5d53cdf9cdd11'),
('5d53cdfacadac', '5d53cdfadb9cc'),
('5d53cdfb21f23', '5d53cdfb27f65'),
('5d53cdfbb3ca5', '5d53cdfc0d46c'),
('5d53cdfc83b24', '5d53cdfc9931e'),
('5d53cdfce10c0', '5d53cdfce71e5'),
('5d53cdfd42e29', '5d53cdfd48f60'),
('5d53cdfdb71fb', '5d53cdfdd483c'),
('5d53cdfe164c5', '5d53cdfe1af90'),
('5d53cdfe368d8', '5d53cdfe3b343'),
('5d53ce02d9c54', '5d53ce031a195'),
('5d53ce03ce27a', '5d53ce03e4349'),
('5d53ce045aedf', '5d53ce0460e5f'),
('5d53ce048dfdc', '5d53ce0493f67'),
('5d53ce05512cb', '5d53ce0572d2a'),
('5d53ce0664255', '5d53ce066d467'),
('5d53ce06996ec', '5d53ce06dfef9'),
('5d53ce073e71c', '5d53ce074479e'),
('5d53ce0797192', '5d53ce079d239'),
('5d53ce08751c9', '5d53ce088a01f'),
('5d53ce15372c6', '5d53ce155c94a'),
('5d53ce15d85dc', '5d53ce15e3ac8'),
('5d53ce1632285', '5d53ce164ecfc'),
('5d53ce16bddda', '5d53ce17358f7'),
('5d53ce17d4539', '5d53ce17ef35f'),
('5d53ce183d027', '5d53ce1845114'),
('5d53ce18c60d3', '5d53ce19031ef'),
('5d53ce19604bd', '5d53ce1966239'),
('5d53ce1980850', '5d53ce198662c'),
('5d53ce19a0c67', '5d53ce19a6a51'),
('5d53ce1ec27b1', '5d53ce1ee62d7'),
('5d53ce1f8602a', '5d53ce1f9af72'),
('5d53ce1fc67b0', '5d53ce1fdf0f7'),
('5d53ce210dcc8', '5d53ce2158e17'),
('5d53ce21b9c18', '5d53ce21c1479'),
('5d53ce22629ff', '5d53ce2281f2e'),
('5d53ce233daf1', '5d53ce23a46cd'),
('5d53ce23d52cf', '5d53ce23da295'),
('5d53ce247d117', '5d53ce249ca82'),
('5d53ce252c68a', '5d53ce254f97c'),
('5d53ce4f6a728', '5d53ce4f91f09'),
('5d53ce503722f', '5d53ce50547f0'),
('5d53ce50dd81d', '5d53ce51173a2'),
('5d53ce51ee2ca', '5d53ce51f30a5'),
('5d53ce521a4c6', '5d53ce5231f1d'),
('5d53ce52b2eac', '5d53ce52c8f14'),
('5d53ce5380907', '5d53ce53a8888'),
('5d53ce53c3eef', '5d53ce53d8dfb'),
('5d53ce54673e1', '5d53ce5486836'),
('5d53ce54dc827', '5d53ce54e14be'),
('5d53ce5de8d1d', '5d53ce5e41f0b'),
('5d53ce5eba599', '5d53ce5ed0580'),
('5d53ce5eeab39', '5d53ce5ef096d'),
('5d53ce5f51ec9', '5d53ce5fe051d'),
('5d53ce6089dbe', '5d53ce60db926'),
('5d53ce62152fc', '5d53ce621b0b8'),
('5d53ce62a8ab9', '5d53ce62dc51d'),
('5d53ce6353d84', '5d53ce6368d37'),
('5d53ce639f16e', '5d53ce63b40cc'),
('5d53ce640e5ac', '5d53ce642600b'),
('5d53ce9286b89', '5d53ce92aa956'),
('5d53ce9361ee7', '5d53ce9367c65'),
('5d53ce9435173', '5d53ce944a1b1'),
('5d53ce94c511f', '5d53ce94d0eea'),
('5d53ce951a999', '5d53ce954263f'),
('5d53ce9583626', '5d53ce95a31e6'),
('5d53ce961da9e', '5d53ce962280c'),
('5d53ce963de67', '5d53ce9642bba'),
('5d53ce96604c6', '5d53ce9699194'),
('5d53ce975089a', '5d53ce9768b7d'),
('5d53cf48a5145', '5d53cf48f3029'),
('5d53cf4987b27', '5d53cf498d41d'),
('5d53cf49af615', '5d53cf49baf11'),
('5d53cf4a6cf22', '5d53cf4a8815f'),
('5d53cf4b2fc96', '5d53cf4b35587'),
('5d53cf4b8b2bb', '5d53cf4b90b38'),
('5d53cf4c37ead', '5d53cf4c3dcb7'),
('5d53cf4c7dc6c', '5d53cf4c83a45'),
('5d53cf4c9e08a', '5d53cf4ca3e51'),
('5d53cf4cbe3f0', '5d53cf4cc428b'),
('5d53cf5af193f', '5d53cf5b10e3b'),
('5d53cf5b3dc0f', '5d53cf5b49528'),
('5d53cf5b9bd10', '5d53cf5bb77b8'),
('5d53cf5c5761d', '5d53cf5ce2ebb'),
('5d53cf5d0992a', '5d53cf5d59ff9'),
('5d53cf5dad07c', '5d53cf5db514e'),
('5d53cf5fd387b', '5d53cf5fd915b'),
('5d53cf600717d', '5d53cf6012a3e'),
('5d53cf60a91ed', '5d53cf60bb1b0'),
('5d53cf615f21c', '5d53cf61893c7'),
('5d53cf9faa0b6', '5d53cf9fdcf2a'),
('5d53cfa11423a', '5d53cfa12c7fc'),
('5d53cfa199e5f', '5d53cfa1a5362'),
('5d53cfa1e081c', '5d53cfa1ed236'),
('5d53cfa2700b0', '5d53cfa2820da'),
('5d53cfa347ebf', '5d53cfa34d7a1'),
('5d53cfa37848f', '5d53cfa39d8f5'),
('5d53cfa4100c8', '5d53cfa422346'),
('5d53cfa468bad', '5d53cfa48872c'),
('5d53cfa4b6ac3', '5d53cfa4bbde0'),
('5d53d1a95c7e7', '5d53d1a9acb10'),
('5d53d1aa33f8e', '5d53d1aa49a94'),
('5d53d1ab9dfda', '5d53d1ac0c93f'),
('5d53d1acb050f', '5d53d1accaf9a'),
('5d53d1ad42b0c', '5d53d1ad6011e'),
('5d53d1ae4b1d5', '5d53d1ae5d3ea'),
('5d53d1aeef06c', '5d53d1af0d87b'),
('5d53d1af32f29', '5d53d1af38b29'),
('5d53d1b1a4c04', '5d53d1b1d920b'),
('5d53d1b20e65e', '5d53d1b22608e'),
('5d53d1dd08900', '5d53d1dd66c12'),
('5d53d1dec4f80', '5d53d1decd3d1'),
('5d53d1dfb378e', '5d53d1dfbfd81'),
('5d53d1e162b8f', '5d53d1e29f8b0'),
('5d53d1e3826c6', '5d53d1e3ade85'),
('5d53d1e491528', '5d53d1e4a6fe3'),
('5d53d1e59133f', '5d53d1e5b4814'),
('5d53d1e62c2ae', '5d53d1e634853'),
('5d53d1e69f868', '5d53d1e6b5307'),
('5d53d1e824d70', '5d53d1e878dad'),
('5d53d30d5e5bf', '5d53d30d9bdf7'),
('5d53d30e03435', '5d53d30e2386b'),
('5d53d30e840f4', '5d53d30f03431'),
('5d53d3109ff04', '5d53d310b8365'),
('5d53d311468c6', '5d53d3115c0cd'),
('5d53d311cdb36', '5d53d311dfb71'),
('5d53d312a8439', '5d53d312add1d'),
('5d53d31341b38', '5d53d3137a7e6'),
('5d53d313e907f', '5d53d313eeb20'),
('5d53d31463589', '5d53d314688b8'),
('5d53d350bdcd9', '5d53d3538fdcd'),
('5d53d354b7fb4', '5d53d354c11a2'),
('5d53d3562c63e', '5d53d35779d75'),
('5d53d35ae7fff', '5d53d35b1f899'),
('5d53d35b574d9', '5d53d35b5c84c'),
('5d53d35b83656', '5d53d35b8a2dd'),
('5d53d35c072f3', '5d53d35c32536'),
('5d53d35d1aaf6', '5d53d35d693fa'),
('5d53d35e32798', '5d53d35e5372b'),
('5d53d363a3724', '5d53d364377f2'),
('5d53d42f85c68', '5d53d42fc377c'),
('5d53d430606ee', '5d53d43068a9e'),
('5d53d430b6a21', '5d53d430beea8'),
('5d53d4313e103', '5d53d43156a7e'),
('5d53d431af654', '5d53d43216cd5'),
('5d53d43299c8e', '5d53d432b47ff'),
('5d53d432e5eb6', '5d53d433056a9'),
('5d53d4333b9b6', '5d53d4334c742'),
('5d53d433ea9d0', '5d53d434203f6'),
('5d53d434b28d6', '5d53d434bbdba'),
('5d53d435eb3a1', '5d53d4362fb68'),
('5d53d436a88b3', '5d53d436adc57'),
('5d53edd094bf1', '5d53edd0cd75a'),
('5d53edd2d9c11', '5d53edd2e5250'),
('5d53edd31a560', '5d53edd32356c'),
('5d53edd36cd25', '5d53edd37b661'),
('5d53edd406e54', '5d53edd432e69'),
('5d53edd5ccc7c', '5d53edd5d9f3f'),
('5d53edd641158', '5d53edd65e813'),
('5d53edd6df9e0', '5d53edd72a247'),
('5d53edd7a7e09', '5d53edd7affe2'),
('5d53edd80ec81', '5d53edd826f2f'),
('5d53edd8a8d4f', '5d53edd8b0047'),
('5d53edd8d0185', '5d53edd8d5a5a'),
('5d53f2bdec844', '5d53f2be56ad0'),
('5d53f2bea540d', '5d53f2bebd463'),
('5d53f2bfa010b', '5d53f2bfb59f7');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `school_code` varchar(50) NOT NULL,
  `classes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `school_code`, `classes`) VALUES
(32, '38', 'JSS 1;JSS 2;JSS 3;SSS 1;SSS 2;SSS 3'),
(33, '39', 'JSS 1;JSS 2;JSS 3;SSS 1;SSS 2;SSS 3');

-- --------------------------------------------------------

--
-- Table structure for table `class_ids`
--

CREATE TABLE `class_ids` (
  `id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_ids`
--

INSERT INTO `class_ids` (`id`, `class`) VALUES
(1, 'JSS 1'),
(2, 'JSS 2'),
(3, 'JSS 3'),
(4, 'SSS 1'),
(5, 'SSS 2'),
(6, 'SSS 3');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `right` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`eid`, `title`, `right`, `wrong`, `total`, `time`, `intro`, `date`) VALUES
('5b1914a76c355', 'Basic Science', 1, 1, 20, 10, 'third term promotion examination 2017/2018 session', '2018-06-07 11:19:03'),
('5b1923ec3a497', 'Crk', 1, 1, 20, 10, 'third term promotion examination 2017/2018', '2018-06-07 12:24:12'),
('5b1e71e070fe8', 'Self', 1, 1, 1, 2, 'self', '2018-06-11 12:58:08'),
('', 'Phy', 1, 1, 2, 2, 'physics', '2018-06-13 13:53:37'),
('5d4c18791f720', '', 0, 0, 0, 0, '', '2019-08-08 12:41:29'),
('5d4c189a35a98', 'Bio 101', 1, 1, 2, 2, 'Answer all', '2019-08-08 12:42:02'),
('5d4c1e0e60536', '', 1, 1, 2, 2, 'All', '2019-08-08 13:05:18'),
('5d4c1e9f12912', '', 1, 1, 5, 5, 'Answer All Questions', '2019-08-08 13:07:43'),
('5d4c1f5de32f6', 'Int', 1, 1, 5, 5, 'Question 5 and 6 are compulsory.', '2019-08-08 13:10:53'),
('5d4c2063c0e22', 'Geo', 1, 1, 3, 2, 'All', '2019-08-08 13:15:15'),
('5d4c22abef646', 'Csc102', 1, 1, 10, 1, 'Answer ALL', '2019-08-08 13:24:59'),
('5d4c2948e5cf4', 'Biom102', 2, 2, 5, 5, 'All', '2019-08-08 13:53:12'),
('5d4c2f58e6cc7', '', 0, 0, 0, 0, '', '2019-08-08 14:19:04'),
('5d4c30cc38308', 'Bch102', 2, 2, 5, 1, 'answer all', '2019-08-08 14:25:16'),
('5d4d6041d127d', '', 0, 0, 0, 0, '', '2019-08-09 12:00:01'),
('5d4d628c107ae', '', 0, 0, 0, 0, '', '2019-08-09 12:09:48'),
('5d4d6352395fa', 'Bio101', 12, 0, 12, 60, 'Answer all Questions', '2019-08-09 12:13:06'),
('5d4d9fa9aae62', '', 0, 0, 0, 0, '', '2019-08-09 16:30:33'),
('5d505509dfe03', '', 0, 0, 0, 0, '', '2019-08-11 17:48:57'),
('5d5115e1680e9', '', 5, 0, 10, 10, 'Answer all Questions\r\n', '2019-08-12 07:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE `examiner` (
  `id` int(11) NOT NULL,
  `examiner_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `school_id` varchar(10) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examiner`
--

INSERT INTO `examiner` (`id`, `examiner_id`, `username`, `fullname`, `gender`, `school_id`, `mob`, `email`, `password`, `subject`) VALUES
(16, 'examiner/fggs/1', '', 'Ajayi Onike', 'F', '38', '0908787632', 'aonike@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'Integrated/Basic Science;Ibo Language');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `regno` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`regno`, `eid`, `score`, `level`, `right`, `wrong`, `date`) VALUES
('SITA/EDU/2018/1', '5b1914a76c355', 18, 20, 19, 1, '2018-06-07 12:19:52'),
('SITA/EDU/2018/10', '5b1923ec3a497', 10, 20, 15, 5, '2018-06-07 13:36:45'),
('SITA/EDU/2018/10', '5b1914a76c355', 1, 1, 1, 0, '2018-06-07 13:43:49'),
('SITA/EDU/2018/30', '5b1923ec3a497', -2, 20, 9, 11, '2018-06-07 14:33:35'),
('SITA/EDU/2018/25', '5b1923ec3a497', -4, 20, 8, 12, '2018-06-07 14:35:14'),
('SITA/EDU/2018/20', '5b1914a76c355', 14, 20, 17, 3, '2018-06-07 14:32:37'),
('SITA/EDU/2018/29', '5b1923ec3a497', -8, 20, 6, 14, '2018-06-07 14:35:17'),
('SITA/EDU/2018/20', '5b1923ec3a497', 6, 20, 13, 7, '2018-06-07 14:43:24'),
('SITA/EDU/2018/25', '5b1914a76c355', 6, 20, 13, 7, '2018-06-07 14:39:48'),
('SITA/EDU/2018/28', '5b1923ec3a497', 6, 20, 13, 7, '2018-06-07 14:45:38'),
('SITA/EDU/2018/30', '5b1914a76c355', 14, 20, 17, 3, '2018-06-07 14:43:14'),
('SITA/EDU/2018/115', '5b1e71e070fe8', 1, 1, 1, 0, '2018-06-11 13:02:56'),
('SITA/EDU/2018/1', '5b1e71e070fe8', 1, 1, 1, 1, '2018-06-11 15:08:49'),
('SITA/EDU/2018/1', '5b1e71e070fe8', 1, 1, 1, 0, '2018-06-11 15:08:49'),
('SITA/EDU/2018/25', '5b1e71e070fe8', 1, 1, 1, 0, '2018-06-13 09:01:59'),
('SITA/EDU/2018/9', '5b1e71e070fe8', -1, 1, 0, 1, '2018-06-13 09:07:27'),
('SITA/EDU/2018/30', '5b1e71e070fe8', 1, 1, 1, 0, '2018-06-13 09:09:20'),
('SITA/EDU/2018/29', '5b1e71e070fe8', -1, 1, 0, 1, '2018-06-13 09:19:18'),
('SITA/EDU/2018/1', '', 0, 2, 1, 1, '2018-06-13 13:58:38'),
('SITA/EDU/2018/20', '5b1e71e070fe8', 1, 1, 1, 0, '2018-06-13 14:00:46'),
('SITA/EDU/2018/20', '', 2, 2, 2, 0, '2018-06-13 14:09:17'),
('SITA/EDU/2018/30', '', 0, 2, 1, 1, '2018-06-13 14:10:48'),
('SITA/EDU/2018/29', '', 0, 2, 1, 1, '2018-06-13 14:12:27'),
('SITA/EDU/2018/29', '5b1914a76c355', -8, 20, 6, 14, '2018-06-13 14:20:42'),
('SITA/EDU/2018/28', '5b1914a76c355', -20, 20, 0, 20, '2019-07-26 11:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `obj_exam`
--

CREATE TABLE `obj_exam` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(500) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `mark_right` varchar(100) NOT NULL,
  `mark_wrong` varchar(100) NOT NULL,
  `no_of_questions` varchar(100) NOT NULL,
  `exam_time` varchar(100) NOT NULL,
  `exam_instructions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obj_exam`
--

INSERT INTO `obj_exam` (`id`, `exam_id`, `school_id`, `class_id`, `subject_id`, `mark_right`, `mark_wrong`, `no_of_questions`, `exam_time`, `exam_instructions`) VALUES
(2, '36846d4eb64dcb07c86c6e8f9ecdb148', '38', '1', 'Mathematics', '2', '', '10', '10', 'Answer all questions'),
(3, '7287383167304d41be42d4286076a46b', '38', '1', 'Yoruba Language', '2', '', '5', '5', 'Answer all questions'),
(4, 'de3f51f56b1437a3ce19123dfa79ca6e', '38', '1', 'Home Economics', '2', '', '4', '4', 'Answer all'),
(5, '687aa6c705f9ad4e5eefd829a084c2fb', '38', '1', 'French Language', '33', '', '34', '33', 'As'),
(6, '5fcce114927f80b62fa444b8805173c6', '38', '1', 'Computer Studies', '23', '', '23', '2', 'Answer all'),
(7, 'bb98af3e92c2640165c9c9c295c95bdd', '38', '1', 'Hausa Language', '23', '', '20', '23', 'Answer all'),
(8, '480d211ed8855cc5cd96d537d975ae5e', '39', '1', 'Computer Studies', '12', '', '10', '10', 'Answer all Questions'),
(9, '8aa6164ec8d7e2b8039e261ea99eeaea', '39', '1', 'Social Studies', '10', '', '10', '10', 'Answer all questions'),
(10, '76508030f227ced2d669dc055d7394af', '39', '1', 'Introductory/Basic Technology', '12', '', '12', '12', 'Answer all'),
(11, 'bd68c60c2ec5bcaeefd956921e036783', '39', '1', 'Ibo Language', '12', '', '111', '11', 'ASS'),
(12, 'f47a433db6a11e615d01f3132a796c40', '39', '1', 'Chemistry', '1', '', '3', '12', 'Answe'),
(13, 'f36907bed70e3f756c737c472dff460b', '39', '1', 'Home Economics', '1', '', '5', '12', 'Addd'),
(14, 'ca82c6cdfd501d5947907b792a410e3d', '39', '1', 'Integrated/Basic Science', '12', '', '3', '3', 'Ans'),
(15, '2377264b33585416e69186b858f38033', '39', '1', 'Christian Religious Studies/Islamic Religious Studies', '1', '', '12', '12', 'asas'),
(16, '6ce748cc3b7adc577fa49aa8d40e1fdf', '39', '1', 'English Language', '12', '', '3', '23', 'adg');

-- --------------------------------------------------------

--
-- Table structure for table `obj_exam_audit`
--

CREATE TABLE `obj_exam_audit` (
  `id` int(11) NOT NULL,
  `examiner_id` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `action_performed` varchar(100) NOT NULL,
  `date_performed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obj_exam_audit`
--

INSERT INTO `obj_exam_audit` (`id`, `examiner_id`, `exam_id`, `subject_id`, `action_performed`, `date_performed`) VALUES
(2, 'admin', '36846d4eb64dcb07c86c6e8f9ecdb148', 'Mathematics', 'Set Exam', '2019-08-13 18:02:40'),
(3, 'admin', '7287383167304d41be42d4286076a46b', 'Yoruba Language', 'Set Exam', '2019-08-13 19:53:38'),
(4, 'admin', 'de3f51f56b1437a3ce19123dfa79ca6e', 'Home Economics', 'Set Exam', '2019-08-13 20:12:00'),
(5, 'admin', '687aa6c705f9ad4e5eefd829a084c2fb', 'French Language', 'Set Exam', '2019-08-13 21:50:28'),
(6, 'admin', '5fcce114927f80b62fa444b8805173c6', 'Computer Studies', 'Set Exam', '2019-08-13 22:07:05'),
(7, 'admin', 'bb98af3e92c2640165c9c9c295c95bdd', 'Hausa Language', 'Set Exam', '2019-08-14 09:09:09'),
(8, 'admin', '480d211ed8855cc5cd96d537d975ae5e', 'Computer Studies', 'Set Exam', '2019-08-14 09:23:08'),
(9, 'admin', '8aa6164ec8d7e2b8039e261ea99eeaea', 'Social Studies', 'Set Exam', '2019-08-14 10:04:12'),
(10, 'admin', '76508030f227ced2d669dc055d7394af', 'Introductory/Basic Technology', 'Set Exam', '2019-08-14 10:26:53'),
(11, 'admin', 'bd68c60c2ec5bcaeefd956921e036783', 'Ibo Language', 'Set Exam', '2019-08-14 11:08:16'),
(12, 'admin', 'f47a433db6a11e615d01f3132a796c40', 'Chemistry', 'Set Exam', '2019-08-14 11:15:05'),
(13, 'admin', 'f36907bed70e3f756c737c472dff460b', 'Home Economics', 'Set Exam', '2019-08-14 11:29:21'),
(14, 'admin', 'ca82c6cdfd501d5947907b792a410e3d', 'Integrated/Basic Science', 'Set Exam', '2019-08-14 11:42:54'),
(15, 'admin', '2377264b33585416e69186b858f38033', 'Christian Religious Studies/Islamic Religious Studies', 'Set Exam', '2019-08-14 11:50:18'),
(16, 'admin', '6ce748cc3b7adc577fa49aa8d40e1fdf', 'English Language', 'Set Exam', '2019-08-14 12:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5b1920d546a15', 'tasting', '5b1920d54f461'),
('5b1920d546a15', 'observing', '5b1920d54f46a'),
('5b1920d546a15', 'experimenting', '5b1920d54f46e'),
('5b1920d546a15', 'recording', '5b1920d54f472'),
('5b1920d58f243', 'cleanliness', '5b1920d59945c'),
('5b1920d58f243', 'exercise', '5b1920d599470'),
('5b1920d58f243', 'rest', '5b1920d59947b'),
('5b1920d58f243', 'education', '5b1920d599485'),
('5b1920d5be51d', 'insensitivity', '5b1920d7a02d6'),
('5b1920d5be51d', 'nutrition', '5b1920d7a02e1'),
('5b1920d5be51d', 'movement', '5b1920d7a02e6'),
('5b1920d5be51d', 'respiration', '5b1920d7a02e9'),
('5b1920d83e49a', 'moon', '5b1920d845c9a'),
('5b1920d83e49a', 'mercury', '5b1920d845ca5'),
('5b1920d83e49a', 'uranus', '5b1920d845ca8'),
('5b1920d83e49a', 'pluto', '5b1920d845cac'),
('5b1920d8692e2', 'solid, liquid and air', '5b1920d875392'),
('5b1920d8692e2', 'liquid, solid and water', '5b1920d87539c'),
('5b1920d8692e2', 'wood, water and petrol', '5b1920d8753a0'),
('5b1920d8692e2', 'gas, liquid and solid', '5b1920d8753a4'),
('5b1920d8bedd9', 'bats', '5b1920d8c81c9'),
('5b1920d8bedd9', 'fishes', '5b1920d8c81d4'),
('5b1920d8bedd9', 'crabs', '5b1920d8c81d8'),
('5b1920d8bedd9', 'crocodiles', '5b1920d8c81db'),
('5b1920d904d3d', 'ear', '5b1920d90b0e0'),
('5b1920d904d3d', 'eye', '5b1920d90b0ea'),
('5b1920d904d3d', 'skin', '5b1920d90b0ed'),
('5b1920d904d3d', 'leg', '5b1920d90b0f1'),
('5b1920d92d8a2', 'horn ', '5b1920d933bf0'),
('5b1920d92d8a2', 'basket', '5b1920d933bf9'),
('5b1920d92d8a2', 'leather', '5b1920d933bfc'),
('5b1920d92d8a2', 'hides and skin', '5b1920d933c00'),
('5b1920d956414', 'kinectic', '5b1920d95c726'),
('5b1920d956414', 'thermal', '5b1920d95c72e'),
('5b1920d956414', 'mechanical', '5b1920d95c732'),
('5b1920d956414', 'chemical', '5b1920d95c735'),
('5b1920d97ef04', 'heat', '5b1920d98526c'),
('5b1920d97ef04', 'voltage', '5b1920d985277'),
('5b1920d97ef04', 'resistance', '5b1920d98527c'),
('5b1920d97ef04', 'current', '5b1920d985280'),
('5b1920d9bb9f3', 'cars', '5b1920d9c2bf1'),
('5b1920d9bb9f3', 'electric wires', '5b1920d9c2bfb'),
('5b1920d9bb9f3', 'cooking pot', '5b1920d9c2bff'),
('5b1920d9bb9f3', 'insulators', '5b1920d9c2c03'),
('5b1920d9e9b97', 'mosquito', '5b1920d9f0e0c'),
('5b1920d9e9b97', 'snail', '5b1920d9f0e16'),
('5b1920d9e9b97', 'tsetse fly ', '5b1920d9f0e1a'),
('5b1920d9e9b97', 'blackfly', '5b1920d9f0e1d'),
('5b1920da1e48e', 'wheelbarrow', '5b1920da257a5'),
('5b1920da1e48e', 'tractor', '5b1920da257e0'),
('5b1920da1e48e', 'bicycle', '5b1920da257ed'),
('5b1920da1e48e', 'machine', '5b1920da257f1'),
('5b1920da63d40', 'carbohdrate', '5b1920da6a1b1'),
('5b1920da63d40', 'protein', '5b1920da6a1be'),
('5b1920da63d40', 'renin', '5b1920da6a1c2'),
('5b1920da63d40', 'fat and oil', '5b1920da6a1c5'),
('5b1920da979c6', 'reptiles ', '5b1920daa0629'),
('5b1920da979c6', 'mammals', '5b1920daa0633'),
('5b1920da979c6', 'insect', '5b1920daa0637'),
('5b1920da979c6', 'birds', '5b1920daa063a'),
('5b1920dac2ca3', 'chloroplast', '5b1920dad5cee'),
('5b1920dac2ca3', 'nucleus', '5b1920dad5cf9'),
('5b1920dac2ca3', 'chromosomes', '5b1920dad5cfc'),
('5b1920dac2ca3', 'cytoplasm', '5b1920dad5d00'),
('5b1920db12769', 'ears', '5b1920db1890b'),
('5b1920db12769', 'tongue', '5b1920db18915'),
('5b1920db12769', 'eyes', '5b1920db18919'),
('5b1920db12769', 'nose', '5b1920db1891c'),
('5b1920db3b27c', 'air', '5b1920db4146b'),
('5b1920db3b27c', 'water', '5b1920db41474'),
('5b1920db3b27c', 'sun', '5b1920db41478'),
('5b1920db3b27c', 'protein', '5b1920db4147b'),
('5b1920db63d72', 'burning', '5b1920db69fa9'),
('5b1920db63d72', 'fire', '5b1920db69fb3'),
('5b1920db63d72', 'charcoal', '5b1920db69fb6'),
('5b1920db63d72', 'wood', '5b1920db69fb9'),
('5b1920db8c8ec', 'kilogram', '5b1920db92b2b'),
('5b1920db8c8ec', 'meter', '5b1920db92b36'),
('5b1920db8c8ec', 'joule', '5b1920db92b39'),
('5b1920db8c8ec', 'newton', '5b1920db92b3d'),
('5b193301bddee', 'heaven', '5b193301d8846'),
('5b193301bddee', 'ocean', '5b193301d8852'),
('5b193301bddee', 'sand', '5b193301d8858'),
('5b193301bddee', 'nothing', '5b193301d885d'),
('5b19330211f3a', 'was author of woes', '5b1933021f7ff'),
('5b19330211f3a', 'caused the of man', '5b1933021f813'),
('5b19330211f3a', 'was taken out of man', '5b1933021f81e'),
('5b19330211f3a', 'was a weaker vessel', '5b1933021f827'),
('5b19330243943', 'origin', '5b1933024ae89'),
('5b19330243943', 'myths', '5b1933024ae9d'),
('5b19330243943', 'sociology', '5b1933024aea7'),
('5b19330243943', 'antiquity', '5b1933024aeb0'),
('5b19330294f7a', 'ezekiel', '5b1933029c425'),
('5b19330294f7a', 'zacharia', '5b1933029c42e'),
('5b19330294f7a', 'jeremiah', '5b1933029c432'),
('5b19330294f7a', 'amos', '5b1933029c436'),
('5b193302e58d1', 'he was fervent in prayers', '5b193302f0eb1'),
('5b193302e58d1', 'he obeyed God', '5b193302f0ec6'),
('5b193302e58d1', 'he was constantly holy before God ', '5b193302f0ed1'),
('5b193302e58d1', 'he was always  very generous to people', '5b193302f0eda'),
('5b1933033282e', '99', '5b193303387d5'),
('5b1933033282e', '75', '5b193303387f0'),
('5b1933033282e', '100', '5b193303387fb'),
('5b1933033282e', '89', '5b19330338804'),
('5b1933036c0f0', 'seal', '5b19330374183'),
('5b1933036c0f0', 'covenant', '5b19330374199'),
('5b1933036c0f0', 'grace', '5b193303741a4'),
('5b1933036c0f0', 'treaty', '5b193303741ae'),
('5b1933039cffb', 'a political power', '5b193303a475e'),
('5b1933039cffb', 'a subject race', '5b193303a4771'),
('5b1933039cffb', 'chosen race', '5b193303a477b'),
('5b1933039cffb', 'black race', '5b193303a4784'),
('5b193303c5ba4', 'the chief baker', '5b193303cd2b8'),
('5b193303c5ba4', 'pharaoh', '5b193303cd2cd'),
('5b193303c5ba4', 'potiphar', '5b193303cd306'),
('5b193303c5ba4', 'the butler', '5b193303cd311'),
('5b193304025d2', 'forty', '5b1933040fbb3'),
('5b193304025d2', 'fifty', '5b1933040fbc0'),
('5b193304025d2', 'twenty-five', '5b1933040fbc8'),
('5b193304025d2', 'twenty', '5b1933040fbcd'),
('5b19330432939', 'giboa', '5b1933043879c'),
('5b19330432939', 'nebo', '5b193304387b0'),
('5b19330432939', 'camel', '5b193304387ba'),
('5b19330432939', 'horeb', '5b193304387c3'),
('5b1933046163f', 'debora', '5b19330468ba8'),
('5b1933046163f', 'lappidoth', '5b19330468bb1'),
('5b1933046163f', 'sisera', '5b19330468bb5'),
('5b1933046163f', 'all of the above', '5b19330468bb9'),
('5b1933048cbfa', 'the Egyptians shall fight the Israelite', '5b19330494428'),
('5b1933048cbfa', 'Israel shall defeat the Egyptians', '5b19330494446'),
('5b1933048cbfa', 'the glory of the Lord shall be made manifest by His defeat of the Egyptians', '5b19330494450'),
('5b1933048cbfa', 'Pharaoh and all his host shall glorify the Lord', '5b19330494459'),
('5b193304bd988', 'demand for a raw meat to roast rather than boiled ones', '5b193304c5033'),
('5b193304bd988', 'demanded for a larger part of the burnt offering', '5b193304c5047'),
('5b193304bd988', 'concealed the peopleâ€™s offering from God', '5b193304c5051'),
('5b193304bd988', 'old the people offering at the open market to make money', '5b193304c505a'),
('5b1933050714a', 'institution of the monarchy in Israel', '5b1933050d14a'),
('5b1933050714a', 'collapse of Eli priestly lineage', '5b1933050d154'),
('5b1933050714a', 'decisive defeat of Israel by the Philistines', '5b1933050d158'),
('5b1933050714a', 'death of Hopni and Phinehas', '5b1933050d15b'),
('5b19330538657', 'sacrifices are acceptable only if they come from a man who obey God', '5b193305401fc'),
('5b19330538657', 'he should do what he was told ', '5b19330540209'),
('5b19330538657', 'to disobey God ', '5b1933054020e'),
('5b19330538657', 'do it by his own understanding', '5b19330540212'),
('5b193305611c8', 'there was no other competent player ', '5b19330568bc7'),
('5b193305611c8', ' David was a specialist in music', '5b19330568bd2'),
('5b193305611c8', 'music was believed to relieve insanity', '5b19330568bd7'),
('5b193305611c8', 'Saul wanted to team', '5b19330568bdb'),
('5b19330591710', 'adultery ', '5b193305978db'),
('5b19330591710', 'idolatry', '5b193305978f0'),
('5b19330591710', 'wickedness', '5b193305978fa'),
('5b19330591710', 'ethnicty', '5b19330597904'),
('5b193305bd652', 'jehohachim', '5b193305c5189'),
('5b193305bd652', 'ahaz', '5b193305c51d6'),
('5b193305bd652', 'solomon', '5b193305c51e0'),
('5b193305bd652', 'rehoboam', '5b193305c51ea'),
('5b193305ee36b', 'amos', '5b19330601b49'),
('5b193305ee36b', 'hosea', '5b19330601b5e'),
('5b193305ee36b', 'elisha', '5b19330601b68'),
('5b193305ee36b', 'gehazi', '5b19330601b72'),
('5b1e71f8ed653', '1', '5b1e71f939685'),
('5b1e71f8ed653', '0', '5b1e71f93969d'),
('5b1e71f8ed653', '1', '5b1e71f9396ab'),
('5b1e71f8ed653', '7', '5b1e71f9396b6'),
('5b212203c0c80', '1', '5b212203cc13b'),
('5b212203c0c80', '2', '5b212203cc152'),
('5b212203c0c80', '3', '5b212203cc15e'),
('5b212203c0c80', '0', '5b212203cc169'),
('5b212203f41e9', '2', '5b2122040899b'),
('5b212203f41e9', '12', '5b212204089b1'),
('5b212203f41e9', '3', '5b212204089bd'),
('5b212203f41e9', '0', '5b212204089c8'),
('5d53cd0d4c817', '', '5d53cd0dc4d73'),
('5d53cd0d4c817', '', '5d53cd0dc4d7d'),
('5d53cd0d4c817', '', '5d53cd0dc4d7f'),
('5d53cd0d4c817', '', '5d53cd0dc4d82'),
('5d53cd0e711d8', '', '5d53cd0e792ca'),
('5d53cd0e711d8', '', '5d53cd0e792d4'),
('5d53cd0e711d8', '', '5d53cd0e792d6'),
('5d53cd0e711d8', '', '5d53cd0e792d9'),
('5d53cd0ed1d7a', '', '5d53cd0ee56b1'),
('5d53cd0ed1d7a', '', '5d53cd0ee56bd'),
('5d53cd0ed1d7a', '', '5d53cd0ee56c0'),
('5d53cd0ed1d7a', '', '5d53cd0ee56c2'),
('5d53cd1197c35', '', '5d53cd12e6cb7'),
('5d53cd1197c35', '', '5d53cd12e6cc1'),
('5d53cd1197c35', '', '5d53cd12e6cc4'),
('5d53cd1197c35', '', '5d53cd12e6cc7'),
('5d53cd143e6d7', '', '5d53cd1449542'),
('5d53cd143e6d7', '', '5d53cd1449549'),
('5d53cd143e6d7', '', '5d53cd144954b'),
('5d53cd143e6d7', '', '5d53cd144954d'),
('5d53cd14c74a2', '', '5d53cd1516508'),
('5d53cd14c74a2', '', '5d53cd1516511'),
('5d53cd14c74a2', '', '5d53cd1516515'),
('5d53cd14c74a2', '', '5d53cd1516517'),
('5d53cd195016e', '', '5d53cd1a01398'),
('5d53cd195016e', '', '5d53cd1a013a2'),
('5d53cd195016e', '', '5d53cd1a013a5'),
('5d53cd195016e', '', '5d53cd1a013a7'),
('5d53cd1a63411', '', '5d53cd1a81f8c'),
('5d53cd1a63411', '', '5d53cd1a81f95'),
('5d53cd1a63411', '', '5d53cd1a81f98'),
('5d53cd1a63411', '', '5d53cd1a81f9b'),
('5d53cd1adc2f9', '', '5d53cd1b054eb'),
('5d53cd1adc2f9', '', '5d53cd1b054f5'),
('5d53cd1adc2f9', '', '5d53cd1b054f7'),
('5d53cd1adc2f9', '', '5d53cd1b054fa'),
('5d53cd1c10b25', '', '5d53cd1c4d04f'),
('5d53cd1c10b25', '', '5d53cd1c4d058'),
('5d53cd1c10b25', '', '5d53cd1c4d05b'),
('5d53cd1c10b25', '', '5d53cd1c4d05e'),
('5d53cdee56c82', '', '5d53cdee969df'),
('5d53cdee56c82', '', '5d53cdee969ea'),
('5d53cdee56c82', '', '5d53cdee969ec'),
('5d53cdee56c82', '', '5d53cdee969ef'),
('5d53cdef33005', '', '5d53cdef38ef0'),
('5d53cdef33005', '', '5d53cdef38ef9'),
('5d53cdef33005', '', '5d53cdef38efc'),
('5d53cdef33005', '', '5d53cdef38f02'),
('5d53cdef94789', '', '5d53cdefb13ec'),
('5d53cdef94789', '', '5d53cdefb13f7'),
('5d53cdef94789', '', '5d53cdefb13fa'),
('5d53cdef94789', '', '5d53cdefb13fc'),
('5d53cdf0e7f07', '', '5d53cdf11c49d'),
('5d53cdf0e7f07', '', '5d53cdf11c4a7'),
('5d53cdf0e7f07', '', '5d53cdf11c4aa'),
('5d53cdf0e7f07', '', '5d53cdf11c4ab'),
('5d53cdf14e983', '', '5d53cdf157698'),
('5d53cdf14e983', '', '5d53cdf1576a2'),
('5d53cdf14e983', '', '5d53cdf1576a3'),
('5d53cdf14e983', '', '5d53cdf1576a5'),
('5d53cdf1f2973', '', '5d53cdf20c8e4'),
('5d53cdf1f2973', '', '5d53cdf20c8ee'),
('5d53cdf1f2973', '', '5d53cdf20c8f1'),
('5d53cdf1f2973', '', '5d53cdf20c8f4'),
('5d53cdf28c3ac', '', '5d53cdf29819f'),
('5d53cdf28c3ac', '', '5d53cdf2981a9'),
('5d53cdf28c3ac', '', '5d53cdf2981ac'),
('5d53cdf28c3ac', '', '5d53cdf2981af'),
('5d53cdf31875a', '', '5d53cdf331bd0'),
('5d53cdf31875a', '', '5d53cdf331bda'),
('5d53cdf31875a', '', '5d53cdf331bdd'),
('5d53cdf31875a', '', '5d53cdf331bdf'),
('5d53cdf3bd791', '', '5d53cdf3c390d'),
('5d53cdf3bd791', '', '5d53cdf3c3916'),
('5d53cdf3bd791', '', '5d53cdf3c3919'),
('5d53cdf3bd791', '', '5d53cdf3c391b'),
('5d53cdf42a152', '', '5d53cdf4301ff'),
('5d53cdf42a152', '', '5d53cdf430208'),
('5d53cdf42a152', '', '5d53cdf43020b'),
('5d53cdf42a152', '', '5d53cdf43020e'),
('5d53cdf98a785', '', '5d53cdf9cdd11'),
('5d53cdf98a785', '', '5d53cdf9cdd1a'),
('5d53cdf98a785', '', '5d53cdf9cdd1d'),
('5d53cdf98a785', '', '5d53cdf9cdd20'),
('5d53cdfacadac', '', '5d53cdfadb9cc'),
('5d53cdfacadac', '', '5d53cdfadb9d5'),
('5d53cdfacadac', '', '5d53cdfadb9d7'),
('5d53cdfacadac', '', '5d53cdfadb9d9'),
('5d53cdfb21f23', '', '5d53cdfb27f65'),
('5d53cdfb21f23', '', '5d53cdfb27f6f'),
('5d53cdfb21f23', '', '5d53cdfb27f72'),
('5d53cdfb21f23', '', '5d53cdfb27f74'),
('5d53cdfbb3ca5', '', '5d53cdfc0d46c'),
('5d53cdfbb3ca5', '', '5d53cdfc0d476'),
('5d53cdfbb3ca5', '', '5d53cdfc0d479'),
('5d53cdfbb3ca5', '', '5d53cdfc0d47c'),
('5d53cdfc83b24', '', '5d53cdfc9931e'),
('5d53cdfc83b24', '', '5d53cdfc99326'),
('5d53cdfc83b24', '', '5d53cdfc99328'),
('5d53cdfc83b24', '', '5d53cdfc9932a'),
('5d53cdfce10c0', '', '5d53cdfce71e5'),
('5d53cdfce10c0', '', '5d53cdfce71f0'),
('5d53cdfce10c0', '', '5d53cdfce71f2'),
('5d53cdfce10c0', '', '5d53cdfce71f3'),
('5d53cdfd42e29', '', '5d53cdfd48f60'),
('5d53cdfd42e29', '', '5d53cdfd48f6b'),
('5d53cdfd42e29', '', '5d53cdfd48f6e'),
('5d53cdfd42e29', '', '5d53cdfd48f6f'),
('5d53cdfdb71fb', '', '5d53cdfdd483c'),
('5d53cdfdb71fb', '', '5d53cdfdd4846'),
('5d53cdfdb71fb', '', '5d53cdfdd4849'),
('5d53cdfdb71fb', '', '5d53cdfdd484c'),
('5d53cdfe164c5', '', '5d53cdfe1af90'),
('5d53cdfe164c5', '', '5d53cdfe1af9a'),
('5d53cdfe164c5', '', '5d53cdfe1af9d'),
('5d53cdfe164c5', '', '5d53cdfe1afa0'),
('5d53cdfe368d8', '', '5d53cdfe3b343'),
('5d53cdfe368d8', '', '5d53cdfe3b34e'),
('5d53cdfe368d8', '', '5d53cdfe3b351'),
('5d53cdfe368d8', '', '5d53cdfe3b353'),
('5d53ce02d9c54', '', '5d53ce031a195'),
('5d53ce02d9c54', '', '5d53ce031a19e'),
('5d53ce02d9c54', '', '5d53ce031a1a1'),
('5d53ce02d9c54', '', '5d53ce031a1a4'),
('5d53ce03ce27a', '', '5d53ce03e4349'),
('5d53ce03ce27a', '', '5d53ce03e4353'),
('5d53ce03ce27a', '', '5d53ce03e4356'),
('5d53ce03ce27a', '', '5d53ce03e4358'),
('5d53ce045aedf', '', '5d53ce0460e5f'),
('5d53ce045aedf', '', '5d53ce0460e68'),
('5d53ce045aedf', '', '5d53ce0460e6b'),
('5d53ce045aedf', '', '5d53ce0460e6e'),
('5d53ce048dfdc', '', '5d53ce0493f67'),
('5d53ce048dfdc', '', '5d53ce0493f71'),
('5d53ce048dfdc', '', '5d53ce0493f74'),
('5d53ce048dfdc', '', '5d53ce0493f77'),
('5d53ce05512cb', '', '5d53ce0572d2a'),
('5d53ce05512cb', '', '5d53ce0572d32'),
('5d53ce05512cb', '', '5d53ce0572d35'),
('5d53ce05512cb', '', '5d53ce0572d37'),
('5d53ce0664255', '', '5d53ce066d467'),
('5d53ce0664255', '', '5d53ce066d471'),
('5d53ce0664255', '', '5d53ce066d473'),
('5d53ce0664255', '', '5d53ce066d476'),
('5d53ce06996ec', '', '5d53ce06dfef9'),
('5d53ce06996ec', '', '5d53ce06dff02'),
('5d53ce06996ec', '', '5d53ce06dff04'),
('5d53ce06996ec', '', '5d53ce06dff05'),
('5d53ce073e71c', '', '5d53ce074479e'),
('5d53ce073e71c', '', '5d53ce07447a7'),
('5d53ce073e71c', '', '5d53ce07447a9'),
('5d53ce073e71c', '', '5d53ce07447ab'),
('5d53ce0797192', '', '5d53ce079d239'),
('5d53ce0797192', '', '5d53ce079d244'),
('5d53ce0797192', '', '5d53ce079d246'),
('5d53ce0797192', '', '5d53ce079d248'),
('5d53ce08751c9', '', '5d53ce088a01f'),
('5d53ce08751c9', '', '5d53ce088a029'),
('5d53ce08751c9', '', '5d53ce088a02c'),
('5d53ce08751c9', '', '5d53ce088a02f'),
('5d53ce15372c6', '', '5d53ce155c94a'),
('5d53ce15372c6', '', '5d53ce155c954'),
('5d53ce15372c6', '', '5d53ce155c956'),
('5d53ce15372c6', '', '5d53ce155c959'),
('5d53ce15d85dc', '', '5d53ce15e3ac8'),
('5d53ce15d85dc', '', '5d53ce15e3ad1'),
('5d53ce15d85dc', '', '5d53ce15e3ad3'),
('5d53ce15d85dc', '', '5d53ce15e3ad4'),
('5d53ce1632285', '', '5d53ce164ecfc'),
('5d53ce1632285', '', '5d53ce164ed05'),
('5d53ce1632285', '', '5d53ce164ed08'),
('5d53ce1632285', '', '5d53ce164ed0b'),
('5d53ce16bddda', '', '5d53ce17358f7'),
('5d53ce16bddda', '', '5d53ce1735901'),
('5d53ce16bddda', '', '5d53ce1735905'),
('5d53ce16bddda', '', '5d53ce1735909'),
('5d53ce17d4539', '', '5d53ce17ef35f'),
('5d53ce17d4539', '', '5d53ce17ef36a'),
('5d53ce17d4539', '', '5d53ce17ef36b'),
('5d53ce17d4539', '', '5d53ce17ef36c'),
('5d53ce183d027', '', '5d53ce1845114'),
('5d53ce183d027', '', '5d53ce184511f'),
('5d53ce183d027', '', '5d53ce1845121'),
('5d53ce183d027', '', '5d53ce1845124'),
('5d53ce18c60d3', '', '5d53ce19031ef'),
('5d53ce18c60d3', '', '5d53ce19031fb'),
('5d53ce18c60d3', '', '5d53ce19031fd'),
('5d53ce18c60d3', '', '5d53ce19031fe'),
('5d53ce19604bd', '', '5d53ce1966239'),
('5d53ce19604bd', '', '5d53ce1966242'),
('5d53ce19604bd', '', '5d53ce1966245'),
('5d53ce19604bd', '', '5d53ce1966247'),
('5d53ce1980850', '', '5d53ce198662c'),
('5d53ce1980850', '', '5d53ce1986634'),
('5d53ce1980850', '', '5d53ce1986637'),
('5d53ce1980850', '', '5d53ce198663a'),
('5d53ce19a0c67', '', '5d53ce19a6a51'),
('5d53ce19a0c67', '', '5d53ce19a6a5c'),
('5d53ce19a0c67', '', '5d53ce19a6a5f'),
('5d53ce19a0c67', '', '5d53ce19a6a61'),
('5d53ce1ec27b1', '', '5d53ce1ee62d7'),
('5d53ce1ec27b1', '', '5d53ce1ee62e1'),
('5d53ce1ec27b1', '', '5d53ce1ee62e4'),
('5d53ce1ec27b1', '', '5d53ce1ee62e6'),
('5d53ce1f8602a', '', '5d53ce1f9af72'),
('5d53ce1f8602a', '', '5d53ce1f9af7c'),
('5d53ce1f8602a', '', '5d53ce1f9af7f'),
('5d53ce1f8602a', '', '5d53ce1f9af82'),
('5d53ce1fc67b0', '', '5d53ce1fdf0f7'),
('5d53ce1fc67b0', '', '5d53ce1fdf101'),
('5d53ce1fc67b0', '', '5d53ce1fdf104'),
('5d53ce1fc67b0', '', '5d53ce1fdf106'),
('5d53ce210dcc8', '', '5d53ce2158e17'),
('5d53ce210dcc8', '', '5d53ce2158e20'),
('5d53ce210dcc8', '', '5d53ce2158e24'),
('5d53ce210dcc8', '', '5d53ce2158e26'),
('5d53ce21b9c18', '', '5d53ce21c1479'),
('5d53ce21b9c18', '', '5d53ce21c1481'),
('5d53ce21b9c18', '', '5d53ce21c1482'),
('5d53ce21b9c18', '', '5d53ce21c1484'),
('5d53ce22629ff', '', '5d53ce2281f2e'),
('5d53ce22629ff', '', '5d53ce2281f38'),
('5d53ce22629ff', '', '5d53ce2281f3b'),
('5d53ce22629ff', '', '5d53ce2281f3d'),
('5d53ce233daf1', '', '5d53ce23a46cd'),
('5d53ce233daf1', '', '5d53ce23a46d6'),
('5d53ce233daf1', '', '5d53ce23a46d9'),
('5d53ce233daf1', '', '5d53ce23a46db'),
('5d53ce23d52cf', '', '5d53ce23da295'),
('5d53ce23d52cf', '', '5d53ce23da2a0'),
('5d53ce23d52cf', '', '5d53ce23da2a3'),
('5d53ce23d52cf', '', '5d53ce23da2a5'),
('5d53ce247d117', '', '5d53ce249ca82'),
('5d53ce247d117', '', '5d53ce249ca8d'),
('5d53ce247d117', '', '5d53ce249ca8f'),
('5d53ce247d117', '', '5d53ce249ca92'),
('5d53ce252c68a', '', '5d53ce254f97c'),
('5d53ce252c68a', '', '5d53ce254f985'),
('5d53ce252c68a', '', '5d53ce254f988'),
('5d53ce252c68a', '', '5d53ce254f98a'),
('5d53ce4f6a728', '', '5d53ce4f91f09'),
('5d53ce4f6a728', '', '5d53ce4f91f14'),
('5d53ce4f6a728', '', '5d53ce4f91f17'),
('5d53ce4f6a728', '', '5d53ce4f91f19'),
('5d53ce503722f', '', '5d53ce50547f0'),
('5d53ce503722f', '', '5d53ce50547f9'),
('5d53ce503722f', '', '5d53ce50547fd'),
('5d53ce503722f', '', '5d53ce50547ff'),
('5d53ce50dd81d', '', '5d53ce51173a2'),
('5d53ce50dd81d', '', '5d53ce51173ab'),
('5d53ce50dd81d', '', '5d53ce51173ae'),
('5d53ce50dd81d', '', '5d53ce51173b1'),
('5d53ce51ee2ca', '', '5d53ce51f30a5'),
('5d53ce51ee2ca', '', '5d53ce51f30ad'),
('5d53ce51ee2ca', '', '5d53ce51f30b0'),
('5d53ce51ee2ca', '', '5d53ce51f30b3'),
('5d53ce521a4c6', '', '5d53ce5231f1d'),
('5d53ce521a4c6', '', '5d53ce5231f24'),
('5d53ce521a4c6', '', '5d53ce5231f25'),
('5d53ce521a4c6', '', '5d53ce5231f26'),
('5d53ce52b2eac', '', '5d53ce52c8f14'),
('5d53ce52b2eac', '', '5d53ce52c8f1f'),
('5d53ce52b2eac', '', '5d53ce52c8f22'),
('5d53ce52b2eac', '', '5d53ce52c8f23'),
('5d53ce5380907', '', '5d53ce53a8888'),
('5d53ce5380907', '', '5d53ce53a8893'),
('5d53ce5380907', '', '5d53ce53a8898'),
('5d53ce5380907', '', '5d53ce53a889a'),
('5d53ce53c3eef', '', '5d53ce53d8dfb'),
('5d53ce53c3eef', '', '5d53ce53d8e04'),
('5d53ce53c3eef', '', '5d53ce53d8e06'),
('5d53ce53c3eef', '', '5d53ce53d8e0b'),
('5d53ce54673e1', '', '5d53ce5486836'),
('5d53ce54673e1', '', '5d53ce5486840'),
('5d53ce54673e1', '', '5d53ce5486843'),
('5d53ce54673e1', '', '5d53ce5486845'),
('5d53ce54dc827', '', '5d53ce54e14be'),
('5d53ce54dc827', '', '5d53ce54e14c8'),
('5d53ce54dc827', '', '5d53ce54e14cb'),
('5d53ce54dc827', '', '5d53ce54e14cd'),
('5d53ce5de8d1d', '', '5d53ce5e41f0b'),
('5d53ce5de8d1d', '', '5d53ce5e41f14'),
('5d53ce5de8d1d', '', '5d53ce5e41f17'),
('5d53ce5de8d1d', '', '5d53ce5e41f19'),
('5d53ce5eba599', '', '5d53ce5ed0580'),
('5d53ce5eba599', '', '5d53ce5ed058a'),
('5d53ce5eba599', '', '5d53ce5ed058c'),
('5d53ce5eba599', '', '5d53ce5ed058f'),
('5d53ce5eeab39', '', '5d53ce5ef096d'),
('5d53ce5eeab39', '', '5d53ce5ef0977'),
('5d53ce5eeab39', '', '5d53ce5ef097b'),
('5d53ce5eeab39', '', '5d53ce5ef097d'),
('5d53ce5f51ec9', '', '5d53ce5fe051d'),
('5d53ce5f51ec9', '', '5d53ce5fe0527'),
('5d53ce5f51ec9', '', '5d53ce5fe052a'),
('5d53ce5f51ec9', '', '5d53ce5fe052d'),
('5d53ce6089dbe', '', '5d53ce60db926'),
('5d53ce6089dbe', '', '5d53ce60db92d'),
('5d53ce6089dbe', '', '5d53ce60db92f'),
('5d53ce6089dbe', '', '5d53ce60db930'),
('5d53ce62152fc', '', '5d53ce621b0b8'),
('5d53ce62152fc', '', '5d53ce621b0c1'),
('5d53ce62152fc', '', '5d53ce621b0c2'),
('5d53ce62152fc', '', '5d53ce621b0c4'),
('5d53ce62a8ab9', '', '5d53ce62dc51d'),
('5d53ce62a8ab9', '', '5d53ce62dc527'),
('5d53ce62a8ab9', '', '5d53ce62dc529'),
('5d53ce62a8ab9', '', '5d53ce62dc52b'),
('5d53ce6353d84', '', '5d53ce6368d37'),
('5d53ce6353d84', '', '5d53ce6368d41'),
('5d53ce6353d84', '', '5d53ce6368d5c'),
('5d53ce6353d84', '', '5d53ce6368d60'),
('5d53ce639f16e', '', '5d53ce63b40cc'),
('5d53ce639f16e', '', '5d53ce63b40d9'),
('5d53ce639f16e', '', '5d53ce63b40db'),
('5d53ce639f16e', '', '5d53ce63b40dc'),
('5d53ce640e5ac', '', '5d53ce642600b'),
('5d53ce640e5ac', '', '5d53ce6426013'),
('5d53ce640e5ac', '', '5d53ce6426018'),
('5d53ce640e5ac', '', '5d53ce6426019'),
('5d53ce9286b89', '', '5d53ce92aa956'),
('5d53ce9286b89', '', '5d53ce92aa960'),
('5d53ce9286b89', '', '5d53ce92aa963'),
('5d53ce9286b89', '', '5d53ce92aa966'),
('5d53ce9361ee7', '', '5d53ce9367c65'),
('5d53ce9361ee7', '', '5d53ce9367c70'),
('5d53ce9361ee7', '', '5d53ce9367c72'),
('5d53ce9361ee7', '', '5d53ce9367c75'),
('5d53ce9435173', '', '5d53ce944a1b1'),
('5d53ce9435173', '', '5d53ce944a1bc'),
('5d53ce9435173', '', '5d53ce944a1bf'),
('5d53ce9435173', '', '5d53ce944a1c1'),
('5d53ce94c511f', '', '5d53ce94d0eea'),
('5d53ce94c511f', '', '5d53ce94d0ef4'),
('5d53ce94c511f', '', '5d53ce94d0ef8'),
('5d53ce94c511f', '', '5d53ce94d0efa'),
('5d53ce951a999', '', '5d53ce954263f'),
('5d53ce951a999', '', '5d53ce9542648'),
('5d53ce951a999', '', '5d53ce954264a'),
('5d53ce951a999', '', '5d53ce954264c'),
('5d53ce9583626', '', '5d53ce95a31e6'),
('5d53ce9583626', '', '5d53ce95a31ef'),
('5d53ce9583626', '', '5d53ce95a31f2'),
('5d53ce9583626', '', '5d53ce95a31f4'),
('5d53ce961da9e', '', '5d53ce962280c'),
('5d53ce961da9e', '', '5d53ce9622816'),
('5d53ce961da9e', '', '5d53ce9622819'),
('5d53ce961da9e', '', '5d53ce962281b'),
('5d53ce963de67', '', '5d53ce9642bba'),
('5d53ce963de67', '', '5d53ce9642bc4'),
('5d53ce963de67', '', '5d53ce9642bc6'),
('5d53ce963de67', '', '5d53ce9642bc9'),
('5d53ce96604c6', '', '5d53ce9699194'),
('5d53ce96604c6', '', '5d53ce969919e'),
('5d53ce96604c6', '', '5d53ce96991a0'),
('5d53ce96604c6', '', '5d53ce96991a3'),
('5d53ce975089a', '', '5d53ce9768b7d'),
('5d53ce975089a', '', '5d53ce9768b87'),
('5d53ce975089a', '', '5d53ce9768b8b'),
('5d53ce975089a', '', '5d53ce9768b8d'),
('5d53cf48a5145', '', '5d53cf48f3029'),
('5d53cf48a5145', '', '5d53cf48f3032'),
('5d53cf48a5145', '', '5d53cf48f3035'),
('5d53cf48a5145', '', '5d53cf48f3037'),
('5d53cf4987b27', '', '5d53cf498d41d'),
('5d53cf4987b27', '', '5d53cf498d427'),
('5d53cf4987b27', '', '5d53cf498d429'),
('5d53cf4987b27', '', '5d53cf498d42c'),
('5d53cf49af615', '', '5d53cf49baf11'),
('5d53cf49af615', '', '5d53cf49baf1a'),
('5d53cf49af615', '', '5d53cf49baf1e'),
('5d53cf49af615', '', '5d53cf49baf1f'),
('5d53cf4a6cf22', '', '5d53cf4a8815f'),
('5d53cf4a6cf22', '', '5d53cf4a88168'),
('5d53cf4a6cf22', '', '5d53cf4a8816b'),
('5d53cf4a6cf22', '', '5d53cf4a8816d'),
('5d53cf4b2fc96', '', '5d53cf4b35587'),
('5d53cf4b2fc96', '', '5d53cf4b3558f'),
('5d53cf4b2fc96', '', '5d53cf4b35593'),
('5d53cf4b2fc96', '', '5d53cf4b35596'),
('5d53cf4b8b2bb', '', '5d53cf4b90b38'),
('5d53cf4b8b2bb', '', '5d53cf4b90b42'),
('5d53cf4b8b2bb', '', '5d53cf4b90b45'),
('5d53cf4b8b2bb', '', '5d53cf4b90b4a'),
('5d53cf4c37ead', '', '5d53cf4c3dcb7'),
('5d53cf4c37ead', '', '5d53cf4c3dcc0'),
('5d53cf4c37ead', '', '5d53cf4c3dcc3'),
('5d53cf4c37ead', '', '5d53cf4c3dcc6'),
('5d53cf4c7dc6c', '', '5d53cf4c83a45'),
('5d53cf4c7dc6c', '', '5d53cf4c83a4f'),
('5d53cf4c7dc6c', '', '5d53cf4c83a52'),
('5d53cf4c7dc6c', '', '5d53cf4c83a54'),
('5d53cf4c9e08a', '', '5d53cf4ca3e51'),
('5d53cf4c9e08a', '', '5d53cf4ca3e5b'),
('5d53cf4c9e08a', '', '5d53cf4ca3e5d'),
('5d53cf4c9e08a', '', '5d53cf4ca3e5f'),
('5d53cf4cbe3f0', '', '5d53cf4cc428b'),
('5d53cf4cbe3f0', '', '5d53cf4cc4295'),
('5d53cf4cbe3f0', '', '5d53cf4cc4298'),
('5d53cf4cbe3f0', '', '5d53cf4cc429b'),
('5d53cf5af193f', '', '5d53cf5b10e3b'),
('5d53cf5af193f', '', '5d53cf5b10e44'),
('5d53cf5af193f', '', '5d53cf5b10e47'),
('5d53cf5af193f', '', '5d53cf5b10e4a'),
('5d53cf5b3dc0f', '', '5d53cf5b49528'),
('5d53cf5b3dc0f', '', '5d53cf5b49532'),
('5d53cf5b3dc0f', '', '5d53cf5b49535'),
('5d53cf5b3dc0f', '', '5d53cf5b49537'),
('5d53cf5b9bd10', '', '5d53cf5bb77b8'),
('5d53cf5b9bd10', '', '5d53cf5bb77c3'),
('5d53cf5b9bd10', '', '5d53cf5bb77c6'),
('5d53cf5b9bd10', '', '5d53cf5bb77c8'),
('5d53cf5c5761d', '', '5d53cf5ce2ebb'),
('5d53cf5c5761d', '', '5d53cf5ce2ec5'),
('5d53cf5c5761d', '', '5d53cf5ce2ec8'),
('5d53cf5c5761d', '', '5d53cf5ce2eca'),
('5d53cf5d0992a', '', '5d53cf5d59ff9'),
('5d53cf5d0992a', '', '5d53cf5d5a001'),
('5d53cf5d0992a', '', '5d53cf5d5a003'),
('5d53cf5d0992a', '', '5d53cf5d5a004'),
('5d53cf5dad07c', '', '5d53cf5db514e'),
('5d53cf5dad07c', '', '5d53cf5db5157'),
('5d53cf5dad07c', '', '5d53cf5db515a'),
('5d53cf5dad07c', '', '5d53cf5db515d'),
('5d53cf5fd387b', '', '5d53cf5fd915b'),
('5d53cf5fd387b', '', '5d53cf5fd9163'),
('5d53cf5fd387b', '', '5d53cf5fd9167'),
('5d53cf5fd387b', '', '5d53cf5fd9169'),
('5d53cf600717d', '', '5d53cf6012a3e'),
('5d53cf600717d', '', '5d53cf6012a49'),
('5d53cf600717d', '', '5d53cf6012a4b'),
('5d53cf600717d', '', '5d53cf6012a4e'),
('5d53cf60a91ed', '', '5d53cf60bb1b0'),
('5d53cf60a91ed', '', '5d53cf60bb1bb'),
('5d53cf60a91ed', '', '5d53cf60bb1be'),
('5d53cf60a91ed', '', '5d53cf60bb1bf'),
('5d53cf615f21c', '', '5d53cf61893c7'),
('5d53cf615f21c', '', '5d53cf61893d1'),
('5d53cf615f21c', '', '5d53cf61893d4'),
('5d53cf615f21c', '', '5d53cf61893d7'),
('5d53cf9faa0b6', '', '5d53cf9fdcf2a'),
('5d53cf9faa0b6', '', '5d53cf9fdcf35'),
('5d53cf9faa0b6', '', '5d53cf9fdcf37'),
('5d53cf9faa0b6', '', '5d53cf9fdcf3a'),
('5d53cfa11423a', '', '5d53cfa12c7fc'),
('5d53cfa11423a', '', '5d53cfa12c805'),
('5d53cfa11423a', '', '5d53cfa12c807'),
('5d53cfa11423a', '', '5d53cfa12c808'),
('5d53cfa199e5f', '', '5d53cfa1a5362'),
('5d53cfa199e5f', '', '5d53cfa1a536e'),
('5d53cfa199e5f', '', '5d53cfa1a536f'),
('5d53cfa199e5f', '', '5d53cfa1a5371'),
('5d53cfa1e081c', '', '5d53cfa1ed236'),
('5d53cfa1e081c', '', '5d53cfa1ed241'),
('5d53cfa1e081c', '', '5d53cfa1ed244'),
('5d53cfa1e081c', '', '5d53cfa1ed247'),
('5d53cfa2700b0', '', '5d53cfa2820da'),
('5d53cfa2700b0', '', '5d53cfa2820e2'),
('5d53cfa2700b0', '', '5d53cfa2820e4'),
('5d53cfa2700b0', '', '5d53cfa2820e5'),
('5d53cfa347ebf', '', '5d53cfa34d7a1'),
('5d53cfa347ebf', '', '5d53cfa34d7ab'),
('5d53cfa347ebf', '', '5d53cfa34d7ae'),
('5d53cfa347ebf', '', '5d53cfa34d7af'),
('5d53cfa37848f', '', '5d53cfa39d8f5'),
('5d53cfa37848f', '', '5d53cfa39d8fe'),
('5d53cfa37848f', '', '5d53cfa39d901'),
('5d53cfa37848f', '', '5d53cfa39d903'),
('5d53cfa4100c8', '', '5d53cfa422346'),
('5d53cfa4100c8', '', '5d53cfa422350'),
('5d53cfa4100c8', '', '5d53cfa422352'),
('5d53cfa4100c8', '', '5d53cfa422355'),
('5d53cfa468bad', '', '5d53cfa48872c'),
('5d53cfa468bad', '', '5d53cfa488736'),
('5d53cfa468bad', '', '5d53cfa488737'),
('5d53cfa468bad', '', '5d53cfa488739'),
('5d53cfa4b6ac3', '', '5d53cfa4bbde0'),
('5d53cfa4b6ac3', '', '5d53cfa4bbdeb'),
('5d53cfa4b6ac3', '', '5d53cfa4bbded'),
('5d53cfa4b6ac3', '', '5d53cfa4bbdef'),
('5d53d1a95c7e7', '', '5d53d1a9acb10'),
('5d53d1a95c7e7', '', '5d53d1a9acb1a'),
('5d53d1a95c7e7', '', '5d53d1a9acb1c'),
('5d53d1a95c7e7', '', '5d53d1a9acb1f'),
('5d53d1aa33f8e', '', '5d53d1aa49a94'),
('5d53d1aa33f8e', '', '5d53d1aa49aa1'),
('5d53d1aa33f8e', '', '5d53d1aa49aa3'),
('5d53d1aa33f8e', '', '5d53d1aa49aa4'),
('5d53d1ab9dfda', '', '5d53d1ac0c93f'),
('5d53d1ab9dfda', '', '5d53d1ac0c949'),
('5d53d1ab9dfda', '', '5d53d1ac0c94c'),
('5d53d1ab9dfda', '', '5d53d1ac0c94e'),
('5d53d1acb050f', '', '5d53d1accaf9a'),
('5d53d1acb050f', '', '5d53d1accafa4'),
('5d53d1acb050f', '', '5d53d1accafa7'),
('5d53d1acb050f', '', '5d53d1accafaa'),
('5d53d1ad42b0c', '', '5d53d1ad6011e'),
('5d53d1ad42b0c', '', '5d53d1ad60126'),
('5d53d1ad42b0c', '', '5d53d1ad60128'),
('5d53d1ad42b0c', '', '5d53d1ad60129'),
('5d53d1ae4b1d5', '', '5d53d1ae5d3ea'),
('5d53d1ae4b1d5', '', '5d53d1ae5d3f4'),
('5d53d1ae4b1d5', '', '5d53d1ae5d3f8'),
('5d53d1ae4b1d5', '', '5d53d1ae5d3fa'),
('5d53d1aeef06c', '', '5d53d1af0d87b'),
('5d53d1aeef06c', '', '5d53d1af0d886'),
('5d53d1aeef06c', '', '5d53d1af0d889'),
('5d53d1aeef06c', '', '5d53d1af0d88c'),
('5d53d1af32f29', '', '5d53d1af38b29'),
('5d53d1af32f29', '', '5d53d1af38b32'),
('5d53d1af32f29', '', '5d53d1af38b36'),
('5d53d1af32f29', '', '5d53d1af38b39'),
('5d53d1b1a4c04', '', '5d53d1b1d920b'),
('5d53d1b1a4c04', '', '5d53d1b1d9216'),
('5d53d1b1a4c04', '', '5d53d1b1d9219'),
('5d53d1b1a4c04', '', '5d53d1b1d921b'),
('5d53d1b20e65e', '', '5d53d1b22608e'),
('5d53d1b20e65e', '', '5d53d1b226097'),
('5d53d1b20e65e', '', '5d53d1b22609b'),
('5d53d1b20e65e', '', '5d53d1b22609d'),
('5d53d1dd08900', '', '5d53d1dd66c12'),
('5d53d1dd08900', '', '5d53d1dd66c1c'),
('5d53d1dd08900', '', '5d53d1dd66c1e'),
('5d53d1dd08900', '', '5d53d1dd66c21'),
('5d53d1dec4f80', '', '5d53d1decd3d1'),
('5d53d1dec4f80', '', '5d53d1decd3db'),
('5d53d1dec4f80', '', '5d53d1decd3de'),
('5d53d1dec4f80', '', '5d53d1decd3e0'),
('5d53d1dfb378e', '', '5d53d1dfbfd81'),
('5d53d1dfb378e', '', '5d53d1dfbfd8b'),
('5d53d1dfb378e', '', '5d53d1dfbfd8d'),
('5d53d1dfb378e', '', '5d53d1dfbfd90'),
('5d53d1e162b8f', '', '5d53d1e29f8b0'),
('5d53d1e162b8f', '', '5d53d1e29f8bb'),
('5d53d1e162b8f', '', '5d53d1e29f8bf'),
('5d53d1e162b8f', '', '5d53d1e29f8c1'),
('5d53d1e3826c6', '', '5d53d1e3ade85'),
('5d53d1e3826c6', '', '5d53d1e3ade8d'),
('5d53d1e3826c6', '', '5d53d1e3ade8f'),
('5d53d1e3826c6', '', '5d53d1e3ade91'),
('5d53d1e491528', '', '5d53d1e4a6fe3'),
('5d53d1e491528', '', '5d53d1e4a6fec'),
('5d53d1e491528', '', '5d53d1e4a6fef'),
('5d53d1e491528', '', '5d53d1e4a6ff2'),
('5d53d1e59133f', '', '5d53d1e5b4814'),
('5d53d1e59133f', '', '5d53d1e5b481d'),
('5d53d1e59133f', '', '5d53d1e5b4820'),
('5d53d1e59133f', '', '5d53d1e5b4822'),
('5d53d1e62c2ae', '', '5d53d1e634853'),
('5d53d1e62c2ae', '', '5d53d1e63485d'),
('5d53d1e62c2ae', '', '5d53d1e634860'),
('5d53d1e62c2ae', '', '5d53d1e634863'),
('5d53d1e69f868', '', '5d53d1e6b5307'),
('5d53d1e69f868', '', '5d53d1e6b5311'),
('5d53d1e69f868', '', '5d53d1e6b5312'),
('5d53d1e69f868', '', '5d53d1e6b5314'),
('5d53d1e824d70', '', '5d53d1e878dad'),
('5d53d1e824d70', '', '5d53d1e878db7'),
('5d53d1e824d70', '', '5d53d1e878db9'),
('5d53d1e824d70', '', '5d53d1e878dbc'),
('5d53d30d5e5bf', '', '5d53d30d9bdf7'),
('5d53d30d5e5bf', '', '5d53d30d9be01'),
('5d53d30d5e5bf', '', '5d53d30d9be04'),
('5d53d30d5e5bf', '', '5d53d30d9be06'),
('5d53d30e03435', '', '5d53d30e2386b'),
('5d53d30e03435', '', '5d53d30e23874'),
('5d53d30e03435', '', '5d53d30e2387a'),
('5d53d30e03435', '', '5d53d30e2387c'),
('5d53d30e840f4', '', '5d53d30f03431'),
('5d53d30e840f4', '', '5d53d30f0343c'),
('5d53d30e840f4', '', '5d53d30f0343f'),
('5d53d30e840f4', '', '5d53d30f03442'),
('5d53d3109ff04', '', '5d53d310b8365'),
('5d53d3109ff04', '', '5d53d310b836e'),
('5d53d3109ff04', '', '5d53d310b8372'),
('5d53d3109ff04', '', '5d53d310b8374'),
('5d53d311468c6', '', '5d53d3115c0cd'),
('5d53d311468c6', '', '5d53d3115c0d6'),
('5d53d311468c6', '', '5d53d3115c0d8'),
('5d53d311468c6', '', '5d53d3115c0da'),
('5d53d311cdb36', '', '5d53d311dfb71'),
('5d53d311cdb36', '', '5d53d311dfb7b'),
('5d53d311cdb36', '', '5d53d311dfb7e'),
('5d53d311cdb36', '', '5d53d311dfb81'),
('5d53d312a8439', '', '5d53d312add1d'),
('5d53d312a8439', '', '5d53d312add27'),
('5d53d312a8439', '', '5d53d312add2a'),
('5d53d312a8439', '', '5d53d312add2b'),
('5d53d31341b38', '', '5d53d3137a7e6'),
('5d53d31341b38', '', '5d53d3137a7ef'),
('5d53d31341b38', '', '5d53d3137a7f2'),
('5d53d31341b38', '', '5d53d3137a7f4'),
('5d53d313e907f', '', '5d53d313eeb20'),
('5d53d313e907f', '', '5d53d313eeb2a'),
('5d53d313e907f', '', '5d53d313eeb2c'),
('5d53d313e907f', '', '5d53d313eeb2f'),
('5d53d31463589', '', '5d53d314688b8'),
('5d53d31463589', '', '5d53d314688c1'),
('5d53d31463589', '', '5d53d314688c4'),
('5d53d31463589', '', '5d53d314688c6'),
('5d53d350bdcd9', '', '5d53d3538fdcd'),
('5d53d350bdcd9', '', '5d53d3538fdd7'),
('5d53d350bdcd9', '', '5d53d3538fdda'),
('5d53d350bdcd9', '', '5d53d3538fddd'),
('5d53d354b7fb4', '', '5d53d354c11a2'),
('5d53d354b7fb4', '', '5d53d354c11ab'),
('5d53d354b7fb4', '', '5d53d354c11ae'),
('5d53d354b7fb4', '', '5d53d354c11b0'),
('5d53d3562c63e', '', '5d53d35779d75'),
('5d53d3562c63e', '', '5d53d35779d7f'),
('5d53d3562c63e', '', '5d53d35779d82'),
('5d53d3562c63e', '', '5d53d35779d83'),
('5d53d35ae7fff', '', '5d53d35b1f899'),
('5d53d35ae7fff', '', '5d53d35b1f8a3'),
('5d53d35ae7fff', '', '5d53d35b1f8a6'),
('5d53d35ae7fff', '', '5d53d35b1f8a8'),
('5d53d35b574d9', '', '5d53d35b5c84c'),
('5d53d35b574d9', '', '5d53d35b5c855'),
('5d53d35b574d9', '', '5d53d35b5c858'),
('5d53d35b574d9', '', '5d53d35b5c85b'),
('5d53d35b83656', '', '5d53d35b8a2dd'),
('5d53d35b83656', '', '5d53d35b8a2e7'),
('5d53d35b83656', '', '5d53d35b8a2ea'),
('5d53d35b83656', '', '5d53d35b8a2ed'),
('5d53d35c072f3', '', '5d53d35c32536'),
('5d53d35c072f3', '', '5d53d35c32540'),
('5d53d35c072f3', '', '5d53d35c32542'),
('5d53d35c072f3', '', '5d53d35c32545'),
('5d53d35d1aaf6', '', '5d53d35d693fa'),
('5d53d35d1aaf6', '', '5d53d35d69404'),
('5d53d35d1aaf6', '', '5d53d35d69407'),
('5d53d35d1aaf6', '', '5d53d35d6940a'),
('5d53d35e32798', '', '5d53d35e5372b'),
('5d53d35e32798', '', '5d53d35e53734'),
('5d53d35e32798', '', '5d53d35e53737'),
('5d53d35e32798', '', '5d53d35e5373a'),
('5d53d363a3724', '', '5d53d364377f2'),
('5d53d363a3724', '', '5d53d364377fe'),
('5d53d363a3724', '', '5d53d36437804'),
('5d53d363a3724', '', '5d53d36437806'),
('5d53d42f85c68', '', '5d53d42fc377c'),
('5d53d42f85c68', '', '5d53d42fc3785'),
('5d53d42f85c68', '', '5d53d42fc3788'),
('5d53d42f85c68', '', '5d53d42fc378b'),
('5d53d430606ee', '', '5d53d43068a9e'),
('5d53d430606ee', '', '5d53d43068aa8'),
('5d53d430606ee', '', '5d53d43068aab'),
('5d53d430606ee', '', '5d53d43068aad'),
('5d53d430b6a21', '', '5d53d430beea8'),
('5d53d430b6a21', '', '5d53d430beeb2'),
('5d53d430b6a21', '', '5d53d430beeb6'),
('5d53d430b6a21', '', '5d53d430beeb8'),
('5d53d4313e103', '', '5d53d43156a7e'),
('5d53d4313e103', '', '5d53d43156a88'),
('5d53d4313e103', '', '5d53d43156a8a'),
('5d53d4313e103', '', '5d53d43156a8b'),
('5d53d431af654', '', '5d53d43216cd5'),
('5d53d431af654', '', '5d53d43216cdd'),
('5d53d431af654', '', '5d53d43216cdf'),
('5d53d431af654', '', '5d53d43216ce0'),
('5d53d43299c8e', '', '5d53d432b47ff'),
('5d53d43299c8e', '', '5d53d432b4808'),
('5d53d43299c8e', '', '5d53d432b480b'),
('5d53d43299c8e', '', '5d53d432b480d'),
('5d53d432e5eb6', '', '5d53d433056a9'),
('5d53d432e5eb6', '', '5d53d433056b3'),
('5d53d432e5eb6', '', '5d53d433056b4'),
('5d53d432e5eb6', '', '5d53d433056b6'),
('5d53d4333b9b6', '', '5d53d4334c742'),
('5d53d4333b9b6', '', '5d53d4334c74c'),
('5d53d4333b9b6', '', '5d53d4334c750'),
('5d53d4333b9b6', '', '5d53d4334c751'),
('5d53d433ea9d0', '', '5d53d434203f6'),
('5d53d433ea9d0', '', '5d53d43420400'),
('5d53d433ea9d0', '', '5d53d43420403'),
('5d53d433ea9d0', '', '5d53d43420405'),
('5d53d434b28d6', '', '5d53d434bbdba'),
('5d53d434b28d6', '', '5d53d434bbdc4'),
('5d53d434b28d6', '', '5d53d434bbdc7'),
('5d53d434b28d6', '', '5d53d434bbdc9'),
('5d53d435eb3a1', '', '5d53d4362fb68'),
('5d53d435eb3a1', '', '5d53d4362fb72'),
('5d53d435eb3a1', '', '5d53d4362fb75'),
('5d53d435eb3a1', '', '5d53d4362fb77'),
('5d53d436a88b3', '', '5d53d436adc57'),
('5d53d436a88b3', '', '5d53d436adc5f'),
('5d53d436a88b3', '', '5d53d436adc60'),
('5d53d436a88b3', '', '5d53d436adc62'),
('5d53edd094bf1', '', '5d53edd0cd75a'),
('5d53edd094bf1', '', '5d53edd0cd763'),
('5d53edd094bf1', '', '5d53edd0cd767'),
('5d53edd094bf1', '', '5d53edd0cd769'),
('5d53edd2d9c11', '', '5d53edd2e5250'),
('5d53edd2d9c11', '', '5d53edd2e5259'),
('5d53edd2d9c11', '', '5d53edd2e525c'),
('5d53edd2d9c11', '', '5d53edd2e525f'),
('5d53edd31a560', '', '5d53edd32356c'),
('5d53edd31a560', '', '5d53edd323577'),
('5d53edd31a560', '', '5d53edd323579'),
('5d53edd31a560', '', '5d53edd32357a'),
('5d53edd36cd25', '', '5d53edd37b661'),
('5d53edd36cd25', '', '5d53edd37b66b'),
('5d53edd36cd25', '', '5d53edd37b66e'),
('5d53edd36cd25', '', '5d53edd37b671'),
('5d53edd406e54', '', '5d53edd432e69'),
('5d53edd406e54', '', '5d53edd432e72'),
('5d53edd406e54', '', '5d53edd432e74'),
('5d53edd406e54', '', '5d53edd432e75'),
('5d53edd5ccc7c', '', '5d53edd5d9f3f'),
('5d53edd5ccc7c', '', '5d53edd5d9f4a'),
('5d53edd5ccc7c', '', '5d53edd5d9f4d'),
('5d53edd5ccc7c', '', '5d53edd5d9f50'),
('5d53edd641158', '', '5d53edd65e813'),
('5d53edd641158', '', '5d53edd65e81c'),
('5d53edd641158', '', '5d53edd65e820'),
('5d53edd641158', '', '5d53edd65e822'),
('5d53edd6df9e0', '', '5d53edd72a247'),
('5d53edd6df9e0', '', '5d53edd72a251'),
('5d53edd6df9e0', '', '5d53edd72a254'),
('5d53edd6df9e0', '', '5d53edd72a256'),
('5d53edd7a7e09', '', '5d53edd7affe2'),
('5d53edd7a7e09', '', '5d53edd7affeb'),
('5d53edd7a7e09', '', '5d53edd7affef'),
('5d53edd7a7e09', '', '5d53edd7afff1'),
('5d53edd80ec81', '', '5d53edd826f2f'),
('5d53edd80ec81', '', '5d53edd826f39'),
('5d53edd80ec81', '', '5d53edd826f3b'),
('5d53edd80ec81', '', '5d53edd826f3c'),
('5d53edd8a8d4f', '', '5d53edd8b0047'),
('5d53edd8a8d4f', '', '5d53edd8b0052'),
('5d53edd8a8d4f', '', '5d53edd8b0054'),
('5d53edd8a8d4f', '', '5d53edd8b0057'),
('5d53edd8d0185', '', '5d53edd8d5a5a'),
('5d53edd8d0185', '', '5d53edd8d5a63'),
('5d53edd8d0185', '', '5d53edd8d5a65'),
('5d53edd8d0185', '', '5d53edd8d5a67'),
('5d53f2bdec844', '', '5d53f2be56ad0'),
('5d53f2bdec844', '', '5d53f2be56ada'),
('5d53f2bdec844', '', '5d53f2be56add'),
('5d53f2bdec844', '', '5d53f2be56adf'),
('5d53f2bea540d', '', '5d53f2bebd463'),
('5d53f2bea540d', '', '5d53f2bebd46e'),
('5d53f2bea540d', '', '5d53f2bebd472'),
('5d53f2bea540d', '', '5d53f2bebd474'),
('5d53f2bfa010b', '', '5d53f2bfb59f7'),
('5d53f2bfa010b', '', '5d53f2bfb5a01'),
('5d53f2bfa010b', '', '5d53f2bfb5a03'),
('5d53f2bfa010b', '', '5d53f2bfb5a06');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5b1914a76c355', '5b1920d546a15', 'Scientific process  includes all  the following EXCEPT _________', 4, 1),
('5b1914a76c355', '5b1920d58f243', 'which of these is not a condition necessary for human growth?', 4, 2),
('5b1914a76c355', '5b1920d5be51d', 'Characteristics of living things are those EXCEPT', 4, 3),
('5b1914a76c355', '5b1920d83e49a', 'The satellite of the earth is_______, which revolves round the earth once in about 29days', 4, 4),
('5b1914a76c355', '5b1920d8692e2', 'The three states of matter are ______, ________,and __________', 4, 5),
('5b1914a76c355', '5b1920d8bedd9', 'Aquatic animals include the following EXCEPT________', 4, 6),
('5b1914a76c355', '5b1920d904d3d', 'Which of the following is not a sense organ', 4, 7),
('5b1914a76c355', '5b1920d92d8a2', 'Which of these is not a resource from animal', 4, 8),
('5b1914a76c355', '5b1920d956414', 'Uncooked yam stores _________ energy', 4, 9),
('5b1914a76c355', '5b1920d97ef04', 'Voltmeter is an instrument used to measure________', 4, 10),
('5b1914a76c355', '5b1920d9bb9f3', 'Metals can be used to make the following EXCEPT', 4, 11),
('5b1914a76c355', '5b1920d9e9b97', 'Which one of the following is not a vector?', 4, 12),
('5b1914a76c355', '5b1920da1e48e', 'A device that make work easier is called________', 4, 13),
('5b1914a76c355', '5b1920da63d40', 'Which of these is not a component of a balance diet?\r\n', 4, 14),
('5b1914a76c355', '5b1920da979c6', 'Man belong to the group of animal called', 4, 15),
('5b1914a76c355', '5b1920dac2ca3', 'Which of these is present in plant all but absent in animal cell?\r\n', 4, 16),
('5b1914a76c355', '5b1920db12769', 'The organ of smell is ________', 4, 17),
('5b1914a76c355', '5b1920db3b27c', 'The main sources of energy is ________', 4, 18),
('5b1914a76c355', '5b1920db63d72', 'Another name for combustion is _________', 4, 19),
('5b1914a76c355', '5b1920db8c8ec', 'The unit of measuring force is _________\r\n', 4, 20),
('5b1923ec3a497', '5b193301bddee', 'God created the world out of---------', 4, 1),
('5b1923ec3a497', '5b19330211f3a', 'Adam called Eve woman because she-----------', 4, 2),
('5b1923ec3a497', '5b19330243943', 'The first book of the Bible is Genesis because it is the book of-------', 4, 3),
('5b1923ec3a497', '5b19330294f7a', 'The seventh century prophet often described as the weeping prophet was-------', 4, 4),
('5b1923ec3a497', '5b193302e58d1', 'Abraham is regarded as the father of the faithful because-------', 4, 5),
('5b1923ec3a497', '5b1933033282e', 'Abraham performed the rite of circumcision on himself at the age of-------', 4, 6),
('5b1923ec3a497', '5b1933036c0f0', 'During the exodus, the old dispensation was sealed with the--------', 4, 7),
('5b1923ec3a497', '5b1933039cffb', 'God covenant with Israel on Mount Sinai made the people-------', 4, 8),
('5b1923ec3a497', '5b193303c5ba4', 'Joseph was released from Egyptian prison because he was remembered by-------', 4, 9),
('5b1923ec3a497', '5b193304025d2', 'Joseph was sold to the Ishmaelite traders for------shekels of silver', 4, 10),
('5b1923ec3a497', '5b19330432939', 'Moses was keeping the flock of his father in-law on Mount------', 4, 11),
('5b1923ec3a497', '5b1933046163f', 'The army of Israel led by Barak defeated the Canaanite troops led by-------', 4, 12),
('5b1923ec3a497', '5b1933048cbfa', 'I will get over Pharaoh and all his host and the Egyptians shall know that I am the Lord. This statement signifies\r\nthat --------', 4, 13),
('5b1923ec3a497', '5b193304bd988', 'Hophni and Phinehas treated the Lord offering with contempt at Shiloh for they------', 4, 14),
('5b1923ec3a497', '5b1933050714a', 'Eli lack of parental responsibility led to all of the following except the--------', 4, 15),
('5b1923ec3a497', '5b19330538657', 'When Samuel said to Saul, to obey is better than sacrifice, he meant that--------', 4, 16),
('5b1923ec3a497', '5b193305611c8', 'David was ordered to play the lyre for Saul because------', 4, 17),
('5b1923ec3a497', '5b19330591710', 'One of the moral defects of David which Nathan condemned was------', 4, 18),
('5b1923ec3a497', '5b193305bd652', 'The king of Israel who reputed for his wisdom and his love of beauty was-------', 4, 19),
('5b1923ec3a497', '5b193305ee36b', 'naaman, the syrian leper was healed by-----', 4, 20),
('5b1e71e070fe8', '5b1e71f8ed653', '5 mod 2', 4, 1),
('', '5b212203c0c80', '5 mod 2', 4, 1),
('', '5b212203f41e9', '9 mod 3', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd0d4c817', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd0e711d8', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd0ed1d7a', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd1197c35', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd143e6d7', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd14c74a2', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd195016e', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd1a63411', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd1adc2f9', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cd1c10b25', '', 4, 10),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdee56c82', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdef33005', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdef94789', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf0e7f07', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf14e983', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf1f2973', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf28c3ac', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf31875a', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf3bd791', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf42a152', '', 4, 10),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdf98a785', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfacadac', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfb21f23', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfbb3ca5', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfc83b24', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfce10c0', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfd42e29', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfdb71fb', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfe164c5', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53cdfe368d8', '', 4, 10),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce02d9c54', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce03ce27a', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce045aedf', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce048dfdc', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce05512cb', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce0664255', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce06996ec', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce073e71c', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce0797192', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce08751c9', '', 4, 10),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce15372c6', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce15d85dc', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce1632285', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce16bddda', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce17d4539', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce183d027', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce18c60d3', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce19604bd', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce1980850', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce19a0c67', '', 4, 10),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce1ec27b1', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce1f8602a', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce1fc67b0', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce210dcc8', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce21b9c18', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce22629ff', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce233daf1', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce23d52cf', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce247d117', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce252c68a', '', 4, 10),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce4f6a728', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce503722f', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce50dd81d', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce51ee2ca', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce521a4c6', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce52b2eac', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce5380907', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce53c3eef', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce54673e1', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce54dc827', '', 4, 10),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce5de8d1d', '', 4, 1),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce5eba599', '', 4, 2),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce5eeab39', '', 4, 3),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce5f51ec9', '', 4, 4),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce6089dbe', '', 4, 5),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce62152fc', '', 4, 6),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce62a8ab9', '', 4, 7),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce6353d84', '', 4, 8),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce639f16e', '', 4, 9),
('480d211ed8855cc5cd96d537d975ae5e', '5d53ce640e5ac', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce9286b89', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce9361ee7', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce9435173', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce94c511f', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce951a999', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce9583626', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce961da9e', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce963de67', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce96604c6', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53ce975089a', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf48a5145', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4987b27', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf49af615', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4a6cf22', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4b2fc96', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4b8b2bb', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4c37ead', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4c7dc6c', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4c9e08a', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf4cbe3f0', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf5af193f', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf5b3dc0f', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf5b9bd10', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf5c5761d', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf5d0992a', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf5dad07c', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf5fd387b', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf600717d', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf60a91ed', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf615f21c', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cf9faa0b6', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa11423a', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa199e5f', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa1e081c', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa2700b0', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa347ebf', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa37848f', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa4100c8', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa468bad', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53cfa4b6ac3', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1a95c7e7', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1aa33f8e', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1ab9dfda', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1acb050f', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1ad42b0c', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1ae4b1d5', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1aeef06c', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1af32f29', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1b1a4c04', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1b20e65e', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1dd08900', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1dec4f80', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1dfb378e', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1e162b8f', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1e3826c6', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1e491528', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1e59133f', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1e62c2ae', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1e69f868', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d1e824d70', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d30d5e5bf', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d30e03435', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d30e840f4', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d3109ff04', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d311468c6', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d311cdb36', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d312a8439', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d31341b38', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d313e907f', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d31463589', '', 4, 10),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d350bdcd9', '', 4, 1),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d354b7fb4', '', 4, 2),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d3562c63e', '', 4, 3),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d35ae7fff', '', 4, 4),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d35b574d9', '', 4, 5),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d35b83656', '', 4, 6),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d35c072f3', '', 4, 7),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d35d1aaf6', '', 4, 8),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d35e32798', '', 4, 9),
('8aa6164ec8d7e2b8039e261ea99eeaea', '5d53d363a3724', '', 4, 10),
('76508030f227ced2d669dc055d7394af', '5d53d42f85c68', '', 4, 1),
('76508030f227ced2d669dc055d7394af', '5d53d430606ee', '', 4, 2),
('76508030f227ced2d669dc055d7394af', '5d53d430b6a21', '', 4, 3),
('76508030f227ced2d669dc055d7394af', '5d53d4313e103', '', 4, 4),
('76508030f227ced2d669dc055d7394af', '5d53d431af654', '', 4, 5),
('76508030f227ced2d669dc055d7394af', '5d53d43299c8e', '', 4, 6),
('76508030f227ced2d669dc055d7394af', '5d53d432e5eb6', '', 4, 7),
('76508030f227ced2d669dc055d7394af', '5d53d4333b9b6', '', 4, 8),
('76508030f227ced2d669dc055d7394af', '5d53d433ea9d0', '', 4, 9),
('76508030f227ced2d669dc055d7394af', '5d53d434b28d6', '', 4, 10),
('76508030f227ced2d669dc055d7394af', '5d53d435eb3a1', '', 4, 11),
('76508030f227ced2d669dc055d7394af', '5d53d436a88b3', '', 4, 12),
('2377264b33585416e69186b858f38033', '5d53edd094bf1', '', 4, 1),
('2377264b33585416e69186b858f38033', '5d53edd2d9c11', '', 4, 2),
('2377264b33585416e69186b858f38033', '5d53edd31a560', '', 4, 3),
('2377264b33585416e69186b858f38033', '5d53edd36cd25', '', 4, 4),
('2377264b33585416e69186b858f38033', '5d53edd406e54', '', 4, 5),
('2377264b33585416e69186b858f38033', '5d53edd5ccc7c', '', 4, 6),
('2377264b33585416e69186b858f38033', '5d53edd641158', '', 4, 7),
('2377264b33585416e69186b858f38033', '5d53edd6df9e0', '', 4, 8),
('2377264b33585416e69186b858f38033', '5d53edd7a7e09', '', 4, 9),
('2377264b33585416e69186b858f38033', '5d53edd80ec81', '', 4, 10),
('2377264b33585416e69186b858f38033', '5d53edd8a8d4f', '', 4, 11),
('2377264b33585416e69186b858f38033', '5d53edd8d0185', '', 4, 12),
('6ce748cc3b7adc577fa49aa8d40e1fdf', '5d53f2bdec844', '', 4, 1),
('6ce748cc3b7adc577fa49aa8d40e1fdf', '5d53f2bea540d', '', 4, 2),
('6ce748cc3b7adc577fa49aa8d40e1fdf', '5d53f2bfa010b', '', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `regno` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`regno`, `score`, `time`) VALUES
('SITA/EDU/2018/9', 7, '2018-06-13 09:07:28'),
('SITA/EDU/2018/1', 18, '2018-06-15 09:48:49'),
('SITA/EDU/2018/10', 10, '2018-06-15 10:05:12'),
('SITA/EDU/2018/20', 25, '2018-06-13 14:27:21'),
('SITA/EDU/2018/30', 13, '2018-06-13 14:10:48'),
('SITA/EDU/2018/25', 3, '2018-06-13 09:02:00'),
('SITA/EDU/2018/29', -17, '2018-06-13 14:29:32'),
('SITA/EDU/2018/28', -14, '2019-07-26 11:42:05'),
('SITA/EDU/2018/115', 1, '2018-06-11 13:02:56'),
('SITA/EDU/2018/2', 2, '2018-06-14 15:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Fullname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `School_Name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Reg_No` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Correct_Answer` int(11) NOT NULL,
  `Total_Question` int(11) NOT NULL,
  `Exam_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Exam_Title` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Fullname`, `School_Name`, `Reg_No`, `Correct_Answer`, `Total_Question`, `Exam_Date`, `Exam_Title`) VALUES
('Adeoye Solomon', 'Oyemekun Grammar School', 'SITA/EDU/2018/28', 13, 20, '2018-06-07 14:45:38', 'Crk'),
('Afolabi Omolade', 'St. Louis Grammar School', 'SITA/EDU/2018/1', 1, 1, '2018-06-11 15:08:49', 'Self'),
('Afolabi Omolade', 'St. Louis Grammar School', 'SITA/EDU/2018/1', 1, 1, '2018-06-11 15:08:49', 'Self'),
('Afolabi Omolade', 'St. Louis Grammar School', 'SITA/EDU/2018/1', 19, 20, '2018-06-07 12:19:52', 'Basic Science'),
('Afolabi Omolade', 'St. Louis Grammar School', 'SITA/EDU/2018/1', 1, 2, '2018-06-13 13:58:38', 'Phy'),
('Ahmed Fatai', 'Aquinas Grammar School', 'SITA/EDU/2018/2', 2, 2, '2018-06-14 15:29:39', 'Mine'),
('Akindele Abisola', 'Aquinas Grammar School', 'SITA/EDU/2018/30', 9, 20, '2018-06-07 14:33:35', 'Crk'),
('Akindele Abisola', 'Aquinas Grammar School', 'SITA/EDU/2018/30', 1, 2, '2018-06-13 14:10:48', 'Phy'),
('Akindele Abisola', 'Aquinas Grammar School', 'SITA/EDU/2018/30', 17, 20, '2018-06-07 14:43:14', 'Basic Science'),
('Akindele Abisola', 'Aquinas Grammar School', 'SITA/EDU/2018/30', 1, 1, '2018-06-13 09:09:20', 'Self'),
('Balogun Temitope', 'Oyemekun Grammar School', 'SITA/EDU/2018/25', 13, 20, '2018-06-07 14:39:48', 'Basic Science'),
('Balogun Temitope', 'Oyemekun Grammar School', 'SITA/EDU/2018/25', 8, 20, '2018-06-07 14:35:14', 'Crk'),
('Balogun Temitope', 'Oyemekun Grammar School', 'SITA/EDU/2018/25', 1, 1, '2018-06-13 09:01:59', 'Self'),
('Bola', 'Aquinas Grammar School', 'SITA/EDU/2018/10', 15, 20, '2018-06-07 13:36:45', 'Crk'),
('Bola', 'Aquinas Grammar School', 'SITA/EDU/2018/10', 1, 1, '2018-06-07 13:43:49', 'Basic Science'),
('Folornsho Yemi', 'Aquinas Grammar School', 'SITA/EDU/2018/115', 1, 1, '2018-06-11 13:02:56', 'Self'),
('Korede Dolapo', 'Fiwasaye Girls Grammar School', 'SITA/EDU/2018/9', 0, 1, '2018-06-13 09:07:27', 'Self'),
('Oloruntoba Olubukola ', 'Oyemekun Grammar School', 'SITA/EDU/2018/29', 1, 2, '2018-06-13 14:12:27', 'Phy'),
('Oloruntoba Olubukola ', 'Oyemekun Grammar School', 'SITA/EDU/2018/29', 0, 1, '2018-06-13 09:19:18', 'Self'),
('Oloruntoba Olubukola ', 'Oyemekun Grammar School', 'SITA/EDU/2018/29', 6, 20, '2018-06-13 14:20:42', 'Basic Science'),
('Oloruntoba Olubukola ', 'Oyemekun Grammar School', 'SITA/EDU/2018/29', 6, 20, '2018-06-07 14:35:17', 'Crk'),
('Oloruntoba Olubukola ', 'Oyemekun Grammar School', 'SITA/EDU/2018/29', 1, 2, '2018-06-13 14:29:32', 'Mine'),
('Omoyajowo David', 'Aquinas Grammar School', 'SITA/EDU/2018/22', 1, 2, '2018-06-13 13:54:30', 'Phy'),
('Omoyajowo David', 'Aquinas Grammar School', 'SITA/EDU/2018/22', 9, 20, '2018-06-07 14:34:43', 'Crk'),
('Omoyajowo David', 'Aquinas Grammar School', 'SITA/EDU/2018/22', 10, 20, '2018-06-07 14:40:12', 'Basic Science'),
('Omoyajowo David', 'Aquinas Grammar School', 'SITA/EDU/2018/22', 0, 1, '2018-06-11 13:24:23', 'Self'),
('Peter Miracle ', 'Aquinas Grammar School', 'SITA/EDU/2018/20', 2, 2, '2018-06-13 14:27:21', 'Mine'),
('Peter Miracle ', 'Aquinas Grammar School', 'SITA/EDU/2018/20', 1, 1, '2018-06-13 14:00:46', 'Self'),
('Peter Miracle ', 'Aquinas Grammar School', 'SITA/EDU/2018/20', 13, 20, '2018-06-07 14:43:24', 'Crk'),
('Peter Miracle ', 'Aquinas Grammar School', 'SITA/EDU/2018/20', 17, 20, '2018-06-07 14:32:37', 'Basic Science'),
('Peter Miracle ', 'Aquinas Grammar School', 'SITA/EDU/2018/20', 2, 2, '2018-06-13 14:09:17', 'Phy');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_code` varchar(20) NOT NULL,
  `school_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_code`, `school_name`) VALUES
(38, 'FGGS', 'FIWASAYE GIRLS GRAMMAR SCHOOL'),
(39, 'OGS', 'OYEMEKUN GRAMMAR SCHOOL');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `class_id` varchar(10) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `dob`, `gender`, `school_id`, `class_id`, `regno`, `mob`, `password`) VALUES
(64, 'Olayemi Idowu', '', '2019-08-05', 'F', '38', '1', 'FGGS/19/2', '094038493', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `school_id` varchar(11) NOT NULL,
  `class_id` varchar(11) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `school_id`, `class_id`, `subject`) VALUES
(26, '38', '1', 'English Language;Mathematics;Integrated/Basic Science;Introductory/Basic Technology;Social Studies;Computer Studies;French Language;Yoruba Language;Ibo Language;Hausa Language;Home Economics;Agricultural Science;Physical & Health Education (PHE);Business Studies;Christian Religious Studies/Islamic Religious Studies;Chemistry'),
(27, '39', '1', 'English Language;Mathematics;Integrated/Basic Science;Introductory/Basic Technology;Social Studies;Computer Studies;French Language;Yoruba Language;Ibo Language;Hausa Language;Home Economics;Agricultural Science;Physical & Health Education (PHE);Business Studies;Christian Religious Studies/Islamic Religious Studies;Chemistry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_ids`
--
ALTER TABLE `class_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examiner`
--
ALTER TABLE `examiner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_exam`
--
ALTER TABLE `obj_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obj_exam_audit`
--
ALTER TABLE `obj_exam_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_code` (`school_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `class_ids`
--
ALTER TABLE `class_ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `examiner`
--
ALTER TABLE `examiner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `obj_exam`
--
ALTER TABLE `obj_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `obj_exam_audit`
--
ALTER TABLE `obj_exam_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
