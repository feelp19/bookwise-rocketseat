<?php

$id = $_REQUEST['id']; //pega o request que esta sendo informado na view livro, ao clicar
$livro = (new DB)->livro($id);

view('livro', compact('livro'));
