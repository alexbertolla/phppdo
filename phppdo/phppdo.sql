
DROP TABLE IF EXISTS `alunos`;
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `alunos` VALUES (1,'alex',10),(2,'sabrina',9),(3,'paulo',8),(4,'João',9),(5,'Maria',10),(6,'Suzana',5),(7,'Matheus',3),(8,'André',6),(9,'Maria',6),(10,'Joana',5),(11,'Daniel',5),(12,'Adriana',6),(13,'Adriano',8),(14,'Carlos',7),(15,'Carla',8),(16,'Tomaz',6),(17,'Samara',5),(18,'Andreia',9),(19,'Marcelo',8),(20,'Marcela',7);