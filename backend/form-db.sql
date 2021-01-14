-- On crée une base de donnée 'formulaire' mais si elle existedéjà d'abord on la supprime.

DROP DATABASE IF EXISTS contact; 
CREATE DATABASE contact; 
USE contact; 

-- On crée la table 'utilisateurs' dans notre notre database 'formulaire'
CREATE TABLE IF NOT EXISTS `utilisateurs`(
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL ,
  `nom` VARCHAR(50) NOT NULL,
  `tel` VARCHAR(15) NULL,
  `email` VARCHAR(50) UNIQUE NOT NULL,
  `message` text  NOT NULL
) ENGINE=InnoDB; 


INSERT INTO utilisateurs(nom, tel, email, message) VALUES ('Bibbo', NULL, "bibbo@bobbi.com", "fkjldsmqlkdjflsjfmlddsklkdljklslkdkldllkdd");  
INSERT INTO utilisateurs(nom, tel, email, message) VALUES ('Batman', NULL, "bat@man.com", "dsfcsdfskdn!slldkjlskjlkjjkjlljljljlkjsxwwwwwwsqs");  
INSERT INTO utilisateurs(nom, email, message) VALUES ('Robin', "robin@man.com", "lkmdkfjlmmflkdsmqdkjflsmkssjdkjhkcvxcxxdfxcxcxvvxvx"); 
INSERT INTO utilisateurs(nom, email, message) VALUES ('Superman', "super@man.com", "dsklqkhjqldjlqkjqkjsdlfmfkjslfjslfkslkflsf");  
INSERT INTO utilisateurs(nom, email, message) VALUES ('Spiderman', "spider@man.com", "1mlsqkdjsremlsqkdjmlksqjdlmqkjdmlqkjdlmqkdjmqkjd");  


