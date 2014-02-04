-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2013 at 02:03 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `say_hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author_name` varchar(20) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `theme` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author_name`, `create_time`, `theme`) VALUES
(1, '什么是HTML5？', '\nHTML总是被用来作为相互连接的东西。回到web远古时代，web因为各种大文件而一度被人们废弃一旁。90年代，web充斥着15页的说明书，所有的内容都在一个单独的文件里面，你必须滚动以便来查找这些超大的文件，就像你查阅大百科全书一样。大部分早期的HTML版本都是来处理这一类问题的，被普遍认为可读性和可用性极差。这主要是因为Tim Berners-Lee(被认为是HTML之父)是一个为了让其他也在CERN的研究员也能明白的研究员。如果你曾经认识某一个在该项目中深陷泥潭的人，你就会知道他们的字典里就没有简洁这两个字，因此在线阅读超长篇幅的文档就很有必要了，但是在web上滚动一个15页甚至1500页的文档，并非长远之计。\n因此，在很早的时候，HTML并不是主要用来显示那些格式化好的文档的。对于HTML来说，其根本非常简单，就是一个tag。它使得一个文档可以链接到另外一个文档。这样突然的，15页的文档就变成了15个单页的文档，再将他们全部链接起来，这样就可以解决前面的问题了。跟滚动说拜拜，向有用的链接说你好(Bye bye scrolling, hello useful linking)。这就是所有标准的东西了，如果这些东西对于你来说很新鲜，那么现在可以这么说，这里的水很快就会变得很深了。', 'lai', '2013-10-09 02:59:49', '随便扯');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`, `type`, `create_time`) VALUES
('anan', 'd4ab48265350cbaea25701599c54c4c4', '1', '2013-09-21 02:45:42'),
('lai', '1afb2c375f0f5d66263968ff59a04e0c', '1', '2013-09-21 02:43:57');

