-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `collection_paintings`
--

LOCK TABLES `collection_paintings` WRITE;
/*!40000 ALTER TABLE `collection_paintings` DISABLE KEYS */;
INSERT INTO `collection_paintings` VALUES (1,6,4,'2020-12-02 00:17:31','2020-12-02 00:17:31'),(2,2,5,'2020-12-02 00:19:32','2020-12-02 00:19:32'),(3,2,6,'2020-12-02 00:20:38','2020-12-02 00:20:38'),(4,2,7,'2020-12-02 00:21:43','2020-12-02 00:21:43'),(5,3,8,'2020-12-02 00:24:16','2020-12-02 00:24:16'),(6,3,9,'2020-12-02 01:18:34','2020-12-02 01:18:34'),(7,3,10,'2020-12-02 01:19:53','2020-12-02 01:19:53'),(8,3,11,'2020-12-02 01:21:04','2020-12-02 01:21:04'),(9,4,12,'2020-12-02 01:22:56','2020-12-02 01:22:56'),(10,4,13,'2020-12-02 01:24:16','2020-12-02 01:24:16'),(11,4,14,'2020-12-02 01:26:01','2020-12-02 01:26:01'),(12,4,15,'2020-12-02 01:27:25','2020-12-02 01:27:25'),(13,5,16,'2020-12-02 01:34:59','2020-12-02 01:34:59'),(14,5,17,'2020-12-02 01:36:41','2020-12-02 01:36:41'),(15,5,18,'2020-12-02 01:38:04','2020-12-02 01:38:04'),(16,5,19,'2020-12-02 01:52:41','2020-12-02 01:52:41'),(17,5,20,'2020-12-02 01:58:17','2020-12-02 01:58:17');
/*!40000 ALTER TABLE `collection_paintings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `collections`
--

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;
INSERT INTO `collections` VALUES (2,'The True Collection','Paintings in this collection are informal,and are entirely true at the moment with no end in mind. Each painting was initially a “mistake” made into beauty and meaning. This collection continues to evolve.','img/Galleries/Gallery02-min.jpg','#ff5ed7','2020-12-01 22:37:12','2020-12-05 02:07:41'),(3,'The Breakup Collection','The Breakup Collection represents the beginnings of a love story, whereby, each painting was inspired during 4 separations or “break ups.” During this special and therapeutic time, I reflected on the relationship and my own self.\r\n\r\nEach painting depicts the emotional landscape and unknowns of this romance. This emotionally-charged story contains layers and textures of amazing experiences and intense disappointments. However, while it does come full circle beautifully, the 4 paintings—like the couple—ironically remain a collection.','img/Galleries/Gallery01-min.jpg','#ff7100','2020-12-01 23:24:25','2020-12-05 02:07:19'),(4,'The Garden Collection','Inspired by covid 19 isolation during lockdown in NYC. The choice to bring the outdoors inside during Spring’s lockdown was a natural choice.','img/Galleries/Gallery03-min.jpg','#47597F','2020-12-01 23:31:21','2020-12-05 02:06:54'),(5,'The Skribble Collection','The Breakup Collection represents the beginnings of a love story, whereby, each painting was inspired during 4 separations or “break ups.” During this special and therapeutic time, I reflected on the relationship and my own self.\r\n\r\nEach painting depicts the emotional landscape and unknowns of this romance. This emotionally-charged story contains layers and textures of amazing experiences and intense disappointments. However, while it does come full circle beautifully, the 4 paintings—like the couple—ironically remain a collection.','img/Galleries/Gallery08-min.jpg','#C58D51','2020-12-01 23:33:06','2020-12-05 02:06:13'),(6,'The True Love Collection','This painting was created as a Valentine’s Day present for the late Robert Gubitosi—a beautiful man who became my husband in 2009. The intense, contrasting colors signify true love—born out of friendship—after a long and hopeless romantic past.','img/Galleries/Gallery09-min.jpg','#ff1b1b','2020-12-01 23:34:10','2020-12-05 01:58:08');
/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (1,'Red','#D72702','2020-12-05 01:36:32','2020-12-05 01:36:32'),(2,'Orange','#DE6B00','2020-12-05 01:36:32','2020-12-05 01:36:32'),(3,'Yellow','#C58D51','2020-12-05 01:36:32','2020-12-05 01:36:32'),(4,'Green','#7E8B0F','2020-12-05 01:36:32','2020-12-05 01:36:32'),(5,'Blue','#47597F','2020-12-05 01:36:32','2020-12-05 01:36:32'),(6,'Purple','#705899','2020-12-05 01:36:32','2020-12-05 01:36:32'),(7,'Violet','#D27BB0','2020-12-05 01:36:32','2020-12-05 01:36:32'),(8,'Black','#0A0A0A','2020-12-05 01:36:32','2020-12-05 01:36:32');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2020_12_01_080443_create_sessions_table',1),(7,'2020_12_01_100944_create_colors_table',1),(8,'2020_12_01_101147_create_collections_table',1),(9,'2020_12_01_101441_create_paintings_table',1),(10,'2020_12_01_101820_create_collection_paintings_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `paintings`
--

LOCK TABLES `paintings` WRITE;
/*!40000 ALTER TABLE `paintings` DISABLE KEYS */;
INSERT INTO `paintings` VALUES (4,'True Love','A gentleman who happened to be my perfect match from the day we met 8.24.2005-8.22.2011, my late husband Robert Gubitosi. This painting came to me as an inspiration from his overwhelming love, and I gifted him with this piece of art on Valentine’s Day. I used warm and  intense colors that, for me, at the time, stood for true love and bonding.  I used dark texture to convey a surprise that Cupid gave me, I suppose, after a long and hopeless romantic past.','2006 | 30” x 30” | Acrylic on canvas',1000,'img/Pieces as JPEGS/5-min.jpg','#ff1b1b','#ff1b1b','2020-12-02 00:17:31','2020-12-08 05:29:48'),(5,'ID','Simultaneous juxtaposition of two mind sets in the same face. The soft and dark side of personalities can best be described in this painting.','2019 | 36” x 36” | Acrylic on canvas',500,'img/Pieces as JPEGS/13-min.jpg','#404040','#ff5ed7','2020-12-02 00:19:32','2020-12-05 02:18:30'),(6,'Child’s Play','I painted the canvas in patterns, dashes of brushstrokes that was much fun in no particular order. I created shapes with different colors of paint to convey the fun and feelings of youth. All these inspirations came to me while planning a road trip outside of New York\'s lockdown.','2020 | 36\" x 48\" | Mixed Media, Acrylic, Latex, Charcoal on Canvas',500,'img/Pieces as JPEGS/19-min.jpg','#989fff','#df9e1c','2020-12-02 00:20:38','2020-12-07 21:42:18'),(7,'Light at the End of the Tunnel','The inspiration for this painting came to me during the trivial time of Covid-19 where the world had come to a shutdown. Everyone needed a hope to hang in there. Dark colors and rough brush strokes convey despair and uncertainty. I have tried to make hope a part of this painting with swirls signifying life cycles and time. I used yellow and subtle pinks to convey hope for the unfortunate victims.','2020 | 36\" x 48\" | Acrylic on Canvas',500,'img/Pieces as JPEGS/18-min.jpg','#7a65ff','#dfd42b','2020-12-02 00:21:43','2020-12-08 05:21:18'),(8,'Spring in November','This painting represents a time of renewal—and finding love, along with a dash of caution. The calendar said November... but it felt like Spring when I met my new, true love. The warm and sunny colors represent a time when my heart was wide open—filled with hope for a future full of love.\r\n\r\nHowever, in contrast, the dark colors surrounding the warmth convey that this romance may be too good to be true.','2016 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/1-min.jpg','#202020','#dfbc52','2020-12-02 00:24:16','2020-12-05 02:17:20'),(9,'The Phantom','Yes. I’ll never forget when I was ghosted on...\r\n\r\nThe dark colors convey feelings of cold and raw emptiness. Yet, the bright yellow reveals a glimmer of hope—or thoughts of a return of the earlier days of this romance.','2017 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/2-min.jpg','#b429df','#bfa147','2020-12-02 01:18:34','2020-12-05 02:16:46'),(10,'Kerfuffle','As time would tell...turns out, he coldn’t live without me. However, emotions were all over the map. The highs and lows were most intense during this period.  \r\n\r\nMy confusion is embedded throughout this painting. Warm pinks represent my strong feeling of love, while the blue tones highlight the inevitable disappointments—a roller coaster ride of emotions. Teal was fused in as a reminder of all of our romantic and unforgettable tropical trips we took together.','2017 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/10-min.jpg','#4823bf','#7b18df','2020-12-02 01:19:53','2020-12-05 02:16:15'),(11,'Imagine','The final painting in this collection—yet, one of the most significant—symbolizes a special place where the relationship once and for all solidified, or just organically became the conclusion of the Break up Collection.\r\n\r\nThis was a happy and peaceful period of rediscovering each other, as we really were, and believing in a love that was earlier only imagined.','2018 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/15-min.jpg','#ce2fff','#5275df','2020-12-02 01:21:04','2020-12-05 02:15:55'),(12,'Garden Escape','This painting reflects frenetic times of uncertainty and the longing for spending time outdoors. Nature was one of the few happenings that did not stop during Covid 19 .','2020 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/16-min.jpg','#ff7100','#206bff','2020-12-02 01:22:56','2020-12-05 02:12:21'),(13,'Crazy Blooms','The collection of balloon like flowers are taking off much like the artist is ready to travel. A break from the lockdown from NYC is was necessary after an extraordinary amount of detailed work that went into the multi layered and colorful garden in this painting.','2020 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/14-min.jpg','#fff231','#a954ff','2020-12-02 01:24:16','2020-12-05 02:12:53'),(14,'It’s Unfinished','This painting reflects frenetic times of uncertainty and the longing for spending time outdoors. Nature was one of the few happenings that did not stop during Covid 19 .','2020 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/17-min.jpg','#ff1b1b','#5e86ff','2020-12-02 01:26:01','2020-12-05 02:13:12'),(15,'After the Rain','This garden landscape was completed after a long Spring of being indoors during the NYC lockdown. While the colors are muted and have a dreary feel, the brush strokes illustrate a beautiful and hopeful future.','2020 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/8-min.jpg','#31ff3e','#a954ff','2020-12-02 01:27:25','2020-12-05 02:13:37'),(16,'Garden Escape','Lorem Ipsum','2020 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/20-min.jpg','#404040','#2b36df','2020-12-02 01:34:59','2020-12-05 02:11:00'),(17,'Electric Skribble','Lorem Ipsum','2020 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/12-min.jpg','#dfbc52','#df9e1c','2020-12-02 01:36:41','2020-12-05 02:10:26'),(18,'Hodgepodge in Space Blue Counterpart','Created during a time of disorganization—as represented by the intertwining assortment of scribbles—Laurie was merging her living space, and her life, with her new husbands’. Lots of tools and organizational solutions were needed.\r\n\r\nHowever, Laurie managed to find and create a different kind of peace—by letting loose in her studio and by turning “disorder” into art, for someone else to enjoy in their own space.','2019 | 18” x 24” | Latex on canvas',500,'img/Pieces as JPEGS/6-min.jpg','#404040','#606060','2020-12-02 01:38:04','2020-12-05 02:10:00'),(19,'The Mudslide','Thick latex earth colored paints—such as deep blues, sand colors, black and emeralds—were combined in large masses. The shiny and slippery-looking paint melds and resembles a mudslide.\r\n\r\nThis drip painting, from the Skribble Collection, features high-gloss latex, and was created during the 2018 California mudslides. Caused by the wildfires in 2017, followed by heavy rains and flooding in 2018—Laurie’s aunts, uncles and cousins residing in Southern California were lucky to have not been impacted by this natural disaster—which inspired this piece.','2018 | 18” x 24” | Latex on canvas',500,'img/Pieces as JPEGS/11-min.jpg','#202020','#404040','2020-12-02 01:52:41','2020-12-05 02:09:42'),(20,'Skribble, Scrabble & Wine','The colors in this painting tell the story of her favorite pastimes-creating art, playing scrabble and drinking wine.','2020 | 28” x 28” | Latex on canvas',500,'img/Pieces as JPEGS/9-min.jpg','#ffd75e','#ff1b1b','2020-12-02 01:58:17','2020-12-05 02:09:13');
/*!40000 ALTER TABLE `paintings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('MP9jHiicUziZFc9hVm7UAW74w8hV6TGphzCd4K5s',1,'192.168.10.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiWThVeVJBaGJFTnRDWktVRHgwbTVndEg3S0N1ZDF5MnZsVEdRTEJQSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sYXVyaWVsYWZyYXRlLnRlc3QvY29sbGVjdGlvbnMiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGd6RTUxQUZkYThnN0hVSENaSEphaHVYU1dKRXJSd0NmWTdLWU1rbVBReEJpT1lQaFMzemphIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRnekU1MUFGZGE4ZzdIVUhDWkhKYWh1WFNXSkVyUndDZlk3S1lNa21QUXhCaU9ZUGhTM3pqYSI7fQ==',1607410336);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Pierce Prange','streamline.our.designs@gmail.com',NULL,'$2y$10$gzE51AFda8g7HUHCZHJahuXSWJErRwCfY7KYMkmPQxBiOYPhS3zja',NULL,NULL,NULL,NULL,NULL,'2020-12-05 01:36:33','2020-12-05 01:36:33');
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

-- Dump completed on 2020-12-08  6:53:16
