/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : cssoc

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2016-11-13 10:17:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activities
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activities_user_id_foreign` (`user_id`),
  CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('1', 'PHP Bootcamp', 'A series of 4 2 hour lectures to start from no PHP to a fully working Twitter Clone', 'http://i.imgur.com/IIsXkZ3.png', 'https://www.dropbox.com/s/bnohccrqyx8zhr4/PHP%20Crash%20course.pptx?dl=0', '2016-11-13 08:14:18', '2016-11-13 08:14:15', '1');
INSERT INTO `activities` VALUES ('2', 'The Imitation Game', 'A crryptography challenge based on a Bletchley Park theme', 'http://i.imgur.com/5zorK0f.jpg', 'https://www.dropbox.com/s/p2lyly7uxw7i5jw/Enigma.pdf?dl=0', '2016-11-13 08:17:38', '2016-11-13 08:17:42', '1');

-- ----------------------------
-- Table structure for activities_tags
-- ----------------------------
DROP TABLE IF EXISTS `activities_tags`;
CREATE TABLE `activities_tags` (
  `activity_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `activities_tags_activity_id_foreign` (`activity_id`),
  KEY `activities_tags_tag_id_foreign` (`tag_id`),
  CONSTRAINT `activities_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  CONSTRAINT `activities_tags_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of activities_tags
-- ----------------------------
INSERT INTO `activities_tags` VALUES ('1', '1');
INSERT INTO `activities_tags` VALUES ('1', '8');
INSERT INTO `activities_tags` VALUES ('1', '4');
INSERT INTO `activities_tags` VALUES ('2', '1');
INSERT INTO `activities_tags` VALUES ('2', '5');

-- ----------------------------
-- Table structure for calendars
-- ----------------------------
DROP TABLE IF EXISTS `calendars`;
CREATE TABLE `calendars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `calendars_user_id_foreign` (`user_id`),
  CONSTRAINT `calendars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of calendars
-- ----------------------------
INSERT INTO `calendars` VALUES ('1', 'Ian\'s VR Polar Bears', 'They\'re pretty cool', '3pm', '2016-11-14', '1');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id_from` int(10) unsigned NOT NULL,
  `user_id_to` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_user_id_from_foreign` (`user_id_from`),
  KEY `messages_user_id_to_foreign` (`user_id_to`),
  CONSTRAINT `messages_user_id_to_foreign` FOREIGN KEY (`user_id_to`) REFERENCES `users` (`id`),
  CONSTRAINT `messages_user_id_from_foreign` FOREIGN KEY (`user_id_from`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2016_11_12_151410_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_161410_create_speaker_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_161411_create_trip_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_195152_create_calendar_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_224037_create_tag_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_224130_create_activity_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_224302_create_speaker_review_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_224342_create_trip_review_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_12_224402_create_message_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_13_032751_create_activities_images_table', '1');
INSERT INTO `migrations` VALUES ('2016_11_13_034833_add_relationships', '1');
INSERT INTO `migrations` VALUES ('2016_11_13_061407_create_speakers_tags_table', '2');

-- ----------------------------
-- Table structure for speakers
-- ----------------------------
DROP TABLE IF EXISTS `speakers`;
CREATE TABLE `speakers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `speakers_user_id_foreign` (`user_id`),
  CONSTRAINT `speakers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of speakers
-- ----------------------------
INSERT INTO `speakers` VALUES ('1', 'Dr Ali Dehghantanha', 'University of Salford', 'http://www.salford.ac.uk/__data/assets/image/0011/909146/varieties/listingThumb.jpg', '2016-11-13 07:28:49', '2016-11-13 07:28:52', '1');
INSERT INTO `speakers` VALUES ('3', 'Professor Apostolos Antonacopoulos', 'University of Salford', 'http://www.salford.ac.uk/__data/assets/image/0011/909191/varieties/listingThumb.jpg', '2016-11-13 07:29:45', '2016-11-13 07:29:49', '1');

-- ----------------------------
-- Table structure for speakers_reviews
-- ----------------------------
DROP TABLE IF EXISTS `speakers_reviews`;
CREATE TABLE `speakers_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `review` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `speaker_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `speakers_reviews_speaker_id_foreign` (`speaker_id`),
  KEY `speakers_reviews_user_id_foreign` (`user_id`),
  CONSTRAINT `speakers_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `speakers_reviews_speaker_id_foreign` FOREIGN KEY (`speaker_id`) REFERENCES `speakers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of speakers_reviews
-- ----------------------------
INSERT INTO `speakers_reviews` VALUES ('1', 'Really smart guy, awesome lecture but it was difficult to follow', '4', '2016-11-13 07:55:03', '2016-11-13 07:55:06', '1', '1');

-- ----------------------------
-- Table structure for speakers_tags
-- ----------------------------
DROP TABLE IF EXISTS `speakers_tags`;
CREATE TABLE `speakers_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `speaker_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `speakers_tags_tag_id_foreign` (`tag_id`),
  KEY `speakers_tags_speaker_id_foreign` (`speaker_id`),
  CONSTRAINT `speakers_tags_speaker_id_foreign` FOREIGN KEY (`speaker_id`) REFERENCES `speakers` (`id`),
  CONSTRAINT `speakers_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of speakers_tags
-- ----------------------------
INSERT INTO `speakers_tags` VALUES ('5', '1', '1', '2016-11-13 08:29:41', '2016-11-13 08:29:45');
INSERT INTO `speakers_tags` VALUES ('6', '1', '5', '2016-11-13 08:30:11', '2016-11-13 08:30:14');
INSERT INTO `speakers_tags` VALUES ('7', '3', '1', '2016-11-13 08:30:26', '2016-11-13 08:30:30');
INSERT INTO `speakers_tags` VALUES ('8', '3', '6', '2016-11-13 08:30:42', '2016-11-13 08:30:46');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', 'Education', 'cyan', '2016-11-13 05:42:30', '2016-11-13 05:42:33');
INSERT INTO `tags` VALUES ('2', 'Historical', 'red', '2016-11-13 05:42:53', '2016-11-13 05:42:56');
INSERT INTO `tags` VALUES ('3', 'Company', 'green', '2016-11-13 05:49:34', '2016-11-13 05:49:38');
INSERT INTO `tags` VALUES ('4', 'Boring', 'orange', '2016-11-13 06:06:01', '2016-11-13 06:06:04');
INSERT INTO `tags` VALUES ('5', 'Security', 'darkViolet', '2016-11-13 07:57:23', '2016-11-13 07:57:27');
INSERT INTO `tags` VALUES ('6', 'Document Analysis', 'brown', '2016-11-13 07:57:46', '2016-11-13 07:57:50');
INSERT INTO `tags` VALUES ('7', 'Low Effort', 'darkTeal', '2016-11-13 08:24:54', '2016-11-13 08:24:58');
INSERT INTO `tags` VALUES ('8', 'Interactive', 'crimson', '2016-11-13 08:25:29', '2016-11-13 08:25:33');

-- ----------------------------
-- Table structure for trips
-- ----------------------------
DROP TABLE IF EXISTS `trips`;
CREATE TABLE `trips` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trips_user_id_foreign` (`user_id`),
  CONSTRAINT `trips_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of trips
-- ----------------------------
INSERT INTO `trips` VALUES ('1', 'National Museum of Computing', 'http://www.tnmoc.org/', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Tnmocsign.jpg/220px-Tnmocsign.jpg', '2016-11-13 05:58:19', '2016-11-13 05:58:22', '1');
INSERT INTO `trips` VALUES ('2', 'ThinkTank at Millennium Point\r\n\r\n', 'http://www.birminghammuseums.org.uk/thinktank', 'http://www.birminghammuseums.org.uk/assets/venue_photos/photo-thinktank-85ca40648295690d74df868aae2d8690.jpg', '2016-11-13 06:06:50', '2016-11-13 06:06:48', '1');

-- ----------------------------
-- Table structure for trips_reviews
-- ----------------------------
DROP TABLE IF EXISTS `trips_reviews`;
CREATE TABLE `trips_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `review` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `trip_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trips_reviews_trip_id_foreign` (`trip_id`),
  KEY `trips_reviews_user_id_foreign` (`user_id`),
  CONSTRAINT `trips_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `trips_reviews_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of trips_reviews
-- ----------------------------
INSERT INTO `trips_reviews` VALUES ('1', 'Very good, very enjoyable', '5', '2016-11-13 06:46:53', '2016-11-13 06:46:57', '1', '1');
INSERT INTO `trips_reviews` VALUES ('3', 'Could have been better', '2', '2015-11-13 06:56:24', '2015-11-13 06:56:20', '1', '1');

-- ----------------------------
-- Table structure for trips_tags
-- ----------------------------
DROP TABLE IF EXISTS `trips_tags`;
CREATE TABLE `trips_tags` (
  `trip_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `trips_tags_trip_id_foreign` (`trip_id`),
  KEY `trips_tags_tag_id_foreign` (`tag_id`),
  CONSTRAINT `trips_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  CONSTRAINT `trips_tags_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of trips_tags
-- ----------------------------
INSERT INTO `trips_tags` VALUES ('1', '1', '2016-11-13 06:29:15', '2016-11-13 06:29:19');
INSERT INTO `trips_tags` VALUES ('1', '2', '2016-11-13 06:29:31', '2016-11-13 06:29:37');
INSERT INTO `trips_tags` VALUES ('2', '1', '2016-11-13 06:29:45', '2016-11-13 06:29:49');
INSERT INTO `trips_tags` VALUES ('2', '8', '2016-11-13 08:34:26', '2016-11-13 08:34:29');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `society` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Katie', 'K.Paxton-Fear@edu.salford.ac.uk', 'hjh', 'The University of Salford', 'Salford Computing Society', 'logo.png', '2016-11-13 05:58:02', '2016-11-13 05:58:09');
