<?php

class DB
{
    public function livros(): array
    {
        $db = new PDO('sqlite:database.sqlite');
        $query = $db->query('SELECT * FROM livros');
        $items = $query->fetchAll();
        $retorno = [];

        foreach ($items as $item => $value) {
            $livro = new Livro;

            $retorno[] = $livro;
        }
        return $retorno;
    }

}
