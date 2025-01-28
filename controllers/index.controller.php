<?php

$livros = (new DB)->livros(); //cria um objeto e ja usa em seguida

view('index', compact('livros'));