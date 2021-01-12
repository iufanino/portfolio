-- On crée une base de donnée 'formulaire' mais si elle existedéjà d'abord on la supprime.

DROP DATABASE IF EXISTS contact; 
CREATE DATABASE contact; 
USE contact; 

-- On crée la table 'utilisateurs' dans notre notre database 'formulaire'
CREATE TABLE `utilisateurs` (
  `id` int() NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `tel` varchar(15) NULL
  `email` varchar(50) NOT NULL,
  `message` text DEFAULT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB; 


INSERT INTO utilisateurs(nom, tel, email, message) VALUES ('Bibbo', NULL "bibbo@bobbi.com", "fkjldsmqlkdjflsjfmlddsklkdljklslkdkldllkdd");  
INSERT INTO utilisateurs(nom, tel, email, message) VALUES ('Batman', NULL "bat@man.com", "dsfcsdfskdn!slldkjlskjlkjjkjlljljljlkjsxwwwwwwsqs");  
INSERT INTO utilisateurs(nom, email, message) VALUES ('Robin', "robin@man.com", "lkmdkfjlmmflkdsmqdkjflsmkssjdkjhkcvxcxxdfxcxcxvvxvx"); 
INSERT INTO utilisateurs(nom, email, message) VALUES ('Superman', "super@man.com", "dsklqkhjqldjlqkjqkjsdlfmfkjslfjslfkslkflsf");  
INSERT INTO utilisateurs(nom, email, message) VALUES ('Spiderman', "spider@man.com", "1mlsqkdjsremlsqkdjmlksqjdlmqkjdmlqkjdlmqkdjmqkjd");  


