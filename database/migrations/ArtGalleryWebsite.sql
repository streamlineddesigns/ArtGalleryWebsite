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
INSERT INTO `collection_paintings` VALUES (1,6,4,'2020-12-02 00:17:31','2020-12-02 00:17:31'),(2,2,5,'2020-12-02 00:19:32','2020-12-02 00:19:32'),(3,2,6,'2020-12-02 00:20:38','2020-12-02 00:20:38'),(4,2,7,'2020-12-02 00:21:43','2020-12-02 00:21:43'),(5,3,8,'2020-12-02 00:24:16','2020-12-02 00:24:16'),(6,3,9,'2020-12-02 01:18:34','2020-12-02 01:18:34'),(7,3,10,'2020-12-02 01:19:53','2020-12-02 01:19:53'),(8,3,11,'2020-12-02 01:21:04','2020-12-02 01:21:04'),(9,4,12,'2020-12-02 01:22:56','2020-12-02 01:22:56'),(10,4,13,'2020-12-02 01:24:16','2020-12-02 01:24:16'),(11,4,14,'2020-12-02 01:26:01','2020-12-02 01:26:01'),(12,4,15,'2020-12-02 01:27:25','2020-12-02 01:27:25'),(13,5,16,'2020-12-02 01:34:59','2020-12-02 01:34:59'),(14,5,17,'2020-12-02 01:36:41','2020-12-02 01:36:41'),(15,5,18,'2020-12-02 01:38:04','2020-12-02 01:38:04'),(16,5,19,'2020-12-02 01:52:41','2020-12-02 01:52:41'),(17,5,20,'2020-12-02 01:58:17','2020-12-02 01:58:17'),(18,5,21,'2020-12-08 21:25:27','2020-12-08 21:25:27');
/*!40000 ALTER TABLE `collection_paintings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `collections`
--

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;
INSERT INTO `collections` VALUES (2,'The True Collection','Paintings in this collection are informal,and are entirely true at the moment with no end in mind. Each painting was initially a “mistake” made into beauty and meaning. This collection continues to evolve.','img/Galleries/Gallery02-min.jpg','#ff5ed7','2020-12-01 22:37:12','2020-12-05 02:07:41'),(3,'The Breakup Collection','The Breakup Collection represents the beginnings of a love story, whereby each painting was inspired during four separations or \"breakups.\" During this therapeutic time, I focused more on myself.  Each painting depicts the emotional landscape and unknowns of this romance. This emotionally-charged story contains layers and textures of unique experiences and intense disappointments. However, while it does come full circle beautifully, the four paintings like the couple remain together, and Laurie marries her new True Love.','img/Galleries/Gallery01-min.jpg','#ff7100','2020-12-01 23:24:25','2020-12-08 21:38:57'),(4,'The Garden Collection','This is a fresh collection of paintings because it represents spring, my most loved season. I created this when I had more time to paint and enjoyed creating these tiny and colorful, textured garden landscapes. These represent luxury as the limited outdoor space leaves less room for flowers like these. So I decided to bring them indoors through my painting.','img/Galleries/Gallery03-min.jpg','#47597F','2020-12-01 23:31:21','2020-12-08 21:37:25'),(5,'The Skribble Collection','Laurie enjoyed the idea of creating art haphazardly, with some intent. Each painting she worked on started with vague imagery of her deep thoughts - eventually conveyed to the canvas sheet.','img/Galleries/Gallery08-min.jpg','#C58D51','2020-12-01 23:33:06','2020-12-08 21:01:43'),(6,'The True Love Collection','This painting was created as a Valentine’s Day present for the late Robert Gubitosi—a beautiful man who became my husband in 2009. The intense, contrasting colors signify true love—born out of friendship—after a long and hopeless romantic past.','img/Galleries/Gallery09-min.jpg','#ff1b1b','2020-12-01 23:34:10','2020-12-05 01:58:08');
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
INSERT INTO `paintings` VALUES (4,'True Love','A gentleman who happened to be my perfect match from the day we met 8.24.2005-8.22.2011, my late husband Robert Gubitosi. This painting came to me as an inspiration from his overwhelming love, and I gifted him with this piece of art on Valentine’s Day. I used warm and  intense colors that, for me, at the time, stood for true love and bonding.  I used dark texture to convey a surprise that Cupid gave me, I suppose, after a long and hopeless romantic past.','2006 | 30” x 30” | Acrylic on canvas',1000,'img/Pieces as JPEGS/5-min.jpg','#ff1b1b','#ff1b1b','2020-12-02 00:17:31','2020-12-08 05:29:48'),(5,'Camouflage','A painting I created when I discovered some bitter realities at work, deceiving politics, more than one face of every person, realizing these were not just feelings, but norms of what the society had become.','2019 | 36” x 36” | Mixed Media/Acrylic and Pastel on Canvas',500,'img/Pieces as JPEGS/13-min.jpg','#404040','#ff5ed7','2020-12-02 00:19:32','2020-12-08 22:11:41'),(6,'Child’s Play','I painted the canvas in patterns, dashes of brushstrokes that was much fun in no particular order. I created shapes with different colors of paint to convey the fun and feelings of youth. All these inspirations came to me while planning a road trip outside of New York\'s lockdown.','2020 | 36\" x 48\" | Mixed Media, Acrylic, Latex, Charcoal on Canvas',500,'img/Pieces as JPEGS/19-min.jpg','#989fff','#df9e1c','2020-12-02 00:20:38','2020-12-07 21:42:18'),(7,'Light at the End of the Tunnel','The inspiration for this painting came to me during the trivial time of Covid-19 where the world had come to a shutdown. Everyone needed a hope to hang in there. Dark colors and rough brush strokes convey despair and uncertainty. I have tried to make hope a part of this painting with swirls signifying life cycles and time. I used yellow and subtle pinks to convey hope for the unfortunate victims.','2020 | 36\" x 48\" | Acrylic on Canvas',500,'img/Pieces as JPEGS/18-min.jpg','#7a65ff','#dfd42b','2020-12-02 00:21:43','2020-12-08 05:21:18'),(8,'Spring in November','I conveyed what I felt at the moment I created this painting with a palette knife using warm and sunny colors. I met someone who made me feel like it was spring in November. The fact that I felt caution because this romance felt too good to be real has been conveyed in the dark colors I have used in the surroundings.','2016 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/1-min.jpg','#202020','#dfbc52','2020-12-02 00:24:16','2020-12-08 21:40:04'),(9,'The Phantom','Some things about a dark past you can never get over or forget. The floating dark colors convey my feelings of the emptiness I felt inside. Adding the yellow paint explains my hope and the bright memories I have of the beginning of this romance.','2017 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/2-min.jpg','#b429df','#bfa147','2020-12-02 01:18:34','2020-12-08 21:43:37'),(10,'Kerfuffle','My personal life has inspired me to create this one. It was a rollercoaster of emotions that I was going through at the time. The most intense highs and lows I came across have been conveyed through this piece of art, confusion, love, disappointments. I used teal to create a balance and as a remembrance of our good times together.','2017 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/10-min.jpg','#4823bf','#7b18df','2020-12-02 01:19:53','2020-12-08 21:46:42'),(11,'Imagine','I created this painting while thinking about how beautiful the feelings of love seem at first. And once, when it is all over, how absurd it feels to have misread that emotion of love. So this painting became the conclusion of the Breakup Collection and revealed a new beginning that was once only imagined.','2018 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/15-min.jpg','#ce2fff','#5275df','2020-12-02 01:21:04','2020-12-08 21:49:11'),(12,'Garden Escape','This painting represents over-sized sunflowers that are slowly progressing along with the wind. There has been much attention to detail in the multicolored flower garden.','2020 | 36\" x 36\" | Acrylic and latex on Canvas',500,'img/Pieces as JPEGS/16-min.jpg','#ff7100','#206bff','2020-12-02 01:22:56','2020-12-08 21:36:02'),(13,'Crazy Blooms','The crazy blooms created in this painting reflect the outdoor attraction for me in lockdown in New York City. These large blooms with different petals are a remembrance of how spring and summer are like in NYC.','2020 | 36\" x 36\" | Mixed Media/Acrylic and pastel on canvas',500,'img/Pieces as JPEGS/14-min.jpg','#fff231','#a954ff','2020-12-02 01:24:16','2020-12-08 21:37:00'),(14,'It’s Unfinished','A multicolored and highly detailed flower garden, with the sun hovering over it in red, the background blue representing the sky, is an unfinished work. It still has so much to tell that it seems perfect to me as it is.','2020 | 36” x 36” | Acrylic on canvas',500,'img/Pieces as JPEGS/17-min.jpg','#ff1b1b','#5e86ff','2020-12-02 01:26:01','2020-12-08 21:33:46'),(15,'After the Rain','I used mixed colors to represent neutrality using the brush strokes in a way as to imply to keep moving forward, no matter what. This inspiration came from the spring of 2020 in this busy city of NY.','2020 | 30” x 30” | Acrylic on canvas',500,'img/Pieces as JPEGS/8-min.jpg','#31ff3e','#a954ff','2020-12-02 01:27:25','2020-12-08 21:34:53'),(16,'Spring Forward','This painting is inspired by longer and lighter days in NYC. Yellow, pale blue, tangerine and pinks are reminders of spring. There is an abundance of movement leaving dark times or a long winter. The artist seems to be moving forward with varying plans that overlap in 2020.','2020 | 36\" x 48\" | Acrylic and pastel on canvas',500,'img/Pieces as JPEGS/20-min.jpg','#404040','#2b36df','2020-12-02 01:34:59','2020-12-08 21:30:24'),(17,'Spark','This painting seems to have the colors and characteristics of what energy would look like if you could see it.','2019 | 36” x 36” | Acrylic on canvas',500,'img/Pieces as JPEGS/12-min.jpg','#dfbc52','#df9e1c','2020-12-02 01:36:41','2020-12-08 21:31:03'),(18,'Hodgepodge in Space Blue Counterpart','This painting represents how unorganized my life was at the time. I was trying to merge my living space with my new husband\'s. There was a lot to be done that is portrayed through the scribble in this painting.','2018 | 18\" x 24\" | Latex on canvas',500,'img/Pieces as JPEGS/6-min.jpg','#404040','#606060','2020-12-02 01:38:04','2020-12-08 21:27:24'),(19,'The Mudslide','Thick latex earth-colored paints, such as deep blues and colors, black, and emeralds, were combined in large masses. The shiny and slippery-looking paint melds and resembles a mudslide.\r\nThis drip painting featured high-gloss latex from the Scribble Collection and was created during the 2018 California mudslides. Caused by the wildfires in 2017, followed by heavy rains and flooding in 2018. Fortunately, Laurie\'s relatives residing in Southern California were not affected by this natural disaster. This piece was inspired by the happenings of that time.','2018 | 24\" x 18\" | Latex on canvas',500,'img/Pieces as JPEGS/11-min.jpg','#202020','#404040','2020-12-02 01:52:41','2020-12-08 21:16:56'),(20,'Skribble, Scrabble & Wine','The vivid colors in this painting tell the story of her favorite pastimes. Creating art, playing scrabble, and drinking wine. In her world, inspiration comes from everywhere. You can be inspired by silly things sometimes – not everything needs to be logical.','2018 | 24\" x 18\" | Latex on canvas',500,'img/Pieces as JPEGS/9-min.jpg','#ffd75e','#ff1b1b','2020-12-02 01:58:17','2020-12-08 21:15:25'),(21,'Mishmash on the Beach - Yellow Counterpart','I come up with this when I let myself lose to have fun with what I love the most. I like being creative, and I used drip painting with intertwining lines of complementing and contrasting colors. The water and sand tones visualized in this painting convey a scene on the beach where I feel free.','2018 | 18\" x 24\" | Latex on canvas',500,'img/Pieces as JPEGS/7-min.jpg','#dfd42b','#dfd42b','2020-12-08 21:25:27','2020-12-08 21:25:27');
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
INSERT INTO `sessions` VALUES ('bGrPaI9qQ0RHa5pqMJDl0x31EdX8XoE0E8w9b4So',NULL,'192.168.10.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGtPc05RQmt5WlFqSFI3eVh4eXc0UzNSZ1FaNlNHVzF6Q0psUWs0VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9sYXVyaWVsYWZyYXRlLnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1607460745),('jjQNSrWmi9ZiyUHqGdqGFlsemhr9SfRe2xVhR8yn',1,'192.168.10.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36','YTo3OntzOjY6Il90b2tlbiI7czo0MDoiODFhZEpweEV2VUJKT0xjUlJoUU1VejJpd3dPNjRvSjIxM0VPbTQwdiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vbGF1cmllbGFmcmF0ZS50ZXN0L2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRnekU1MUFGZGE4ZzdIVUhDWkhKYWh1WFNXSkVyUndDZlk3S1lNa21QUXhCaU9ZUGhTM3pqYSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkZ3pFNTFBRmRhOGc3SFVIQ1pISmFodVhTV0pFclJ3Q2ZZN0tZTWttUFF4QmlPWVBoUzN6amEiO30=',1607465529),('ODJhhlPVtIO1lapnEWRphKdKfIUU9XDNyqLGNH9b',NULL,'192.168.10.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36','YToyOntzOjY6Il90b2tlbiI7czo0MDoiNGxzSVZBcU9qOVdVTVVSY1U3STdQV0VjbFVKRnhwSkdKcHY0WXRlNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1607460742);
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

-- Dump completed on 2020-12-08 22:14:42
