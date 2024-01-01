<?php
//adicionar usuario na tabela de usuarios, usando password_hash para criptografar a senha.
$user = $_POST['user'];
$email = $_POST['email'];
$senha  = password_hash($_POST['senha'],PASSWORD_DEFAULT);
 
$conexao = mysqli_connect("localhost","root","","RedeBD") or print (mysqli_error());

$query = "INSERT INTO usuarios (user,email,senha) VALUES ('$user','$email', '$senha')";
//mensagens para alertar se foi registrado com sucesso ou algum erro.
if (mysqli_query($conexao, $query)) {  
    header("Location: index.php?msg=OK");
} else {
    header("Location: index.php?msg=ERRO");
}
?>