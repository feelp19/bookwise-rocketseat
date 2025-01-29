<?php

class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    /*
     * Retrona um array do banco de dados
     * @return array[Livro]
     */
    public function livros(): array
    {
        $query = $this->db->query('SELECT * FROM livros');
        $items = $query->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items); //percorre o array e chama a funcao de callback como um retorno
    }

    public function livro($id)
    {
        $sql = "select * from livros where id = $id";
        $query = $this->db->query($sql);
        $items = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items)[0];
    }
}
