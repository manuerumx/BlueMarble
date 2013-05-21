delimiter $$

CREATE TABLE `bm_user` (
  `idbm_user` int(11) NOT NULL AUTO_INCREMENT,
  `bm_username` varchar(30) COLLATE utf8_bin NOT NULL,
  `bm_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `bm_pass` varchar(200) COLLATE utf8_bin NOT NULL,
  `bm_lang` varchar(5) COLLATE utf8_bin NOT NULL DEFAULT 'en_US',
  `bm_timezone` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bm_lastlog` datetime DEFAULT NULL,
  `bm_membersince` datetime DEFAULT NULL,
  PRIMARY KEY (`idbm_user`),
  UNIQUE KEY `bm_username_UNIQUE` (`bm_username`),
  UNIQUE KEY `idbm_user_UNIQUE` (`idbm_user`),
  UNIQUE KEY `bm_email_UNIQUE` (`bm_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin$$

delimiter $$

CREATE TABLE `images_dataset` (
  `Mission` varchar(20) COLLATE utf8_bin NOT NULL,
  `Roll` varchar(15) COLLATE utf8_bin NOT NULL,
  `Frame` int(11) NOT NULL,
  `Width` int(11) NOT NULL,
  `Height` int(11) NOT NULL,
  `Filesize` int(11) NOT NULL,
  `CLDP` int(11) DEFAULT NULL,
  `Lat` double NOT NULL,
  `Lon` double NOT NULL,
  `Geon` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Feat` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Url` varchar(200) COLLATE utf8_bin NOT NULL,
  KEY `Idx_Mission` (`Mission`,`Roll`,`Frame`),
  KEY `Idx_Coord` (`Lat`,`Lon`),
  KEY `Idx_Type` (`Width`,`Height`,`Filesize`),
  KEY `Idx_Url` (`Url`),
  KEY `Idx_Feat` (`Feat`,`Geon`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin$$



delimiter $$

CREATE TABLE `iss_dataset` (
  `Mission` varchar(45) COLLATE utf8_bin NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL,
  PRIMARY KEY (`Mission`),
  KEY `COORD` (`Latitude`,`Longitude`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin$$


