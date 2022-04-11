<?php
//$alunos=['Bianca', 'Cláudia', 'Luiza', 'Marcos', 'Michele', 'Pedro', 'Sávio'];

//pesquisar como se cria objetos no php usando array
//fazer vetor alunos como um objeto, no qual vamos colocar nome, idade, sexo nesse objeto
// e criar um vetor de objeto aluno;
    class pessoas
    {
        public $nome;
        public $idade;
        public $sexo;
    }
    $alunos = array();

    $alunos[0] = new pessoas();
    $alunos[0]-> nome = 'Cláudia';
    $alunos[0]-> idade= '37';
    $alunos[0] -> sexo = 'f';





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
var_dump(listar_alunos())

?>