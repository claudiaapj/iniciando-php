<?php
   include './lib/bancoDados.php';
   $alunos = listaAlunos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/script.js" defer></script>
    <title>Cadastro Alunos</title>
</head>
<body>
    <header>
    <h1>Cadastro</h1>
    <div class="image">
        <img src="./assets/img/logo.png" alt="">
        
    </div>
    <div class="nav">
        <a href="/index.php">HOME</a>
        <a href="/listaAlunos.php">ALUNOS</a>
        <a href="/cadastro.php">CADASTRO</a>
    </div>
    </header>
    <section class="cadastrar">
    <main class="cadastro" >
        <form action="/listaAlunos.php" method="post">
            <ul>
            <li>Nome: <input class="nome" type="text" name="nome" /></li>
            <li>Idade: <input class="idade" type="" name="idade" /></li>
            <li>
                <label for="">Sexo: </label>
                <select id="box-sexo" name="sexo">
                    <option value="Selecione">Selecione</option>
                    <option value="m">Masculino</option>
                    <option  value="f">Feminino</option>
                </select>
            </li>
            <li><input id= "envio" type="submit" name = "envio" /></li>
            </ul>
        </form>        
        
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