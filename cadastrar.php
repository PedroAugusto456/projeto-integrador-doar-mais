<?php

include("conexao.php");

$usuario = $_POST['Nome'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];

$sql = "INSERT INTO usuario (nome, email, senha)
VALUES ('$usuario', '$email', '$senha')";

mysqli_query($conexao, $sql);

echo "Usuario Cadastrado!";

?>