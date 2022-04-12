<?php

    $alunos = [];
    $pessoa = array('nome' => 'Bianca', 'idade' => 18, 'sexo' => 'f' );
    array_push($alunos, $pessoa);

    $pessoa = array('nome' => 'Cláudia', 'idade' => 37, 'sexo' => 'f' );
    array_push($alunos, $pessoa);

    $pessoa = array('nome' => 'Luiza', 'idade' => 19, 'sexo' => 'f' );
    array_push($alunos, $pessoa);

    $pessoa = array('nome' => 'Marcos', 'idade' => 18, 'sexo' => 'm' );
    array_push($alunos, $pessoa);

    $pessoa = array('nome' => 'Michele', 'idade' => 19, 'sexo' => 'f' );
    array_push($alunos, $pessoa);

    $pessoa = array('nome' => 'Pedro', 'idade' => 20, 'sexo' => 'm' );
    array_push($alunos, $pessoa);

    $pessoa = array('nome' => 'Sávio', 'idade' => 18, 'sexo' => 'm' );
    array_push($alunos, $pessoa);

    //print_r($alunos);





function listaAlunos(){
    return $GLOBALS['alunos'];
}

function conectar(){
    $server='127.0.0.1';
    $username='root';
    $password='';
    $dataBase='cursoprogramadorweb';

    $link = mysqli_connect($server, $username, $password, $dataBase);

        if (mysqli_connect_errno()) {
            return['mysqli connection error: ' . mysqli_connect_error()];
        } else{
            return $link;
        }
}
function listar_alunos(){
    $link = conectar();
    $result = mysqli_query($link, "SELECT nome,idade,sexo FROM alunos", MYSQLI_USE_RESULT);
    return $result;

    mysqli_close($link);
}


?>