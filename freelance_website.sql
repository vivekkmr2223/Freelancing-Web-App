-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 05:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_job`
--

CREATE TABLE `apply_for_job` (
  `afjid` int(255) NOT NULL,
  `afjid_pjid` int(255) NOT NULL,
  `afjid_uid` int(255) NOT NULL,
  `bid_amount` int(255) NOT NULL,
  `completion_days` int(11) NOT NULL,
  `proposal_summary` varchar(2000) NOT NULL,
  `status` int(2) NOT NULL,
  `bid_notification_status` int(2) NOT NULL,
  `bid_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_for_job`
--

INSERT INTO `apply_for_job` (`afjid`, `afjid_pjid`, `afjid_uid`, `bid_amount`, `completion_days`, `proposal_summary`, `status`, `bid_notification_status`, `bid_date`) VALUES
(1, 14, 1, 100, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 0, 1, '0000-00-00'),
(5, 14, 3, 10, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 0, 1, '0000-00-00'),
(6, 14, 4, 20, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 0, 1, '0000-00-00'),
(9, 14, 5, 50, 4, 'lsjdlrjgjoaksdf', 0, 1, '0000-00-00'),
(10, 14, 6, 50, 5, 'dsfdsfs', 0, 1, '0000-00-00'),
(12, 14, 8, 50, 5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui rationeSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\" voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', 1, 1, '0000-00-00'),
(20, 14, 2, 1000, 10, 'sab kam karega', 0, 1, '0000-00-00'),
(21, 13, 2, 300, 3, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 1, 1, '0000-00-00'),
(22, 13, 4, 150, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 0, 1, '0000-00-00'),
(23, 2, 1, 500, 5, 'I will make it yo!!', 1, 1, '2022-10-10'),
(24, 13, 1, 500, 1, 'Bna dalega apun pura', 0, 1, '2022-11-07'),
(25, 16, 1, 150, 2, 'pura saf kar dega', 1, 1, '2022-11-09'),
(26, 16, 2, 10, 5, 'sdfgnh,', 0, 1, '2022-11-15'),
(27, 11, 2, 10, 5, 'yo yio', 1, 1, '2022-11-19'),
(28, 19, 1, 600, 5, 'Lorem ipsum', 0, 0, '2022-12-12'),
(31, 20, 10, 450, 7, 'lorem ipsum', 1, 1, '2022-12-05'),
(32, 21, 1, 500, 7, 'lorem ipsum hbsdjf fsdfh ', 1, 1, '2022-12-06'),
(33, 22, 1, 199, 10, 'propersal', 1, 1, '2022-12-08'),
(34, 10, 8, 200, 5, 'asjdkfjaskjlfjashkfhjsdkfhajsdfhsdfhkshdfhskjdjas', 1, 0, '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `uexid` int(255) NOT NULL,
  `experience_id` int(255) NOT NULL,
  `user_experience_title` text DEFAULT NULL,
  `user_experience_company` text DEFAULT NULL,
  `user_experience_start` date DEFAULT NULL,
  `user_experience_end` date DEFAULT NULL,
  `user_experience_summary` varchar(1000) DEFAULT NULL,
  `user_checkbox_work` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`uexid`, `experience_id`, `user_experience_title`, `user_experience_company`, `user_experience_start`, `user_experience_end`, `user_experience_summary`, `user_checkbox_work`) VALUES
(1, 1, '', '', '0000-00-00', '0000-00-00', '', NULL),
(2, 2, '', '', '0000-00-00', '0000-00-00', '', NULL),
(16, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 2, '', '', '0000-00-00', '0000-00-00', '', NULL),
(18, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 6, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 7, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 8, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 9, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 10, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 11, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 12, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 13, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hire_notification`
--

CREATE TABLE `hire_notification` (
  `hnid` int(11) NOT NULL,
  `hnid_posted_uid` int(11) NOT NULL,
  `hnid_pjid` int(11) NOT NULL,
  `hnid_freelancer_uid` int(11) NOT NULL,
  `hiring_notification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire_notification`
--

INSERT INTO `hire_notification` (`hnid`, `hnid_posted_uid`, `hnid_pjid`, `hnid_freelancer_uid`, `hiring_notification`) VALUES
(1, 1, 13, 1, 0),
(2, 2, 16, 1, 0),
(3, 2, 16, 1, 0),
(4, 2, 16, 1, 0),
(5, 2, 16, 1, 0),
(10, 1, 11, 2, 0),
(11, 1, 20, 10, 0),
(12, 11, 21, 1, 0),
(13, 12, 22, 1, 0),
(14, 1, 10, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `main_skills`
--

CREATE TABLE `main_skills` (
  `main_skill_id` int(255) NOT NULL,
  `skills_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_skills`
--

INSERT INTO `main_skills` (`main_skill_id`, `skills_category`) VALUES
(1, 'Website , IT & Software'),
(2, 'Writing & Content '),
(3, 'Design Media & Architecture'),
(4, 'Data Entry & Admin'),
(5, 'Sales & Marketing'),
(6, 'Mobile Phones & Computing'),
(7, 'Translation & Languages');

-- --------------------------------------------------------

--
-- Table structure for table `money_transaction`
--

CREATE TABLE `money_transaction` (
  `mid` int(11) NOT NULL,
  `mid_pjid` int(11) NOT NULL,
  `mid_uid` int(11) NOT NULL,
  `mid_freelancer_id` int(11) NOT NULL,
  `owner_amount` int(11) NOT NULL,
  `net_amount` float NOT NULL,
  `notification` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money_transaction`
--

INSERT INTO `money_transaction` (`mid`, `mid_pjid`, `mid_uid`, `mid_freelancer_id`, `owner_amount`, `net_amount`, `notification`) VALUES
(1, 13, 1, 2, 300, 270, 0),
(4, 11, 1, 2, 10, 9, 0),
(5, 16, 2, 1, 150, 135, 0),
(6, 20, 1, 10, 450, 405, 0),
(7, 21, 11, 1, 500, 450, 0),
(8, 22, 12, 1, 199, 179.1, 1),
(9, 10, 1, 8, 200, 180, 1);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otp_id` int(11) NOT NULL,
  `otp_email` varchar(50) NOT NULL,
  `otp_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`otp_id`, `otp_email`, `otp_number`) VALUES
(1, 'vivekkmr2223@gmail.com', 14556),
(2, 'vivekkmr2223@gmail.com', 60434),
(3, 'vivekkmr2223@gmail.com', 15303);

-- --------------------------------------------------------

--
-- Table structure for table `personal_hiring`
--

CREATE TABLE `personal_hiring` (
  `phid` int(11) NOT NULL,
  `phid_employer_id` int(11) NOT NULL,
  `phid_freelancer_id` int(11) NOT NULL,
  `ph_title` varchar(50) NOT NULL,
  `ph_description` varchar(2000) NOT NULL,
  `ph_amount` int(11) NOT NULL,
  `ph_status` int(2) NOT NULL,
  `ph_notification_freelancer` int(2) NOT NULL,
  `ph_notification_employer` int(2) NOT NULL,
  `upload_completed_job` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_hiring`
--

INSERT INTO `personal_hiring` (`phid`, `phid_employer_id`, `phid_freelancer_id`, `ph_title`, `ph_description`, `ph_amount`, `ph_status`, `ph_notification_freelancer`, `ph_notification_employer`, `upload_completed_job`) VALUES
(1, 1, 1, 'Web App development', 'Hi V Satish, I noticed your profile and would like to offer you my project.', 1201, 1, 1, 1, '8574164_3803841_Business card.zip'),
(3, 1, 2, 'Project for Vivek Kumar', 'Hi Vivek Kumar, I noticed your profile and would like to offer you my project.', 100, 2, 1, 1, '6856054_9408623-b237fa5848349a14a14e5d4107dc7897c21951f5 (1).zip'),
(5, 1, 3, 'Project for Bhupendra Singh', 'Hi Bhupendra Singh, I noticed your profile and would like to offer you my project.', 100, 0, 1, 0, '6856054_9408623-b237fa5848349a14a14e5d4107dc7897c21951f5 (1).zip');

-- --------------------------------------------------------

--
-- Table structure for table `postjob_details`
--

CREATE TABLE `postjob_details` (
  `pjid` int(255) NOT NULL,
  `pjid_uid` int(255) NOT NULL,
  `title` text NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `min_amount` int(255) NOT NULL,
  `max_amount` int(255) NOT NULL,
  `p_date` date NOT NULL,
  `p_days` int(11) NOT NULL,
  `p_file` varchar(200) DEFAULT NULL,
  `p_skills` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postjob_details`
--

INSERT INTO `postjob_details` (`pjid`, `pjid_uid`, `title`, `summary`, `min_amount`, `max_amount`, `p_date`, `p_days`, `p_file`, `p_skills`) VALUES
(1, 1, 'Web Development', 'Wix Website Redesign 6 days left web dashboard web  VERIFIED\nUpdate: I am getting a lot of responses from everyone with 15-20 examples of websites which look just like every other normal website I can find on the web. I am not looking for the same old-same old quality of website. Please send me just one or two samples of what you have done, but make sure that these samples are really good and outstanding. I am talking about the websites that are included in the showcase of freelancer. If you have not seen what I am referring to, please go and check those out first be', 100, 1000, '2022-10-21', 3, '', 'php, js, html'),
(2, 2, 'Dashboard development', 'Using R studio (and R shinny library), develop maps showing two indicators in the same map. One indicator represented by colour of the mapa and second indicator represented by custom icons on top of the map. The outputs required are R script to generate maps and R shinny application so that the results can also be shared as a web dashboard.', 212, 2231, '2022-11-16', 3, '', NULL),
(3, 1, 'language books', 'You can get the information from other books, websites, forums or youtube. The important thing is that the content is unique, without plagiarism because it is for an important company in Germany. Each book must have a minimum of 25 pages. So they can be short ebooks.\r\nNote: I will pay a maximum of 40 dollars for the whole package of books. If you send me a proposal with a higher value I will not reply.', 10, 50, '2022-10-21', 3, '', NULL),
(4, 1, 'Angluar NodeJS Screens', 'Greetings\nwe need to build 4 screens using angular with NodJS as backend\n- db structure will sne sent to the winnder\n3 of the screens are just defintion screens ( ID , name,..)\nof course we need add/edit/delete opearions on each language\nthe forth screen have some work but its simple also\nthe work must be finised in 3 days at max\nno money wil be realsed unless code is reviwed and approved books', 30, 250, '2022-10-21', 3, '', NULL),
(5, 1, 'Content writer needed', 'My team is looking for writing support around the execution of some of our digital marketing. That is, we need help writing our social copy, creating articles that are relevant to the accounting industry, and writing email alerts.', 20, 200, '2022-10-21', 3, '', NULL),
(6, 1, 'Frontend Developer for building my website', 'Hello, I want to complete the frontend for my website.\r\nIt is for searching companies.\r\nI want to build it using AngularJs.\r\nIf you are interested in this job, let me know.\r\nThank you.', 750, 1500, '2022-10-21', 3, '', NULL),
(7, 1, 'Retool Expert to build Review Dashboard', 'I am only looking to build this via Retool, any mention of other stack or solution will be ignored, please mention that you have experience with retool in your bids or you WILL NOT be considered!\r\n\r\nI have db and all methods i need to build out a dashboard but it\'s my first time using Retool, would be be\r\navailable to help me build this out as soon as possible?\r\n\r\nbasically i would need to associated a handfull of urls to specific client ids and call in apis to scrape reviews for each client .\r\n\r\nExample i have 3 clients that are restaurants coming from one database', 15, 25, '2022-10-21', 3, '', NULL),
(8, 1, 'AWS/Azure/GCP / Cloud Solution Architect(Kubernetes)', 'We need multiple people to handle Project with below skills\r\n1) Kubernetes\r\n2) AWS\r\n3) Docker\r\n4) CICD\r\n5) Python\r\n6) Terraform\r\n7) Ansible\r\n8) Architectural Knowledge and Design', 600, 8000, '2022-10-21', 3, '', NULL),
(9, 1, 'mobile app and wordpress', 'Hi i am looking for a react native develope who can help me to build and upload the android and ios app.\r\ni have bought the code from codecanyon. i already setup the worpress site. i need someone to help me to buld the app and connect the app to wordpress. api also avilable.\r\n', 500, 600, '2022-10-21', 3, '', NULL),
(10, 1, 'Salesforce defect fix', 'Users are able to access community through deep links even though they don’t have access to that community through log in. Need to implement a fix for this. Has to connect through zoom and work on this', 30, 250, '2022-12-30', 3, '', NULL),
(11, 1, 'Curriculum Vitae', 'I need someone experienced in CV writing and editing that can take my CV to the next level. I need it to be more achievement oriented rather than duty oriented.', 2, 8, '2022-11-29', 3, '', NULL),
(12, 3, 'Data entry and Copy Typing', 'We want 1 data entry Oprator for copy typing scanned images pdf into M.S word & (Freelancer) Who know English Basic Level for our project. This is a typing project and requires 5-6 hours of work per day.', 750, 1250, '2022-10-21', 3, '', NULL),
(13, 1, 'Text format correction', 'looking for a professional who can correct a document for me', 30, 300, '2022-11-10', 3, '', 'php, html, bootstrap'),
(14, 2, 'Freelance website', 'Build it.', 141, 150, '2022-10-31', 5, '6 sem admit card.pdf', 'php, html,     laravel,   python'),
(16, 2, 'Bhupendar trending cuts', 'trending ', 151, 241, '2022-11-16', 7, '2303705_', ''),
(17, 2, 'Tell us what you need done', 'Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.', 150, 300, '2022-11-22', 5, '2515479_Business card.zip', ''),
(19, 2, 'tell us', 'why', 525, 874, '2022-12-06', 3, '9272447_Business card.zip', 'php, js, html'),
(20, 1, 'web designing', 'lorem ipsum', 448, 548, '2022-12-12', 7, '3803841_Business card.zip', 'php, html, js'),
(21, 11, 'Electrical', 'lorem ipsum jkfskbfjk jsdfko euiesf', 236, 318, '2022-12-13', 7, '9964064_Business card.zip', 'php, js, html'),
(22, 12, 'App development', 'lorem ipsum', 193, 293, '2022-12-30', 7, '4637861_Business card.zip', 'php, js, html');

-- --------------------------------------------------------

--
-- Table structure for table `signup_details`
--

CREATE TABLE `signup_details` (
  `uid` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `join_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_details`
--

INSERT INTO `signup_details` (`uid`, `username`, `uemail`, `upass`, `join_date`) VALUES
(1, 'satish', 'vasettisatish@gmail.com', '$2y$10$ZGlygPig44JqXnR29nMYwuDKE/6LusdlfBM/cTOZCBMKWu/yjngBW', 'Dec 09, 2022'),
(2, 'vivek', 'vivekkmr@gmail.com', '$2y$10$JbHqv3EF6VZPqjKWjnV3lOhkUrDwsschEYWf1igbeLW/tzDlMKi7y', 'Dec 09, 2022'),
(3, 'bhupendra', 'bhupendra@gmail.com', '$2y$10$phB.fKeG5x6ThriXFlCzVu0oSwmuEEUYdsXXYA36szvn4SvSknRgC', 'Dec 09, 2022'),
(4, 'Michael', 'michael@gmail.com', '$2y$10$71V.C7xA4PZLPUQiu152wO1IL0f/FWSHNWEoBaqvICqk09zz0UOsK', 'Dec 09, 2022'),
(5, 'robert', 'robert@gmail.com', '$2y$10$b08CsjdSYDaB6pDEP2X8J.Abfl9yZN6uFGsAilDpjG5YJv6ekP6d2', 'Dec 09, 2022'),
(6, 'Chris', 'chris@gmail.com', '$2y$10$V2Krr6fcezR1YbRvmSJk8Os3tu93cRyHTQpaabjufRg.SbTFOSGie', 'Dec 09, 2022'),
(7, 'Peter', 'peter@gmail.com', '$2y$10$IMZCHGlXp4baNWoHfQYESuzWNPqnNn5X16JL6prIu9GNJCtl8t9n6', 'Dec 09, 2022'),
(8, 'Steve', 'steve@gmail.com', '$2y$10$/s3dcVZx.zCGJsC0NyAR1.NtxabmeSXUgXlSz1450zxjO1PkhSzTC', 'Dec 09, 2022'),
(9, 'Ben', 'ben@gmail.com', '$2y$10$JUpGIrKHcEpijvCdDKKbyetv81jkABmVIeGLufRBYbqHPnGY72CAC', 'Dec 09, 2022'),
(10, 'Tony', 'tony@gmail.com', '$2y$10$SlGPjaWwgMxWDfQ9.Hw/EuIPsGZ4Z.TQu5oRQaz.nMsrVum/vFXBq', 'Dec 09, 2022'),
(11, 'may', 'may@gmail.com', '$2y$10$1Ny9vC.qJdIHUEK54KIEc.g6xrCwCLN//b7vTkcE3LEFbiqjVACe2', 'Dec 09, 2022'),
(12, 'gwen', 'gwen@gmail.com', '$2y$10$qG8tfG2sSdpLLWzgkcOKVu44ng3/H.f1aBuME8//je4P/cmkNGphO', 'Dec 09, 2022'),
(13, 'a', 'a@gmail.com', '$2y$10$0GhLAGg.VOWey6ICP4kVFOEhF23kDF8sQ5SjG4hdN.Xhytd0Y6x/.', 'Dec 13, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `sub_skills_category`
--

CREATE TABLE `sub_skills_category` (
  `sub_skills_id` int(255) NOT NULL,
  `msid_ssid` int(255) NOT NULL,
  `sub_skill_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_skills_category`
--

INSERT INTO `sub_skills_category` (`sub_skills_id`, `msid_ssid`, `sub_skill_name`) VALUES
(1, 1, 'PHP'),
(2, 1, 'HTML'),
(3, 1, 'Javascript'),
(4, 1, 'WordPress'),
(5, 1, 'Software Architecture'),
(6, 1, 'MySQL'),
(7, 1, 'SEO'),
(8, 1, 'Python'),
(9, 1, 'Link Building'),
(10, 1, 'Java'),
(11, 1, 'C# Programming'),
(12, 1, 'C Programming'),
(13, 1, 'Node.js'),
(14, 1, 'C++ Programming'),
(15, 1, 'Linux'),
(16, 1, 'E-Commerece'),
(17, 1, 'React.js'),
(18, 1, 'HTML5'),
(19, 1, 'Web Scraping'),
(20, 1, 'Laravel'),
(21, 1, 'Shopify'),
(22, 1, 'Flutter'),
(23, 1, '.NET'),
(24, 1, 'Twitter'),
(25, 1, 'Angular JS'),
(26, 1, 'SQL'),
(27, 1, 'Game Development'),
(28, 1, 'Blockchain'),
(29, 1, 'Amazon Web Services'),
(30, 1, 'React Native'),
(31, 1, 'Software Testing'),
(32, 1, 'User Interface'),
(33, 1, 'Visual Basic'),
(34, 1, 'Unity 3D'),
(35, 1, 'Web Hosting'),
(36, 1, 'YouTube'),
(37, 1, 'Jquery'),
(38, 1, 'iOS Development'),
(39, 1, 'Web Development'),
(40, 1, 'Django'),
(41, 1, 'Instagram'),
(42, 1, 'API'),
(43, 1, 'Website Testing'),
(44, 1, 'Azure'),
(45, 1, 'Express JS'),
(46, 1, 'CryptoCurrency'),
(47, 1, 'Swift'),
(48, 1, 'Full Stack Development'),
(49, 1, 'Backend Development'),
(50, 2, 'Content Writing'),
(51, 2, 'Article Writing'),
(52, 2, 'Copywriting'),
(53, 2, 'Ghostwriting'),
(54, 2, 'Reasearch Writing'),
(55, 2, 'Translation'),
(56, 2, 'Article Rewriting'),
(57, 2, 'Technical Writing'),
(58, 2, 'Reasearch'),
(59, 2, 'Editing'),
(60, 2, 'Report Writing'),
(61, 2, 'Creative Writing'),
(62, 2, 'Proofreading'),
(63, 2, 'Copy Typing'),
(64, 2, 'Powerpoint'),
(65, 2, 'Blog'),
(66, 2, 'PDF'),
(67, 2, 'Book Writing'),
(68, 2, 'eBooks'),
(69, 2, 'Bussiness Writing'),
(70, 4, 'Data Entry'),
(71, 4, 'Excel'),
(72, 4, 'Data Processing'),
(73, 4, 'Web Search'),
(74, 4, 'Customer Support'),
(75, 4, 'Transcription'),
(76, 4, 'Customer Service'),
(77, 4, 'MS Office'),
(78, 4, 'Bookkeeping'),
(79, 4, 'Email Handling'),
(80, 4, 'Call Center'),
(81, 4, 'Video Upload'),
(82, 4, 'Excel VBA'),
(83, 4, 'Excel Macros'),
(84, 4, 'Telephone Hnadling'),
(85, 4, 'Data Analysis'),
(86, 4, 'Data Scraping'),
(87, 4, 'Technical Support'),
(88, 4, 'Data Extraction'),
(89, 4, 'Data Delivery'),
(90, 3, 'Graphic Design'),
(91, 3, 'Photoshop'),
(92, 3, 'Logo Design'),
(93, 3, 'Illustrator'),
(94, 3, 'CSS'),
(95, 3, '3D Modelling'),
(96, 3, 'Video Services'),
(97, 3, '3D Rendering'),
(98, 3, 'Video Editing'),
(99, 3, '3D Animation'),
(100, 3, 'Photoshop Design'),
(101, 3, 'After Effects'),
(102, 3, 'Video Production'),
(103, 3, 'Animation'),
(104, 3, 'Illustration'),
(105, 3, 'Building Architecture'),
(106, 3, 'Photo Editing'),
(107, 3, '3D Design'),
(108, 3, 'Audio Services'),
(109, 3, 'Videography'),
(110, 3, 'Word'),
(111, 3, 'Banner Design'),
(112, 5, 'Internet Marketing'),
(113, 5, 'Marketing'),
(114, 5, 'Social Media Marketing'),
(115, 5, 'Facebook Marketing'),
(116, 5, 'Sales'),
(117, 5, 'Advertising'),
(118, 5, 'Leads'),
(119, 5, 'Telemarketing'),
(120, 5, 'Search Engine Marketing'),
(121, 5, 'Bulk Marketing'),
(122, 5, 'WooCommerce'),
(123, 5, 'Email Marketing'),
(124, 5, 'Internet Research'),
(125, 5, 'Google Ads'),
(126, 5, 'Facebook Ads'),
(127, 5, 'Affiliate Marketing'),
(128, 5, 'TikTok'),
(129, 5, 'eBay'),
(130, 5, 'Sales Promotion'),
(131, 6, 'Mobile App Development'),
(132, 6, 'Android'),
(133, 6, 'iPhone'),
(134, 6, 'iPad'),
(135, 6, 'Kotlin'),
(136, 6, 'Amazon Kindle'),
(137, 6, 'Geolocation'),
(138, 6, 'App Store Optimization'),
(139, 6, 'Salesforce Lightning'),
(140, 6, 'Windows Mobile'),
(141, 6, 'Amazone Fire'),
(142, 6, 'Apple Watch'),
(143, 6, 'Virtualization'),
(144, 6, 'App Usability Analysis'),
(145, 6, 'J2ME'),
(146, 6, 'Blackberry'),
(147, 6, 'Nokia'),
(148, 7, 'English (US) Translator'),
(149, 7, 'English (UK) Translator'),
(150, 7, 'Spanish Translator'),
(151, 7, 'German Translator'),
(152, 7, 'English Grammar'),
(153, 7, 'Arabic Translator'),
(154, 7, 'Traditional Chinese (Hong Kong)'),
(155, 7, 'Simplified Chinese Translator'),
(156, 7, 'French Translator'),
(157, 7, 'Castilian Spanish Translator'),
(158, 7, 'English Spelling'),
(159, 7, 'Hindi Translator'),
(160, 7, 'Japanese Translator'),
(161, 7, 'Portuguese Translator'),
(162, 7, 'Italian Translator'),
(163, 7, 'Traditional Chinese (Taiwan)'),
(164, 7, 'Korean Translator'),
(165, 7, 'Dutch Translator'),
(166, 7, 'Subtitles & Captions'),
(167, 7, 'Russian Translator');

-- --------------------------------------------------------

--
-- Table structure for table `upload_completed_job`
--

CREATE TABLE `upload_completed_job` (
  `ucjid` int(11) NOT NULL,
  `ucj_freelancer_uid` int(11) NOT NULL,
  `ucj_pjid` int(11) NOT NULL,
  `ucj_zip_file` varchar(300) NOT NULL,
  `job_completed_notification` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_completed_job`
--

INSERT INTO `upload_completed_job` (`ucjid`, `ucj_freelancer_uid`, `ucj_pjid`, `ucj_zip_file`, `job_completed_notification`) VALUES
(8, 1, 16, '4095160_Business card.zip', 1),
(9, 2, 13, '8197967_Business card.zip', 1),
(10, 2, 11, '3896245_Business card.zip', 1),
(11, 10, 20, '2105884_Business card.zip', 1),
(12, 1, 21, '6708045_Business card.zip', 1),
(13, 1, 22, '1591449_Business card.zip', 1),
(14, 8, 10, '3234125_1591449_Business card.zip', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_education_details`
--

CREATE TABLE `user_education_details` (
  `uedid` int(255) NOT NULL,
  `uid_education_id` int(255) NOT NULL,
  `user_education_country` text DEFAULT NULL,
  `user_education_college` varchar(100) DEFAULT NULL,
  `user_education_degree` varchar(100) DEFAULT NULL,
  `user_education_start_year` date DEFAULT NULL,
  `user_education_end_year` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_education_details`
--

INSERT INTO `user_education_details` (`uedid`, `uid_education_id`, `user_education_country`, `user_education_college`, `user_education_degree`, `user_education_start_year`, `user_education_end_year`) VALUES
(4, 5, NULL, NULL, NULL, NULL, NULL),
(5, 6, NULL, NULL, NULL, NULL, NULL),
(6, 0, 'India', 'GECR', 'B Tech', '2019-08-01', '2023-08-13'),
(12, 8, NULL, NULL, NULL, NULL, NULL),
(13, 9, NULL, NULL, NULL, NULL, NULL),
(20, 10, 'India', 'GECR', 'B Tech', '2022-12-01', '2022-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_details`
--

CREATE TABLE `user_profile_details` (
  `upid` int(255) NOT NULL,
  `uid_upid` int(255) NOT NULL,
  `user_first_name` text DEFAULT NULL,
  `user_last_name` text DEFAULT NULL,
  `user_city` text DEFAULT NULL,
  `user_pin_code` int(10) DEFAULT NULL,
  `user_state` text DEFAULT NULL,
  `user_country` text DEFAULT NULL,
  `user_professional_headline` text DEFAULT NULL,
  `user_summary` varchar(2000) DEFAULT NULL,
  `user_hourly_rates` int(255) DEFAULT NULL,
  `user_profile_photo` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile_details`
--

INSERT INTO `user_profile_details` (`upid`, `uid_upid`, `user_first_name`, `user_last_name`, `user_city`, `user_pin_code`, `user_state`, `user_country`, `user_professional_headline`, `user_summary`, `user_hourly_rates`, `user_profile_photo`) VALUES
(16, 1, 'V', 'Satish', 'Raipur', 492001, 'Chhattisgarh', 'India', 'Engineering', 'We are team of certified Web, Mobile and Desktop Application Developers who are focusing on building scaleable products using advanced technologies like Laravel, Angular, Node, React etc.\r\n\r\nOur inhouse team members include graphic designers, backend and frontend developers, mobile application developers and server admins.\r\n\r\nClient satisfaction by offering affordable rates for quality work is always our top priority. Reviews Section of our profile says it all. We always take care of our clients by offering long term support for projects.', 0, 'spiderman.jpg'),
(17, 2, 'Vivek', 'Kumar', 'vikas nagar', 492001, 'Chhattisgarh', 'India', 'web rocker', 'We are team of certified Web, Mobile and Desktop Application Developers who are focusing on building scaleable products using advanced technologies like Laravel, Angular, Node, React etc.\r\n\r\nOur inhouse team members include graphic designers, backend and frontend developers, mobile application developers and server admins.\r\n\r\nClient satisfaction by offering affordable rates for quality work is always our top priority. Reviews Section of our profile says it all. We always take care of our clients by offering long term support for projects.\r\n', 10, '824501_hotel13.webp'),
(18, 3, 'Bhupendra', 'Singh', 'Raipur', 492001, 'Chhattisgarh', 'India', 'Engineering', 'We are team of certified Web, Mobile and Desktop Application Developers who are focusing on building scaleable products using advanced technologies like Laravel, Angular, Node, React etc.\n\nOur inhouse team members include graphic designers, backend and frontend developers, mobile application developers and server admins.\n\nClient satisfaction by offering affordable rates for quality work is always our top priority. Reviews Section of our profile says it all. We always take care of our clients by offering long term support for projects.', 10, '561120_hotel12.webp'),
(19, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(20, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(21, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(22, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(23, 8, 'Steve', 'Rogers', 'New York City', 10001, 'New York', 'United States', 'Web Developer', 'We are team of certified Web, Mobile and Desktop Application Developers who are focusing on building scaleable products using advanced technologies like Laravel, Angular, Node, React etc.\r\n\r\nOur inhouse team members include graphic designers, backend and frontend developers, mobile application developers and server admins.\r\n\r\nClient satisfaction by offering affordable rates for quality work is always our top priority. Reviews Section of our profile says it all. We always take care of our clients by offering long term support for projects.', 10, 'unknown.jpg'),
(24, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(25, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(26, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(27, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg'),
(28, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'unknown.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_qualification_details`
--

CREATE TABLE `user_qualification_details` (
  `uqid` int(255) NOT NULL,
  `uid_qualification_id` int(255) NOT NULL,
  `Professional_Certificate_or_Award` varchar(100) DEFAULT NULL,
  `Conferring_Organization` varchar(100) DEFAULT NULL,
  `Summary` varchar(1000) DEFAULT NULL,
  `Start_year` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_qualification_details`
--

INSERT INTO `user_qualification_details` (`uqid`, `uid_qualification_id`, `Professional_Certificate_or_Award`, `Conferring_Organization`, `Summary`, `Start_year`) VALUES
(16, 1, NULL, NULL, NULL, NULL),
(17, 2, '', '', '', '0000-00-00'),
(18, 3, NULL, NULL, NULL, NULL),
(19, 4, NULL, NULL, NULL, NULL),
(20, 5, NULL, NULL, NULL, NULL),
(21, 6, NULL, NULL, NULL, NULL),
(22, 7, NULL, NULL, NULL, NULL),
(23, 8, NULL, NULL, NULL, NULL),
(24, 9, NULL, NULL, NULL, NULL),
(25, 10, NULL, NULL, NULL, NULL),
(26, 11, NULL, NULL, NULL, NULL),
(27, 12, NULL, NULL, NULL, NULL),
(28, 13, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `user_skill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_sub_skills_id` int(11) NOT NULL,
  `user_skills_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`user_skill_id`, `user_id`, `user_sub_skills_id`, `user_skills_name`) VALUES
(69, 2, 52, 'Copywriting'),
(70, 2, 53, 'Ghostwriting'),
(71, 2, 94, 'CSS'),
(72, 2, 70, 'Data Entry'),
(73, 2, 128, 'TikTok'),
(74, 2, 137, 'Geolocation'),
(97, 10, 2, 'HTML'),
(98, 10, 3, 'Javascript'),
(99, 10, 51, 'Article Writing'),
(100, 10, 52, 'Copywriting'),
(101, 10, 56, 'Article Rewriting'),
(102, 11, 1, 'PHP'),
(103, 11, 2, 'HTML'),
(104, 11, 3, 'Javascript'),
(105, 11, 93, 'Illustrator'),
(106, 11, 94, 'CSS'),
(107, 11, 95, '3D Modelling'),
(108, 11, 115, 'Facebook Marketing'),
(109, 11, 116, 'Sales'),
(110, 1, 2, 'HTML'),
(111, 1, 3, 'Javascript'),
(112, 1, 4, 'WordPress'),
(113, 1, 6, 'MySQL'),
(114, 1, 7, 'SEO'),
(115, 1, 8, 'Python'),
(116, 1, 10, 'Java'),
(117, 1, 12, 'C Programming'),
(118, 1, 13, 'Node.js'),
(119, 1, 14, 'C++ Programming'),
(120, 1, 17, 'React.js'),
(121, 1, 18, 'HTML5'),
(122, 12, 1, 'PHP'),
(123, 12, 2, 'HTML'),
(124, 12, 3, 'Javascript'),
(125, 12, 51, 'Article Writing'),
(126, 12, 52, 'Copywriting'),
(127, 3, 1, 'PHP'),
(128, 3, 2, 'HTML'),
(129, 3, 3, 'Javascript'),
(130, 3, 6, 'MySQL'),
(131, 3, 10, 'Java'),
(132, 3, 18, 'HTML5'),
(133, 8, 1, 'PHP'),
(134, 8, 2, 'HTML'),
(135, 8, 3, 'Javascript'),
(136, 8, 6, 'MySQL'),
(137, 8, 8, 'Python');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_for_job`
--
ALTER TABLE `apply_for_job`
  ADD PRIMARY KEY (`afjid`),
  ADD KEY `afjid_pjid` (`afjid_pjid`);

--
-- Indexes for table `experience_details`
--
ALTER TABLE `experience_details`
  ADD PRIMARY KEY (`uexid`);

--
-- Indexes for table `hire_notification`
--
ALTER TABLE `hire_notification`
  ADD PRIMARY KEY (`hnid`);

--
-- Indexes for table `main_skills`
--
ALTER TABLE `main_skills`
  ADD PRIMARY KEY (`main_skill_id`);

--
-- Indexes for table `money_transaction`
--
ALTER TABLE `money_transaction`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `personal_hiring`
--
ALTER TABLE `personal_hiring`
  ADD PRIMARY KEY (`phid`);

--
-- Indexes for table `postjob_details`
--
ALTER TABLE `postjob_details`
  ADD PRIMARY KEY (`pjid`);

--
-- Indexes for table `signup_details`
--
ALTER TABLE `signup_details`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `sub_skills_category`
--
ALTER TABLE `sub_skills_category`
  ADD PRIMARY KEY (`sub_skills_id`);

--
-- Indexes for table `upload_completed_job`
--
ALTER TABLE `upload_completed_job`
  ADD PRIMARY KEY (`ucjid`);

--
-- Indexes for table `user_education_details`
--
ALTER TABLE `user_education_details`
  ADD PRIMARY KEY (`uedid`);

--
-- Indexes for table `user_profile_details`
--
ALTER TABLE `user_profile_details`
  ADD PRIMARY KEY (`upid`),
  ADD KEY `uid_upid` (`uid_upid`);

--
-- Indexes for table `user_qualification_details`
--
ALTER TABLE `user_qualification_details`
  ADD PRIMARY KEY (`uqid`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD PRIMARY KEY (`user_skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_for_job`
--
ALTER TABLE `apply_for_job`
  MODIFY `afjid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `experience_details`
--
ALTER TABLE `experience_details`
  MODIFY `uexid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hire_notification`
--
ALTER TABLE `hire_notification`
  MODIFY `hnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `main_skills`
--
ALTER TABLE `main_skills`
  MODIFY `main_skill_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `money_transaction`
--
ALTER TABLE `money_transaction`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `otp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_hiring`
--
ALTER TABLE `personal_hiring`
  MODIFY `phid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `postjob_details`
--
ALTER TABLE `postjob_details`
  MODIFY `pjid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup_details`
--
ALTER TABLE `signup_details`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_skills_category`
--
ALTER TABLE `sub_skills_category`
  MODIFY `sub_skills_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `upload_completed_job`
--
ALTER TABLE `upload_completed_job`
  MODIFY `ucjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_education_details`
--
ALTER TABLE `user_education_details`
  MODIFY `uedid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_profile_details`
--
ALTER TABLE `user_profile_details`
  MODIFY `upid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_qualification_details`
--
ALTER TABLE `user_qualification_details`
  MODIFY `uqid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_skills`
--
ALTER TABLE `user_skills`
  MODIFY `user_skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_profile_details`
--
ALTER TABLE `user_profile_details`
  ADD CONSTRAINT `user_profile_details_ibfk_1` FOREIGN KEY (`uid_upid`) REFERENCES `signup_details` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
