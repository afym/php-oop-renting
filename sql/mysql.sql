CREATE TABLE libros (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	titulo VARCHAR(50) NOT NULL,
	autor VARCHAR(50) NOT NULL,
	paginas CHAR(5),
	isbn CHAR(13)
);

INSERT INTO libros (titulo, autor, paginas, isbn)
VALUES ("Pinocho", "Nose", '500', '1234567890123');

SELECT * FROM libros;


