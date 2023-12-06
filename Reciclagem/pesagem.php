<?php
require 'banco.php';

session_start();

$cpf = $_SESSION['cpf_registrar'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesagem = filter_var($_POST['pesagem'], FILTER_SANITIZE_NUMBER_FLOAT);
    $valormisto = filter_var($_POST['valormisto'], FILTER_SANITIZE_NUMBER_FLOAT);
    $materiais = $_POST['material'];

    
    if ($pesagem < 0) {
        echo "O peso deve ser um número positivo.";
        header('location:reciclagem2.php');
        exit;
    }

    if (!is_numeric($valormisto)) {
        echo "O valor deve ser um número decimal.";
        header('location:reciclagem2.php');
        exit;
    }

    


    
    $sql = "INSERT INTO tb_pesagem (nu_cpf,nu_peso,vl_preco_total) VALUES (:cpf, :pesagem, :valormisto)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':pesagem', $pesagem);
    $stmt->bindParam(':valormisto', $valormisto);
    
    $stmt->execute();

    print $sql; echo '<br><br>';

    $id_pesagem = $pdo->lastInsertId();


    
    foreach($materiais as $material){
        $sql= "INSERT INTO tb_pesagem_material (id_pesagem,id_material) values ( :id_pesagem , :id_material)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_pesagem', $id_pesagem);
        $stmt->bindParam(':id_material', $material);

        $stmt->execute();

        print $sql; echo '<br><br>';    
    }

    
    var_dump($_POST); echo '<br><br>';

    echo "Os dados foram inseridos com sucesso."; echo '<br><br>';

    echo $_SESSION['cpf_registrar'];
    //header('location:reciclagem2.php');
}


?>