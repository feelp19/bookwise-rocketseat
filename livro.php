<?php

require 'dados.php';

$id = $_REQUEST['id'];
$livroFiltrado = array_filter($livros, fn($l) => $l['id'] == $id);

$livro = array_pop($livroFiltrado);


echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookWise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-950 text-stone-200">
<header class="bg-stone-900">
    <nav class="mx-auto max-w-screen-lg flex items-center justify-between py-4">
        <div class="font-bold text-xl tracking-wide">Book Wise</div>
        <ul class="flex items-center justify-between gap-x-2 font-bold">
            <li><a href="/" class="hover:underline text-lime-500">Explorar</a></li>
            <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
        </ul>

        <ul>
            <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
        </ul>
    </nav>
</header>

<main class="mx-auto max-w-screen-lg space-y-6">
    <?=$livro['titulo']?>
    <div class="bg-stone-900 p-2 rounded border-stone-800 border-2">
        <div class="flex">
            <div class="w-1/3">imagem</div>
            <div class="space-y-1">
                <a class="font-semibold hover:underline"
                   href="/livro.php?id=<?= $livro['id'] ?>"><?= $livro['titulo'] ?></a>
                <div class="text-xs italic"><?= $livro['autor'] ?></div>
                <div class="text-xs italic">⭐⭐⭐</div>
            </div>
        </div>
        <div class="text-sm mt-2">
            <?= $livro['descricao'] ?>
        </div>
    </div>
</main>
</body>
</html>
