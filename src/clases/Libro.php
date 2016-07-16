<?php

class Libro
{
    private $titulo;
    private $autor;
    private $paginas;
    private $isbn;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getAutor()
    {
        return $this->autor;
    }

     public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }
}