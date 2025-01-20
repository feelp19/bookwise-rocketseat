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
    <!--    <h1 class="font-bold text-lg mt-6">Explorar</h1>-->
    <form class="flex space-x-2 w-full mt-6">
        <input class="bg-stone-800 border-stone-800 text-sm border-2 rounded-md text-white focus:outline-none px-2 py-1"
               type="text" placeholder="Pesquisar ..."/>
        <button type="submit">🔎</button>
    </form>

    <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="bg-stone-900 p-2 rounded border-stone-800 border-2">
            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div>
                    <a class="font-semibold hover:underline" href="/livro.php?">titulo</a>
                    <div class="text-xs italic">autor</div>
                    <div class="text-xs italic">⭐⭐⭐</div>
                </div>
            </div>
            <div class="text-sm">
                descricao
            </div>
        </div>
    </section>
</main>
</body>
</html>
