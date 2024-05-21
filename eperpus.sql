-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 04:55 PM
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
-- Database: `eperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id_app` int(11) NOT NULL,
  `icon` varchar(45) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id_app`, `icon`, `nama`) VALUES
(1, 'eperpus3.png', 'ePerpus');

-- --------------------------------------------------------

--
-- Table structure for table `bg_login`
--

CREATE TABLE `bg_login` (
  `id` int(11) NOT NULL,
  `bg` varchar(50) NOT NULL,
  `judul` varchar(58) NOT NULL,
  `quote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bg_login`
--

INSERT INTO `bg_login` (`id`, `bg`, `judul`, `quote`) VALUES
(1, 'bg-auth2.png', 'E-Library PTIK', 'Welcome to Administrator Dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal` date NOT NULL,
  `url` varchar(49) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `gambar`, `nama`, `tanggal`, `url`, `deskripsi`) VALUES
(1, 'STIBA IEC JAKARTA', 'Cover_stiba.png', 'Start your future career from here', '2021-01-01', 'www.stibaiec-jakarta.ac.id', 'Kuliah berkualitas dan terjangkau'),
(2, 'DR-BEJO.COM', 'Baner_e_learning727x350.jpg', 'Blog for Business and Education', '2021-01-01', 'www.dr-bejo.com', 'Blog for Business and Education');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(67) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `rating`, `id_pengarang`, `id_penerbit`, `id_kategori`, `gambar`, `deskripsi`, `stok`) VALUES
(130, 'The Study of Language (1)', 3, 147, 28, 207, '233.jpg', 'The Study of Language                                 \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"https://drive.google.com/file/d/1GNRDjPgBiddZQhwr1J37rPyk-yAi5Mnx/view?usp=sharing\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 1),
(131, 'The Basics Literary Theory (1)', 3, 148, 13, 223, '241.jpg', '    The Basics Literary Theory                            \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"https://drive.google.com/file/d/1yPtjHWGdldJEmIYgkIcWARHbZ2gOy25L/view?usp=sharing\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 1),
(132, 'Introduction to Phonetic and Phonology (1)', 3, 149, 18, 207, '251.jpg', 'Introduction to Phonetic and Phonology                                 \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"https://drive.google.com/file/d/1-aZk2X8C9YpEC-MVQbgRVfdxN4nIcigI/view?usp=sharing\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 1),
(134, 'Speech Act and Literary Theory', 4, 150, 12, 223, 'Sandy_Petrey.jpg', 'PDF Only                                 \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"https://drive.google.com/file/d/1qw5EqmazLDp_N5YaeNobYHu3gcqOG8S0/view?usp=sharing\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 50),
(135, 'An Introduction To the Poetry', 0, 153, 18, 223, 'Sylvia_Plath.jpg', '            PDF Only                            \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"https://drive.google.com/file/d/1t5nGWJkKgokrvTrW9mqcVDAVHh-AY3XL/view?usp=sharing\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                  \r\n            ', 50),
(136, 'an Introduction to English Morphology', 4, 154, 26, 207, 'an_Introduction_to_English_Morphology.jpg', ' PDF Only                              \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"https://drive.google.com/file/d/1aJsbJxRcm-9nZIjM1M1LS-sWsJLBiisL/view?usp=sharing\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 50),
(139, 'Fundamental Of Educational Research 2nd Edition', 3, 94, 13, 213, '2021_01_22_1_50_pm_Office_Lens_(3)1.jpg', '                    Fundamental Of Educational Research 2nd Edition                       \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(140, 'The Reading Comitment', 3, 94, 13, 213, '2021_01_22_1_50_pm_Office_Lens_(2).jpg', '                            The Reading Comitment              \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n              \r\n            ', 1),
(141, 'Meaning In LanguageAn Introduction to Semantic and Pragmatic', 3, 121, 13, 207, '2021_01_22_1_50_pm_Office_Lens_(1).jpg', '                    Meaning In LanguageAn Introduction to Semantic and Pragmatic\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(142, 'Collaborative LanguageLearning and Teaching', 3, 121, 13, 207, '2021_01_22_1_50_pm_Office_Lens.jpg', '            Collaborative LanguageLearning and Teaching\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(143, 'Phonetics A Coursebook', 3, 82, 13, 207, '2021_01_22_1_49_pm_Office_Lens_(4).jpg', '            Phonetics A Coursebook\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(144, 'How To Teach Speaking', 3, 94, 13, 207, '', '            How To Teach Speaking\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(145, 'Teaching Enghlish As Foreign Language 2nd Edition', 4, 81, 13, 207, '2021_01_22_1_49_pm_Office_Lens_(3).jpg', '            How To Teach Speaking\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(146, 'Teaching Cooperative Learning ', 4, 94, 13, 207, '2021_01_22_1_49_pm_Office_Lens_(1).jpg', '            Teaching Cooperative Learning \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(147, 'Writing Academic 4th Edition', 4, 94, 13, 207, '2021_01_22_1_49_pm_Office_Lens.jpg', '            Writing Academic 4th Edition\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(148, 'Brief History of English & American Literature', 4, 94, 13, 207, '2021_01_22_1_48_pm_Office_Lens_(3).jpg', 'Brief History of English & American Literature\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                ', -1),
(149, 'Language Curriculum Design ', 4, 94, 13, 207, '2021_01_22_1_48_pm_Office_Lens_(2).jpg', '            Language Curriculum Design \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(150, 'Read, Write, Edit Grammar for College Writer', 5, 43, 13, 213, '2021_01_22_1_48_pm_Office_Lens_(1).jpg', '            Read, Write, Edit Grammar for College Writer\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(151, 'Writing To Communicate', 5, 94, 13, 213, '2021_01_22_1_48_pm_Office_Lens.jpg', '            Writing To Communicate\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(152, 'The Cambridge English Course', 4, 94, 13, 213, '2021_01_22_1_45_pm_Office_Lens_(3).jpg', '            The Cambridge English Course\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(153, 'Teaching English As a Second or Foreign Language 3rd Edition', 3, 94, 13, 213, '2021_01_22_1_45_pm_Office_Lens_(2).jpg', '            Teaching English As a Second or Foreign Language 3rd Edition\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                  \r\n            ', 1),
(154, 'Child Psychology A Contemporary Viewpoint', 4, 94, 13, 224, '2021_01_22_1_45_pm_Office_Lens_(1).jpg', 'Child Psychology A Contemporary Viewpoint\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                ', -1),
(155, 'Educational Psychology Developing Learner 4th Edition', 5, 94, 13, 224, '2021_01_22_1_45_pm_Office_Lens.jpg', 'Educational Psychology Developing Learner 4th Edition\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                ', -1),
(156, 'Proceedings Of THE 59th TEFLIN INTERNATIONAL CONFERENCE', 5, 94, 26, 224, '2021_01_22_1_44_pm_Office_Lens_(3).jpg', 'Proceedings Of THE 59th TEFLIN INTERNATIONAL CONFERENCE\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E Book </b></a>  </div>     \r\n                                ', -1),
(157, 'IELTS Express Upper Intermediate Coursebook', 4, 94, 15, 213, '2021_01_22_1_44_pm_Office_Lens2.jpg', '                                IELTS Express Upper Intermediate Coursebook \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 1),
(158, 'Literature Reading, Reacting, Writing ', 4, 94, 15, 223, '2021_01_22_1_43_pm_Office_Lens_(2).jpg', 'Literature Reading, Reacting, Writing \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>no BOOK</b></a>  </div>     \r\n                                ', 1),
(159, 'Studying The Novel ', 4, 133, 15, 213, '2021_01_22_1_43_pm_Office_Lens_(1).jpg', '                       Studying The Novel           \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 1),
(160, 'Mastering American English ', 4, 94, 15, 213, '2021_01_22_1_42_pm_Office_Lens.jpg', '           Mastering American English \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 1),
(161, 'Understanding Research in Second Language Learning ', 4, 94, 15, 234, '2021_01_22_1_41_pm_Office_Lens_(4).jpg', 'Understanding Research in Second Language Learning \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(162, 'an Introduction to Sociolinguistics 3rd Edition ', 4, 94, 15, 234, '2021_01_22_1_41_pm_Office_Lens_(3).jpg', 'an Introduction to Sociolinguistics 3rd Edition \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(163, 'Commercial Correspondence in English ', 4, 94, 15, 227, '2021_01_22_1_41_pm_Office_Lens_(2).jpg', 'Commercial Correspondence in English \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(164, 'Exploration In Applied Linguistics 2 ', 4, 94, 15, 207, '2021_01_22_1_41_pm_Office_Lens_(1).jpg', 'Exploration In Applied Linguistics 2 \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(165, 'Teaching Listening Comprehension ', 4, 94, 15, 213, '2021_01_22_1_41_pm_Office_Lens.jpg', '             Teaching Listening Comprehension                     \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>DOWNLOAD E-BOOK</b></a>  </div>     \r\n                                ', 1),
(166, 'Teach English ', 4, 94, 15, 213, '2021_01_22_1_40_pm_Office_Lens_(2)2.jpg', '                Teach English                  \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(167, 'Telaah Sastra ', 4, 94, 15, 213, '2021_01_22_1_40_pm_Office_Lens_(1).jpg', '                Telaah Sastra \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(168, 'The Structure Of English ', 4, 94, 15, 207, '2021_01_22_1_39_pm_Office_Lens_(3).jpg', '  The Structure Of English                         \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(169, 'Project in Lingustics', 4, 94, 15, 207, '2021_01_22_1_39_pm_Office_Lens_(2).jpg', '  Project in Lingustics             \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(170, 'The Moral Manager', 4, 94, 15, 227, '2021_01_22_1_39_pm_Office_Lens_(1).jpg', '       The Moral Manager     \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(171, 'Psycholinguistics 2nd Edition', 4, 94, 15, 227, '2021_01_22_1_39_pm_Office_Lens.jpg', 'Psycholinguistics 2nd Edition\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(172, 'Morphology', 4, 94, 15, 207, '2021_01_22_1_38_pm_Office_Lens_(4).jpg', 'Morphology\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(173, 'Language of Business in English ', 4, 94, 16, 207, '2021_01_22_1_37_pm_Office_Lens_(2).jpg', 'Language of Business in English \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(174, 'English Phonetics', 4, 94, 15, 213, '2021_01_22_1_37_pm_Office_Lens_(1).jpg', 'English Phonetics\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(175, 'IELTS Strategies For Study', 4, 94, 15, 213, '2021_01_22_1_37_pm_Office_Lens.jpg', 'IELTS Strategies For Study\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(176, 'Longman Preparation Course for The TOEFL TEST', 4, 94, 15, 213, '2021_01_22_1_36_pm_Office_Lens_(2).jpg', 'Longman Preparation Course for The TOEFL TEST\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(177, 'How To Teach Pronunciation', 4, 94, 15, 213, '2021_01_22_1_36_pm_Office_Lens_(1).jpg', 'How To Teach Pronunciation\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(178, 'Literature in English Test Practice Book', 4, 94, 16, 213, '2021_01_22_1_36_pm_Office_Lens.jpg', 'Literature in English Test Practice Book\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(179, 'Educational Psychology Theory and Practice', 4, 94, 16, 213, '2021_01_22_1_35_pm_Office_Lens_(5).jpg', 'Educational Psychology Theory and Practice\r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(180, 'Instruction 2', 4, 94, 15, 213, '2021_01_22_1_35_pm_Office_Lens_(4).jpg', '           Instruction 2                      \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1),
(181, 'Study Skill For Academic Writing', 4, 94, 15, 213, '2021_01_22_1_35_pm_Office_Lens_(3).jpg', '        Study Skill For Academic Writing             \r\n                                <hr>\r\n                                    <div><a style=\"font-size: 12px;\" href=\"###\" target=\"_blank\" class=\"btn btn-warning text-white btn-sm-2 mt-2\"><b>NO E-BOOK</b></a>  </div>     \r\n                                ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carousel/slider`
--

CREATE TABLE `carousel/slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `promosi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel/slider`
--

INSERT INTO `carousel/slider` (`id`, `gambar`, `judul`, `promosi`, `deskripsi`) VALUES
(1, 'about-img31.png', 'E-Library PTIK', 'Find and get your favorite books ...', ''),
(3, 'page.png', 'We Serve You', 'Search Your Reference You Need ...', ''),
(4, 'banner-3.png', 'Get in Touch with Us!', 'Contact Us for Your References!', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengunjung`
--

CREATE TABLE `data_pengunjung` (
  `id` int(11) NOT NULL,
  `pengunjung` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengunjung`
--

INSERT INTO `data_pengunjung` (`id`, `pengunjung`, `tanggal`) VALUES

(1, 1, '2023-12-09');
INSERT INTO `data_pengunjung` (`id`, `pengunjung`, `tanggal`) VALUES

(2538, 1, '2023-12-11');

CREATE TABLE `kategori_buku` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori`, `kategori`) VALUES
(207, 'LINGUISTICS'),
(208, 'TEFL'),
(209, 'Computer & Technology'),
(210, 'DICTIONARY'),
(212, 'Religion'),
(213, 'Education'),
(218, 'Broadcast & Journalism'),
(223, 'Literature'),
(224, 'Psychology'),
(225, 'Public Speaking'),
(227, 'BUSINESS'),
(228, 'Curriculum'),
(233, 'Culture'),
(234, 'Research Methodology'),
(235, 'Translation'),
(239, 'Hotel & Tourism'),
(240, 'English Language Test');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_hp` varchar(59) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `batas_pinjam` date NOT NULL,
  `jml_pinjam` int(50) NOT NULL,
  `denda` int(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--



-- --------------------------------------------------------

--
-- Table structure for table `penerbit_buku`
--

CREATE TABLE `penerbit_buku` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(58) NOT NULL,
  `tahun_terbit` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--


-- --------------------------------------------------------

--
-- Table structure for table `pengarang_buku`
--

CREATE TABLE `pengarang_buku` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `textbase`
--

CREATE TABLE `textbase` (
  `id` int(11) NOT NULL,
  `title` varchar(58) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textbase`
--

INSERT INTO `textbase` (`id`, `title`, `text`) VALUES
(9, 'Halaman 1', '<p style=\"text-align: center; \"><img src=\"http://localhost/simicod_perpus/./upload/txtbase/Screenshot_(49).png\" style=\"width: 365px;\"></p><h3 style=\"text-align: center; \">Battle Throught The Heavens&nbsp;</h3><p style=\"text-align: center;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p style=\"text-align: center;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p style=\"text-align: center;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p style=\"text-align: center;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p style=\"text-align: center;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p style=\"text-align: center;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p style=\"text-align: center;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p style=\"text-align: center;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p style=\"text-align: center;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p style=\"text-align: center;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p style=\"text-align: center;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p style=\"text-align: center;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(10, 'Halaman 2', '<p style=\"text-align: center; \"><img src=\"http://localhost/simicod_perpus/./upload/txtbase/Screenshot_(45)2.png\" style=\"width: 365px;\"><u><br></u></p><p style=\"text-align: center; \"></p><h3 style=\"text-align: center;\"><u>Naruto The Movie 3&nbsp;</u></h3><h3 style=\"text-align: center;\"><span style=\"font-weight: normal;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></h3><h3 style=\"text-align: center;\"><span style=\"font-weight: normal;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span></h3><h3 style=\"text-align: center;\"><span style=\"font-weight: normal;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span></h3><h3 style=\"text-align: center;\"><span style=\"font-weight: normal;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span></h3><h3 style=\"text-align: center;\"><span style=\"font-weight: normal;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span></h3><h3 style=\"text-align: center;\"></h3><h3 style=\"text-align: center;\"><span style=\"font-weight: normal;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></h3><h3 style=\"text-align: center;\"><span style=\"font-weight: normal;\"><br></span></h3><h3 style=\"text-align: center;\"><u><br></u></h3><div style=\"text-align: center;\"><br></div><p></p>'),
(11, 'Halaman 3', '<p style=\"text-align: center; \"><img src=\"http://localhost/simicod_perpus/./upload/txtbase/Screenshot_(42).png\" style=\"width: 365px;\"></p><h4 style=\"text-align: center; \">Play Step By Step</h4><p style=\"text-align: center;\">Ke 2</p><p style=\"text-align: center;\"><br><img src=\"http://localhost/simicod_perpus/./upload/txtbase/Screenshot_(49)1.png\" style=\"width: 365px;\"></p><h4 style=\"text-align: center;\">Step By 2</h4><p style=\"text-align: center;\">Ke 3</p><p style=\"text-align: center;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p style=\"text-align: center;\">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p style=\"text-align: center;\">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p style=\"text-align: center;\">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p style=\"text-align: center;\">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p style=\"text-align: center;\">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(43) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `alamat` text,
  `no_hp` varchar(59) NOT NULL,
  `foto` varchar(35) NOT NULL,
  `id_level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `email`, `nama`, `alamat`, `no_hp`, `foto`, `id_level`, `status`) VALUES
(3, '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 'Super Admin', 'Bekasi', '08159781395', 'Logo-eperpus1.png', 1, 1),
(30, 'bejosutrisno', '4b1a16422108f96023f016a8da4bb274e9021620', 'bejo@stibaiec.ac.id', 'bejosutrisno', 'Bekasi', '08159781395', 'IMG_20191122_095728.jpg', 2, 1),
(37, 'anisa2019@stibaiec.ac.id', '8e6b0d6995fb565f572b404cf550c514cf151980', 'anisa2019@stibaiec.ac.id', 'Anisa Wirdasari', 'DKI Jakarta', '62', 'Anisa2.jpg', 2, 1),
(56, NULL, '315f166c5aca63a157f7d41007675cb44a948b33', 'admin2@gmail.com', 'admin2', 'jejalenjaya\r\nTaman Kintamani', '08159781395', 'Logo_LP2.png', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `bg_login`
--
ALTER TABLE `bg_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_pengarang` (`id_pengarang`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `carousel/slider`
--
ALTER TABLE `carousel/slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `penerbit_buku`
--
ALTER TABLE `penerbit_buku`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang_buku`
--
ALTER TABLE `pengarang_buku`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textbase`
--
ALTER TABLE `textbase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `level_id` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `carousel/slider`
--
ALTER TABLE `carousel/slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2539;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `penerbit_buku`
--
ALTER TABLE `penerbit_buku`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pengarang_buku`
--
ALTER TABLE `pengarang_buku`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `textbase`
--
ALTER TABLE `textbase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
