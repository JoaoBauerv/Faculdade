<?php

// endereco
// nome do BD
// usuario
// senha

$endereco = '200.19.1.18';
$banco = 'joaoverzeletti';
$usuario = 'joaoverzeletti';
$senha = '123456';

try {
  // sgbd:host;port;dbname
  // usuario
  // senha
  // errmode
  $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

  echo "Conectado no banco de dados!!!";

} catch (PDOException $e) {
  echo "Falha ao conectar ao banco de dados. <br/>";
  die($e->getMessage());
}


?>
