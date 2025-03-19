<?php

/* Este código contém a conexão que o PHP vai fazer com o banco de dados "LAB3_PROJETO" e assim ser possível
realizar as funções CRUD da linguagem SQL à tabela Dicionário. */

$hostname = 'localhost';
$username = 'root';
$password = '1234';
$database = 'lab3_projeto';
$conexão = mysqli_connect($hostname,$username,$password,$database);

/* A variavel $connection é responsável por guardar o resultado da função mysqli_connect(). Se for TRUE uma
mensagem de sucesso deve aparecer. */

if($conexão){
    echo "---------------------\n";
    echo "CONECTADO COM SUCESSO\n";
    echo "---------------------\n";
}
else{
    exit("FALHA AO TENTAR CONECTAR");
}