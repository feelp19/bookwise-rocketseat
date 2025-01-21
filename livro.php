<?php

require 'dados.php';

$id = $_REQUEST['id'];
$livroFiltrado = array_filter($livros, fn($l) => $l['id'] == $id);

$livro = array_pop($livroFiltrado);

$view = "livro";
require "views/template/app.php";


?>

//controller, pois esta manipulando os valores para a view exibir
//pelo array_filter e pelo array_filtrado