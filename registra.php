<?php
require_once 'banco.php';


/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/


if (!empty($_POST)) {
    try {
        $sql = "INSERT INTO tb_pessoa (nu_cpf, nm_pessoa) VALUES (:cpf, :nome)";
        $stmt = $pdo->prepare($sql);

        $dados = array(
            ':cpf' => $_POST['cpf'],
            ':nome' => $_POST['nome']
        );

        if ($stmt->execute($dados)) {
            header("Location: reciclagem.php?msgSucesso=Cadastro realizado com sucesso!");
        }
    } catch (PDOException $e) {
        header("Location: reciclagem.php?msgErro=Falha ao cadastrar...");
    }
} else {
    header("Location: reciclagem.php?msgErro=Erro de acesso.");
}
die();


?>
