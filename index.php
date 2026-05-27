<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-gray-200">
    <div>
        <!-- Cabeçalho -->
        <!-- mx = margem // max = limite maximo da margem // px margem no eixo x // py margem no eixo y-->
        <?php include 'componentes/header.php'; ?>

        <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
            <!-- Hero -->
            <?php include 'componentes/hero.php'; ?>

            <!-- Lista de Projetos -->

            <section class="space-y-3 py-6">

                <!-- Projeto -->
                <h2 class="text-2xl font-bold">Meus Projetos</h2>

                <!-- div dos projetos -->
                <?php include 'componentes/projetos.php'; ?>

            </section>

        </main>

        <!-- Rodape -->
        <footer class="max-w-screen-lg min-h-20 mx-auto">
            <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">@ Copyright <?= date('Y') ?>. Construido por
                Leandro</div>
            <!-- data -->
            <div></div>
            <!-- outros links -->
            <div></div>
        </footer>
    </div>
</body>

</html>