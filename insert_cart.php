  <?php session_start(); ?> 
  
<?php
//conexao com o phpmyadmin e post com dados do form.
$conexao = mysqli_connect("localhost", "root", "", "RedeBD") or print(mysqli_error());
$iduser = $_SESSION['id'];
$nomej = $_POST['nomej'];
$sistema = $_POST['sistema'];
$tela = $_FILES['tela'];
$ano  = $_POST['ano'];
$nomeFinal = 'imagens/' . time() . '.jpg';
//salvar telas dos jogos usando o time(), adicionando .jpg no final.
if (move_uploaded_file($tela['tmp_name'], $nomeFinal)) {
  //inserir dados dos jogos na table, e mensagens caso registre ou não.
  $query = "INSERT INTO jogos (iduser,nomej,sistema,tela,ano) VALUES ('$iduser','$nomej','$sistema','$nomeFinal','$ano')";
  if (mysqli_query($conexao, $query)) {
    header("Location: home.php?msg=OK1");
  } else {
    header("Location: home.php?msg=ERRO1");
  }
}
?>