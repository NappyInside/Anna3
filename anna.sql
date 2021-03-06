CREATE TABLE options (
	id_option INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL
) ENGINE = InnoDB;


CREATE TABLE apprentices (
	id_apprentice INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_option INT UNSIGNED NOT NULL,
	first_name VARCHAR(255) NOT NULL,
	last_name VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	CONSTRAINT `fk_apprentices_options`
		FOREIGN KEY (id_option) REFERENCES options (id_option)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
) ENGINE = InnoDB;

CREATE TABLE tests (
	id_test INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE formers (
	id_former INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	rank ENUM('formateur', 'responsable') NOT NULL,
	name VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE marks (
	id_apprentice INT UNSIGNED NOT NULL,
	id_former INT UNSIGNED NOT NULL,
	id_test INT UNSIGNED NOT NULL,
	published BOOLEAN NOT NULL,
	mark DOUBLE NOT NULL,
	comment TEXT NOT NULL,
	CONSTRAINT `fk_marks_apprentices`
		FOREIGN KEY (id_apprentice) REFERENCES apprentices (id_apprentice)
		ON DELETE CASCADE
		ON UPDATE RESTRICT,
	CONSTRAINT `fk_marks_formers`
		FOREIGN KEY (id_former) REFERENCES formers (id_former)
		ON DELETE CASCADE
		ON UPDATE RESTRICT,
	CONSTRAINT `fk_marks_tests`
		FOREIGN KEY (id_test) REFERENCES tests (id_test)
		ON DELETE NO ACTION
		ON UPDATE RESTRICT
) ENGINE = InnoDB;


