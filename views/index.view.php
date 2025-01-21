<form class="flex space-x-2 w-full mt-6">
    <input class="bg-stone-800 border-stone-800 text-sm border-2 rounded-md text-white focus:outline-none px-2 py-1"
           type="text" placeholder="Pesquisar ..."/>
    <button type="submit">🔎</button>
</form>

<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php foreach ($livros as $livro) : ?>
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
    <?php endforeach; ?>
</section>

