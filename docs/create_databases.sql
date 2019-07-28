-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'users'
--
-- ---

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL DEFAULT 'NULL',
  `user_password` VARCHAR(100) NOT NULL DEFAULT 'NULL',
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'todos'
--
-- ---

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `user_id` INTEGER NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `memo` MEDIUMTEXT NULL DEFAULT NULL,
  `priority` INTEGER NULL DEFAULT NULL,
  `start` DATE NULL DEFAULT NULL,
  `deadline` DATE NOT NULL,
  `completed` DATETIME NULL DEFAULT NULL,
  `project_id` INTEGER NULL DEFAULT NULL,
  `genre_id` INTEGER NULL DEFAULT NULL,
  `tag_id` INTEGER NULL DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'projects'
--
-- ---

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'genres'
--
-- ---

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tags'
--
-- ---

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tagtodo_connection'
--
-- ---

DROP TABLE IF EXISTS `tagtodo_connection`;

CREATE TABLE `tagtodo_connection` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `todo_id` INTEGER NULL DEFAULT NULL,
  `tag_id` INTEGER NULL DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys
-- ---


-- ---
-- Table Properties
-- ---

-- ALTER TABLE `users` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `todos` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `projects` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `genres` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tags` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tagtodo_connection` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `users` (`id`,`username`,`user_password`,`created_at`,`updated_at`) VALUES
-- ('','','','','');
-- INSERT INTO `todos` (`id`,`user_id`,`title`,`memo`,`priority`,`start`,`deadline`,`completed`,`project_id`,`genre_id`,`tag_id`,`created_at`,`updated_at`,`deleted_at`) VALUES
-- ('','','','','','','','','','','','','','');
-- INSERT INTO `projects` (`id`,`name`,`created_at`,`updated_at`) VALUES
-- ('','','','');
-- INSERT INTO `genres` (`id`,`name`,`created_at`,`updated_at`) VALUES
-- ('','','','');
-- INSERT INTO `tags` (`id`,`name`,`created_at`,`updated_at`) VALUES
-- ('','','','');
-- INSERT INTO `tagtodo_connection` (`id`,`todo_id`,`tag_id`,`created_at`,`updated_at`) VALUES
-- ('','','','','');
