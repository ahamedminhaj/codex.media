ALTER TABLE `users` CHANGE `status` `status` TINYINT(1) NOT NULL DEFAULT '0';

ALTER TABLE `users` ADD `role` TINYINT(1) NOT NULL AFTER `status` DEFAULT '1';