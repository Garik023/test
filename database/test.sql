--
-- Table structure for table `view_3d`
--
CREATE TABLE IF NOT EXISTS `view_3d` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `date` date NOT NULL,
    `playerid` int(7) unsigned NOT NULL,
    `agentid` int(7) unsigned NOT NULL,
    `currency` char(3) NOT NULL,
    `bet` decimal(10,2) DEFAULT NULL,
    `win` decimal(10,2) DEFAULT NULL,
    `rake` decimal(10,2) DEFAULT NULL,
    `tournament` decimal(10,2) DEFAULT NULL,
    `net` decimal(10,2) NOT NULL,
    `fin` decimal(10,2) DEFAULT NULL,
    `aams_ticket` varchar(40) NOT NULL,
    `aams_table` varchar(40) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `date`(`date`),
    KEY `playerid` (`playerid`),
    KEY `agentid` (`agentid`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=10835 ;
--
-- Dumping data for table `view_3d`
--
INSERT INTO `view_3d` (`id`, `date`, `playerid`, `agentid`, `currency`, `bet`, `win`, `rake`, `tournament`, `net`, `fin`, `aams_ticket`, `aams_table`)
VALUES
(1, '2012-10-31', 44426, 871, 'EUR', 0.86, 1.45, 0.03, 0.00, 0.03, 0.00, '', ''),
(2, '2012-10-31', 44425, 871, 'EUR', 1.62, 0.04, 0.07, 0.00, 0.07, 0.00, '', ''),
(3, '2012-10-31', 44424, 871, 'EUR', 4.64, 2.64, 0.22, 0.00, 0.22, 0.00, '', '');
