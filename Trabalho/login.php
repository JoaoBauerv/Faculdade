<?php
require_once 'banco.php';

session_start();

$login = $_POST['login'];


$sql = "SELECT * FROM  tb_pessoa WHERE nu_cpf = :login";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':login', $login, PDO::PARAM_STR);

$stmt->execute();


if ($stmt->fetchAll()) {

    $_SESSION['login'] = $login;
    header('location:reciclagem2.php');
} else {
    unset($_SESSION['login']);
    header('location:reciclagem.php');
}


	
 $_SESSION['cpf_registrar'] = $login;
  

?>
