CREATE TABLE `oweme_categories` (
  `c_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `oweme_currencies` (
  `cur_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cur_symbol` varchar(250) NOT NULL,
  `cur_code` varchar(100) NOT NULL,
  `cur_description` varchar(250) NOT NULL,
  `cur_location` varchar(50) NOT NULL,
  PRIMARY KEY (`cur_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `oweme_debtors` (
  `d_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `d_name` varchar(255) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `oweme_entries` (
  `e_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `e_datestamp` int(10) unsigned NOT NULL,
  `e_category` tinyint(3) unsigned NOT NULL,
  `e_currency` tinyint(3) unsigned NOT NULL,
  `e_amount` decimal(13,2) NOT NULL,
  `e_description` varchar(255) NOT NULL,
  `e_debtor` varchar(200) NOT NULL,
  `e_status` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `oweme_statuses` (
  `s_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `s_name` varchar(250) NOT NULL,
  `s_label` varchar(200) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

