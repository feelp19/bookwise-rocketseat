<?php

function dd($dado)
{
    echo "<pre>";
    var_dump($dado);
    echo "</pre>";
    die();

}

function view($code){
    require "views/template/app.php";
}
function abort($status_code): void
{
    http_response_code($status_code);
    view($status_code);
    die();
}