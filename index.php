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
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Escola Web</title>
</head>
<body >
    <header>
        <h1>ESCOLA WEB</h1>
    <div class="image">
        <img src="./assets/img/logo.png" alt="">
        
    </div>
    <div class="nav">
        <a href="/index.php">HOME</a>
        <a href="/listaAlunos.php">ALUNOS</a>
        <a href="/cadastro.php">CADASTRO</a>
    </div>
    </header>
    <main class="inicio">
        <section class="abert">
            <h2>Olá</h2>
        
            <?php
            echo '<h2>'. $aluno.'</h2>'
            ?>
        </section>
        
    </main>  
    <footer>
        <p>
            Atividade proposta no curso Programador Web
        </p>
        <p>Cláudia Aguilar</p>
    </footer>   
</body>
</html>