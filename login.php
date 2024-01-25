<?php

//Verificar se ouve alguma tentativa de login

if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
{
//Não está vazio os campos
//Conectar o banco de dados

    include_once('conectar.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

//Verificar a tabela do banco de dados

$sql = "SELECT * FROM cadastro_usuario WHERE login_usuario = '$login' and senha_usuario = '$senha' ";

$verificar = $conexao -> query($sql);

//Verificar se o registro é válido

if(mysqli_num_rows ($verificar)< 1)
{
    header('Location:index.html');
}

else 
{
    header('Location:usuario.php');
}

}


?>