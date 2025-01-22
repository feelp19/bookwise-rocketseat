<?php
require 'dados.php';

$id = $_REQUEST['id']; //pega o request que esta sendo informado na view livro, ao clicar
$livroFiltrado = array_filter($livros, fn($l) => $l['id'] == $id); //filtra os valores do array(dados) onde a condicao, seja que o id seja igual ao que pegamos da request

$livro = array_pop($livroFiltrado); //pega o primeiro valor do array, referente a condicao atendida

$view = 'livro';
require "views/template/app.php";