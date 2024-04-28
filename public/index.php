<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../controllers/AniversariosController.php';
require_once __DIR__ . '/../utils/formatarData.php';
require_once __DIR__ . '/../utils/formatarDataComAno.php';
require_once __DIR__ . '/../utils/calcularAnos.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Lista de aniversário colaboradores carefy</title>
</head>

<body>
    <main>
        <article class="container">
            <header>
                <h2>Aniversários 🎂</h2>
                <span>Data do aniversário e idade atual</span>
                <div class="botoes">
                    <button class="ordenar-nome">Ordenar por nome</button>
                    <button class="ordenar-mes">Ordenar por mês</button>
                </div>
            </header>
            <?php foreach ($employees as $employee) : ?>
                <?php if ($employee['data_de_saida'] === null) : ?>
                    <section class="aniversariante-container">
                        <section class="aniversariante-info">
                            <p><?php echo htmlspecialchars($employee['nome']); ?></p>
                            <span><?php echo formatarData($employee['data_de_nascimento']); ?></span>
                        </section>
                        <span class="data-de-nascimento"><?php echo calcularAnos($employee['data_de_nascimento']); ?></span>
                    </section>
                <?php endif; ?>
            <?php endforeach; ?>
        </article>

        <article class="container">
            <header>
                <h2>Aniversários de Trabalho 💼</h2>
                <span>Data que começou na carefy e anos de trabalho</span>
                <div class="botoes">
                    <button class="ordenar-nome">Ordenar por nome</button>
                    <button class="ordenar-mes">Ordenar por mês</button>
                </div>
            </header>
            <?php foreach ($employees as $employee) : ?>
                <?php if ($employee['data_de_saida'] === null) : ?>
                    <section class="aniversariante-container">
                        <section class="aniversariante-info">
                            <p><?php echo htmlspecialchars($employee['nome']); ?></p>
                            <span><?php echo formatarDataComAno($employee['data_de_entrada']); ?></span>
                        </section>
                        <span class="data-de-nascimento"><?php echo calcularAnos($employee['data_de_entrada']); ?></span>
                    </section>
                <?php endif; ?>
            <?php endforeach; ?>
        </article>

        <article class="container">
            <header>
                <h2>Aniversariante(s) do dia 🎂</h2>
                <span>Idade atual e data de nascimento</span>
            </header>
            <?php
            $currentDate = date('d/m');
            $aniversarianteEncontrado = false;
            foreach ($employees as $employee) :
                if ($employee['data_de_saida'] === null) :
                $dataNascimento = DateTime::createFromFormat('d/m/Y', $employee['data_de_nascimento']);
                $dataNascimentoFormatada = $dataNascimento->format('d/m');
                if ($dataNascimentoFormatada === $currentDate) :
                    $aniversarianteEncontrado = true;
            ?>
                    <section class="aniversariante-container">
                        <section class="aniversariante-info">
                            <p><?php echo htmlspecialchars($employee['nome']); ?></p>
                            <span>Fazendo <?php echo calcularAnos($employee['data_de_nascimento']); ?></span>
                        </section>
                        <span class="data-de-nascimento"><?php echo htmlspecialchars($employee['data_de_nascimento']); ?></span>
                    </section>
                <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if (!$aniversarianteEncontrado) : ?>
                <p class="sem-aniversariante">Ninguém está fazendo aniversário hoje! ❌🥳</p>
            <?php endif; ?>
        </article>

        <article class="container">
            <header>
                <h2>Aniversariante(s) do dia 💼</h2>
                <span>Anos de trabalho atual e data que começou na carefy</span>
            </header>
            <?php
            $currentDate = date('d/m');
            $aniversarianteEncontrado = false;
            foreach ($employees as $employee) :
                $dataEntrada = DateTime::createFromFormat('d/m/Y', $employee['data_de_entrada']);
                $dataEntradaFormatada = $dataEntrada->format('d/m');
                if ($dataEntradaFormatada === $currentDate) :
                    if ($employee['data_de_saida'] === null) :
                    $aniversarianteEncontrado = true;
            ?>
                    <section class="aniversariante-container">
                        <section class="aniversariante-info">
                            <p><?php echo htmlspecialchars($employee['nome']); ?></p>
                            <span>Completando <?php echo calcularAnos($employee['data_de_entrada']); ?> de carefy</span>
                        </section>
                        <span class="data-de-nascimento"><?php echo htmlspecialchars($employee['data_de_entrada']); ?></span>
                    </section>
                <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if (!$aniversarianteEncontrado) : ?>
                <p class="sem-aniversariante">Ninguém está fazendo aniversário de trabalho hoje! ❌🥳</p>
            <?php endif; ?>
        </article>
    </main>
    <script src="/js/ordernarNome.js"></script>
    <script src="/js/ordernarMes.js"></script>
</body>

</html>