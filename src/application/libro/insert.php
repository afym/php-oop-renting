<?php

require_once '/../../infraestructure/DataBase.php';
require_once '/../../clases/Libro.php';

$configuration = include '/../../configuration/database.php';
$database = new DataBase($configuration);

$tabla = 'libros';

$campos = array(
    'titulo',
    'autor',
    'paginass',
    'isbn',
);

$libro = new Libro(addslashes($_POST['input_titulo']));
$libro->setAutor(addslashes($_POST['input_autor']));
$libro->setPaginas(addslashes($_POST['input_paginas']));
$libro->setIsbn(addslashes($_POST['input_isbn']));

$valores = array(
    "\"{$libro->getTitulo()}\"",
    "\"{$libro->getAutor()}\"",
    "'{$libro->getPaginas()}'",
    "'{$libro->getIsbn()}'",
);

$insert = $database->insert($tabla, $campos, $valores);
$flag = 'success';

if (!$insert) {
    $flag = 'danger';
}

header("Location: /oop/src/view/libro/insert.php?flag={$flag}");