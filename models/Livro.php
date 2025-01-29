<?php

// Representacao da model de 1 registro do banco de dados
class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $qtd_paginas;
    public $imagem;

    public static function make($item) //static e criada sem a necessidade de ser criado um objeto
    {
        $livro = new self();
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->descricao = $item['descricao'];
        $livro->qtd_paginas = $item['qtd_paginas'];
        $livro->imagem = $item['path_imagem'];
        return $livro;
    }
}