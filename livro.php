<?php

require 'dados.php';

$id = $_REQUEST['id'];
$livroFiltrado = array_filter($livros, fn($l) => $l['id'] == $id);

$livro = array_pop($livroFiltrado);

$view = "livro";
require "views/template/app.php";

//echo "<pre>";
//var_dump($_SERVER);
//echo "</pre>";
?>

