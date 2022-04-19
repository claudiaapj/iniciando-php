<?php
   include './lib/bancoDados.php';
    $alunos = listaAlunos();

    $nome= htmlspecialchars($_POST['nome']) ;
    $idade= (int) $_POST['idade'];
    $sexo= $_POST['sexo'];

  
    $pessoa = array('nome' => ($_POST['nome']), 'idade' => ($_POST['idade']), 'sexo' => ($_POST['sexo']));
    array_push($alunos, $pessoa);


?>

<!DOCTYPE html>''
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Cadastro Alunos</title>
</head>
<body>
    <header>
    <h1>Lista de Alunos</h1>
    <div class="image">
        <img src="./assets/img/logo.png" alt="">
        
    </div>
    <div class="nav">
        <a href="/index.php">HOME</a>
        <a href="/listaAlunos.php">ALUNOS</a>
        <a href="/cadastro.php">CADASTRO</a>
    </div>
    </header>
    <main class="list">
        
        <?php
        echo '<table>';
        echo '<tr>';
        echo '<th> Nome ' . '</th>';
        echo '<th> Idade '. '</th>';
        echo '<th> Sexo ' . '</th>';
        echo '</tr>';
        for($i=0; $i< count($alunos); $i++){
            echo '<tr>';
            echo '<td>' . $alunos[$i] ['nome'] . '</td>';
            echo '<td>' . $alunos[$i] ['idade'] . '</td>';
            $sSexo = $alunos[$i] ['sexo'];
            $sexo = '';

            if($sSexo == 'f'){
                $sexo = 'Feminino';
            } else if ($sSexo == 'm'){
                $sexo = 'Masculino';  
            }
            echo '<td>' . $sexo. '</td>';
            echo '</tr>';
            
        } 
       
        echo '</table>';


       ?>
    </main>  
    <footer>

    </footer>
</body>
</html>