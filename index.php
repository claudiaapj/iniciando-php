<?php
    include './lib/bancoDados.php';
    $alunos= listaAlunos();
    $aluno = $alunos[1]['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="/">HOME</a>
        <a href="/listaAlunos.php">ALUNOS</a>
    </header>
    <main>
        Olá
        <ul>
            <?php
                echo '<li>'. $aluno.'</li>'
            ?>

        </ul>
    </main>  
</body>
</html>