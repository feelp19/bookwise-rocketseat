<?= $livro['titulo'] ?>
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