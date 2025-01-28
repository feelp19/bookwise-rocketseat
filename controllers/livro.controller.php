<?php

$id = $_REQUEST['id']; //pega o request que esta sendo informado na view livro, ao clicar
$db = new DB;
$livro = $db->livros($id[0]);

view('livro', compact('livro'));
