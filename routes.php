<?php

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']); //pega o path do arquivo
if (!$controller) $controller = 'index'; //verifica se existe, se nao existir, atribui ao index

if (!file_exists("controllers/{$controller}.controller.php")) { //verifica se existe o arquivo do controller
    abort(404);
}
require "controllers/{$controller}.controller.php"; //chama o controllador que vai carregar as informacoes
