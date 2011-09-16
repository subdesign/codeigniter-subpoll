CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answers` text NOT NULL,
  `votes` text NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `question`, `answers`, `votes`, `status`) VALUES
(1, 'What car do you like?', 'a:5:{i:1;s:8:"Mercedes";i:2;s:3:"BMW";i:3;s:5:"Dodge";i:4;s:4:"Ford";i:5;s:6:"Toyota";}', 'a:4:{i:3;i:1;i:1;i:1;i:4;i:2;i:5;i:2;}', 'inactive'),
(2, 'How do you like my website', 'a:5:{i:1;s:9:"Very cool";i:2;s:4:"Cool";i:3;s:8:"It is OK";i:4;s:3:"Bad";i:5;s:8:"Terrible";}', 'a:4:{i:1;i:3;i:3;i:2;i:2;i:1;i:4;i:1;}', 'active');
