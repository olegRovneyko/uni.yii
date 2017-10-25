-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 25 2017 г., 22:53
-- Версия сервера: 5.6.34
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `uniprint`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `description`, `image`, `parent_id`) VALUES
(1, 'летная одежда', NULL, 's001', 6),
(2, 'осенняя одежда', NULL, 'o010', 6),
(3, 'для новорожденных', NULL, 'a005', 6),
(4, 'детское белье', NULL, 'n003', 6),
(5, 'визитные карточки', NULL, NULL, 7),
(6, 'печать на текстиле', NULL, NULL, 0),
(7, 'офсетная печать', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `dc_order`
--

CREATE TABLE `dc_order` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `cover` enum('white','silver','gold','') NOT NULL DEFAULT 'white',
  `barcode` tinyint(1) NOT NULL DEFAULT '0',
  `number` tinyint(1) NOT NULL DEFAULT '0',
  `signature` tinyint(1) NOT NULL DEFAULT '0',
  `magnet` tinyint(1) NOT NULL DEFAULT '0',
  `scketch` tinyint(1) NOT NULL DEFAULT '0',
  `emboss` tinyint(1) NOT NULL DEFAULT '0',
  `design` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT 'не указана',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT 'не указан',
  `info` varchar(255) DEFAULT 'не указана',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `sum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dc_order`
--

INSERT INTO `dc_order` (`id`, `count`, `cover`, `barcode`, `number`, `signature`, `magnet`, `scketch`, `emboss`, `design`, `name`, `company`, `phone`, `email`, `info`, `created_at`, `updated_at`, `sum`) VALUES
(9, 50, 'silver', 0, 0, 0, 0, 0, 1, 0, 'oleg', '', '0955476823', '', '', '2017-10-25 19:38:58', '2017-10-25 19:38:58', 800),
(10, 100, 'white', 0, 1, 0, 0, 0, 0, 0, 'oleg', '', '0955476823', '', '', '2017-10-25 19:44:52', '2017-10-25 19:44:52', 330);

-- --------------------------------------------------------

--
-- Структура таблицы `dc_price`
--

CREATE TABLE `dc_price` (
  `id` int(11) NOT NULL,
  `count` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `gold_cover` float NOT NULL,
  `barcode` float NOT NULL,
  `number` float NOT NULL,
  `signature` float NOT NULL,
  `magnet` float NOT NULL,
  `scketch` float NOT NULL,
  `emboss` float NOT NULL,
  `design` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dc_price`
--

INSERT INTO `dc_price` (`id`, `count`, `price`, `gold_cover`, `barcode`, `number`, `signature`, `magnet`, `scketch`, `emboss`, `design`) VALUES
(1, 'до 99', 15, 1, 1, 1, 2, 2, 0, 0, 250),
(2, 'от 100 до 299', 2.7, 1, 0.6, 0.6, 1, 2, 0, 0, 250),
(3, 'от 300 до 499', 2.6, 0.55, 0.3, 0.15, 0.6, 2, 0, 0, 250),
(4, 'от 500 до 999', 2.3, 0.5, 0.15, 0.15, 0.5, 1.5, 0, 0, 250),
(7, 'от 1000 до 1999', 1.89, 0.42, 0.1, 0.1, 0.45, 1.2, 0, 0, 250),
(8, 'от 2000 до 2999', 1.88, 0.4, 0.1, 0.1, 0.4, 1.2, 0, 0, 250),
(9, 'от 3000 до 4999', 1.86, 0.38, 0.1, 0.05, 0.3, 1, 0, 0, 250),
(10, 'более 5000', 1.81, 0.35, 0.05, 0.05, 0.3, 1, 0, 0, 250);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `vendor_id` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `vendor_id`, `title`, `category_id`, `image`, `description`) VALUES
(1, 'v-001', '', 5, 'v001', ''),
(2, 'v-002', '', 5, 'v002', ''),
(3, 'v-003', '', 5, 'v003', ''),
(4, 'v-004', '', 5, 'v004', ''),
(5, 'v-005', '', 5, 'v005', ''),
(6, 'v-006', '', 5, 'v006', ''),
(7, 'v-007', '', 5, 'v007', ''),
(8, 'v-008', '', 5, 'v008', ''),
(9, 'v-009', '', 5, 'v009', ''),
(10, 'v-010', '', 5, 'v010', ''),
(11, 'v-011', '', 5, 'v011', ''),
(12, 'v-012', '', 5, 'v012', ''),
(13, 'v-013', '', 5, 'v013', ''),
(101, 's-001', '', 1, 's001', ''),
(102, 's-002', '', 1, 's002', ''),
(103, 's-003', '', 1, 's003', ''),
(104, 's-004', '', 1, 's004', ''),
(105, 's-005', '', 1, 's005', ''),
(106, 's-006', '', 1, 's006', ''),
(107, 's-007', '', 1, 's007', ''),
(108, 's-008', '', 1, 's008', ''),
(109, 's-009', '', 1, 's009', ''),
(110, 's-010', '', 1, 's010', ''),
(111, 's-011', '', 1, 's011', ''),
(112, 's-012', '', 1, 's012', ''),
(113, 's-013', '', 1, 's013', ''),
(114, 's-014', '', 1, 's014', ''),
(115, 's-015', '', 1, 's015', ''),
(116, 's-016', '', 1, 's016', ''),
(117, 's-017', '', 1, 's017', ''),
(118, 's-018', '', 1, 's018', ''),
(119, 's-019', '', 1, 's019', ''),
(120, 's-020', '', 1, 's020', ''),
(121, 's-021', '', 1, 's021', ''),
(122, 's-022', '', 1, 's022', ''),
(123, 's-023', '', 1, 's023', ''),
(124, 's-024', '', 1, 's024', ''),
(125, 's-025', '', 1, 's025', ''),
(126, 's-026', '', 1, 's026', ''),
(127, 's-027', '', 1, 's027', ''),
(128, 's-028', '', 1, 's028', ''),
(129, 's-029', '', 1, 's029', ''),
(130, 's-030', '', 1, 's030', ''),
(131, 's-031', '', 1, 's031', ''),
(132, 's-032', '', 1, 's032', ''),
(133, 's-033', '', 1, 's033', ''),
(134, 's-034', '', 1, 's034', ''),
(135, 's-035', '', 1, 's035', ''),
(136, 's-036', '', 1, 's036', ''),
(137, 's-037', '', 1, 's037', ''),
(138, 's-038', '', 1, 's038', ''),
(139, 's-039', '', 1, 's039', ''),
(140, 's-040', '', 1, 's040', ''),
(141, 's-041', '', 1, 's041', ''),
(142, 's-042', '', 1, 's042', ''),
(143, 's-043', '', 1, 's043', ''),
(144, 's-044', '', 1, 's044', ''),
(145, 's-045', '', 1, 's045', ''),
(146, 's-046', '', 1, 's046', ''),
(147, 's-047', '', 1, 's047', ''),
(148, 's-048', '', 1, 's048', ''),
(149, 's-049', '', 1, 's049', ''),
(150, 's-050', '', 1, 's050', ''),
(151, 's-051', '', 1, 's051', ''),
(152, 's-052', '', 1, 's052', ''),
(153, 's-053', '', 1, 's053', ''),
(154, 's-054', '', 1, 's054', ''),
(155, 's-055', '', 1, 's055', ''),
(156, 's-056', '', 1, 's056', ''),
(157, 's-057', '', 1, 's057', ''),
(158, 's-058', '', 1, 's058', ''),
(159, 's-059', '', 1, 's059', ''),
(160, 's-060', '', 1, 's060', ''),
(161, 's-061', '', 1, 's061', ''),
(162, 's-062', '', 1, 's062', ''),
(163, 's-063', '', 1, 's063', ''),
(164, 's-064', '', 1, 's064', ''),
(165, 's-065', '', 1, 's065', ''),
(166, 's-066', '', 1, 's066', ''),
(167, 's-067', '', 1, 's067', ''),
(168, 's-068', '', 1, 's068', ''),
(169, 's-069', '', 1, 's069', ''),
(170, 's-070', '', 1, 's070', ''),
(171, 's-071', '', 1, 's071', ''),
(172, 's-072', '', 1, 's072', ''),
(173, 's-073', '', 1, 's073', ''),
(174, 's-074', '', 1, 's074', ''),
(175, 's-075', '', 1, 's075', ''),
(176, 's-076', '', 1, 's076', ''),
(177, 's-077', '', 1, 's077', ''),
(178, 's-078', '', 1, 's078', ''),
(179, 's-079', '', 1, 's079', ''),
(180, 's-080', '', 1, 's080', ''),
(181, 's-081', '', 1, 's081', ''),
(182, 's-082', '', 1, 's082', ''),
(183, 's-083', '', 1, 's083', ''),
(184, 's-084', '', 1, 's084', ''),
(185, 's-085', '', 1, 's085', ''),
(186, 's-086', '', 1, 's086', ''),
(187, 's-087', '', 1, 's087', ''),
(188, 's-088', '', 1, 's088', ''),
(189, 's-089', '', 1, 's089', ''),
(190, 's-090', '', 1, 's090', ''),
(191, 's-091', '', 1, 's091', ''),
(192, 's-092', '', 1, 's092', ''),
(193, 's-093', '', 1, 's093', ''),
(194, 's-094', '', 1, 's094', ''),
(195, 's-095', '', 1, 's095', ''),
(196, 's-096', '', 1, 's096', ''),
(197, 's-097', '', 1, 's097', ''),
(198, 's-098', '', 1, 's098', ''),
(199, 's-099', '', 1, 's099', ''),
(200, 's-100', '', 1, 's100', ''),
(201, 's-101', '', 1, 's101', ''),
(202, 's-102', '', 1, 's102', ''),
(203, 's-103', '', 1, 's103', ''),
(204, 's-104', '', 1, 's104', ''),
(205, 's-105', '', 1, 's105', ''),
(206, 's-106', '', 1, 's106', ''),
(207, 's-107', '', 1, 's107', ''),
(208, 's-108', '', 1, 's108', ''),
(209, 's-109', '', 1, 's109', ''),
(210, 's-110', '', 1, 's110', ''),
(211, 's-111', '', 1, 's111', ''),
(212, 's-112', '', 1, 's112', ''),
(213, 's-113', '', 1, 's113', ''),
(214, 's-114', '', 1, 's114', ''),
(215, 's-115', '', 1, 's115', ''),
(216, 's-116', '', 1, 's116', ''),
(217, 's-117', '', 1, 's117', ''),
(218, 's-118', '', 1, 's118', ''),
(219, 's-119', '', 1, 's119', ''),
(220, 's-120', '', 1, 's120', ''),
(221, 's-121', '', 1, 's121', ''),
(222, 's-122', '', 1, 's122', ''),
(223, 's-123', '', 1, 's123', ''),
(224, 's-124', '', 1, 's124', ''),
(225, 's-125', '', 1, 's125', ''),
(226, 's-126', '', 1, 's126', ''),
(227, 's-127', '', 1, 's127', ''),
(228, 's-128', '', 1, 's128', ''),
(229, 's-129', '', 1, 's129', ''),
(230, 's-130', '', 1, 's130', ''),
(231, 's-131', '', 1, 's131', ''),
(232, 's-132', '', 1, 's132', ''),
(233, 's-133', '', 1, 's133', ''),
(234, 's-134', '', 1, 's134', ''),
(235, 's-135', '', 1, 's135', ''),
(236, 's-136', '', 1, 's136', ''),
(237, 's-137', '', 1, 's137', ''),
(238, 's-138', '', 1, 's138', ''),
(239, 's-139', '', 1, 's139', ''),
(240, 's-140', '', 1, 's140', ''),
(241, 's-141', '', 1, 's141', ''),
(242, 's-142', '', 1, 's142', ''),
(243, 's-143', '', 1, 's143', ''),
(244, 's-144', '', 1, 's144', ''),
(245, 's-145', '', 1, 's145', ''),
(246, 's-146', '', 1, 's146', ''),
(247, 's-147', '', 1, 's147', ''),
(248, 's-148', '', 1, 's148', ''),
(249, 's-149', '', 1, 's149', ''),
(250, 's-150', '', 1, 's150', ''),
(251, 's-151', '', 1, 's151', ''),
(252, 's-152', '', 1, 's152', ''),
(253, 's-153', '', 1, 's153', ''),
(254, 's-154', '', 1, 's154', ''),
(255, 's-155', '', 1, 's155', ''),
(256, 's-156', '', 1, 's156', ''),
(257, 's-157', '', 1, 's157', ''),
(258, 's-158', '', 1, 's158', ''),
(259, 's-159', '', 1, 's159', ''),
(260, 's-160', '', 1, 's160', ''),
(261, 's-161', '', 1, 's161', ''),
(262, 's-162', '', 1, 's162', ''),
(263, 's-163', '', 1, 's163', ''),
(264, 's-164', '', 1, 's164', ''),
(265, 's-165', '', 1, 's165', ''),
(266, 'o-001', '', 2, 'o001', ''),
(267, 'o-002', '', 2, 'o002', ''),
(268, 'o-003', '', 2, 'o003', ''),
(269, 'o-004', '', 2, 'o004', ''),
(270, 'o-005', '', 2, 'o005', ''),
(271, 'o-006', '', 2, 'o006', ''),
(272, 'o-007', '', 2, 'o007', ''),
(273, 'o-008', '', 2, 'o008', ''),
(274, 'o-009', '', 2, 'o009', ''),
(275, 'o-010', '', 2, 'o010', ''),
(276, 'o-011', '', 2, 'o011', ''),
(277, 'o-012', '', 2, 'o012', ''),
(278, 'o-013', '', 2, 'o013', ''),
(279, 'o-014', '', 2, 'o014', ''),
(280, 'o-015', '', 2, 'o015', ''),
(281, 'o-016', '', 2, 'o016', ''),
(282, 'o-017', '', 2, 'o017', ''),
(283, 'o-018', '', 2, 'o018', ''),
(284, 'o-019', '', 2, 'o019', ''),
(285, 'o-020', '', 2, 'o020', ''),
(286, 'o-021', '', 2, 'o021', ''),
(287, 'o-022', '', 2, 'o022', ''),
(288, 'o-023', '', 2, 'o023', ''),
(289, 'o-024', '', 2, 'o024', ''),
(290, 'o-025', '', 2, 'o025', ''),
(291, 'o-026', '', 2, 'o026', ''),
(292, 'o-027', '', 2, 'o027', ''),
(293, 'o-028', '', 2, 'o028', ''),
(294, 'o-029', '', 2, 'o029', ''),
(295, 'o-030', '', 2, 'o030', ''),
(296, 'o-031', '', 2, 'o031', ''),
(297, 'o-032', '', 2, 'o032', ''),
(298, 'o-033', '', 2, 'o033', ''),
(299, 'o-034', '', 2, 'o034', ''),
(300, 'o-035', '', 2, 'o035', ''),
(301, 'o-036', '', 2, 'o036', ''),
(302, 'o-037', '', 2, 'o037', ''),
(303, 'o-038', '', 2, 'o038', ''),
(304, 'o-039', '', 2, 'o039', ''),
(305, 'o-040', '', 2, 'o040', ''),
(306, 'o-041', '', 2, 'o041', ''),
(307, 'o-042', '', 2, 'o042', ''),
(308, 'o-043', '', 2, 'o043', ''),
(309, 'a-001', '', 3, 'a001', ''),
(310, 'a-002', '', 3, 'a002', ''),
(311, 'a-003', '', 3, 'a003', ''),
(312, 'a-004', '', 3, 'a004', ''),
(313, 'a-005', '', 3, 'a005', ''),
(314, 'o-044', '', 2, 'o044', ''),
(315, 'o-045', '', 2, 'o045', ''),
(316, 'a-006', '', 3, 'a006', ''),
(317, 'a-007', '', 3, 'a007', ''),
(318, 'a-008', '', 3, 'a008', ''),
(319, 'a-009', '', 3, 'a009', ''),
(320, 'a-010', '', 3, 'a010', ''),
(321, 'a-011', '', 3, 'a011', ''),
(322, 'a-012', '', 3, 'a012', ''),
(323, 'a-013', '', 3, 'a013', ''),
(324, 'a-014', '', 3, 'a014', ''),
(325, 'a-015', '', 3, 'a015', ''),
(326, 'a-016', '', 3, 'a016', ''),
(327, 'a-017', '', 3, 'a017', ''),
(328, 'a-018', '', 3, 'a018', ''),
(329, 'a-019', '', 3, 'a019', ''),
(330, 'a-020', '', 3, 'a020', ''),
(331, 'a-021', '', 3, 'a021', ''),
(332, 'a-022', '', 3, 'a022', ''),
(333, 'a-023', '', 3, 'a023', ''),
(334, 'a-024', '', 3, 'a024', ''),
(335, 'a-025', '', 3, 'a025', ''),
(336, 'a-026', '', 3, 'a026', ''),
(337, 'a-027', '', 3, 'a027', ''),
(338, 'a-028', '', 3, 'a028', ''),
(339, 'a-029', '', 3, 'a029', ''),
(340, 'a-030', '', 3, 'a030', ''),
(341, 'a-031', '', 3, 'a031', ''),
(342, 'a-032', '', 3, 'a032', ''),
(343, 'a-033', '', 3, 'a033', ''),
(344, 'a-034', '', 3, 'a034', ''),
(345, 'a-035', '', 3, 'a035', ''),
(346, 'a-036', '', 3, 'a036', ''),
(347, 'a-037', '', 3, 'a037', ''),
(348, 'a-038', '', 3, 'a038', ''),
(349, 'a-039', '', 3, 'a039', ''),
(350, 'a-040', '', 3, 'a040', ''),
(351, 'o-046', '', 2, 'o046', ''),
(352, 'o-047', '', 2, 'o047', ''),
(353, 'o-048', '', 2, 'o048', ''),
(354, 'o-049', '', 2, 'o049', ''),
(355, 'n-001', '', 4, 'n001', ''),
(356, 'n-002', '', 4, 'n002', ''),
(357, 'n-003', '', 4, 'n003', ''),
(358, 'n-004', '', 4, 'n004', ''),
(359, 'n-005', '', 4, 'n005', ''),
(360, 'n-006', '', 4, 'n006', ''),
(361, 'n-007', '', 4, 'n007', ''),
(362, 'n-008', '', 4, 'n008', ''),
(363, 'n-009', '', 4, 'n009', ''),
(364, 'n-010', '', 4, 'n010', ''),
(365, 'n-011', '', 4, 'n011', ''),
(366, 'n-012', '', 4, 'n012', ''),
(367, 'n-013', '', 4, 'n013', ''),
(368, 'v-014', '', 5, 'v014', ''),
(369, 'v-015', '', 5, 'v015', ''),
(370, 'v-016', '', 5, 'v016', ''),
(371, 'v-017', '', 5, 'v017', ''),
(372, 'v-018', '', 5, 'v018', ''),
(373, 'v-019', '', 5, 'v019', ''),
(374, 'v-020', '', 5, 'v020', ''),
(375, 'v-021', '', 5, 'v021', ''),
(376, 'v-022', '', 5, 'v022', ''),
(377, 'v-023', '', 5, 'v023', ''),
(378, 'v-024', '', 5, 'v024', ''),
(379, 'v-025', '', 5, 'v025', ''),
(380, 'v-026', '', 5, 'v026', ''),
(381, 'v-027', '', 5, 'v027', ''),
(382, 'v-028', '', 5, 'v028', ''),
(383, 'v-029', '', 5, 'v029', ''),
(384, 'v-030', '', 5, 'v030', ''),
(385, 'v-031', '', 5, 'v031', ''),
(386, 'v-032', '', 5, 'v032', ''),
(387, 'v-033', '', 5, 'v033', ''),
(388, 'v-034', '', 5, 'v034', ''),
(389, 'v-035', '', 5, 'v035', ''),
(390, 'v-036', '', 5, 'v036', ''),
(391, 'v-037', '', 5, 'v037', ''),
(392, 'v-038', '', 5, 'v038', ''),
(393, 'v-039', '', 5, 'v039', ''),
(394, 'v-040', '', 5, 'v040', ''),
(395, 'v-041', '', 5, 'v041', ''),
(396, 'v-042', '', 5, 'v042', ''),
(397, 'v-043', '', 5, 'v043', ''),
(398, 'v-044', '', 5, 'v044', ''),
(399, 'v-045', '', 5, 'v045', ''),
(400, 'v-046', '', 5, 'v046', ''),
(401, 'v-047', '', 5, 'v047', ''),
(402, 'v-048', '', 5, 'v048', ''),
(403, 'v-049', '', 5, 'v049', ''),
(404, 'v-050', '', 5, 'v050', ''),
(405, 'v-051', '', 5, 'v051', ''),
(406, 'v-052', '', 5, 'v052', ''),
(407, 'v-053', '', 5, 'v053', ''),
(408, 'v-054', '', 5, 'v054', ''),
(409, 'v-055', '', 5, 'v055', ''),
(410, 'v-056', '', 5, 'v056', ''),
(411, 'v-057', '', 5, 'v057', ''),
(412, 'v-058', '', 5, 'v058', ''),
(413, 'v-059', '', 5, 'v059', ''),
(414, 'v-060', '', 5, 'v060', ''),
(415, 'v-061', '', 5, 'v061', ''),
(416, 'v-062', '', 5, 'v062', ''),
(417, 'v-063', '', 5, 'v063', ''),
(418, 'v-064', '', 5, 'v064', ''),
(419, 'v-065', '', 5, 'v065', ''),
(420, 'v-066', '', 5, 'v066', ''),
(421, 'v-067', '', 5, 'v067', ''),
(422, 'v-068', '', 5, 'v068', ''),
(423, 'v-069', '', 5, 'v069', ''),
(424, 'v-070', '', 5, 'v070', ''),
(425, 'v-071', '', 5, 'v071', ''),
(426, 'v-072', '', 5, 'v072', ''),
(427, 'v-073', '', 5, 'v073', '');

-- --------------------------------------------------------

--
-- Структура таблицы `ss_price`
--

CREATE TABLE `ss_price` (
  `id` int(11) NOT NULL,
  `size` varchar(2) NOT NULL,
  `count` varchar(20) NOT NULL,
  `one` float(10,2) NOT NULL,
  `two` float(10,2) NOT NULL,
  `three` float(10,2) NOT NULL,
  `four` float(10,2) NOT NULL,
  `five` float(10,2) NOT NULL,
  `six` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ss_price`
--

INSERT INTO `ss_price` (`id`, `size`, `count`, `one`, `two`, `three`, `four`, `five`, `six`) VALUES
(46, 'a4', '51 - 75', 6.00, 9.00, 12.00, 15.00, 18.00, 21.00),
(47, 'a4', '76 - 100', 5.00, 7.00, 9.00, 11.00, 13.00, 15.00),
(48, 'a4', '101 - 150', 4.50, 6.50, 8.50, 10.50, 12.50, 14.50),
(49, 'a4', '151 - 200', 4.00, 6.00, 8.00, 10.00, 12.00, 14.00),
(50, 'a4', '201 - 300', 3.50, 4.50, 5.50, 6.50, 7.50, 8.50),
(51, 'a4', '301 - 400', 3.00, 4.00, 5.00, 6.00, 7.00, 8.00),
(52, 'a4', '401 - 500', 2.50, 3.50, 4.50, 5.50, 6.50, 7.50),
(53, 'a4', '501 - 1000', 2.00, 3.00, 4.00, 5.00, 6.00, 7.00),
(54, 'a4', 'более 1000', 1.50, 2.50, 3.50, 4.50, 5.50, 6.50),
(55, 'a3', '51 - 100', 8.00, 11.00, 14.00, 17.00, 20.00, 23.00),
(56, 'a3', '101 - 200', 7.00, 9.00, 11.00, 13.00, 15.00, 17.00),
(57, 'a3', '201 - 300', 6.00, 8.00, 10.00, 12.00, 14.00, 16.00),
(58, 'a3', '301 - 400', 5.00, 7.00, 9.00, 11.00, 13.00, 15.00),
(59, 'a3', '401 - 500', 4.00, 6.00, 8.00, 10.00, 12.00, 14.00),
(60, 'a3', 'более 500', 3.00, 4.00, 5.00, 6.00, 7.00, 8.00);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$TAN5UYcDu8nGRkne6Ff2tuMb5wpyqnVo5NeUOTeXz.SMvecWZfo8O', 'u2KOoMbU2jKU0Z90c2Z3ml5tsO1BCNge');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inx-category-parent_id` (`parent_id`) USING BTREE;

--
-- Индексы таблицы `dc_order`
--
ALTER TABLE `dc_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dc_price`
--
ALTER TABLE `dc_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inx-product-category_id` (`category_id`) USING BTREE;

--
-- Индексы таблицы `ss_price`
--
ALTER TABLE `ss_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `dc_order`
--
ALTER TABLE `dc_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `dc_price`
--
ALTER TABLE `dc_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;
--
-- AUTO_INCREMENT для таблицы `ss_price`
--
ALTER TABLE `ss_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-product-category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
