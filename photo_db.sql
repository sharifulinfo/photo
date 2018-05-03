-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 11:22 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_content`
--

CREATE TABLE `tbl_about_content` (
  `about_id` int(11) NOT NULL,
  `studio_title` varchar(255) NOT NULL,
  `studio_icon` varchar(255) NOT NULL,
  `studio_text` text NOT NULL,
  `service_icon` varchar(255) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_text` text NOT NULL,
  `team_icon` varchar(255) NOT NULL,
  `team_title` varchar(255) NOT NULL,
  `team_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about_content`
--

INSERT INTO `tbl_about_content` (`about_id`, `studio_title`, `studio_icon`, `studio_text`, `service_icon`, `service_title`, `service_text`, `team_icon`, `team_title`, `team_text`) VALUES
(1, 'About Our Studio', 'fa fa-institution fa-2x', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi.Ut enim ad enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>', 'fa fa-tasks fa-2x', 'Our Services', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.</p>', 'fa fa-group fa-2x', 'About Our Team', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi.Ut enim ad enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_user` int(32) NOT NULL,
  `blog_time` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `cat_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_desc`, `blog_user`, `blog_time`, `blog_img`, `cat_id`) VALUES
(1, 'Dekhi ki hoy', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Hydrangeas.jpg', '4'),
(2, 'Lang Scape', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/landscape.jpg', '4'),
(3, 'Family', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/family.jpg', '4'),
(4, 'Elephant', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/elephant.jpg', '4'),
(5, 'Chrysanthemum', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Chrysanthemum.jpg', '4'),
(6, 'Desert', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Desert.jpg', '4'),
(7, 'Koala', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Koala.jpg', '2,4'),
(8, 'Lightouse', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Lighthouse.jpg', '3,4'),
(9, 'Penguins', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Penguins.jpg', '1,2'),
(10, 'Pagol hoe jabo', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Tulips.jpg', '1,3'),
(12, 'JellyFish Juel', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu p</p>\r\n<p>ede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, '2018-04-08 15:59:47', 'http://localhost/photo/assets/images/blog/Jellyfish.jpg', '2,3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `cat_name`) VALUES
(1, 'Music'),
(2, 'JAVA'),
(3, 'HMTL-5'),
(4, 'CSS-3'),
(6, 'New Category'),
(7, 'New1'),
(8, 'New2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(64) NOT NULL,
  `client_img` varchar(128) NOT NULL,
  `client_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`client_id`, `client_name`, `client_img`, `client_word`) VALUES
(1, 'MISS BELLA', 'http://localhost/photo/assets/images/clients/client1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.'),
(2, 'DON PENO', 'http://localhost/photo/assets/images/clients/client2.jpg', 'Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.'),
(3, 'SWEETY', 'http://localhost/photo/assets/images/clients/client3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididun'),
(4, 'LADYs', 'http://localhost/photo/assets/images/clients/client4.jpg', 'Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi.'),
(6, 'Shariful Islam', 'http://localhost/photo/assets/images/clients/my2.jpg', '<p>Hi it\'s a awasome sitme</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comment_id` int(11) NOT NULL,
  `comment_parent_id` int(64) DEFAULT '0',
  `comment_blog_id` int(64) NOT NULL,
  `comment_name` varchar(128) NOT NULL,
  `comment_email` varchar(128) NOT NULL,
  `comment_msg` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comment_id`, `comment_parent_id`, `comment_blog_id`, `comment_name`, `comment_email`, `comment_msg`, `comment_time`) VALUES
(1, 0, 1, 'Shariful Islam', 'young@gmail.com', 'Perferendis recusandae consequuntur quasi, non culpa. Minus porro officiis veniam facilis praesentium expedita doloribus, recusandae aut dolore autem, modi consequuntur rem perferendis dolores quisquam, sequi quas. Esse, doloremque consectetur veniam quo ut voluptas necessitatibus quae quis iusto quod optio eligendi distinctio dicta, nihil impedit officia aspernatur tenetur saepe expedita, odio vitae reprehenderit pariatur!', '2018-04-02 13:54:00'),
(2, 1, 1, 'Tom Junky', '', 'In felis ante, aliquet sit amet venenatis at, feugiat sed leo. Fusce pretium, velit in luctus ornare, elit lorem ultrices tortor, sed consectetur orci risus mollis ante. Cras ut aliquam nulla. Aliquam convallis sapien quis cursus condimentum.Nunc sit amet dapibus est, sit amet varius risus. Donec luctus lacinia mauris, at feugiat ligula facilisis ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed id ligula consectetur.', '2018-03-29 07:29:45'),
(3, 2, 1, 'Third', '', 'f asdf adlfkjh adlsfkj a\r\ndf asdfk haldkjfh as\r\ndf asdlfkh ads\r\nf adlsfkj halsdfkjh lakjsdhf a;lkjsdhf a\r\nsdf asdfa sdf asdf asdf asdf asdf ads', '2018-03-30 04:01:14'),
(4, 1, 1, 'Forth', '', 'asdf asdfklj hadlsfkjhaskdf asdf asdf asd', '2018-03-30 06:55:11'),
(5, 0, 1, 'Five', '', 'f asdlh ladfksjh aldfkjsh asdf asdf adsf ads', '2018-04-02 13:53:53'),
(6, 5, 1, 'fa ds', '', ' asdf  asdf asdfasdfasdf', '2018-03-30 06:55:25'),
(7, 6, 1, 'fad', '', 'a dsf asdf adsf asd', '2018-03-30 08:03:49'),
(8, 7, 1, 'eight', '', 'adsf asd fa', '2018-03-30 08:04:32'),
(9, 5, 1, 'Nine', '', 'adsf asd fa', '2018-03-30 08:05:51'),
(10, 8, 1, 'Ten', '', 'afds asd asd', '2018-04-02 05:53:04'),
(11, 10, 1, 'Eleven', '', 'afsd asd a', '2018-04-02 05:53:08'),
(12, 2, 2, 'Twelve', '', 'afsd asd a', '2018-04-09 05:38:34'),
(13, 2, 2, 'child', '', 'twelve Child here...', '2018-04-09 05:38:38'),
(14, 13, 2, 'child two', '', 'fasd asd asd', '2018-04-09 05:38:42'),
(15, 14, 2, 'child three', '', 'adfs asd', '2018-04-09 05:38:44'),
(16, 14, 2, 'fads', '', 'fasd ', '2018-04-09 05:38:47'),
(17, 1, 2, 'dsfa asdf', '', ' fasd fasd', '2018-04-09 05:38:49'),
(18, 17, 2, 'dsa', '', 'dsaasdf asd', '2018-04-09 05:38:51'),
(19, 0, 2, 'new comments', '', 'adsf asdf adsf', '2018-04-09 05:38:57'),
(20, 0, 2, '2nd comments', '', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the.What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2018-04-02 16:27:11'),
(21, 20, 2, '1st replay', '', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of ', '2018-04-02 16:27:28'),
(22, 0, 3, 'robi', '', 'hsdaiula sdfiasdf asd', '2018-04-02 16:32:37'),
(23, 0, 9, 'Shariful islam', '', 'asdf asdf asdf  \r\nasdfl kahsdfasdf adsf adsf adsf dfs', '2018-04-08 14:09:09'),
(24, 0, 10, 'f ads ', '', 'a sdfasd fasdf ads', '2018-04-08 19:05:06'),
(25, 24, 10, 'asdf asd', '', ' asdfasdf asdf adsf ', '2018-04-08 19:05:17'),
(26, 0, 12, 'SDFASDF', '', ' ASDF ADSF ASDF ASD', '2018-04-09 04:24:26'),
(27, 0, 10, 'adfs asd', '', 'a sdf asdf asdf', '2018-04-09 16:42:52'),
(28, 0, 10, 'asdf ads', '', 'a sdfadsf ads', '2018-04-09 16:43:09'),
(29, 28, 10, 'as dfads', '', 'a sdfasdf asdf ', '2018-04-09 16:43:18'),
(30, 0, 12, 'Shariful islam', 'shariful@gmail.com', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae.', '2018-04-17 08:46:46'),
(31, 26, 12, 'Shariful Islam', 'shariful.info55@gmail.com', 'fasd asd asdf ads', '2018-04-17 09:01:40'),
(32, 30, 12, 'Shariful Islam', 'shariful.info55@gmail.com', 'adsfh adlsfkjha dfads', '2018-04-17 09:11:29'),
(33, 32, 12, 'Shariful Islam', 'shariful.info55@gmail.com', 'asdf asdf asdf adsf', '2018-04-17 09:11:36'),
(34, 33, 12, 'Habibul Islam', 'shariful.info56@gmail.com', 'asdf asdf adf af', '2018-04-18 14:33:54'),
(35, 34, 12, 'Nazmul Hasan', 'csenazmul96@gmail.com', 'afsd asdf adsf', '2018-04-23 13:51:46'),
(36, 26, 12, 'Nazmul Hasan', 'csenazmul96@gmail.com', 'asdf afasd', '2018-04-23 13:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `footer_id` int(11) NOT NULL,
  `footer_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`footer_id`, `footer_text`) VALUES
(1, '<pre><strong>shariful.info55@gmail.com</strong></pre>\r\n<pre>(+880)1969516500</pre>\r\n<p>Photography Fanatic Template @ 2017</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `logo_id` int(11) NOT NULL,
  `logo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `logo_url`) VALUES
(1, 'http://localhost/photo/assets/images/logo/dgphotography2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

CREATE TABLE `tbl_menus` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent` int(32) DEFAULT NULL,
  `number` int(64) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menus`
--

INSERT INTO `tbl_menus` (`id`, `name`, `slug`, `parent`, `number`, `icon`) VALUES
(2, 'Home', 'users', NULL, 1, 'fa fa-home sr-icons'),
(3, 'About', 'users/about/', NULL, 2, 'fa fa-bookmark sr-icons'),
(4, 'Blog', 'users/blog', NULL, 3, 'fa fa-file-text sr-icons'),
(5, 'Contact', 'users/contact/', NULL, 4, 'fa fa-phone-square sr-icons');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msg`
--

CREATE TABLE `tbl_msg` (
  `msg_id` int(11) NOT NULL,
  `msg_user` varchar(255) NOT NULL,
  `msg_user_mail` varchar(128) NOT NULL,
  `msg_sub` varchar(255) NOT NULL,
  `msg_content` text NOT NULL,
  `msg_time` varchar(255) NOT NULL,
  `msg_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_msg`
--

INSERT INTO `tbl_msg` (`msg_id`, `msg_user`, `msg_user_mail`, `msg_sub`, `msg_content`, `msg_time`, `msg_status`) VALUES
(2, 'Shariful Islam', 'shariful.info56@gmail.com', 'Test', 'Here we go check for test content.. \r\n\r\nPlease chekc it!!\r\n\r\nthank you!!\r\nShariful Islam', '2018-04-18 18:15:48', 0),
(4, 'fasf asd a sdf asd', 'asdfads@dsfa.csdf', 'fasdf as', 'a df asd fasdf asdf asd', '2018-04-18 18:15:48', 1),
(5, 'Habibul Islam', 'habitbu@gmail.com', 'HUlamn', 'sdkfjha alsdfkj as\r\nf asdflkhajsdf kljhasdflkjadslfkj adsf asldkfjh aslkjadsfu adlsfj asdfaldsfuh alsdfkj asdf ads', '2018-04-18 18:15:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `page_menu` varchar(255) NOT NULL,
  `page_menu_icon` varchar(255) NOT NULL,
  `page_img` varchar(255) NOT NULL,
  `page_short` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`page_id`, `page_title`, `page_content`, `page_menu`, `page_menu_icon`, `page_img`, `page_short`) VALUES
(1, 'First Page', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, et mei brute deleniti consetetur. Per ut appareat deserunt, solet conceptam pri ad.&nbsp;<strong><em>Sea ex consul salutandi. Te summo feugait facilisis vis, id tale melius vix, ex mea habemus assueverit. Id mea aperiam scaevola urbanitas, ius dolor salutatus ad.</em></strong></p>\r\n<p style=\"text-align: justify;\">In eum odio accusamus, at mei fabellas insolens. Ceteros salutatus euripidis mei te. Sumo molestiae mei eu, has labitur detraxit iudicabit et. Ipsum oportere referrentur ad has, sea sint putant omittam ut, veri saepe consectetuer an cum. Purto ludus mea ut, docendi conceptam pro ne. Eu voluptua principes vis.Lorem ipsum dolor sit amet, et mei brute deleniti consetetur. Per ut appareat deserunt, solet conceptam pri ad. Sea ex consul salutandi. Te summo feugait facilisis vis, id tale melius vix, ex mea habemus assueverit. Id mea aperiam scaevola urbanitas, ius dolor salutatus ad.</p>\r\n<p style=\"text-align: justify;\">In eum odio accusamus, at mei fabellas insolens. Ceteros salutatus euripidis mei te. Sumo molestiae mei eu, has labitur detraxit iudicabit et. Ipsum oportere referrentur ad has, sea sint putant omittam ut, veri saepe consectetuer an cum. Purto ludus mea ut, docendi conceptam pro ne. Eu voluptua principes vis.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, et mei brute deleniti consetetur. Per ut appareat deserunt, solet conceptam pri ad. Sea ex consul salutandi. Te summo feugait facilisis vis, id tale melius vix, ex mea habemus assueverit. Id mea aperiam scaevola urbanitas, ius dolor salutatus ad.In eum odio accusamus, at mei fabellas insolens. Ceteros salutus euripidis mei te. Sumo molestiae mei eu, has labitur detraxit iudicabit et. Ipsum oportere referrentur ad has, sea sint putant omittam ut, veri saepe consectetuer an cum. Purto ludus mea ut, docendi conceptam pro ne. Eu voluptua principes vis.</p>', 'Custom Page', 'fa fa-bookmark', 'http://localhost/photo/assets/images/4419471-fast-food-wallpapers.jpg', 'This is My about us page');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages_cover`
--

CREATE TABLE `tbl_pages_cover` (
  `cover_id` int(11) NOT NULL,
  `index_pic` varchar(128) NOT NULL,
  `index_head` varchar(128) NOT NULL,
  `index_content` varchar(255) NOT NULL,
  `about_pic` varchar(128) NOT NULL,
  `about_head` varchar(128) NOT NULL,
  `about_content` varchar(255) NOT NULL,
  `contact_pic` varchar(128) NOT NULL,
  `contact_head` varchar(128) NOT NULL,
  `contact_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages_cover`
--

INSERT INTO `tbl_pages_cover` (`cover_id`, `index_pic`, `index_head`, `index_content`, `about_pic`, `about_head`, `about_content`, `contact_pic`, `contact_head`, `contact_content`) VALUES
(1, 'http://localhost/photo/assets/images/page_img/4419213-fast-food-wallpapers.jpg', 'FIND NICE PICTURES HERE', 'Here is our index page..', 'http://localhost/photo/assets/images/page_img/4419410-fast-food-wallpapers.jpg', 'About Us', 'About Us and our Services?', 'http://localhost/photo/assets/images/page_img/Hydrangeas.jpg', 'Contact Us', 'Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progress`
--

CREATE TABLE `tbl_progress` (
  `progress_id` int(11) NOT NULL,
  `progress_name` varchar(64) NOT NULL,
  `progress_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_progress`
--

INSERT INTO `tbl_progress` (`progress_id`, `progress_name`, `progress_value`) VALUES
(1, 'PHOTOSHOP', 80),
(2, 'SHOOTING PHOTO', 95),
(3, 'FORMATION', 90),
(4, 'CREATIVITY', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(64) NOT NULL,
  `social_icon` varchar(128) NOT NULL,
  `social_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_icon`, `social_link`) VALUES
(1, 'Facebook', 'fa fa-facebook sr-icons', 'http://www.facebook.com'),
(2, 'Twitter', 'fa fa-twitter sr-icons', 'http://www.twitter.com'),
(3, 'Google', 'fa fa-google-plus sr-icons', 'http://www.gmail.com'),
(5, 'Nwe', 'fa fa-twitter sr-icons', 'http://www.fdsus.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` varchar(64) NOT NULL,
  `user_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_role`, `user_details`) VALUES
(1, 'Shariful Islam', 'shariful.info56@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>'),
(2, 'Nazmul Hasan', 'csenazmul96@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'editor', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_content`
--
ALTER TABLE `tbl_about_content`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_pages_cover`
--
ALTER TABLE `tbl_pages_cover`
  ADD PRIMARY KEY (`cover_id`);

--
-- Indexes for table `tbl_progress`
--
ALTER TABLE `tbl_progress`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_content`
--
ALTER TABLE `tbl_about_content`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_msg`
--
ALTER TABLE `tbl_msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pages_cover`
--
ALTER TABLE `tbl_pages_cover`
  MODIFY `cover_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_progress`
--
ALTER TABLE `tbl_progress`
  MODIFY `progress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
