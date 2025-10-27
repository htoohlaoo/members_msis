CREATE DATABASE  IF NOT EXISTS `members` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `members`;
-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: members
-- ------------------------------------------------------
-- Server version	8.0.43-0ubuntu0.24.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel-cache-htoohlanest@gmail.com|127.0.0.1','i:2;',1761577351),('laravel-cache-htoohlanest@gmail.com|127.0.0.1:timer','i:1761577351;',1761577351),('laravel-cache-mynew@gmail.com|127.0.0.1','i:2;',1761584751),('laravel-cache-mynew@gmail.com|127.0.0.1:timer','i:1761584751;',1761584751);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `memberships`
--

DROP TABLE IF EXISTS `memberships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `memberships` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `memberships`
--

LOCK TABLES `memberships` WRITE;
/*!40000 ALTER TABLE `memberships` DISABLE KEYS */;
INSERT INTO `memberships` VALUES (4,4,'Brand B','Model B2','USA','archived','2025-10-26 09:59:02','2025-10-27 09:07:12'),(8,5,'Brand A','Model A1','Thailand','archived','2025-10-26 10:38:56','2025-10-27 09:08:42'),(9,6,'Brand B','Model B2','China','active','2025-10-26 12:05:34','2025-10-26 12:05:34'),(10,7,'Brand B','Model B1','Thailand','active','2025-10-26 12:06:23','2025-10-26 12:06:23'),(11,8,'Brand A','Model A1','Myanmar','archived','2025-10-26 22:47:29','2025-10-27 11:45:11'),(12,10,'Brand A','Model A1','Thailand','active','2025-10-26 22:49:00','2025-10-26 22:49:00'),(13,11,'Brand C','Model C3','Myanmar','active','2025-10-26 22:49:54','2025-10-26 22:49:54'),(14,12,'Brand B','Model B1','Thailand','active','2025-10-27 01:05:32','2025-10-27 01:05:32'),(15,13,'Brand A','Model A2','China','active','2025-10-27 03:49:01','2025-10-27 03:49:01'),(16,14,'Brand A','Model A1','China','archived','2025-10-27 03:51:06','2025-10-27 08:55:28'),(17,15,'Brand A','Model A1','Thailand','archived','2025-10-27 03:52:17','2025-10-27 09:07:18'),(18,19,'Brand A','Model A2','China','active','2025-10-27 06:16:30','2025-10-27 06:16:30'),(19,20,'Brand A','Model A2','Thailand','active','2025-10-27 06:19:39','2025-10-27 06:19:39'),(20,21,'Brand B','Model B1','Thailand','active','2025-10-27 06:21:53','2025-10-27 06:21:53'),(21,22,'Brand A','Model A2','Thailand','active','2025-10-27 06:40:07','2025-10-27 06:40:07'),(22,23,'Brand A','Model A1','Thailand','active','2025-10-27 08:32:44','2025-10-27 08:32:44'),(23,24,'Brand A','Model A1','UK','active','2025-10-27 10:33:41','2025-10-27 10:33:41'),(24,16,'Brand A','Model A1','Japan','active','2025-10-27 10:35:41','2025-10-27 10:35:41'),(25,25,'Brand A','Model A1','UK','active','2025-10-27 10:39:11','2025-10-27 10:39:11'),(26,26,'Brand B','Model B1','Japan','archived','2025-10-27 10:42:34','2025-10-27 10:45:57'),(27,28,'Brand A','Model A2','UK','archived','2025-10-27 11:23:25','2025-10-27 11:23:56');
/*!40000 ALTER TABLE `memberships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_10_26_063156_create_members_table',1),(5,'2025_10_26_100138_add_is_admin_to_user',2),(6,'2025_10_26_114628_rename_members_table_to_memberships',3),(7,'2025_10_26_114729_add_fields_to_memberships_table',4),(8,'2025_10_26_115206_remove_unnecessary_fields',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test Company','test@gmail.com',NULL,'$2y$12$ljhG/i3TMQIKdTkKcxopQeB/12I16oT5emw.xxLNryvnSk9EyqlOi','user',NULL,'2025-10-26 01:30:46','2025-10-26 01:30:46'),(2,'ABC','abc@gmail.com',NULL,'$2y$12$YCIx4DprytN9nkMTAxdP2uz96C.Ziqy/qjDyQJNfXr/hkQTVEjAsK','user',NULL,'2025-10-26 02:39:45','2025-10-26 02:39:45'),(4,'Dev Nest Solutionss Co.,Ltd','htoohlanest@gmail.com',NULL,'$2y$12$zOfsQi4u7fMj54tTn7JTWuEtA7MU3gQ30UjSmATz39kXZLrncz6MW','user',NULL,'2025-10-26 06:15:26','2025-10-27 08:30:47'),(5,'Ma Ma Co.,Ltd','nyeinhsu@gmail.com',NULL,'$2y$12$.bJlZQ4zxhao1IR7Bq1s5OLaTMW6vXrTgIpz4B7Ylarmc8SKxY/4e','user',NULL,'2025-10-26 10:15:25','2025-10-26 10:15:25'),(6,'Test Company','testcompany@gmail.com',NULL,'$2y$12$e0WYfF3S8Yl4WbDe6Fvrl.Q55mw3vCsbA7mwKbl/UamzGCJyRCfaS','user',NULL,'2025-10-26 12:05:15','2025-10-26 12:05:15'),(7,'Test Company2','test2@gmail.com',NULL,'$2y$12$Ykj187ld1JVDtDhVXpHGp.VBJuBaqRkyC0Zr.0r9vj7wX.nS/MrwW','user',NULL,'2025-10-26 12:06:13','2025-10-26 12:06:13'),(8,'Test Company 3 Edit','tes3@gmail.com',NULL,'$2y$12$lUEWGB/43.Pn.4VxqnnfpetK29rSXKGEWsydsCPJHpxZHbQbklQL6','user',NULL,'2025-10-26 22:47:19','2025-10-27 11:44:57'),(9,'Test 4','test4@gmail.com',NULL,'$2y$12$WzvmJ/VEL8NQCbr0a4ut4eOTdm8qDtOOL05XjJ5Yf48XHkhavRl0C','user',NULL,'2025-10-26 22:48:09','2025-10-26 22:48:09'),(10,'Test 5','test5@gmail.com',NULL,'$2y$12$twGzfdbTWuCa11WQOBo7heXv4U2SIUH6lhNd796GnEf4DD2l2VqdO','user',NULL,'2025-10-26 22:48:37','2025-10-26 22:48:37'),(11,'Test6','test6@gmail.com',NULL,'$2y$12$kllzrF7iPceFS.ap1ma0u.Wd8tRTIt5JQrru2Vgbn00wQx7.1QxcK','user',NULL,'2025-10-26 22:49:39','2025-10-26 22:49:39'),(12,'Test 8 Edit','test8@gmail.com',NULL,'$2y$12$6eIxay5Pn7WBZCzE/b8l.O5OYaLtADP.exJWQeElRMTD.x8WYrS0y','user',NULL,'2025-10-27 00:56:47','2025-10-27 09:15:21'),(13,'Test New','testnew@gmail.com',NULL,'$2y$12$aMY9rY7M4LdKZ05es4asv.HgqwPPNghnmeJToOX4BVBH1nqOj.AJa','user',NULL,'2025-10-27 03:48:21','2025-10-27 03:48:21'),(14,'New 1','new1@gmail.com',NULL,'$2y$12$nsL5pQps8hLt.7IwmvDeZ.CJjNebCpI1y1BBnOCeuqpsbdDIJAYCS','user',NULL,'2025-10-27 03:49:45','2025-10-27 03:49:45'),(15,'New New','newnew@gmail.com',NULL,'$2y$12$6JdXmVZlj/ak0Ph/GgIdg.QqRkm3HeJFdjG03wKmuQQKe4lrxnAKS','user',NULL,'2025-10-27 03:51:57','2025-10-27 03:51:57'),(16,'Htoo Hla Oo','hho@gmail.com',NULL,'$2y$12$6BzNloLncGO2qopWyfk5PuM5wWSsaTNGGscuhUqIzpEQfsTdVgbVa','admin',NULL,'2025-10-27 06:10:57','2025-10-27 06:10:57'),(18,'Admin Subscribe','adminsc@gmail.com',NULL,'$2y$12$x9F4OgMBijzfzDGIydKtYe9tRFJlZEOTFToIoMHo6q21DUEQLwD8W','user',NULL,'2025-10-27 06:14:01','2025-10-27 06:14:01'),(19,'New SC','newsc@gmail.com',NULL,'$2y$12$/n1/t66W5H/ikQNSyfhliuYBVgGO/2jxChzwaF3uR/DBaPE/8BLxK','user',NULL,'2025-10-27 06:16:30','2025-10-27 06:16:30'),(20,'Newer','newer@gmail.com',NULL,'$2y$12$t0RBPC7PD4hNphZHsI9Bi.xXMnHUd1t0BHEnyNcrvQ4LPeNlD/fPe','user',NULL,'2025-10-27 06:19:39','2025-10-27 06:19:39'),(21,'Newest','newest@gmail.com',NULL,'$2y$12$caTrxzif00d9w.6deCZeUONFVo.af6ExBHM2u9VcD4Jof0FOyY8Gi','user',NULL,'2025-10-27 06:21:53','2025-10-27 06:21:53'),(22,'Htoo Hla Oo','htoohlaoo.dev@outlook.com',NULL,'$2y$12$Y1BBizMmhTzKBvx0ChhAZuGESCrhsA7RbntublF/Z6JflKMcCimiK','user',NULL,'2025-10-27 06:40:07','2025-10-27 06:40:07'),(23,'My New','mynew@gmail.com',NULL,'$2y$12$QTZHP62/DttdIqEemENLge3oVZPYqNK.Br9632X2pJlBwuvrOKkGC','admin',NULL,'2025-10-27 08:32:05','2025-10-27 08:39:40'),(24,'My New Admin','mnadmin@gmail.com',NULL,'$2y$12$ZFcguFErivZfj5tCu6SBz.pgMDZyOyHLd0pNy.9fbJpewbQDMaeHK','user',NULL,'2025-10-27 10:33:41','2025-10-27 10:33:41'),(25,'Create Test','createtest@gmail.com',NULL,'$2y$12$1zgbyurK13pYg4BI45cSRe5T.qrEJSxYywMGHaNGcOsu4CvyE9fF.','user',NULL,'2025-10-27 10:39:11','2025-10-27 10:39:11'),(26,'HHO Update','hhoupd@gmail.comm',NULL,'$2y$12$g4OUjTiXWrEc7zAf3RU6YOjR7UApHLDZ4v63k.HEpvLzCuAZWKr46','user',NULL,'2025-10-27 10:42:34','2025-10-27 10:44:17'),(27,'Bo Bo CO.,LTd','bobo@gmail.com',NULL,'$2y$12$WFqur7cjbM/pM4/k.Y8iIOObScsBjTW1iwfNdkMIJU31t53bqQyLy','user',NULL,'2025-10-27 11:02:10','2025-10-27 11:02:10'),(28,'HHO N','hhon@gmail.com',NULL,'$2y$12$jtnQInpA1W9pqq6JIc2z6uzW8NWE2KpNQqeQ/mxcy97MIyGupZEpC','user',NULL,'2025-10-27 11:23:25','2025-10-27 11:23:25'),(29,'Admin','admin@gmail.com',NULL,'$2y$12$.h80B0L7pB2ecdcbOfV7GuPw9LxI68ju.dd4K66Fm5ACbwBU7uFPC','admin',NULL,'2025-10-27 11:39:04','2025-10-27 11:39:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-28  0:48:54
