<?php
require_once 'banco.php';
session_start();







if (!empty($_POST)) {
    try {

        $sql = "UPDATE tb_pesagem SET nu_peso = :peso, vl_preco_total = :preco WHERE id_pesagem = :id_pesagem and nu_cpf = :cpf;";
        $stmt = $pdo->prepare($sql);

        $dados = array(
            ':id_pesagem' => $_POST['id_pesagem'],
            ':preco' => $_POST['preco'],
            ':peso' => $_POST['peso'],
            ':cpf' => $_SESSION['login']
        );

        if ($stmt->execute($dados)) {
            header('Location: tabela.php?msgSucesso=Alteração realizada com sucesso!');
        }
    } catch (PDOException $e) {
        echo'Location: tabela.php?msgErro=Falha ao cadastrar...';
    }
} else {
    echo'Location: tabela.php?msgErro=Erro de acesso';
}
die();



?>