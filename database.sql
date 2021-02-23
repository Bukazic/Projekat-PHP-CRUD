
create database podaci;

use podaci;

CREATE TABLE `studenti` (
  `id` int(11) NOT NULL auto_increment,
  `first_last_name` varchar(100),
  `b_date` varchar(100),
  `g_date` int(15),
  PRIMARY KEY  (`id`)
);