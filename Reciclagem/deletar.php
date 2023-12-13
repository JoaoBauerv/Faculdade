<?php
require_once 'banco.php';
session_start();



if (!empty($_POST)) {
    try {

        $sql = "DELETE  FROM tb_pesagem where id_pesagem = :pesagem and nu_cpf = :cpf";
        $stmt = $pdo->prepare($sql);

        $dados = array(
            ':cpf' => $_SESSION['login'],
            ':pesagem' => $_POST['pesagem']
        );

        if ($stmt->execute($dados)) {
            header('Location: tabela.php?msgSucesso=Deletado com sucesso!');
        }
    } catch (PDOException $e) {
        echo'Location: tabela.php?msgErro=Falha ao cadastrar...';
    }
} else {
    echo'Location: tabela.php?msgErro=Erro de acesso';
}
die();



?>