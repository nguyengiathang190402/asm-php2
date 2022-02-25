-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th2 25, 2022 lúc 08:51 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php2_asm1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `is_correct` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answers`
--

INSERT INTO `answers` (`id`, `content`, `question_id`, `is_correct`, `img`) VALUES
(1, 'Đúng', 6, 1, NULL),
(2, 'Sai', 6, 0, NULL),
(3, 'fpt polytechnic', 11, 1, NULL),
(4, 'yes', 26, 1, NULL),
(5, 'no', 26, NULL, NULL),
(6, '2', 27, 1, NULL),
(7, '3', 27, NULL, NULL),
(8, '5', 27, NULL, NULL),
(9, '1', 28, NULL, NULL),
(10, '2', 28, 1, NULL),
(11, 'cả 2', 6, NULL, NULL),
(12, '2', 31, 1, NULL),
(13, '1', 31, NULL, NULL),
(14, '4', 31, NULL, NULL),
(15, '4', 32, 1, NULL),
(16, '4', 35, 1, NULL),
(17, '3', 35, NULL, NULL),
(18, '2', 35, NULL, NULL),
(19, '1', 35, NULL, NULL),
(20, '6', 36, NULL, NULL),
(21, '5', 36, 1, NULL),
(22, '3', 36, NULL, NULL),
(23, '7', 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `name`, `quiz_id`, `img`) VALUES
(6, 'ĐI học ?', 8, NULL),
(11, 'Trường tên là gì', 30, NULL),
(24, 'đi chơi ?', 8, NULL),
(25, 'đi chơi', 8, NULL),
(27, '1+1=?', 38, NULL),
(28, '1+1=?', 41, NULL),
(29, 'đi ngủ ?', NULL, NULL),
(31, '1+1=?\r\n', 42, NULL),
(32, '2+2=?\r\n', 42, NULL),
(35, '2+2= ?', 49, NULL),
(36, '10-5=?', 49, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quizs`
--

CREATE TABLE `quizs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `duration_minutes` int(11) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_shuffle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quizs`
--

INSERT INTO `quizs` (`id`, `name`, `subject_id`, `duration_minutes`, `start_time`, `end_time`, `status`, `is_shuffle`) VALUES
(31, 'quiz1', 39, 5, '2022-02-08 23:10:00', '2022-02-08 23:15:00', 1, 1),
(32, 'quiz1', 42, 5, '2022-02-09 18:22:00', '2022-02-09 18:27:00', 1, 1),
(37, 'quiz2', 41, 2, '2022-02-11 11:50:00', '2022-02-11 11:53:00', 1, 1),
(38, 'Quiz 1', 53, 3, '2022-02-11 14:24:00', '2022-02-11 14:27:00', 1, 1),
(41, 'Quiz 2', 53, 1, '2022-02-11 15:16:00', '2022-02-11 15:17:00', 1, 1),
(42, 'Final quiz', 53, 4, '2022-02-22 16:13:00', '2022-02-22 16:17:00', 1, 0),
(43, 'Final quiz', 53, NULL, '2022-02-22 16:14:00', '2022-02-22 16:19:00', 0, 1),
(44, 'Quiz 1', 55, 10, '2022-02-22 22:00:00', '2022-02-22 22:10:00', 1, 1),
(45, 'quiz1', 41, 4, '2022-02-23 14:49:00', '2022-02-23 14:53:00', 1, 1),
(46, 'quiz1', 43, 5, '2022-02-23 14:50:00', '2022-02-23 14:55:00', 1, 1),
(47, 'quiz1', 56, 5, '2022-02-23 15:40:00', '2022-02-23 15:45:00', 1, 1),
(48, 'quiz1', 31, 5, '2022-02-23 16:35:00', '2022-02-23 16:40:00', 1, 1),
(49, 'Quiz 2', 31, 5, '2022-02-23 22:05:00', '2022-02-23 22:10:00', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Giáo viên'),
(2, 'Sinh viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_quizs`
--

CREATE TABLE `student_quizs` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `score` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_quiz_detail`
--

CREATE TABLE `student_quiz_detail` (
  `student_quiz_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `author_id`) VALUES
(31, 'Xây dựng web', NULL),
(39, 'PHP1', NULL),
(41, 'Tin học', NULL),
(42, 'Js', NULL),
(43, 'Dự án mẫu', NULL),
(53, 'C++', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `role_id`) VALUES
(13, 'Nguyễn Gia Thắng', 'admin@gmail.com', '$2y$10$oBV4irN/ZFqDs5e.uzeglOp6wQHtDRGWdAxcwTmbBbeH627RAOJFG', NULL, 1),
(15, 'Sinh Viên', 'sinhvien@gmail.com', '$2y$10$jH1eKVkXWZPI3xrQosT//uorOYEgM.eyHJZEPNsGXsAUJIIt9GyZC', NULL, 2),
(16, 'Gia Thắng', 'thang123@gmail.com', '$2y$10$u6OksAGndAwWFyJZ3pJKsuUR8l0/UBjpjBrbhnM1lXYClmkMV5Kiy', NULL, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quizs`
--
ALTER TABLE `quizs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student_quizs`
--
ALTER TABLE `student_quizs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student_quiz_detail`
--
ALTER TABLE `student_quiz_detail`
  ADD PRIMARY KEY (`student_quiz_id`,`question_id`,`answer_id`) USING BTREE;

--
-- Chỉ mục cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `quizs`
--
ALTER TABLE `quizs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `student_quizs`
--
ALTER TABLE `student_quizs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
