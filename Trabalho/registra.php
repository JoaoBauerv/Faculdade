<?php
require_once 'banco.php';


/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

if (isset($_POST['enviarDados'])) {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];

    
    if (!preg_match('/^[0-9]{11}$/', $cpf)) {
        echo "Cpf invalido!";;
        exit;
    }

    
    if (strlen($nome) < 3 || strlen($nome) > 60) {
        echo "Nome excede o limite de tamanho!)";
        exit;
    }
}



if (!empty($_POST)) {
    try {
        $sql = "INSERT INTO tb_pessoa (nu_cpf, nm_pessoa) VALUES (:cpf, :nome)";
        $stmt = $pdo->prepare($sql);

        $dados = array(
            ':cpf' => $_POST['cpf'],
            ':nome' => $_POST['nome']
        );

        if ($stmt->execute($dados)) {
            header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
        }
    } catch (PDOException $e) {
        header("Location: index.php?msgErro=Falha ao cadastrar...");
    }
} else {
    header("Location: index.php?msgErro=Erro de acesso.");
}
die();


?>
