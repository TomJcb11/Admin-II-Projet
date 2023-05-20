USE woodytoys_db;

CREATE TABLE `articles` (
  `nom` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prix` int DEFAULT NULL
);


INSERT INTO `woodytoys_db`.`articles`
(`nom`,
`prix`)
VALUES
("table", 40),("chaise", 20),("cheval a bascule",150),("table de chevet",25),("armoire",45),("lit",100),("bureau",125);

GRANT ALL PRIVILEGES ON woodytoys_db.* TO 'admin';
