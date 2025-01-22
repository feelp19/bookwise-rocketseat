<?php

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value; //cria variaveis dinamicamente com base no valor do loop
    }
    require "views/template/app.php";
}

function dd(...$dado)
{
    echo "<pre>";
    var_dump($dado);
    echo "</pre>";
    die();

}

function abort($status_code): void
{
    http_response_code($status_code);
    view($status_code);
    die();
}