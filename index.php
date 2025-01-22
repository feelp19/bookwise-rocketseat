<?php
$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) { // verifica se vai retornar algo, se retornar, substitui o / por '' e atribui o path a variavel controller, responsavel por direcionar ao controller
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

require "controllers/{$controller}.controller.php";
