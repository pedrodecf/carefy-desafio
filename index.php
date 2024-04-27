<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/controllers/AniversariosController.php';
require_once __DIR__ . '/utils/formatarData.php';
require_once __DIR__ . '/utils/calcularIdade.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Lista de aniversário colaboradores carefy</title>
</head>

<body>
    <main>
        <article class="container">
            <header>
                <h2>Aniversários 🎂</h2>
                <span>Data do aniversário e idade atual</span>
            </header>
            <?php foreach ($employees as $employee) : ?>
                <?php if ($employee['data_de_saida'] === null) : ?>
                    <section class="aniversariante-container">
                        <section class="aniversariante-info">
                            <p><?php echo htmlspecialchars($employee['nome']); ?></p>
                            <span><?php echo formatarData($employee['data_de_nascimento']); ?></span>
                        </section>
                        <span class="data-de-nascimento"><?php echo calcularIdade($employee['data_de_nascimento']); ?> anos</span>
                    </section>
                <?php endif; ?>
            <?php endforeach; ?>
        </article>

        <article class="container">
            <header>
                <h2>Aniversariante(s) do dia 💼</h2>
                <span>Aniversariantes celebrando mais um ano de <b>empresa!</b></span>
            </header>
            <p class="sem-aniversariante">Ninguém fazendo aniversário hoje! ❌🥳</p>
            </div>
        </article>
    </main>
</body>

</html>