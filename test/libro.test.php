<?php

require '/../clases/Libro.php';

$libro = new Libro("Harry Potter");
$libro->setAutor("J. K. Rowling");
$libro->setIsbn("9788498384376");
$libro->setPaginas(255);

$mysqli = new mysqli("127.0.0.1", "root", "m$1234", "mediateca");

$sql = "INSERT INTO libros (titulo, autor, paginas, isbn) " . 
"VALUES (\"{$libro->getTitulo()}\", \"{$libro->getAutor()}\", '{$libro->getPaginas()}', '{$libro->getIsbn()}');";

echo $sql . "\n";

$mysqli->query($sql);

echo $mysqli->host_info . "\n";