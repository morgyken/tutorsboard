-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 06:18 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeassign`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_levels`
--

CREATE TABLE `academic_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_level` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_levels`
--

INSERT INTO `academic_levels` (`id`, `created_at`, `updated_at`, `remember_token`, `academic_level`) VALUES
(1, NULL, NULL, NULL, 'masters'),
(2, NULL, NULL, NULL, 'College'),
(5, NULL, NULL, NULL, 'High School'),
(6, NULL, NULL, NULL, 'PHD'),
(9, NULL, NULL, NULL, 'First Year'),
(12, NULL, NULL, NULL, 'Second Year Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `accept_questions`
--

CREATE TABLE `accept_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_questions`
--

CREATE TABLE `assign_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assigned` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancel_questions`
--

CREATE TABLE `cancel_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_fileuploads`
--

CREATE TABLE `comment_fileuploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dispute_questions`
--

CREATE TABLE `dispute_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finished_questions`
--

CREATE TABLE `finished_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latesubmissions_models`
--

CREATE TABLE `latesubmissions_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_13_210813_create_assign_questions_table', 1),
(4, '2017_07_13_212730_create_post_answers_table', 1),
(5, '2017_07_15_130716_create_suggest_price_increases_table', 1),
(6, '2017_07_15_140158_create_suggest_deadlines_table', 1),
(7, '2017_08_13_120444_create_question_bodies_table', 1),
(8, '2017_08_13_120858_create_question_students_table', 1),
(9, '2017_08_18_153206_create_post_question_prices_table', 1),
(10, '2017_08_20_203502_create_question_owner_tables_table', 1),
(11, '2017_08_21_170516_create_postcomment_models_table', 1),
(12, '2017_08_26_173116_create_payment_models_table', 1),
(13, '2017_09_02_081931_create_accept_questions_table', 1),
(14, '2017_09_02_081943_create_reassign_questions_table', 1),
(15, '2017_09_02_081957_create_dispute_questions_table', 1),
(16, '2017_09_02_082021_create_cancel_questions_table', 1),
(17, '2017_09_02_082132_create_paid_questions_table', 1),
(18, '2017_09_02_082158_create_finished_questions_table', 1),
(19, '2017_09_02_082256_create_new_questions_table', 1),
(20, '2017_09_03_081224_create_unassigned_questions_table', 1),
(21, '2017_09_05_201831_create_comment_fileuploads_table', 1),
(22, '2017_09_05_201854_create_question_fileuploads_table', 1),
(23, '2017_09_10_092532_create_payment_requests_table', 1),
(24, '2017_09_10_092653_create_payments_table', 2),
(25, '2017_10_08_134159_create_question_matrices_table', 2),
(26, '2017_10_08_134731_create_question_histories_table', 2),
(27, '2017_10_08_144654_create_question_ratings_table', 2),
(28, '2017_10_08_150821_create_question_revisions_table', 2),
(29, '2017_10_08_182238_create_question_status_models_table', 2),
(30, '2017_10_12_132827_create_tutor_education_models_table', 2),
(31, '2017_10_12_150212_create_tutor_payment_models_table', 2),
(32, '2017_10_12_161455_create_tutor_account_profile_models_table', 2),
(33, '2017_10_12_162449_create_late_submissions_models_table', 2),
(34, '2017_10_12_162749_create_tutor_refunds_models_table', 2),
(35, '2017_10_12_163001_create_tutor_revision_models_table', 2),
(39, '2014_10_12_000000_create_users_table', 4),
(41, '2017_12_29_144812_create_payment_totals_table', 5),
(43, '2017_12_29_104450_create_tutor_payments_table', 6),
(44, '2017_12_29_182537_create_tutor_payment_bonuses_table', 7),
(45, '2017_12_29_195509_create_tutors_table', 8),
(46, '2017_12_30_053744_create_tutor_educations_table', 8),
(47, '2017_12_30_055344_create_tutor_progresses_table', 8),
(48, '2017_12_30_055414_create_tutor_accounts_table', 8),
(49, '2018_01_05_162311_create_question_progresses_table', 9),
(50, '2018_01_05_163645_create_question_bids_table', 9),
(51, '2018_01_05_172845_create_question_categories_table', 10),
(52, '2018_01_05_173018_create_university_models_table', 10),
(53, '2018_01_06_120723_create_academic_levels_table', 11),
(54, '2018_01_07_183454_create_sessions_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `new_questions`
--

CREATE TABLE `new_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paid_questions`
--

CREATE TABLE `paid_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_models`
--

CREATE TABLE `payment_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `paid_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_requests`
--

CREATE TABLE `payment_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_answers`
--

CREATE TABLE `post_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_id` int(11) NOT NULL,
  `answered` tinyint(1) NOT NULL,
  `answer_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `overdue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_answers`
--

INSERT INTO `post_answers` (`id`, `user_id`, `question_id`, `answer_id`, `answered`, `answer_body`, `overdue`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ayuaken90@yandex.com', 'LSPwvCrAUSbv077gAxMV2jUIw', 51887, 1, 'Here is my answer', '0', NULL, '2017-10-16 07:04:42', '2017-10-16 07:04:42'),
(2, 'ayuaken90@yandex.com', 'LSPwvCrAUSbv077gAxMV2jUIw', 35655, 1, 'Here is my answer', '0', NULL, '2017-10-16 07:10:59', '2017-10-16 07:10:59'),
(3, 'Morgyken@gmail.com', 'lt5iKu8uDcbmfIQXK8X7DNyet', 57295, 1, 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries... \r\n\r\nbut also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', NULL, '2017-12-15 03:22:58', '2017-12-15 03:22:58'),
(4, 'morgyken31@gmail.com', '1dHlMJDnfK9At0cbPCSSS6ost', 37134, 1, 'Here is My Answer', '0', NULL, '2018-01-04 14:27:26', '2018-01-04 14:27:26'),
(5, 'morgyken31@gmail.com', '1dHlMJDnfK9At0cbPCSSS6ost', 72018, 1, 'Here is My Answer', '0', NULL, '2018-01-04 14:29:42', '2018-01-04 14:29:42'),
(6, 'morgyken31@gmail.com', 'fiskNYvkr97OIzCjprMvZfXco', 67531, 1, 'invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,', '0', NULL, '2018-01-10 19:09:14', '2018-01-10 19:09:14'),
(7, 'morgyken31@gmail.com', 'fiskNYvkr97OIzCjprMvZfXco', 36222, 1, 'invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,', '0', NULL, '2018-01-10 19:12:30', '2018-01-10 19:12:30'),
(8, 'morgyken31@gmail.com', 'fiskNYvkr97OIzCjprMvZfXco', 23641, 1, 'invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,', '0', NULL, '2018-01-10 19:12:46', '2018-01-10 19:12:46'),
(9, 'morgyken31@gmail.com', 'fiskNYvkr97OIzCjprMvZfXco', 11184, 1, 'invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,', '0', NULL, '2018-01-10 19:13:15', '2018-01-10 19:13:15'),
(10, 'morgyken@gmail.com', '4zy25o1PfEuIIGHxgzaQckHrh', 44155, 1, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '0', NULL, '2018-01-10 19:27:19', '2018-01-10 19:27:19'),
(11, 'morgyken31@gmail.com', '4zy25o1PfEuIIGHxgzaQckHrh', 68584, 1, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '0', NULL, '2018-01-10 19:29:50', '2018-01-10 19:29:50'),
(12, 'morgyken31@gmail.com', 'zCS4iah0drhTiOBRnePLQpQie', 17317, 1, 'Price:Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '0', NULL, '2018-01-10 19:44:25', '2018-01-10 19:44:25'),
(13, 'morgyken31@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 85598, 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', '0', NULL, '2018-01-13 14:02:46', '2018-01-13 14:02:46'),
(14, 'morgyken31@gmail.com', '6AhHqmMA62RlE05yiWf4BH0nI', 24323, 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.', '0', NULL, '2018-01-13 20:07:21', '2018-01-13 20:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `question_id`, `comment_body`, `comments_id`, `message_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ayuaken90@yandex.com', 'LSPwvCrAUSbv077gAxMV2jUIw', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '4696', 'Commit', NULL, '2017-10-16 07:03:22', '2017-10-16 07:03:22'),
(2, 'Morgyken@gmail.com', 'lt5iKu8uDcbmfIQXK8X7DNyet', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '9994', 'Commit', NULL, '2017-12-15 03:17:59', '2017-12-15 03:17:59'),
(3, 'morgyken31@gmail.com', '1dHlMJDnfK9At0cbPCSSS6ost', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '1404', 'Commit', NULL, '2018-01-04 14:25:31', '2018-01-04 14:25:31'),
(4, 'morgyken31@gmail.com', '1dHlMJDnfK9At0cbPCSSS6ost', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '8087', 'Comment', NULL, '2018-01-04 14:43:23', '2018-01-04 14:43:23'),
(5, 'morgyken31@gmail.com', '1dHlMJDnfK9At0cbPCSSS6ost', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '9222', 'Comment', NULL, '2018-01-04 14:51:47', '2018-01-04 14:51:47'),
(6, 'morgyken31@gmail.com', '1dHlMJDnfK9At0cbPCSSS6ost', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '3874', 'Comment', NULL, '2018-01-04 14:52:55', '2018-01-04 14:52:55'),
(7, 'morgyken31@gmail.com', '1dHlMJDnfK9At0cbPCSSS6ost', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '5551', 'Commit', NULL, '2018-01-04 14:53:44', '2018-01-04 14:53:44'),
(8, 'morgyken31@gmail.com', 'v7FZNl1hTyk9QESsZLX1xBlb1', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '2587', 'Commit', NULL, '2018-01-04 14:54:46', '2018-01-04 14:54:46'),
(9, 'morgyken31@gmail.com', 'v7FZNl1hTyk9QESsZLX1xBlb1', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '8079', 'Commit', NULL, '2018-01-04 15:22:15', '2018-01-04 15:22:15'),
(10, 'morgyken31@gmail.com', 'v7FZNl1hTyk9QESsZLX1xBlb1', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '1027', 'Commit', NULL, '2018-01-04 15:38:10', '2018-01-04 15:38:10'),
(11, 'morgyken31@gmail.com', 'v7FZNl1hTyk9QESsZLX1xBlb1', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '5471', 'Commit', NULL, '2018-01-08 09:10:07', '2018-01-08 09:10:07'),
(12, 'morgyken@gmail.com', '92f6bb9VmPLfKdsjt7oDJwKm7', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '7143', 'Commit', NULL, '2018-01-08 09:22:13', '2018-01-08 09:22:13'),
(13, 'morgyken31@gmail.com', 'fiskNYvkr97OIzCjprMvZfXco', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '4482', 'Commit', NULL, '2018-01-10 19:08:33', '2018-01-10 19:08:33'),
(14, 'morgyken@gmail.com', '4zy25o1PfEuIIGHxgzaQckHrh', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '4472', 'Commit', NULL, '2018-01-10 19:26:32', '2018-01-10 19:26:32'),
(15, 'morgyken31@gmail.com', '4zy25o1PfEuIIGHxgzaQckHrh', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '8354', 'Commit', NULL, '2018-01-10 19:28:27', '2018-01-10 19:28:27'),
(16, 'morgyken31@gmail.com', 'zCS4iah0drhTiOBRnePLQpQie', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '8012', 'Commit', NULL, '2018-01-10 19:43:42', '2018-01-10 19:43:42'),
(17, 'morgyken31@gmail.com', 'zCS4iah0drhTiOBRnePLQpQie', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '5707', 'Commit', NULL, '2018-01-10 19:43:43', '2018-01-10 19:43:43'),
(18, 'morgyken31@gmail.com', 'zCS4iah0drhTiOBRnePLQpQie', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '5466', 'Commit', NULL, '2018-01-10 19:47:24', '2018-01-10 19:47:24'),
(19, 'morgyken31@gmail.com', 'YoYB7bHT10U8RlCQRjv481qbc', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '5290', 'Commit', NULL, '2018-01-13 00:51:08', '2018-01-13 00:51:08'),
(20, 'morgyken31@gmail.com', 'YoYB7bHT10U8RlCQRjv481qbc', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,', '5454', 'admin', NULL, '2018-01-13 00:59:00', '2018-01-13 00:59:00'),
(21, 'morgyken31@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '1005', 'Commit', NULL, '2018-01-13 13:34:35', '2018-01-13 13:34:35'),
(22, 'morgyken@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'You have been un-assigned from this question. Thank you for staying with us.', '2422', 'Commit', NULL, '2018-01-13 15:17:27', '2018-01-13 15:17:27'),
(23, 'morgyken31@gmail.com', '6AhHqmMA62RlE05yiWf4BH0nI', 'hello? I need more information on this order', '2210', 'Comment', NULL, '2018-01-13 15:18:29', '2018-01-13 15:18:29'),
(24, 'morgyken31@gmail.com', '6AhHqmMA62RlE05yiWf4BH0nI', 'Welcome! You have been assigned to this question,\r\n                    please ensure that you provide quality answer', '7324', 'Commit', NULL, '2018-01-13 15:20:46', '2018-01-13 15:20:46'),
(25, 'morgyken@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'Question has been Reassigned ', '8544', 'Ressigned', NULL, '2018-01-13 16:03:08', '2018-01-13 16:03:08'),
(26, 'morgyken@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'Question has been Reassigned ', '6339', 'Ressigned', NULL, '2018-01-13 16:08:42', '2018-01-13 16:08:42'),
(27, 'morgyken@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'Question has been Reassigned ', '9644', 'Ressigned', NULL, '2018-01-13 16:09:37', '2018-01-13 16:09:37'),
(28, 'morgyken@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'The Question has been cancelled. Contact us for further questions', '7070', 'Cancelled', NULL, '2018-01-13 16:18:05', '2018-01-13 16:18:05'),
(29, 'morgyken@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'The question has been set on revision, please ensure that you submit the revision on time. ', '7088', 'revision', NULL, '2018-01-13 17:17:56', '2018-01-13 17:17:56'),
(30, 'morgyken@gmail.com', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'The question has been reassigned. Thank you for using our tutoring platform.', '2586', 'reassigned', NULL, '2018-01-13 17:40:04', '2018-01-13 17:40:04'),
(31, 'morgyken31@gmail.com', '6AhHqmMA62RlE05yiWf4BH0nI', 'The question has been answered. Thank you for using our platform.', '9565', 'postAnswer', NULL, '2018-01-13 20:07:21', '2018-01-13 20:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `post_question_prices`
--

CREATE TABLE `post_question_prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` int(11) DEFAULT NULL,
  `question_price` int(11) NOT NULL,
  `question_deadline` datetime NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tutor_price` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper_format` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_level` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urgency` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_question_prices`
--

INSERT INTO `post_question_prices` (`id`, `question_id`, `paid`, `question_price`, `question_deadline`, `remember_token`, `created_at`, `updated_at`, `tutor_price`, `paper_format`, `academic_level`, `urgency`, `pages`) VALUES
(1, 'I2CMRf1bT0uS0sRwpwmTa7pYI', NULL, 32, '2017-12-29 11:00:00', NULL, '2017-12-30 00:05:07', '2017-12-30 00:05:07', '', '0', '0', '', NULL),
(2, 'W9vdAJc3ifV2yrz9b7VjtWPhg', NULL, 27, '2017-12-29 11:00:00', NULL, '2017-12-30 00:18:24', '2017-12-30 00:18:24', '', '0', '0', '', NULL),
(3, '3OzzpQFo87xneM9nsF9tNLSsf', NULL, 38, '2017-12-29 10:00:00', NULL, '2017-12-30 00:19:34', '2017-12-30 00:19:34', '', '0', '0', '', NULL),
(4, 'CSzdYahPKetKAnBlrzUJuRYj4', NULL, 36, '2017-12-29 11:00:00', NULL, '2017-12-30 00:21:22', '2017-12-30 00:21:22', '', '0', '0', '', NULL),
(5, 'XgKGRMrTDLm5u3f18YmGRTpf8', NULL, 30, '2017-12-29 10:00:00', NULL, '2017-12-30 00:22:12', '2017-12-30 00:22:12', '', '0', '0', '', NULL),
(6, '4A3Fx1sumBy73PyVzU5LXRhqs', NULL, 28, '2017-12-29 11:00:00', NULL, '2017-12-30 00:30:06', '2017-12-30 00:30:06', '', '0', '0', '', NULL),
(7, 'iReQ0n0FULN9jO9MOYuyaYqU1', NULL, 15, '2017-12-29 12:00:00', NULL, '2017-12-30 00:30:53', '2017-12-30 00:30:53', '', '0', '0', '', NULL),
(8, '5GeoyGQSq1gl4NTxOOayLqPOO', NULL, 26, '2017-12-29 13:00:00', NULL, '2017-12-30 01:46:48', '2017-12-30 01:46:48', '', '0', '0', '', NULL),
(9, 'v7FZNl1hTyk9QESsZLX1xBlb1', NULL, 26, '2018-01-09 16:00:00', NULL, '2018-01-01 04:49:43', '2018-01-01 04:49:43', '', '0', '0', '', NULL),
(10, '1dHlMJDnfK9At0cbPCSSS6ost', NULL, 28, '2018-01-05 21:00:00', NULL, '2018-01-04 14:09:37', '2018-01-04 14:09:37', '', '0', '0', '', NULL),
(11, 'Rt9nrCa0blIYbfAJ8eLNXvDi5', NULL, 29, '2018-01-05 19:00:00', NULL, '2018-01-05 23:19:48', '2018-01-05 23:19:48', '766.90', '0', '0', '', NULL),
(12, 'Y9pZzPi9pPAvUcR4AuxFuz52L', NULL, 26, '2018-01-07 10:00:00', NULL, '2018-01-05 23:20:46', '2018-01-05 23:20:46', '', '0', '0', '', NULL),
(13, 'CXJ6jauUHo7P62v28DijOaKkU', NULL, 34, '2018-01-06 09:00:00', NULL, '2018-01-05 23:21:59', '2018-01-05 23:21:59', '343', '0', '0', '', NULL),
(14, '6nwf7ylLbl6MMEoqgmIRNAH1S', NULL, 30, '2018-01-05 22:00:00', NULL, '2018-01-05 23:23:16', '2018-01-05 23:23:16', '', '0', '0', '', NULL),
(15, 'jwZcSdzFPLg0puiMpkqXGBJUk', NULL, 25, '2018-01-31 11:00:00', NULL, '2018-01-05 23:25:20', '2018-01-05 23:25:20', '477.90', '0', '0', '', NULL),
(16, 'RAwlx7LmCfdAKQSwySeUcsmmm', NULL, 20, '2018-01-05 18:00:00', NULL, '2018-01-05 23:26:15', '2018-01-05 23:26:15', '', '0', '0', '', NULL),
(17, 'NSdmO2f4STqSeyikfSRvkDZdu', NULL, 29, '2018-01-05 13:00:00', NULL, '2018-01-05 23:38:23', '2018-01-05 23:38:23', '239', '0', '0', '', NULL),
(18, 'fiskNYvkr97OIzCjprMvZfXco', NULL, 27, '2018-01-25 13:00:00', NULL, '2018-01-05 23:38:56', '2018-01-05 23:38:56', '789.09', '0', '0', '', NULL),
(19, 'm1gzRgYbIU5sobZTrwcS0nVip', NULL, 34, '2018-01-19 12:00:00', NULL, '2018-01-05 23:39:26', '2018-01-05 23:39:26', '678.90', '0', '0', '', NULL),
(20, '6AhHqmMA62RlE05yiWf4BH0nI', NULL, 28, '2018-01-19 07:40:00', NULL, '2018-01-05 23:40:18', '2018-01-05 23:40:18', '234.90', '0', '0', '', NULL),
(21, '2rfWUIHyknXQOk4zPjT6HPWnF', NULL, 28, '2018-01-05 11:00:00', NULL, '2018-01-05 23:40:54', '2018-01-05 23:40:54', '', '0', '0', '', NULL),
(22, 'AD6mnd02i4xEP6pDIwX5eiyxR', NULL, 29, '2018-01-20 12:00:00', NULL, '2018-01-05 23:42:35', '2018-01-05 23:42:35', '547', '0', '0', '', NULL),
(23, 'aiLiEp2YnEP1ZkxjMhJhupps3', NULL, 35, '2018-01-05 12:00:00', NULL, '2018-01-05 23:43:06', '2018-01-05 23:43:06', '', '0', '0', '', NULL),
(24, '2kajX3wDkIcg5n6AidUsMZQED', NULL, 31, '2018-01-26 13:00:00', NULL, '2018-01-05 23:59:15', '2018-01-05 23:59:15', '', '0', '0', '', NULL),
(25, 'YoYB7bHT10U8RlCQRjv481qbc', NULL, 24, '2018-01-20 12:00:00', NULL, '2018-01-06 00:00:11', '2018-01-06 00:00:11', '344.90', '0', '0', '', NULL),
(26, 'mX0sDqneRc4j9MgVv1kPo4EbD', NULL, 24, '2018-01-05 13:00:00', NULL, '2018-01-06 00:01:31', '2018-01-06 00:01:31', '780.67', '0', '0', '', NULL),
(27, 'IWkyR0rriC8U7dxcZPHB9tuMS', NULL, 24, '2018-01-26 12:00:00', NULL, '2018-01-06 00:02:01', '2018-01-06 00:02:01', '459.90', '0', '0', '', NULL),
(28, 'O5yxhRXZzOQeGkZtskvATHGuq', NULL, 27, '2018-01-26 16:00:00', NULL, '2018-01-06 00:03:46', '2018-01-06 00:03:46', '', '0', '0', '', NULL),
(29, 'LOhg1XfhgQ7Mysi2uGxkQzb56', NULL, 26, '2018-01-26 13:00:00', NULL, '2018-01-06 00:04:17', '2018-01-06 00:04:17', '998.0', '0', '0', '', NULL),
(30, '4zy25o1PfEuIIGHxgzaQckHrh', NULL, 26, '2018-01-13 12:00:00', NULL, '2018-01-06 00:06:10', '2018-01-06 00:06:10', '345.89', '0', '0', '', NULL),
(31, 'zCS4iah0drhTiOBRnePLQpQie', NULL, 25, '2018-01-20 12:00:00', NULL, '2018-01-06 00:06:39', '2018-01-06 00:06:39', '', '0', '0', '', NULL),
(32, 'gZFH1DbaWccU4z0cfVwLBvWcp', NULL, 20, '2018-01-10 10:00:00', NULL, '2018-01-06 22:40:29', '2018-01-06 22:40:29', '827.2', 'Harvard', 'High School', 'medium', 5),
(33, 'u7JbvWComQyFoP0BwPL8PDMVg', NULL, 25, '2018-01-20 13:00:00', NULL, '2018-01-06 22:57:10', '2018-01-06 22:57:10', '1034', 'APA', 'High School', 'low', 7),
(34, '92f6bb9VmPLfKdsjt7oDJwKm7', NULL, 34, '2018-01-20 11:00:00', NULL, '2018-01-06 22:59:40', '2018-01-06 22:59:40', '1406.24', 'Chicago', 'High School', 'very_high', 6);

-- --------------------------------------------------------

--
-- Table structure for table `question_bids`
--

CREATE TABLE `question_bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `bidpoints` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `tutor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_bodies`
--

CREATE TABLE `question_bodies` (
  `id` int(10) UNSIGNED NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `special` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_bodies`
--

INSERT INTO `question_bodies` (`id`, `summary`, `special`, `question_body`, `question_id`, `user_id`, `created_at`, `topic`, `category`, `updated_at`, `remember_token`) VALUES
(1, 'Post Question Here\r\n\r\nCross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. Th', 'Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>', 'I2CMRf1bT0uS0sRwpwmTa7pYI', 'morgyken@gmail.com', '2017-12-30 00:04:58', '', 'Engineering', '2017-12-30 00:04:58', NULL),
(2, 'Post Question Here\r\n\r\nCross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests t', 'Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>', 'W9vdAJc3ifV2yrz9b7VjtWPhg', 'morgyken@gmail.com', '2017-12-30 00:18:15', '', 'Engineering', '2017-12-30 00:18:15', NULL),
(3, 'Post Question Here\r\n\r\nCross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the reques', 'Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>', '3OzzpQFo87xneM9nsF9tNLSsf', 'morgyken@gmail.com', '2017-12-30 00:19:22', '', 'Engineering', '2017-12-30 00:19:22', NULL),
(4, 'Post Question Here\r\n\r\nCross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one ', 'Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>', 'CSzdYahPKetKAnBlrzUJuRYj4', 'morgyken@gmail.com', '2017-12-30 00:20:56', '', 'Engineering', '2017-12-30 00:20:56', NULL),
(5, 'Post Question Here\r\n\r\nCross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenti', 'Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>', 'XgKGRMrTDLm5u3f18YmGRTpf8', 'morgyken@gmail.com', '2017-12-30 00:22:03', '', 'Engineering', '2017-12-30 00:22:03', NULL),
(6, 'Post Question Here\r\n\r\nCross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requ', 'Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>', '4A3Fx1sumBy73PyVzU5LXRhqs', 'morgyken@gmail.com', '2017-12-30 00:29:57', '', 'Engineering', '2017-12-30 00:29:57', NULL),
(7, 'Post Question Here\r\n\r\nCross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to ', 'Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>\r\n\r\n<p>Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the&nbsp;</p>', 'iReQ0n0FULN9jO9MOYuyaYqU1', 'morgyken@gmail.com', '2017-12-30 00:30:40', '', 'Engineering', '2017-12-30 00:30:40', NULL),
(8, 'Post Question Here\r\n\r\nConvert JSON&nbsp;String to&nbsp;PHP Array&nbsp;or Object.&nbsp;PHP&nbsp;&gt;= 5.2.0 features a function, json_decode , that decodes a&nbsp;JSON&nbsp;string into a&nbsp;PHP&nbsp;variable. By default it returns ', 'Convert JSON String to PHP Array or Object. PHP >= 5.2.0 features a function, json_decode , that decodes a JSON string into a PHP variable. By default it returns an object. The second parameter accepts a boolean that when set as true , tells it to return the o', '<h1>Post Question Here</h1>\r\n\r\n<p><strong>Convert JSON</strong>&nbsp;String to&nbsp;<strong>PHP Array</strong>&nbsp;or Object.&nbsp;<strong>PHP</strong>&nbsp;&gt;= 5.2.0 features a function, json_decode , that decodes a&nbsp;<strong>JSON</strong>&nbsp;string into a&nbsp;<strong>PHP</strong>&nbsp;variable. By default it returns an object. The second parameter accepts a boolean that when set as true , tells it to return the objects as associative&nbsp;<strong>arrays</strong>.Sep 30, 2014</p>\r\n\r\n<h3><a href=\"https://jonsuh.com/blog/convert-loop-through-json-php-javascript-arrays-objects/\">Convert and Loop through JSON with PHP and JavaScript Arrays ...</a></h3>\r\n\r\n<p><cite>https://jonsuh.com/blog/convert-loop-through-json-php-javascript-arrays-objects/</cite></p>\r\n\r\n<p><a href=\"https://www.google.com/search?q=array%20to%20json%20php#\">Feedback</a></p>\r\n\r\n<p><a href=\"https://www.google.com/url?url=https://support.google.com/webmasters/answer/6229325?hl%3Den-KE&amp;rct=j&amp;q=&amp;esrc=s&amp;usg=AOvVaw3HHkHFcHJgokrtX5bCyFVi&amp;hl=en-KE&amp;sa=X&amp;ved=0ahUKEwjHs-mO3K_YAhWGDsAKHSHCDhoQrpwBCC8\">About this result</a></p>\r\n\r\n<h3><a href=\"https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=3&amp;cad=rja&amp;uact=8&amp;ved=0ahUKEwjHs-mO3K_YAhWGDsAKHSHCDhoQFggyMAI&amp;url=http%3A%2F%2Fphp.net%2Fmanual%2Fen%2Ffunction.json-encode.php&amp;usg=AOvVaw3NkCj5OToQVNu8KP7-aMDk\">PHP: json_encode - Manual</a></h3>\r\n\r\n<p><cite>php.net/manual/en/function.json-encode.php</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>$c =&nbsp;<em>array</em>(<em>array</em>(1,2,3)); echo &quot;Non-associative&nbsp;<em>array</em>&nbsp;output as&nbsp;<em>array</em>: &quot;,&nbsp;<em>json_encode</em>($c), &quot;\\n&quot;; echo &quot;Non-associative&nbsp;<em>array</em>&nbsp;output as object: &quot;,&nbsp;<em>json_encode</em>($c, JSON_FORCE_OBJECT), &quot;\\n\\n&quot;; $d =<em>array</em>(&#39;foo&#39; =&gt; &#39;bar&#39;, &#39;baz&#39; =&gt; &#39;long&#39;); echo &quot;Associative&nbsp;<em>array</em>&nbsp;always output as object: &quot;,<em>json_encode</em>($d), &quot;\\n&quot;; echo &quot;Associative&nbsp;...</p>\r\n\r\n<p>&lrm;<a href=\"http://php.net/manual/fr/function.json-encode.php\">PHP: json_encode - Manual</a>&nbsp;&middot;&nbsp;&lrm;<a href=\"http://php.net/manual/en/function.json-decode.php\">Json_decode</a>&nbsp;&middot;&nbsp;&lrm;<a href=\"http://php.net/manual/ro/function.json-encode.php\">PHP Manual</a>&nbsp;&middot;&nbsp;&lrm;<a href=\"http://php.net/manual/en/json.constants.php\">Predefined Constants</a></p>\r\n\r\n<h3><a href=\"https://www.w3schools.com/js/js_json_php.asp\">JSON PHP - W3Schools</a></h3>\r\n\r\n<p><cite>https://www.w3schools.com/js/js_json_php.asp</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><em>Convert</em>&nbsp;the request into an object, using the&nbsp;<em>PHP</em>&nbsp;function json_decode(). Access the database, and fill an&nbsp;<em>array</em>&nbsp;with the requested data. Add the&nbsp;<em>array</em>&nbsp;to an object, and return the object as&nbsp;<em>JSON</em>&nbsp;using the<em>json_encode</em>() function.</p>\r\n\r\n<p>&lrm;<a href=\"https://www.w3schools.com/js/js_json_html.asp\">JSON HTML</a>&nbsp;&middot;&nbsp;&lrm;<a href=\"https://www.w3schools.com/js/showphp.asp?filename=demo_file\">Show PHP file</a>&nbsp;&middot;&nbsp;&lrm;<a href=\"https://www.w3schools.com/js/tryit.asp?filename=tryjson_php_db\">Try it Yourself</a></p>\r\n\r\n<h3><a href=\"https://stackoverflow.com/questions/11722059/php-array-to-json-array-using-json-encode\">PHP Array to JSON Array using json_encode(); - Stack Overflow</a></h3>\r\n\r\n<p><cite>https://stackoverflow.com/questions/.../php-array-to-json-array-using-json-encode</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Jul 30, 2012 -&nbsp;If the&nbsp;<em>array</em>&nbsp;keys in your&nbsp;<em>PHP array</em>&nbsp;are not consecutive numbers,&nbsp;<em>json_encode</em>() must make the other construct an object since JavaScript&nbsp;<em>arrays</em>&nbsp;are always consecutively numerically indexed. Use array_values() on the outer structure in&nbsp;<em>PHP</em>&nbsp;to discard the original&nbsp;<em>array</em>&nbsp;keys and replace them with&nbsp;...</p>\r\n\r\n<p><a href=\"https://stackoverflow.com/questions/11195692/json-encode-sparse-php-array-as-json-array-not-json-object\"><strong>json_encode</strong>&nbsp;sparse&nbsp;<strong>PHP array</strong>&nbsp;as&nbsp;<strong>JSON array</strong>, not&nbsp;<strong>JSON</strong>&nbsp;object&nbsp;<strong>...</strong></a></p>\r\n\r\n<p>25 Jun 2012</p>\r\n\r\n<p><a href=\"https://stackoverflow.com/questions/8238502/convert-post-array-to-json-format\"><strong>php</strong>&nbsp;-&nbsp;<strong>convert</strong>&nbsp;POST&nbsp;<strong>array to json</strong>&nbsp;format</a></p>\r\n\r\n<p>23 Nov 2011</p>\r\n\r\n<p><a href=\"https://stackoverflow.com/questions/7511821/how-to-convert-json-string-to-array\"><strong>php</strong>&nbsp;- How to&nbsp;<strong>convert JSON</strong>&nbsp;string to&nbsp;<strong>array</strong></a></p>\r\n\r\n<p>22 Sep 2011</p>\r\n\r\n<p><a href=\"https://stackoverflow.com/questions/6739871/how-to-create-an-array-for-json-using-php\">How to create an&nbsp;<strong>array</strong>&nbsp;for&nbsp;<strong>JSON</strong>&nbsp;using&nbsp;<strong>PHP</strong>?</a></p>\r\n\r\n<p>18 Jul 2011</p>\r\n\r\n<p><a href=\"https://www.google.com/search?q=array+to+json+php+site:stackoverflow.com&amp;sa=X&amp;ved=0ahUKEwjHs-mO3K_YAhWGDsAKHSHCDhoQrQIIUygEMAQ\">More results from stackoverflow.com</a></p>\r\n\r\n<h3><a href=\"http://www.dyn-web.com/tutorials/php-js/json/array.php\">Pass PHP Arrays to JSON and JavaScript Using json_encode</a></h3>\r\n\r\n<p><cite>www.dyn-web.com/tutorials/php-js/json/array.php</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>Pass&nbsp;<em>PHP Arrays to JSON</em>&nbsp;and JS with&nbsp;<em>json_encode</em>. The&nbsp;<em>PHP json_encode</em>&nbsp;function translates the data passed to it to a&nbsp;<em>JSON</em>&nbsp;string which can then be output to a JavaScript variable.</p>\r\n\r\n<h3><a href=\"http://www.dyn-web.com/tutorials/php-js/json/decode.php\">JSON to PHP Using json_decode - dyn-web.com</a></h3>\r\n\r\n<p><cite>www.dyn-web.com/tutorials/php-js/json/decode.php</cite></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p>How to use&nbsp;<em>PHP&#39;s</em>&nbsp;json_decode function to&nbsp;<em>convert</em>&nbsp;a&nbsp;<em>JSON</em>&nbsp;string into a&nbsp;<em>PHP</em>&nbsp;variable. How to&nbsp;<em>convert</em>an object to a&nbsp;<em>PHP</em>&nbsp;associative&nbsp;<em>array</em>.</p>', '5GeoyGQSq1gl4NTxOOayLqPOO', 'morgyken@gmail.com', '2017-12-30 01:46:39', '', 'Engineering', '2017-12-30 01:46:39', NULL),
(9, 'Post Question Here\r\n\r\nross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is ', 'ross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.\r\n\r\nLaravel automatically generates a CSRF \"token\" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.\r\n\r\nAnytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the', '<h1>Post Question Here</h1>\r\n\r\n<p>ross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the</p>\r\n\r\n<p>ross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the</p>\r\n\r\n<p>ross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the</p>\r\n\r\n<p>ross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.</p>\r\n\r\n<p>Laravel automatically generates a CSRF &quot;token&quot; for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>\r\n\r\n<p>Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the</p>', 'v7FZNl1hTyk9QESsZLX1xBlb1', 'morgyken31@gmail.com', '2018-01-01 04:49:23', '', 'Engineering', '2018-01-01 04:49:23', NULL),
(10, 'Post Question Here\r\n\r\n\r\nfunction characterList(){\r\n    //code removed that generates select list \r\n    var optionContainer = document.createElement(&quot;option&quot;);\r\n    optionContainer.innerHTML = &quot;Show All Character Lines&quot;;\r\n    addEvent(optionContainer, &quot;click&quot;, filterChar, false);\r\n    selectContainer.appendChild(optionContainer); //appends', 'The paper needs tobe done asap', '<h1>Post Question Here</h1>\r\n\r\n<pre>\r\n<code>function characterList(){\r\n    //code removed that generates select list \r\n    var optionContainer = document.createElement(&quot;option&quot;);\r\n    optionContainer.innerHTML = &quot;Show All Character Lines&quot;;\r\n    addEvent(optionContainer, &quot;click&quot;, filterChar, false);\r\n    selectContainer.appendChild(optionContainer); //appends option to select menu\r\n\r\n    for (var i = 0; i &lt; menu_lines; i++){\r\n       var optionContainer1 = document.createElement(&quot;option&quot;);\r\n       optionContainer1.innerHTML = &quot;blah&quot; //simplified so that names in menu are all &quot;blah&quot;\r\n       selectContainer.appendChild(optionContainer1);//appends option to select menu\r\n       addEvent(optionContainer1, &quot;click&quot;, filterChar, false);//I think the problem is here.\r\n    }\r\n}\r\n\r\nfunction filterChar(){\r\n    alert(&quot;filterChar&quot;);\r\n}\r\n\r\n\r\nfunction addEvent(object, evName, fnName, cap) {\r\n   if (object.attachEvent)\r\n       object.attachEvent(&quot;on&quot; + evName, fnName);\r\n   else if (object.addEventListener)\r\n       object.addEventListener(evName, fnName, cap);\r\n}</code></pre>', '1dHlMJDnfK9At0cbPCSSS6ost', 'morgyken31@gmail.com', '2018-01-04 14:09:12', '', 'Engineering', '2018-01-04 14:09:12', NULL),
(11, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'Rt9nrCa0blIYbfAJ8eLNXvDi5', 'morgyken31@gmail.com', '2018-01-05 23:19:17', '', 'Engineering', '2018-01-05 23:19:17', NULL),
(12, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'Y9pZzPi9pPAvUcR4AuxFuz52L', 'morgyken31@gmail.com', '2018-01-05 23:20:35', '', 'Engineering', '2018-01-05 23:20:35', NULL);
INSERT INTO `question_bodies` (`id`, `summary`, `special`, `question_body`, `question_id`, `user_id`, `created_at`, `topic`, `category`, `updated_at`, `remember_token`) VALUES
(13, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nul', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'CXJ6jauUHo7P62v28DijOaKkU', 'morgyken31@gmail.com', '2018-01-05 23:21:37', '', 'Engineering', '2018-01-05 23:21:37', NULL),
(14, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis..', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', '6nwf7ylLbl6MMEoqgmIRNAH1S', 'morgyken31@gmail.com', '2018-01-05 23:22:55', '', 'Engineering', '2018-01-05 23:22:55', NULL),
(15, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egest', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis..', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'jwZcSdzFPLg0puiMpkqXGBJUk', 'morgyken31@gmail.com', '2018-01-05 23:25:02', '', 'Engineering', '2018-01-05 23:25:02', NULL),
(16, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'RAwlx7LmCfdAKQSwySeUcsmmm', 'morgyken31@gmail.com', '2018-01-05 23:26:02', '', 'Engineering', '2018-01-05 23:26:02', NULL),
(17, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vita', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'NSdmO2f4STqSeyikfSRvkDZdu', 'morgyken31@gmail.com', '2018-01-05 23:38:14', '', 'Engineering', '2018-01-05 23:38:14', NULL),
(18, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'fiskNYvkr97OIzCjprMvZfXco', 'morgyken31@gmail.com', '2018-01-05 23:38:40', '', 'Engineering', '2018-01-05 23:38:40', NULL),
(19, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'm1gzRgYbIU5sobZTrwcS0nVip', 'morgyken31@gmail.com', '2018-01-05 23:39:12', '', 'Engineering', '2018-01-05 23:39:12', NULL);
INSERT INTO `question_bodies` (`id`, `summary`, `special`, `question_body`, `question_id`, `user_id`, `created_at`, `topic`, `category`, `updated_at`, `remember_token`) VALUES
(20, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Pro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', '6AhHqmMA62RlE05yiWf4BH0nI', 'morgyken31@gmail.com', '2018-01-05 23:40:07', '', 'Engineering', '2018-01-05 23:40:07', NULL),
(21, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', '2rfWUIHyknXQOk4zPjT6HPWnF', 'morgyken31@gmail.com', '2018-01-05 23:40:39', '', 'Engineering', '2018-01-05 23:40:39', NULL),
(22, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. P', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.\r\n\r\nMaecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.\r\n\r\nCurabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'AD6mnd02i4xEP6pDIwX5eiyxR', 'morgyken31@gmail.com', '2018-01-05 23:42:25', '', 'Engineering', '2018-01-05 23:42:25', NULL),
(23, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus po', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dolor tellus, gravida vitae ligula sed, cursus imperdiet mi. Fusce vestibulum tincidunt sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sagittis vel tortor a bibendum. Nulla vitae egestas nulla. Proin luctus posuere metus vitae lacinia. Vivamus ut libero vel felis lacinia suscipit. In eu quam risus. Curabitur a elit turpis.</p>\r\n\r\n<p>Maecenas gravida justo ut diam molestie cursus. Suspendisse quis semper nunc. Nullam non nulla cursus, venenatis sapien et, aliquam turpis. Duis non elit ac ipsum consectetur pulvinar nec ac leo. Aliquam risus augue, ornare vel auctor eget, gravida at sem. Aenean ultrices erat erat, a molestie augue malesuada eu. Fusce vestibulum congue leo, eu fermentum lorem cursus quis. Nunc ex odio, varius sed venenatis nec, facilisis eu arcu. Nullam consectetur suscipit nibh quis ultricies. Nulla viverra nunc eget interdum elementum. Proin sem neque, mattis a purus in, luctus tristique massa. Maecenas facilisis, nulla ut mollis iaculis, sapien neque feugiat magna, a suscipit enim nulla sit amet risus. Nulla non dui scelerisque, mattis velit eu, aliquam velit. Nunc consectetur erat sed odio congue ornare. Aliquam faucibus leo et eros luctus mattis.</p>\r\n\r\n<p>Curabitur tortor orci, ultrices id felis quis, porttitor accumsan erat. Vivamus vel felis justo. Phasellus quis urna dui. Ut sapien risus, accumsan ut elit sed, tempor elementum massa. Duis venenatis nisi urna. Donec blandit, erat non eleifend vehicula, metus nisi aliquam nisi, ac suscipit eros libero vitae nisi. Fusce feugiat, ante sed tristique convallis, eros urna fringilla purus, ac fermentum nibh magna eu dolor. Curabitur aliquam gravida lacinia. Etiam efficitur vehicula tortor ac fermentum. Sed lorem magna, sollicitudin nec lectus sagittis, tempor consequat mauris. Praesent at tempus velit, non sollicitudin nisl. Phasellus dignissim, mi at sagittis laoreet, mauris ex fringilla nibh, eu semper justo lectus in nunc. Nam sit amet aliquet odio. Nam sit amet lorem id nunc tincidunt ornare ac ac enim. Nulla efficitur vel ante vitae facilisis.</p>', 'aiLiEp2YnEP1ZkxjMhJhupps3', 'morgyken31@gmail.com', '2018-01-05 23:42:56', '', 'Engineering', '2018-01-05 23:42:56', NULL),
(24, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '2kajX3wDkIcg5n6AidUsMZQED', 'morgyken31@gmail.com', '2018-01-05 23:59:04', '', 'Engineering', '2018-01-05 23:59:04', NULL),
(25, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dol', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>\r\n\r\n<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'YoYB7bHT10U8RlCQRjv481qbc', 'morgyken31@gmail.com', '2018-01-05 23:59:46', '', 'Engineering', '2018-01-05 23:59:46', NULL),
(26, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolo', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'mX0sDqneRc4j9MgVv1kPo4EbD', 'morgyken31@gmail.com', '2018-01-06 00:00:31', '', 'Engineering', '2018-01-06 00:00:31', NULL);
INSERT INTO `question_bodies` (`id`, `summary`, `special`, `question_body`, `question_id`, `user_id`, `created_at`, `topic`, `category`, `updated_at`, `remember_token`) VALUES
(27, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipsc', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'IWkyR0rriC8U7dxcZPHB9tuMS', 'morgyken31@gmail.com', '2018-01-06 00:01:49', '', 'Engineering', '2018-01-06 00:01:49', NULL),
(28, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'KSDJGMu6kEdmC3b9lVp0o5XVs', 'morgyken31@gmail.com', '2018-01-06 00:03:32', '', 'Engineering', '2018-01-06 00:03:32', NULL),
(29, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'O5yxhRXZzOQeGkZtskvATHGuq', 'morgyken31@gmail.com', '2018-01-06 00:03:32', '', 'Engineering', '2018-01-06 00:03:32', NULL),
(30, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipsci', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'LOhg1XfhgQ7Mysi2uGxkQzb56', 'morgyken31@gmail.com', '2018-01-06 00:04:08', '', 'Engineering', '2018-01-06 00:04:08', NULL),
(31, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '4zy25o1PfEuIIGHxgzaQckHrh', 'morgyken31@gmail.com', '2018-01-06 00:05:26', '', 'Engineering', '2018-01-06 00:05:26', NULL),
(32, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum do', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'zCS4iah0drhTiOBRnePLQpQie', 'morgyken31@gmail.com', '2018-01-06 00:06:30', '', 'Engineering', '2018-01-06 00:06:30', NULL),
(33, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, an per legere bonorum. Mea te facilisis similique repudiandae, ne sed dico accusamus adolescens. Ne vix malis virtute fabellas. Iisque veritus constituto mei an, at nulla soluta perpetua vim. Option eripuit tractatos id nec. Mei an graeco viderer nonumes, id dicit docendi per. Meli', 'Omnium diceret percipit eos in, facete oporteat ius eu, ne liber eruditi his. Pri suas disputando ex, ea eos eius soleat appellantur. Vis ea mazim patrioque. Est dicunt ponderum gloriatur in, no lucilius salutandi mel, tollit probatus ne per. Reque nostrum pro ei, deleniti maiestatis quo ex. Mea ex aperiam blandit delicata, an laoreet euripidis theophrastus sea. Melius impetus eos ex.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, an per legere bonorum. Mea te facilisis similique repudiandae, ne sed dico accusamus adolescens. Ne vix malis virtute fabellas. Iisque veritus constituto mei an, at nulla soluta perpetua vim. Option eripuit tractatos id nec. Mei an graeco viderer nonumes, id dicit docendi per. Melius constituto honestatis vis an, eu eam elit consul democritum.</p>\r\n\r\n<p>Ad eam discere molestie, id eam diceret sanctus, mediocrem explicari ei vel. Nonumes forensibus dissentias est ne, qui epicurei elaboraret no. Usu ex malorum oporteat, id vis tamquam pericula accommodare. Pri ad vide nostro, possim suscipit corrumpit id eum.</p>\r\n\r\n<p>Inani tractatos ea per. Ferri eligendi ocurreret his te, error elitr definitionem eam te. Has no praesent complectitur, eu nec docendi efficiantur. Oratio omnesque mei te, ut soluta quidam mediocritatem his. Oblique scribentur vix an.</p>\r\n\r\n<p>Has an etiam zril explicari, saperet fierent referrentur an vim. Nullam animal ponderum ut pri, quo quaeque dolorem omittantur in, invidunt dissentiet eloquentiam nec no. Ex nec probatus periculis interesset. Adhuc mazim facete at sed, te debet munere sententiae quo. Sea doming consequat elaboraret eu.</p>\r\n\r\n<p>Omnium diceret percipit eos in, facete oporteat ius eu, ne liber eruditi his. Pri suas disputando ex, ea eos eius soleat appellantur. Vis ea mazim patrioque. Est dicunt ponderum gloriatur in, no lucilius salutandi mel, tollit probatus ne per. Reque nostrum pro ei, deleniti maiestatis quo ex. Mea ex aperiam blandit delicata, an laoreet euripidis theophrastus sea. Melius impetus eos ex.</p>', 'gZFH1DbaWccU4z0cfVwLBvWcp', 'morgyken31@gmail.com', '2018-01-06 21:59:09', '', 'Engineering', '2018-01-06 21:59:09', NULL),
(34, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor s', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'u7JbvWComQyFoP0BwPL8PDMVg', 'morgyken31@gmail.com', '2018-01-06 22:55:34', '', 'Engineering', '2018-01-06 22:55:34', NULL),
(35, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem i', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', 'rMhT2StI6eakv1PdiQvSC7mUE', 'morgyken31@gmail.com', '2018-01-06 22:58:33', '', 'Engineering', '2018-01-06 22:58:33', NULL),
(36, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ips', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '92f6bb9VmPLfKdsjt7oDJwKm7', 'morgyken31@gmail.com', '2018-01-06 22:58:52', '', 'Engineering', '2018-01-06 22:58:52', NULL),
(37, 'Post Question Here\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing e', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.', '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. &nbsp;&nbsp;</p>\r\n\r\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. &nbsp;&nbsp;</p>\r\n\r\n<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. &nbsp;&nbsp;</p>\r\n\r\n<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. &nbsp;&nbsp;</p>\r\n\r\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. &nbsp;&nbsp;</p>\r\n\r\n<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. &nbsp;&nbsp;</p>\r\n\r\n<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita</p>', 'OQhxziz0t5ZdLac0epTdXgesG', 'morgyken31@gmail.com', '2018-01-06 23:01:15', '', 'Engineering', '2018-01-06 23:01:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_categories`
--

CREATE TABLE `question_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_fileuploads`
--

CREATE TABLE `question_fileuploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_histories`
--

CREATE TABLE `question_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_matrices`
--

CREATE TABLE `question_matrices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current` int(11) DEFAULT NULL,
  `overdue` int(11) DEFAULT NULL,
  `reassigned` int(11) DEFAULT NULL,
  `completed` int(11) DEFAULT NULL,
  `rated` int(11) DEFAULT NULL,
  `tutor_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mybid` int(11) DEFAULT NULL,
  `suggested` int(11) DEFAULT NULL,
  `paid` int(11) DEFAULT NULL,
  `disputed` int(11) DEFAULT NULL,
  `revision` int(11) DEFAULT NULL,
  `cancelled` int(11) DEFAULT NULL,
  `assigned` int(11) DEFAULT NULL,
  `answered` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_matrices`
--

INSERT INTO `question_matrices` (`id`, `created_at`, `updated_at`, `remember_token`, `question_id`, `user_id`, `current`, `overdue`, `reassigned`, `completed`, `rated`, `tutor_id`, `mybid`, `suggested`, `paid`, `disputed`, `revision`, `cancelled`, `assigned`, `answered`) VALUES
(1, '2017-12-30 00:04:58', '2018-01-10 17:24:40', NULL, 'I2CMRf1bT0uS0sRwpwmTa7pYI', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2017-12-30 00:18:15', '2018-01-10 17:24:40', NULL, 'W9vdAJc3ifV2yrz9b7VjtWPhg', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2017-12-30 00:19:22', '2018-01-10 17:24:40', NULL, '3OzzpQFo87xneM9nsF9tNLSsf', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2017-12-30 00:20:56', '2018-01-10 17:24:40', NULL, 'CSzdYahPKetKAnBlrzUJuRYj4', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2017-12-30 00:22:03', '2018-01-10 17:24:41', NULL, 'XgKGRMrTDLm5u3f18YmGRTpf8', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2017-12-30 00:29:57', '2018-01-10 17:24:41', NULL, '4A3Fx1sumBy73PyVzU5LXRhqs', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2017-12-30 00:30:40', '2018-01-10 17:24:41', NULL, 'iReQ0n0FULN9jO9MOYuyaYqU1', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2017-12-30 01:46:39', '2018-01-10 17:24:41', NULL, '5GeoyGQSq1gl4NTxOOayLqPOO', 'morgyken@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2018-01-01 04:49:23', '2018-01-10 17:24:41', NULL, 'v7FZNl1hTyk9QESsZLX1xBlb1', 'morgyken31@gmail.com', 1, 1, 0, 0, 0, '', NULL, NULL, 0, NULL, 0, 0, 0, 0),
(10, '2018-01-04 14:09:12', '2018-01-10 17:24:41', NULL, '1dHlMJDnfK9At0cbPCSSS6ost', 'morgyken31@gmail.com', 1, 1, 0, 0, 0, '', NULL, NULL, 0, NULL, 0, 0, 0, 0),
(11, '2018-01-05 23:19:19', '2018-01-10 17:24:41', NULL, 'Rt9nrCa0blIYbfAJ8eLNXvDi5', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018-01-05 23:20:35', '2018-01-10 17:24:41', NULL, 'Y9pZzPi9pPAvUcR4AuxFuz52L', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018-01-05 23:21:38', '2018-01-10 17:24:41', NULL, 'CXJ6jauUHo7P62v28DijOaKkU', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2018-01-05 23:22:56', '2018-01-10 17:24:41', NULL, '6nwf7ylLbl6MMEoqgmIRNAH1S', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2018-01-05 23:25:03', '2018-01-10 17:24:41', NULL, 'jwZcSdzFPLg0puiMpkqXGBJUk', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2018-01-05 23:26:03', '2018-01-10 17:24:41', NULL, 'RAwlx7LmCfdAKQSwySeUcsmmm', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2018-01-05 23:38:14', '2018-01-10 17:24:41', NULL, 'NSdmO2f4STqSeyikfSRvkDZdu', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2018-01-05 23:38:40', '2018-01-10 19:13:15', NULL, 'fiskNYvkr97OIzCjprMvZfXco', 'morgyken31@gmail.com', 0, 0, 0, 1, 0, 'morgyken31@gmail.com', NULL, NULL, 0, NULL, 0, 0, 1, 1),
(19, '2018-01-05 23:39:12', '2018-01-10 17:24:41', NULL, 'm1gzRgYbIU5sobZTrwcS0nVip', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2018-01-05 23:40:07', '2018-01-13 20:07:21', NULL, '6AhHqmMA62RlE05yiWf4BH0nI', 'morgyken31@gmail.com', 0, 0, 0, 0, 0, 'morgyken31@gmail.com', NULL, NULL, 0, NULL, 0, 0, 1, 1),
(21, '2018-01-05 23:40:39', '2018-01-10 17:24:41', NULL, '2rfWUIHyknXQOk4zPjT6HPWnF', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2018-01-05 23:42:25', '2018-01-13 17:40:04', NULL, 'AD6mnd02i4xEP6pDIwX5eiyxR', 'morgyken@gmail.com', 0, 0, 1, 0, 0, 'morgyken31@gmail.com', NULL, NULL, 0, NULL, 1, 1, 0, 0),
(23, '2018-01-05 23:42:56', '2018-01-10 17:24:42', NULL, 'aiLiEp2YnEP1ZkxjMhJhupps3', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2018-01-05 23:59:04', '2018-01-10 17:24:42', NULL, '2kajX3wDkIcg5n6AidUsMZQED', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2018-01-05 23:59:46', '2018-01-13 00:51:08', NULL, 'YoYB7bHT10U8RlCQRjv481qbc', 'morgyken31@gmail.com', 0, 0, 0, 0, 0, 'morgyken31@gmail.com', NULL, NULL, 0, NULL, 0, 0, 1, 0),
(26, '2018-01-06 00:00:31', '2018-01-10 17:24:42', NULL, 'mX0sDqneRc4j9MgVv1kPo4EbD', 'morgyken31@gmail.com', 1, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '2018-01-06 00:01:49', '2018-01-10 17:24:42', NULL, 'IWkyR0rriC8U7dxcZPHB9tuMS', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '2018-01-06 00:03:32', '2018-01-06 00:03:32', NULL, 'KSDJGMu6kEdmC3b9lVp0o5XVs', 'morgyken31@gmail.com', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '2018-01-06 00:03:32', '2018-01-10 17:24:42', NULL, 'O5yxhRXZzOQeGkZtskvATHGuq', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2018-01-06 00:04:08', '2018-01-10 17:24:42', NULL, 'LOhg1XfhgQ7Mysi2uGxkQzb56', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '2018-01-06 00:05:26', '2018-01-10 19:29:50', NULL, '4zy25o1PfEuIIGHxgzaQckHrh', 'morgyken31@gmail.com', 1, 0, 0, 1, 0, 'morgyken31@gmail.com', NULL, NULL, 0, NULL, 0, 0, 1, 1),
(32, '2018-01-06 00:06:30', '2018-01-10 20:06:25', NULL, 'zCS4iah0drhTiOBRnePLQpQie', 'morgyken31@gmail.com', 0, 0, 0, 0, 0, 'morgyken31@gmail.com', NULL, NULL, 0, NULL, 0, 0, 1, 1),
(33, '2018-01-06 21:59:10', '2018-01-10 17:24:42', NULL, 'gZFH1DbaWccU4z0cfVwLBvWcp', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '2018-01-06 22:55:34', '2018-01-10 17:24:42', NULL, 'u7JbvWComQyFoP0BwPL8PDMVg', 'morgyken31@gmail.com', 1, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '2018-01-06 22:58:33', '2018-01-06 22:58:33', NULL, 'rMhT2StI6eakv1PdiQvSC7mUE', 'morgyken31@gmail.com', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '2018-01-06 22:58:52', '2018-01-10 17:24:42', NULL, '92f6bb9VmPLfKdsjt7oDJwKm7', 'morgyken@gmail.com', 0, 0, 0, 0, 0, '', NULL, NULL, 0, NULL, 0, 0, 1, 0),
(37, '2018-01-06 23:01:15', '2018-01-06 23:01:15', NULL, 'OQhxziz0t5ZdLac0epTdXgesG', 'morgyken31@gmail.com', 1, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_owner_tables`
--

CREATE TABLE `question_owner_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_progresses`
--

CREATE TABLE `question_progresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `assigned` int(11) DEFAULT NULL,
  `answered` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `reviewed` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_ratings`
--

CREATE TABLE `question_ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratings` int(11) DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_revisions`
--

CREATE TABLE `question_revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moderator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutorold_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutornew_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_status_models`
--

CREATE TABLE `question_status_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_students`
--

CREATE TABLE `question_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reassign_questions`
--

CREATE TABLE `reassign_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refunds_models`
--

CREATE TABLE `refunds_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

CREATE TABLE `revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1hcsU3R0oEoFcj7mpWlqb52kQaR56Jg2QWBp6E0M', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGJZTUt5Nm1sMWt3QkRnMXYwV0szZ29rQTNua2Eza1N6blp5QnAwViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTIwOiJodHRwOi8vbG9jYWxob3N0L3R1dG9yc2JvYXJkL3B1YmxpYy9jb21tZW50LWZpbGVzLzZBaEhxbU1BNjJSbEUwNXlpV2Y0QkgwbkkvRmluYW5jaWFsJTIwc3RhdG1lbnRzJTIwYW5kJTIwYXVkaXQuZG9jLzIyMTAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1515828262),
('5sWKJjdWlBtV4gkepx2Q1wxxtpTdIaAf5iuKLzng', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'YTo0OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiR1JRQmx3WDlrU2NRTXU2ODhJOXU4b2ZoQ1RlRmhnWmdZOE11SFlqUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvdHV0b3JzYm9hcmQvcHVibGljL3Bvc3QtcXVlc3Rpb25zIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1515837168),
('7QfcESo0Ir9KdUXkXqtQcFub2ZCglQzVz2js069e', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQzV1M3h3MVdXc1NJZm9rWmhTc3U5THNsOTROTlZMTk9WcktSNGhHSyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ5OiJodHRwOi8vbG9jYWxob3N0L3R1dG9yc2JvYXJkL3B1YmxpYy9hbGwtcXVlc3Rpb25zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1515849411),
('biOsttoyqjljZysKrqFKhzen2okHrRTqKcBMfjyd', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQUliTnhxUVRmamNqT3VPWXkyTUoxM3YyOTlaV0NXa0o3N0dBN2hQZiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ2OiJodHRwOi8vbG9jYWxob3N0L3R1dG9yc2JvYXJkL3B1YmxpYy9hZG0tdHV0b3JzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1515856292),
('g73qEoBES2eFVIscrelXQxmwwcLUXbzXRfUsDtjW', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicjBRRVVpalNKT1JFZmM1U0VoRzBta3pxdGVZdlpDeWpQRVZyaVlXOSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjc1OiJodHRwOi8vbG9jYWxob3N0L3R1dG9yc2JvYXJkL3B1YmxpYy92aWV3LXF1ZXN0aW9uLzJrYWpYM3dEa0ljZzVuNkFpZFVzTVpRRUQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1515871774),
('K3Yc9WeJ5hQnEnwrMS0B9o2UuK0ggt3ddVeBIYet', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicnJHYnJmQ1FYSlpvcXZZUWduVE1XdWRjR3hrZ2NHQndvaEt6a1lpbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9sb2NhbGhvc3QvdHV0b3JzYm9hcmQvcHVibGljL2FsbC1xdWVzdGlvbnMvYW5zd2VyZWQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1515845414),
('oya1vnnJXvyOlh7vzZHv72m9YDXJWjh5AEiMJd9A', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY2FkcE9VMVlNOVJxN3pmdnFqbFU1MzU4Y3lpZHlGYUVINklaeHJ0TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3QvdHV0b3JzYm9hcmQvcHVibGljL2FsbC1xdWVzdGlvbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1516597577),
('xNFRHCndvqCICilG8ySSo8BuWk8GKWJ0M6M5tO9P', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN0Mwb0FnaXJqNWFISmE0WHFXRFZVQjlGUmsxYm9pOVRIOTQ5MFlhUiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjc1OiJodHRwOi8vbG9jYWxob3N0L3R1dG9yc2JvYXJkL3B1YmxpYy92aWV3LXF1ZXN0aW9uL0FENm1uZDAyaTR4RVA2cERJd1g1ZWl5eFIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1515872919);

-- --------------------------------------------------------

--
-- Table structure for table `suggest_deadlines`
--

CREATE TABLE `suggest_deadlines` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_deadline` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suggest_price_increases`
--

CREATE TABLE `suggest_price_increases` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  `suggested_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_accounts`
--

CREATE TABLE `tutor_accounts` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(1) NOT NULL,
  `ratings` int(11) NOT NULL,
  `account_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_account` text COLLATE utf8mb4_unicode_ci,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutor_accounts`
--

INSERT INTO `tutor_accounts` (`created_at`, `updated_at`, `id`, `remember_token`, `account_id`, `tutor_id`, `active`, `ratings`, `account_level`, `account_status`, `payment_account`, `payment_method`) VALUES
('2017-12-30 14:39:41', '2017-12-30 16:44:15', 1, NULL, '440790', 'morgyken12@gmail.com', 0, 5, NULL, 'New', '312432525647568', 'Equity'),
('2017-12-30 17:55:00', '2017-12-30 17:55:00', 2, NULL, '476687', 'morgyken231@gmail.com', 0, 4, 'Beginner', 'New', NULL, NULL),
('2017-12-31 02:20:07', '2017-12-31 02:20:07', 3, NULL, '486718', 'morgyken31@gmail.com', 0, 2, 'Beginner', 'New', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_education`
--

CREATE TABLE `tutor_education` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highschool` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areaofstudy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutor_education`
--

INSERT INTO `tutor_education` (`created_at`, `updated_at`, `id`, `remember_token`, `tutor_id`, `highschool`, `college`, `areaofstudy`, `language`) VALUES
('2017-12-30 18:33:03', '2017-12-30 18:33:03', 1, NULL, 'morgyken231@gmail.com', 'Sample', NULL, 'sample', NULL),
('2017-12-31 03:06:42', '2017-12-31 03:06:42', 2, NULL, 'morgyken31@gmail.com', 'Kisumu High', NULL, 'Computer Science', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_education_models`
--

CREATE TABLE `tutor_education_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertise` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_payment`
--

CREATE TABLE `tutor_payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` text COLLATE utf8mb4_unicode_ci,
  `paid_by` text COLLATE utf8mb4_unicode_ci,
  `order_summary` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutor_payment`
--

INSERT INTO `tutor_payment` (`id`, `created_at`, `updated_at`, `remember_token`, `order_id`, `tutor_id`, `payment_id`, `paid_by`, `order_summary`, `status`, `amount`) VALUES
(1, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, 'I2CMRf1bT0uS0sRwpwmTa7pYI', 'morgyken@gmail.com', '114318', 'morgyken@gmail.com', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a t', '1', '957'),
(2, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, 'W9vdAJc3ifV2yrz9b7VjtWPhg', 'morgyken@gmail.com', '183372', 'morgyken@gmail.com', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a t', '1', '808'),
(3, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, '3OzzpQFo87xneM9nsF9tNLSsf', 'morgyken@gmail.com', '296708', 'morgyken@gmail.com', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a t', '1', '1137'),
(4, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, 'CSzdYahPKetKAnBlrzUJuRYj4', 'morgyken@gmail.com', '380708', 'morgyken@gmail.com', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a t', '1', '1077'),
(5, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, 'XgKGRMrTDLm5u3f18YmGRTpf8', 'morgyken@gmail.com', '680935', 'morgyken@gmail.com', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a t', '1', '898'),
(6, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, '4A3Fx1sumBy73PyVzU5LXRhqs', 'morgyken@gmail.com', '645298', 'morgyken@gmail.com', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a t', '1', '837.76'),
(7, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, 'iReQ0n0FULN9jO9MOYuyaYqU1', 'morgyken@gmail.com', '979337', 'morgyken@gmail.com', '<h1>Post Question Here</h1>\r\n\r\n<p>Cross-site request forgeries are a t', '1', '448.8'),
(8, '2017-12-30 01:46:40', '2017-12-30 01:46:48', NULL, '5GeoyGQSq1gl4NTxOOayLqPOO', NULL, '71743', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p><strong>Convert JSON</strong>&nbsp;S', '0', '777.92'),
(9, '2018-01-01 04:49:23', '2018-01-01 04:49:23', NULL, 'v7FZNl1hTyk9QESsZLX1xBlb1', NULL, '80132', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>ross-site request forgeries are a ty', '0', NULL),
(10, '2018-01-04 14:09:12', '2018-01-04 14:09:12', NULL, '1dHlMJDnfK9At0cbPCSSS6ost', NULL, '24204', NULL, '<h1>Post Question Here</h1>\r\n\r\n<pre>\r\n<code>function characterList(){\r', '0', NULL),
(11, '2018-01-05 23:19:19', '2018-01-05 23:19:19', NULL, 'Rt9nrCa0blIYbfAJ8eLNXvDi5', NULL, '31549', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(12, '2018-01-05 23:20:36', '2018-01-05 23:20:36', NULL, 'Y9pZzPi9pPAvUcR4AuxFuz52L', NULL, '13536', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(13, '2018-01-05 23:21:38', '2018-01-05 23:21:38', NULL, 'CXJ6jauUHo7P62v28DijOaKkU', NULL, '83530', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(14, '2018-01-05 23:22:56', '2018-01-05 23:22:56', NULL, '6nwf7ylLbl6MMEoqgmIRNAH1S', NULL, '25537', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(15, '2018-01-05 23:25:03', '2018-01-05 23:25:03', NULL, 'jwZcSdzFPLg0puiMpkqXGBJUk', NULL, '61048', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(16, '2018-01-05 23:26:03', '2018-01-05 23:26:03', NULL, 'RAwlx7LmCfdAKQSwySeUcsmmm', NULL, '99471', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(17, '2018-01-05 23:38:14', '2018-01-05 23:38:14', NULL, 'NSdmO2f4STqSeyikfSRvkDZdu', NULL, '88021', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(18, '2018-01-05 23:38:40', '2018-01-05 23:38:40', NULL, 'fiskNYvkr97OIzCjprMvZfXco', NULL, '39000', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(19, '2018-01-05 23:39:12', '2018-01-05 23:39:12', NULL, 'm1gzRgYbIU5sobZTrwcS0nVip', NULL, '46393', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(20, '2018-01-05 23:40:07', '2018-01-05 23:40:07', NULL, '6AhHqmMA62RlE05yiWf4BH0nI', NULL, '53502', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(21, '2018-01-05 23:40:39', '2018-01-05 23:40:39', NULL, '2rfWUIHyknXQOk4zPjT6HPWnF', NULL, '62047', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(22, '2018-01-05 23:42:25', '2018-01-05 23:42:25', NULL, 'AD6mnd02i4xEP6pDIwX5eiyxR', NULL, '47057', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(23, '2018-01-05 23:42:56', '2018-01-05 23:42:56', NULL, 'aiLiEp2YnEP1ZkxjMhJhupps3', NULL, '64826', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consecte', '0', NULL),
(24, '2018-01-05 23:59:04', '2018-01-05 23:59:04', NULL, '2kajX3wDkIcg5n6AidUsMZQED', NULL, '14574', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(25, '2018-01-05 23:59:46', '2018-01-05 23:59:46', NULL, 'YoYB7bHT10U8RlCQRjv481qbc', NULL, '70252', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(26, '2018-01-06 00:00:31', '2018-01-06 00:00:31', NULL, 'mX0sDqneRc4j9MgVv1kPo4EbD', NULL, '95949', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(27, '2018-01-06 00:01:49', '2018-01-06 00:01:49', NULL, 'IWkyR0rriC8U7dxcZPHB9tuMS', NULL, '52506', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(28, '2018-01-06 00:03:32', '2018-01-06 00:03:32', NULL, 'KSDJGMu6kEdmC3b9lVp0o5XVs', NULL, '46029', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(29, '2018-01-06 00:03:32', '2018-01-06 00:03:32', NULL, 'O5yxhRXZzOQeGkZtskvATHGuq', NULL, '62840', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(30, '2018-01-06 00:04:08', '2018-01-06 00:04:08', NULL, 'LOhg1XfhgQ7Mysi2uGxkQzb56', NULL, '56129', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(31, '2018-01-06 00:05:26', '2018-01-06 00:05:26', NULL, '4zy25o1PfEuIIGHxgzaQckHrh', NULL, '22866', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(32, '2018-01-06 00:06:30', '2018-01-06 00:06:30', NULL, 'zCS4iah0drhTiOBRnePLQpQie', NULL, '63236', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(33, '2018-01-06 21:59:10', '2018-01-06 21:59:10', NULL, 'gZFH1DbaWccU4z0cfVwLBvWcp', NULL, '42814', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, an per l', '0', NULL),
(34, '2018-01-06 22:55:34', '2018-01-06 22:55:34', NULL, 'u7JbvWComQyFoP0BwPL8PDMVg', NULL, '45439', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(35, '2018-01-06 22:58:33', '2018-01-06 22:58:33', NULL, 'rMhT2StI6eakv1PdiQvSC7mUE', NULL, '27253', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(36, '2018-01-06 22:58:52', '2018-01-06 22:58:52', NULL, '92f6bb9VmPLfKdsjt7oDJwKm7', NULL, '28526', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL),
(37, '2018-01-06 23:01:15', '2018-01-06 23:01:15', NULL, 'OQhxziz0t5ZdLac0epTdXgesG', NULL, '98043', NULL, '<h1>Post Question Here</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consetet', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_payment_bonuses`
--

CREATE TABLE `tutor_payment_bonuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `paid_by` text COLLATE utf8mb4_unicode_ci,
  `amount` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutor_payment_bonuses`
--

INSERT INTO `tutor_payment_bonuses` (`id`, `created_at`, `updated_at`, `tutor_id`, `payment_id`, `order_id`, `status`, `paid_by`, `amount`, `remember_token`) VALUES
(1, '2018-01-01 04:49:23', '2018-01-01 04:49:43', NULL, '73283', 'v7FZNl1hTyk9QESsZLX1xBlb1', 0, NULL, '983.84', NULL),
(2, '2018-01-04 14:09:12', '2018-01-04 14:09:37', NULL, '71064', '1dHlMJDnfK9At0cbPCSSS6ost', 0, NULL, '1059.52', NULL),
(3, '2018-01-05 23:19:19', '2018-01-05 23:19:48', NULL, '48820', 'Rt9nrCa0blIYbfAJ8eLNXvDi5', 0, NULL, '1097.36', NULL),
(4, '2018-01-05 23:20:36', '2018-01-05 23:20:46', NULL, '56874', 'Y9pZzPi9pPAvUcR4AuxFuz52L', 0, NULL, '983.84', NULL),
(5, '2018-01-05 23:21:38', '2018-01-05 23:22:00', NULL, '48368', 'CXJ6jauUHo7P62v28DijOaKkU', 0, NULL, '1286.56', NULL),
(6, '2018-01-05 23:22:56', '2018-01-05 23:23:16', NULL, '23905', '6nwf7ylLbl6MMEoqgmIRNAH1S', 0, NULL, '1135.2', NULL),
(7, '2018-01-05 23:25:03', '2018-01-05 23:25:20', NULL, '11648', 'jwZcSdzFPLg0puiMpkqXGBJUk', 0, NULL, '946', NULL),
(8, '2018-01-05 23:26:03', '2018-01-05 23:26:15', NULL, '98368', 'RAwlx7LmCfdAKQSwySeUcsmmm', 0, NULL, '756.8', NULL),
(9, '2018-01-05 23:38:14', '2018-01-05 23:38:23', NULL, '22100', 'NSdmO2f4STqSeyikfSRvkDZdu', 0, NULL, '1097.36', NULL),
(10, '2018-01-05 23:38:41', '2018-01-05 23:38:57', NULL, '37357', 'fiskNYvkr97OIzCjprMvZfXco', 0, NULL, '1021.68', NULL),
(11, '2018-01-05 23:39:12', '2018-01-05 23:39:26', NULL, '73383', 'm1gzRgYbIU5sobZTrwcS0nVip', 0, NULL, '1286.56', NULL),
(12, '2018-01-05 23:40:07', '2018-01-05 23:40:18', NULL, '92908', '6AhHqmMA62RlE05yiWf4BH0nI', 0, NULL, '1059.52', NULL),
(13, '2018-01-05 23:40:39', '2018-01-05 23:40:54', NULL, '15781', '2rfWUIHyknXQOk4zPjT6HPWnF', 0, NULL, '1059.52', NULL),
(14, '2018-01-05 23:42:25', '2018-01-05 23:42:35', NULL, '50595', 'AD6mnd02i4xEP6pDIwX5eiyxR', 0, NULL, '1097.36', NULL),
(15, '2018-01-05 23:42:56', '2018-01-05 23:43:06', NULL, '73355', 'aiLiEp2YnEP1ZkxjMhJhupps3', 0, NULL, '1324.4', NULL),
(16, '2018-01-05 23:59:04', '2018-01-05 23:59:15', NULL, '27485', '2kajX3wDkIcg5n6AidUsMZQED', 0, NULL, '1173.04', NULL),
(17, '2018-01-05 23:59:46', '2018-01-06 00:00:11', NULL, '10961', 'YoYB7bHT10U8RlCQRjv481qbc', 0, NULL, '908.16', NULL),
(18, '2018-01-06 00:00:31', '2018-01-06 00:01:31', NULL, '54271', 'mX0sDqneRc4j9MgVv1kPo4EbD', 0, NULL, '908.16', NULL),
(19, '2018-01-06 00:01:49', '2018-01-06 00:02:01', NULL, '93995', 'IWkyR0rriC8U7dxcZPHB9tuMS', 0, NULL, '908.16', NULL),
(20, '2018-01-06 00:03:32', '2018-01-06 00:03:32', NULL, '88295', 'KSDJGMu6kEdmC3b9lVp0o5XVs', 0, NULL, NULL, NULL),
(21, '2018-01-06 00:03:32', '2018-01-06 00:03:46', NULL, '81320', 'O5yxhRXZzOQeGkZtskvATHGuq', 0, NULL, '1021.68', NULL),
(22, '2018-01-06 00:04:08', '2018-01-06 00:04:17', NULL, '87084', 'LOhg1XfhgQ7Mysi2uGxkQzb56', 0, NULL, '983.84', NULL),
(23, '2018-01-06 00:05:26', '2018-01-06 00:06:10', NULL, '84301', '4zy25o1PfEuIIGHxgzaQckHrh', 0, NULL, '983.84', NULL),
(24, '2018-01-06 00:06:30', '2018-01-06 00:06:39', NULL, '61630', 'zCS4iah0drhTiOBRnePLQpQie', 0, NULL, '946', NULL),
(25, '2018-01-06 21:59:10', '2018-01-06 22:40:29', NULL, '66893', 'gZFH1DbaWccU4z0cfVwLBvWcp', 0, NULL, '756.8', NULL),
(26, '2018-01-06 22:55:34', '2018-01-06 22:57:10', NULL, '18853', 'u7JbvWComQyFoP0BwPL8PDMVg', 0, NULL, '946', NULL),
(27, '2018-01-06 22:58:33', '2018-01-06 22:58:33', NULL, '68297', 'rMhT2StI6eakv1PdiQvSC7mUE', 0, NULL, NULL, NULL),
(28, '2018-01-06 22:58:52', '2018-01-06 22:59:40', NULL, '22813', '92f6bb9VmPLfKdsjt7oDJwKm7', 0, NULL, '1286.56', NULL),
(29, '2018-01-06 23:01:15', '2018-01-06 23:01:15', NULL, '28539', 'OQhxziz0t5ZdLac0epTdXgesG', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_profile`
--

CREATE TABLE `tutor_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratings` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tutor_profile`
--

INSERT INTO `tutor_profile` (`id`, `created_at`, `updated_at`, `remember_token`, `tutor_id`, `firstname`, `lastname`, `skype`, `county`, `phoneno`, `town`, `ratings`) VALUES
(1, '2017-12-30 18:08:14', '2017-12-30 18:08:14', NULL, 'morgyken231@gmail.com', 'sample', 'sample', NULL, 'Sample', '0704223370', 'sample', NULL),
(3, '2017-12-31 03:06:08', '2017-12-31 03:06:08', NULL, 'morgyken31@gmail.com', 'Kennedy', 'Morgyken', NULL, 'Kisumu', '0704223370', 'Kisumu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_progresses`
--

CREATE TABLE `tutor_progresses` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qascore` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revisions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late_uploads` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refunds` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tut_payment_totals`
--

CREATE TABLE `tut_payment_totals` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_by` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tut_payment_totals`
--

INSERT INTO `tut_payment_totals` (`id`, `created_at`, `updated_at`, `remember_token`, `tutor_id`, `payment_id`, `paid_by`, `amount`) VALUES
(1, '2017-12-30 01:30:27', '2017-12-30 01:30:27', NULL, 'morgyken@gmail.com', '486594', 'morgyken@gmail.com', '6163.56'),
(2, '2017-12-30 01:33:05', '2017-12-30 01:33:05', NULL, 'morgyken@gmail.com', '28186', 'morgyken@gmail.com', '6163.56'),
(3, '2017-12-30 01:35:45', '2017-12-30 01:35:45', NULL, 'morgyken@gmail.com', '330411', 'morgyken@gmail.com', '6163.56');

-- --------------------------------------------------------

--
-- Table structure for table `unassigned_questions`
--

CREATE TABLE `unassigned_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `university_models`
--

CREATE TABLE `university_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university_models`
--

INSERT INTO `university_models` (`id`, `created_at`, `updated_at`, `remember_token`, `university_name`, `country`, `state`) VALUES
(22, NULL, NULL, NULL, 'University of Southern California\r\n', NULL, '0'),
(23, NULL, NULL, NULL, 'Washington University Saint Louis\r\n', NULL, '0'),
(24, NULL, NULL, NULL, 'Oregon State University\r\n', NULL, NULL),
(25, NULL, NULL, NULL, 'Northwestern University\r\n', NULL, NULL),
(26, NULL, NULL, NULL, 'Colorado State University\r\n', NULL, NULL),
(27, NULL, NULL, NULL, 'Ohio State University\r\n', NULL, NULL),
(28, NULL, NULL, NULL, 'Colorado State University\r\n', NULL, NULL),
(29, NULL, NULL, NULL, 'Ohio State University\r\n', NULL, NULL),
(30, NULL, NULL, NULL, 'McGill University\r\n', NULL, NULL),
(31, NULL, NULL, NULL, 'University of Arizona\r\n', NULL, NULL),
(32, NULL, NULL, NULL, 'McGill University\r\n', NULL, NULL),
(33, NULL, NULL, NULL, 'University of Arizona\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morgan', 'admin', 'morgyken@gmail.com', '$2y$10$2gHpZxuJ4icT/R6Owu4rNOnB.UG.5BcHdZXWjv60h9e8eULgQm.ge', 'yoIeyOD1yoXaIO1oZFKq6mB5qiU3Cxy5c9yhXjwg8peqlpzzwhoWatMaxon3', '2017-12-29 21:21:11', '2017-12-29 21:21:11'),
(2, 'Kennedy Ochieng', 'admin', 'morgyken12@gmail.com', '$2y$10$8YVdZrL/M.R1n3ibX0CIzu7nPc5QUso.UrvCbTlZdNZQwGc.9LMiq', 'STsgR1sNYCAQ53DyP5QuBoXDmtAOnnrUPVxteVWNb6NN6T8FWvXZ8cSWsK0z', '2017-12-30 14:39:42', '2017-12-30 14:39:42'),
(3, 'major', 'cust', 'morgyken231@gmail.com', '$2y$10$NicyIWQUEGAim8NNzanmWe.qy4K5kdFq3jDWdrZCVi436VfWTofZG', NULL, '2017-12-30 17:55:00', '2017-12-30 17:55:00'),
(4, 'Kennedy Ochieng', 'tutor', 'morgyken31@gmail.com', '$2y$10$v6Gxr583oXO.QW0d76zz2uDdtDr3j3Xou7Ujk3mHfKNjv.EtH0gBu', 'k0EaxFGCjRiVf2ThSKA260ss830a6juf1VJHGWGbRbAZ96M2LwILUjlJXVEc', '2017-12-31 02:20:07', '2017-12-31 02:20:07'),
(12, 'Kody Hagenes', 'cust', 'davis.akeem@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '5yF2yE33WC', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(13, 'Cade Rodriguez', 'cust', 'isabell30@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'M0zvHSfnSw', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(14, 'Maud McClure', 'admin', 'mbatz@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'FF8vxDwHnr', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(15, 'Joshuah Lindgren', 'admin', 'odickens@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'sW8VjYAzEz', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(16, 'Matilda McLaughlin', 'cust', 'brian62@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'SwUOa6tL1e', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(17, 'Orville Robel', 'admin', 'carlie.bergnaum@rau.net', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'WsxNjDrhRi', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(18, 'Pansy Block II', 'tutor', 'asa.raynor@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'Ul1Be5dfjF', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(19, 'Mr. Uriel Beatty', 'admin', 'hosea24@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'T2wO5PcITI', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(20, 'Mrs. Icie Witting', 'cust', 'jadyn.mills@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'WAiEpTC21U', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(21, 'Dusty Okuneva', 'admin', 'fswaniawski@mohr.info', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'LmLTq4GS0z', '2018-01-13 23:07:53', '2018-01-13 23:07:53'),
(22, 'Mrs. Carmen Hansen', 'tutor', 'hackett.eileen@reilly.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'zB99a1Ikmc', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(23, 'Prof. Irving Hahn', 'cust', 'laurie.marquardt@blick.org', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '8BDvzjhgk6', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(24, 'Stephan Kunze', 'cust', 'gretchen23@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'BwDeiGGLmF', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(25, 'Wilfred Walker', 'admin', 'dmills@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'zD8atBiASK', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(26, 'Freeman Hammes', 'admin', 'eleanore40@gerhold.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'FAHapJgcPE', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(27, 'Georgette Kris IV', 'tutor', 'ledner.ardella@okeefe.biz', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'wSgH2LhzD2', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(28, 'Josiane Fay III', 'cust', 'rkirlin@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'YmVs8guyxh', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(29, 'Dr. Alexandre Oberbrunner', 'tutor', 'belle.goodwin@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'uBRIDyRFPB', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(30, 'Miss Aimee Hyatt V', 'cust', 'shyanne23@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'esYn3Vd5QI', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(31, 'Emmet Hegmann', 'admin', 'kira67@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '0YdxXv4ApH', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(32, 'Katharina Wyman', 'admin', 'tcummerata@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '91vsnW08UX', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(33, 'Estelle Fahey', 'tutor', 'gus92@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'QKrjNKvjC8', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(34, 'Rae Maggio IV', 'tutor', 'hailey.weissnat@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'gLXQLZgbPu', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(35, 'Lavada Yundt Jr.', 'tutor', 'dvonrueden@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '8H5N0fpMAA', '2018-01-13 23:07:54', '2018-01-13 23:07:54'),
(36, 'Miss Bridie Anderson', 'cust', 'bmayer@jerde.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '8gni4UEErN', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(37, 'Ms. Thea Russel', 'admin', 'leannon.elmore@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'yITBouzjny', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(38, 'Brionna Kovacek', 'admin', 'stracke.giovanny@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 't0JJUnRVCI', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(39, 'Prof. Zachary Mante', 'cust', 'brooklyn92@schmeler.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'TxhZ08EAG9', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(40, 'Gerry Gutkowski', 'admin', 'enos.von@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'D5Ng9tqveQ', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(41, 'Laurine O\'Hara', 'tutor', 'irwin98@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'e3A6WvwaAt', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(42, 'Estefania Murphy I', 'admin', 'fstrosin@mraz.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'XcB597KIDO', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(43, 'Kevin Satterfield', 'cust', 'noemy.schaefer@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'MzzcMSv2SD', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(44, 'Louie Fritsch', 'tutor', 'weber.ernestine@dickens.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'DYlfbhZlM5', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(45, 'Dr. Milton Beier', 'tutor', 'twila71@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'fmoSLN8hEd', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(46, 'Prof. Raymond McCullough MD', 'cust', 'dcarter@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'WieE1MQtow', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(47, 'Dr. Patrick Kunde DVM', 'tutor', 'klein.gianni@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'FphGgXL5cn', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(48, 'Kamille Lehner', 'tutor', 'qprosacco@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'mdaWUXJZgC', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(49, 'Julien Reynolds', 'tutor', 'kaleb25@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'QmuZeOUHvT', '2018-01-13 23:07:55', '2018-01-13 23:07:55'),
(50, 'Dr. Alfonso Rath', 'tutor', 'laney.donnelly@kozey.info', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'hk9tmaAsNB', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(51, 'Mr. Rhett Wehner', 'admin', 'carley50@marvin.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'YjuJ1niPnB', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(52, 'Keyon Pouros', 'cust', 'luisa95@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'kiMMt5UWPT', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(53, 'Lilly Farrell', 'admin', 'jo.koelpin@mertz.org', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 's2Fc2kRT3e', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(54, 'Humberto Hackett', 'cust', 'karianne.adams@tromp.biz', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'fuOXLXpuFq', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(55, 'Dr. Ulices Wilkinson III', 'cust', 'barton.morar@shanahan.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '8LnjR5mTcW', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(56, 'Prof. Leone Wiza', 'cust', 'earline56@huels.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'hjSFYqClKA', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(57, 'Prof. Kiel Collier', 'tutor', 'maybelle91@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'OTzC75xRWF', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(58, 'Jeramy Krajcik IV', 'tutor', 'zwisoky@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'vnefEpRI8C', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(59, 'Santa Cremin', 'tutor', 'seamus.corwin@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'fLsu7kgVDb', '2018-01-13 23:07:56', '2018-01-13 23:07:56'),
(60, 'Oliver Cormier', 'admin', 'koepp.shayne@heidenreich.org', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'itFZmZ4qgr', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(61, 'Minnie Botsford', 'cust', 'dave.mayert@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'qd6XMvDQ7P', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(62, 'Dianna Metz II', 'tutor', 'schneider.cristina@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'mfyfsBRCPD', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(63, 'Mr. Matteo Zboncak', 'tutor', 'junior32@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'ANeu2GYj9B', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(64, 'Prof. Lenora Balistreri I', 'tutor', 'tressa.okeefe@schuster.info', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'ViTe0i7JTq', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(65, 'Alberta Bartell', 'cust', 'nterry@howell.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'vtD1Foivik', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(66, 'Prof. Ricky Kilback', 'cust', 'considine.lucile@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'xGMEP4vWtI', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(67, 'Jany Donnelly Jr.', 'cust', 'mlemke@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '4sMsv9ukzh', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(68, 'Tre Purdy V', 'tutor', 'sigrid.koch@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'rR3hrDEjIy', '2018-01-13 23:07:57', '2018-01-13 23:07:57'),
(69, 'Adrien Renner Jr.', 'cust', 'destinee67@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'LYH35LB3IK', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(70, 'Rogers Wolff', 'cust', 'darien73@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'k4op0sqVkV', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(71, 'Ernesto Russel', 'tutor', 'robel.tyler@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'b4gvnc9NN6', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(72, 'Jacynthe Powlowski V', 'cust', 'myra60@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'FfRChu1HMt', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(73, 'Spencer Rippin', 'admin', 'nblock@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'ebGBdTobZp', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(74, 'Dr. Christop Murray MD', 'admin', 'lester50@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'QdB00G4C5Z', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(75, 'Dr. Darby Hoeger', 'cust', 'minnie08@windler.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'gQb0bLpcVe', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(76, 'Mekhi Kuhn', 'cust', 'sibyl.halvorson@hickle.org', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'lSYgoFPOkZ', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(77, 'Jaida Roob', 'admin', 'hilll.mireille@kreiger.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'HwWf15VSDN', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(78, 'Prof. Cleta Gerhold', 'admin', 'oral25@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '7GOhdnMBkX', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(79, 'Dr. Rashawn Boyer IV', 'cust', 'kiel.langosh@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'AHBR10qbr6', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(80, 'Sadye Olson', 'admin', 'richie71@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'MXs7VGjgfi', '2018-01-13 23:07:58', '2018-01-13 23:07:58'),
(81, 'Rick Baumbach', 'tutor', 'nelson.durgan@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'xw2ycYhCvm', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(82, 'Jaylan Cremin', 'tutor', 'eturner@franecki.net', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'k2iKRbYvrM', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(83, 'Dr. Kirk Schuppe Jr.', 'tutor', 'vergie.nitzsche@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'q6bzh07eSm', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(84, 'Elinor Trantow', 'cust', 'matt62@gislason.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '6FvERF3axc', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(85, 'Hilario Goyette', 'admin', 'fritsch.serenity@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'tfj0qtt16O', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(86, 'Randi Davis', 'admin', 'obraun@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '1AEmKpJYDC', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(87, 'Lisandro Altenwerth', 'admin', 'sydney.wyman@hermiston.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'LuMybcMZr6', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(88, 'Cassie Hoeger', 'admin', 'bonita33@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'd8XH5Okn5i', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(89, 'Maureen Keeling', 'admin', 'idell46@gislason.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'hy25XJUmzj', '2018-01-13 23:07:59', '2018-01-13 23:07:59'),
(90, 'Prof. Lexi Nikolaus III', 'tutor', 'wilfredo.mann@bode.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '63Lh7zzI2l', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(91, 'Oswald Wolf', 'tutor', 'powlowski.jerrell@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'ZdyNRw5GJz', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(92, 'Meda Moen', 'cust', 'lance.rice@leffler.net', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'GkpuJ4FdBQ', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(93, 'Ms. Nakia D\'Amore', 'tutor', 'richard.willms@shanahan.org', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'wjrKyb0jpK', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(94, 'Robb Rowe', 'tutor', 'ondricka.jaren@huel.biz', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'RznWoa0iDD', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(95, 'Dr. Cooper Grimes MD', 'tutor', 'lyric.walker@johnston.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '53NunlPTYW', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(96, 'Alexandrine Beatty', 'tutor', 'awindler@mohr.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'uf953UlVUC', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(97, 'Derrick Bauch IV', 'cust', 'larkin.mitchell@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'BUGSaES8vT', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(98, 'Deshaun Labadie', 'admin', 'hwisozk@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'fYCpPVYfN8', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(99, 'Cole Johnson II', 'cust', 'dorris41@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'kRTeDXW4EQ', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(100, 'Alec Lebsack V', 'tutor', 'stanton.kole@mosciski.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'oBypumDFjO', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(101, 'Prof. Jerome Thompson', 'admin', 'oherzog@wolf.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'Gs3tw4jAK4', '2018-01-13 23:08:00', '2018-01-13 23:08:00'),
(102, 'Mr. Cameron Emard Jr.', 'tutor', 'tillman.carolanne@buckridge.net', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'XG9b3rAgs7', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(103, 'Hulda Ondricka PhD', 'cust', 'asha05@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 't9pHkU4KQ7', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(104, 'Aniya Kovacek II', 'tutor', 'dan.marquardt@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'QLIfwFBsvX', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(105, 'Rick Volkman', 'tutor', 'brandi.morissette@herzog.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'eg5i6zaevR', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(106, 'Mr. Mackenzie Marks', 'admin', 'kenya74@yahoo.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'IjoyK1KClY', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(107, 'Ms. Kaia Schumm', 'tutor', 'reinger.al@larkin.info', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'BZyhbDwec3', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(108, 'Cooper Crist MD', 'tutor', 'marks.elmer@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'uBIR9iAAMf', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(109, 'Jaylan Hettinger', 'tutor', 'mcrooks@gusikowski.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'IIH63qZOLJ', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(110, 'Gilda Hackett II', 'admin', 'ireynolds@hotmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', '1aEneQSQL0', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(111, 'Karson Friesen', 'admin', 'johanna63@gmail.com', '$2y$10$v2jZfPyxxczKH11ERepowu8lrJCH7SfCF7mnQwyZgwUJS.FV8uhw6', 'TlKkMfvitZ', '2018-01-13 23:08:01', '2018-01-13 23:08:01'),
(112, '1Le74tQ0FL', 'Zf3GJKW1x2', '3NgrbEw1td@gmail.com', '$2y$10$LjUBKDyjn1yZWo1dz60sguNEhylnpczqWAkJKsqvftm4gmXOHlP0a', NULL, NULL, NULL),
(113, 'Jarrod Bartell', 'admin', 'edicki@armstrong.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'iNeQwA63lx', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(114, 'Marjolaine Wisozk', 'cust', 'xlegros@crona.biz', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'sqWdD86e2i', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(115, 'Chelsie Bednar Sr.', 'tutor', 'jarod.west@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'fRgvqGihkU', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(116, 'Darwin Wolff', 'tutor', 'santino34@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '3l7Q4g4uPn', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(117, 'Doyle Dare', 'cust', 'schoen.lindsay@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'ROWSFWVHJN', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(118, 'Ms. Maribel Weissnat', 'tutor', 'spinka.sidney@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '906jSQWFiR', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(119, 'Jackie Bode', 'admin', 'jenkins.elna@green.net', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'zhjYEcTJUL', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(120, 'Prof. Jacky Farrell', 'tutor', 'kaley.deckow@herzog.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'dqtI5yWCCf', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(121, 'Hank Satterfield', 'tutor', 'pierce.kerluke@lehner.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '4NtaNKZMye', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(122, 'Bill Dickens DVM', 'admin', 'langosh.brionna@ankunding.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'GZ8XK6GEMW', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(123, 'Valentine Farrell', 'cust', 'shields.trace@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'CTDbepVrBz', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(124, 'Prof. Judd Christiansen III', 'tutor', 'ekris@kiehn.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'iQ1eT5XPCr', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(125, 'Prof. Fae Predovic IV', 'tutor', 'kylee.braun@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'wVUykq7IeS', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(126, 'Deontae Kiehn', 'admin', 'hoberbrunner@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'ZFkWt5TR0g', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(127, 'Mr. Uriel Muller Sr.', 'tutor', 'iboehm@jaskolski.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'uSGD1IVieB', '2018-01-13 23:10:21', '2018-01-13 23:10:21'),
(128, 'Delbert Stracke', 'cust', 'alivia57@kuhn.info', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'rQoQsr9VRK', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(129, 'Aliya Simonis', 'tutor', 'connie96@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'EMQZmcA3hR', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(130, 'Efrain Schulist', 'admin', 'skiles.brooklyn@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'ih0xTJ0RdL', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(131, 'Alanna Jacobson', 'tutor', 'jaquelin03@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'MTAiAg8LXo', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(132, 'Prof. Maximilian Leffler MD', 'tutor', 'weimann.seamus@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '0Y0uxC5kCt', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(133, 'Laurel Torphy', 'cust', 'sschneider@beer.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'q4I0GPPr46', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(134, 'Hayley Frami', 'cust', 'sgerlach@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '3eZUlMC5wC', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(135, 'Birdie Purdy', 'cust', 'cleora.hills@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'NyUh39eEDz', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(136, 'Harmony Kovacek', 'cust', 'micaela84@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'y5cCMiBG6Q', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(137, 'Kathlyn Wolff', 'cust', 'vita.rowe@collier.info', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'lJhzpiqyRa', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(138, 'Dawson Stracke', 'cust', 'conroy.marian@marquardt.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'BiZTv1MCYa', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(139, 'Marcelino Wiza', 'admin', 'nwiza@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'eOFonyeXWj', '2018-01-13 23:10:22', '2018-01-13 23:10:22'),
(140, 'Elmira Roberts', 'tutor', 'ryan.francis@herzog.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '2dY5edtkaG', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(141, 'Anastasia Pollich', 'admin', 'enoch.bechtelar@little.org', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'IqAXLQLVg5', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(142, 'Marietta Gorczany', 'cust', 'lemke.madaline@romaguera.biz', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'Q9n48VtKHD', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(143, 'Laney Bergstrom', 'cust', 'bridgette.leuschke@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'smQNJek8ia', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(144, 'Javon Marquardt III', 'admin', 'malvina40@doyle.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'rC7okXQJfc', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(145, 'Seth Nolan', 'admin', 'nkassulke@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'kVSEMSjZuX', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(146, 'Jaunita Schoen', 'admin', 'hconsidine@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'nZGmgqhYic', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(147, 'Angel Crona', 'cust', 'lempi.okeefe@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'Ryo5cVLAYW', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(148, 'Juanita Nikolaus', 'admin', 'eden.wolf@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'oj6icnRBIE', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(149, 'Dr. Delores Bartell', 'cust', 'yoreilly@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'FwFQMgxwOP', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(150, 'Rosemary Stehr', 'cust', 'doug78@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'x08BWryBK1', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(151, 'Dawson Windler', 'cust', 'rkshlerin@schamberger.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'uNlRdydajy', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(152, 'Prof. Pearl Littel I', 'cust', 'sven64@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'w3mgkC8p7W', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(153, 'Jose Walker', 'tutor', 'ocummings@stoltenberg.biz', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'k4owGi0zqM', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(154, 'Dr. Irma Macejkovic', 'cust', 'rogahn.felicity@streich.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '4PZex1b0gw', '2018-01-13 23:10:23', '2018-01-13 23:10:23'),
(155, 'Patience Murazik', 'cust', 'furman09@kub.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'RwQ1wGr8Na', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(156, 'Dr. Arnaldo Hilll III', 'tutor', 'mlind@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'DEb2pfTgYn', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(157, 'Alanis Stokes', 'cust', 'batz.missouri@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'yI1QgAFIvv', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(158, 'Grant Hickle PhD', 'tutor', 'schumm.justine@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '0n1Hzl4im1', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(159, 'Violette Mante', 'cust', 'mlegros@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'M0ryWyZIiz', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(160, 'Billie Jenkins IV', 'tutor', 'cartwright.jeramy@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'L4fqqnaLJg', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(161, 'Prof. Lenny Reynolds', 'admin', 'neoma58@mcdermott.net', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'wlws8qH6km', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(162, 'Jackson Roberts', 'admin', 'stuart18@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'c3bxf93842', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(163, 'Dr. Adrian Jerde V', 'admin', 'linnea00@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'l5y2UqK90a', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(164, 'Weldon Bernier', 'admin', 'feil.ericka@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'J3Gh8uwAzJ', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(165, 'Camille Hagenes', 'admin', 'marcus.kautzer@rau.net', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'UF8yRDoRbf', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(166, 'Dr. Shemar Heidenreich DVM', 'cust', 'ted.kilback@bosco.biz', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'Qwhmwir4uc', '2018-01-13 23:10:24', '2018-01-13 23:10:24'),
(167, 'Dr. Leonardo Hahn Jr.', 'cust', 'dandre.okuneva@gaylord.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'UQrv7umh8D', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(168, 'Joshua Gleason', 'admin', 'conor.osinski@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'PtApfz2eBv', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(169, 'Blake Kuvalis', 'tutor', 'dedric.raynor@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'Eso2cKPqaB', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(170, 'Prof. Perry Hettinger', 'tutor', 'voconnell@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'NmRr6xcXph', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(171, 'Jackie Schoen', 'cust', 'hoyt65@schumm.org', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'm1g4fDtgkE', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(172, 'Boyd Stoltenberg', 'cust', 'marcus.schowalter@treutel.biz', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'OZW1MJJFUT', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(173, 'Daija Trantow DDS', 'admin', 'wade.swift@terry.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'isMhXfXkt4', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(174, 'Dr. Marguerite Blanda II', 'cust', 'ckulas@jacobs.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'EwLv9frgM3', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(175, 'Stanton Dickinson', 'admin', 'cielo13@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'W1s74BCbtM', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(176, 'Alek Kiehn', 'tutor', 'lukas89@mcglynn.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'ICZKlaIPLR', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(177, 'Dr. Raina Kunze', 'cust', 'gkonopelski@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '34WNIuO8dY', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(178, 'Dr. Fatima Ortiz Sr.', 'cust', 'larson.chelsea@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'Me3qzOqyBN', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(179, 'Miller Pouros', 'cust', 'martine.dickinson@huels.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'jp8BUxOysI', '2018-01-13 23:10:25', '2018-01-13 23:10:25'),
(180, 'Devyn Brown', 'admin', 'reuben.rippin@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '5ClOZMmZ9i', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(181, 'Miss Nella Murray DDS', 'cust', 'bo86@abbott.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'eDMBsajcUt', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(182, 'Ali Shields', 'tutor', 'verna87@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'Ya6HgOQfVn', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(183, 'Pascale Boyer', 'tutor', 'kristy.gutkowski@hammes.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'jQbNfpjic7', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(184, 'Mr. Chesley Bosco V', 'tutor', 'schinner.dangelo@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'qzoaSQjB16', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(185, 'Dr. Stacey Stehr', 'cust', 'bradtke.adaline@ruecker.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'd6jZPnJKW7', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(186, 'Prof. Jedediah Schuppe', 'tutor', 'ischumm@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'iLBQs4xgWK', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(187, 'Donny West', 'cust', 'iabshire@muller.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'rczTh7G7Oq', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(188, 'Dr. Hermann Ernser MD', 'admin', 'dannie26@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'AYuownbYRN', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(189, 'Gisselle Dickinson', 'cust', 'zechariah.hagenes@metz.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'X88QZEQEsB', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(190, 'Camylle Walter', 'tutor', 'jgulgowski@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'TeIkOh7lzZ', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(191, 'Rebeca Willms', 'admin', 'mmitchell@maggio.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'WiuFAvrRpt', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(192, 'Krystal Wisozk DVM', 'cust', 'tbogisich@lynch.net', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'GbOvBWmJHF', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(193, 'Major McCullough', 'admin', 'ankunding.brook@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'RPR3CLMuvt', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(194, 'Dr. Rudy Reynolds', 'tutor', 'leffler.ova@ortiz.net', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '68AqRI4VYo', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(195, 'Ms. Delphine Walsh V', 'admin', 'legros.estell@deckow.info', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'qWqDkk3YQ4', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(196, 'Mike Stiedemann', 'cust', 'justen.king@dibbert.net', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'KBopAVjEfa', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(197, 'Leda Gerlach', 'tutor', 'damore.lila@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'Gm534Iyq1K', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(198, 'Tito Johns', 'admin', 'bayer.jonathan@sawayn.info', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'v8mAgQgsy6', '2018-01-13 23:10:26', '2018-01-13 23:10:26'),
(199, 'Prof. Ila Runolfsson MD', 'tutor', 'elise.mills@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'MTkpmkpk7t', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(200, 'Dr. Jimmie Herman V', 'tutor', 'astrid.connelly@gerlach.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'kzx1hGEq46', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(201, 'Guy Doyle DDS', 'tutor', 'kristofer16@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'zwKHS6f3cM', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(202, 'Delta Bartoletti', 'cust', 'frogahn@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'nHVNRAAyAR', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(203, 'Narciso Grimes', 'admin', 'joel.johnston@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'W4S1Fq7iaA', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(204, 'Norris Marvin', 'tutor', 'giovanna.crona@stracke.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'ahwfzM5Vgl', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(205, 'Dave Gislason III', 'cust', 'ryan.ida@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '53wTZryvOx', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(206, 'Johann Metz', 'admin', 'schuppe.royal@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '73KjfenK59', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(207, 'Dr. Mayra Ankunding V', 'cust', 'calista.bayer@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'JIHDw4OySw', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(208, 'Prof. Ervin Thompson Sr.', 'admin', 'bosinski@halvorson.biz', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'RVu3sH8xQF', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(209, 'Mr. Timothy O\'Connell', 'cust', 'darien.kiehn@stark.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '8qJ7z0Clq2', '2018-01-13 23:10:27', '2018-01-13 23:10:27'),
(210, 'Ms. Allison Wiza Jr.', 'cust', 'adela.mcglynn@yahoo.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'xg6ZP9D5BB', '2018-01-13 23:10:28', '2018-01-13 23:10:28'),
(211, 'Prof. Letha Deckow', 'cust', 'owunsch@hotmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', '6uBsrMPqiG', '2018-01-13 23:10:28', '2018-01-13 23:10:28'),
(212, 'Prof. Jermain Stracke DDS', 'admin', 'fred62@gmail.com', '$2y$10$OOfRbcwZP9OIDLa8CMiLDOJkPMLpHzylGjYy9yVcWSO1FYIcThqWq', 'HR5gm01Gjr', '2018-01-13 23:10:28', '2018-01-13 23:10:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_levels`
--
ALTER TABLE `academic_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accept_questions`
--
ALTER TABLE `accept_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_questions`
--
ALTER TABLE `assign_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel_questions`
--
ALTER TABLE `cancel_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_fileuploads`
--
ALTER TABLE `comment_fileuploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispute_questions`
--
ALTER TABLE `dispute_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finished_questions`
--
ALTER TABLE `finished_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latesubmissions_models`
--
ALTER TABLE `latesubmissions_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_questions`
--
ALTER TABLE `new_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paid_questions`
--
ALTER TABLE `paid_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_models`
--
ALTER TABLE `payment_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_requests`
--
ALTER TABLE `payment_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_answers`
--
ALTER TABLE `post_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_question_prices`
--
ALTER TABLE `post_question_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_bids`
--
ALTER TABLE `question_bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_bodies`
--
ALTER TABLE `question_bodies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question_bodies_question_id_unique` (`question_id`);

--
-- Indexes for table `question_categories`
--
ALTER TABLE `question_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_fileuploads`
--
ALTER TABLE `question_fileuploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_histories`
--
ALTER TABLE `question_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_matrices`
--
ALTER TABLE `question_matrices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_owner_tables`
--
ALTER TABLE `question_owner_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_progresses`
--
ALTER TABLE `question_progresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_ratings`
--
ALTER TABLE `question_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_revisions`
--
ALTER TABLE `question_revisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_status_models`
--
ALTER TABLE `question_status_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question_status_models_question_id_unique` (`question_id`);

--
-- Indexes for table `question_students`
--
ALTER TABLE `question_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reassign_questions`
--
ALTER TABLE `reassign_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refunds_models`
--
ALTER TABLE `refunds_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revisions`
--
ALTER TABLE `revisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `suggest_deadlines`
--
ALTER TABLE `suggest_deadlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggest_price_increases`
--
ALTER TABLE `suggest_price_increases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_accounts`
--
ALTER TABLE `tutor_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_education`
--
ALTER TABLE `tutor_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_education_models`
--
ALTER TABLE `tutor_education_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_payment`
--
ALTER TABLE `tutor_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_payment_bonuses`
--
ALTER TABLE `tutor_payment_bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_progresses`
--
ALTER TABLE `tutor_progresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tut_payment_totals`
--
ALTER TABLE `tut_payment_totals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unassigned_questions`
--
ALTER TABLE `unassigned_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_models`
--
ALTER TABLE `university_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_levels`
--
ALTER TABLE `academic_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `accept_questions`
--
ALTER TABLE `accept_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_questions`
--
ALTER TABLE `assign_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cancel_questions`
--
ALTER TABLE `cancel_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_fileuploads`
--
ALTER TABLE `comment_fileuploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dispute_questions`
--
ALTER TABLE `dispute_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finished_questions`
--
ALTER TABLE `finished_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latesubmissions_models`
--
ALTER TABLE `latesubmissions_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `new_questions`
--
ALTER TABLE `new_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paid_questions`
--
ALTER TABLE `paid_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_models`
--
ALTER TABLE `payment_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_requests`
--
ALTER TABLE `payment_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_answers`
--
ALTER TABLE `post_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `post_question_prices`
--
ALTER TABLE `post_question_prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `question_bids`
--
ALTER TABLE `question_bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_bodies`
--
ALTER TABLE `question_bodies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `question_categories`
--
ALTER TABLE `question_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_fileuploads`
--
ALTER TABLE `question_fileuploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_histories`
--
ALTER TABLE `question_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_matrices`
--
ALTER TABLE `question_matrices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `question_owner_tables`
--
ALTER TABLE `question_owner_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_progresses`
--
ALTER TABLE `question_progresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_ratings`
--
ALTER TABLE `question_ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_revisions`
--
ALTER TABLE `question_revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_status_models`
--
ALTER TABLE `question_status_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_students`
--
ALTER TABLE `question_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reassign_questions`
--
ALTER TABLE `reassign_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refunds_models`
--
ALTER TABLE `refunds_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revisions`
--
ALTER TABLE `revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggest_deadlines`
--
ALTER TABLE `suggest_deadlines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggest_price_increases`
--
ALTER TABLE `suggest_price_increases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_accounts`
--
ALTER TABLE `tutor_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutor_education`
--
ALTER TABLE `tutor_education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutor_education_models`
--
ALTER TABLE `tutor_education_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_payment`
--
ALTER TABLE `tutor_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tutor_payment_bonuses`
--
ALTER TABLE `tutor_payment_bonuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutor_progresses`
--
ALTER TABLE `tutor_progresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tut_payment_totals`
--
ALTER TABLE `tut_payment_totals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unassigned_questions`
--
ALTER TABLE `unassigned_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university_models`
--
ALTER TABLE `university_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
