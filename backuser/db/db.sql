--
-- Table structure for table `results`
--
CREATE TABLE IF NOT EXIST `results` (
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(100) NOT NULL,
	`class` VARCHAR(20) NOT NULL,
	`marks` INT NOT NULL
);

INSERT INTO `results` (`id`, `name`, `class`, `marks`) VALUES
  (1, 'Fernanda H', 'Grade 6', 8),
  (2, 'Camila T', 'Grade 7', 7);
