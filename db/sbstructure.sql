# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# Host: mysql.stud.ntnu.no
# Generation Time: May 12, 2011 at 01:43 AM
# Server version: 5.0.51
# PHP Version: 4.3.4
# 
# Database : `kiro_slottsfjell`
# 

# --------------------------------------------------------

#
# Table structure for table `content`
#
# Creation: May 11, 2011 at 11:04 PM
# Last update: May 12, 2011 at 01:29 AM
#

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL auto_increment,
  `priority` int(11) NOT NULL default '0',
  `type` varchar(15) character set utf8 NOT NULL,
  `author` varchar(100) character set utf8 NOT NULL,
  `title` varchar(100) character set utf8 NOT NULL,
  `midtitle` varchar(100) character set utf8 NOT NULL,
  `text` text character set utf8 NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

# --------------------------------------------------------

#
# Table structure for table `users`
#
# Creation: Jul 03, 2010 at 12:47 PM
# Last update: May 12, 2011 at 01:33 AM
# Last check: Jul 04, 2010 at 03:10 AM
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) character set utf8 NOT NULL,
  `password` varchar(100) character set utf8 NOT NULL,
  `admin` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;