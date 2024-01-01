<?php
session_start();

$user = $_POST['user'];
$senha  = $_POST['senha'];
$conexao = mysqli_connect("localhost","root","","RedeBD") or print (mysqli_error());
//select o usuario da table conforme o usuario informado na index.php
$query = "SELECT * FROM usuarios WHERE user='$user'";

if ($result=mysqli_query($conexao, $query)) {

  $linha = mysqli_fetch_array($result);
  if(!empty($linha)){
    $hashed_password = $linha['senha'];
    $admcheck = 'adm';
    //checar se o usuario fazendo login é o adm, caso sim, vai para home1, destinada ao adm
    if (password_verify($senha, $hashed_password) && $user == $admcheck) {
      $_SESSION['user'] = $linha['user'];
      $_SESSION['email'] = $linha['email'];
      header("Location: home1.php");
    } else {
    if(password_verify($senha, $hashed_password)) {
    //checar se o usuario fazendo login inseriu a senha correta,
    //caso sim, vai para home, destinada aos usuarios gerais
        $_SESSION['user'] = $linha['user'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['id'] = $linha['id'];
        header("Location: home.php");
     }
    else{
    //caso a senha esteja errada ou usuario nao cadastrado, exibe erros armazenados na index.php
    unset($_SESSION['user']);
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    header("Location: index.php?msg=LOGIN_ERROR");
    }
  }
    } else {
    header("Location: index.php?msg=ERROR");
  }
  }
?>