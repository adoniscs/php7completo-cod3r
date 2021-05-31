<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Curso de PHP 7 - Exercícios</title>
</head>
<body class="exercicio">

    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Vizualização dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="rodape">
        developed with &hearts; by Adonis Cipriano - <?= date('Y'); ?>
    </footer>
    
</body>
</html>