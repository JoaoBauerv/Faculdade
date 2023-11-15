<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclagem</title>

<?php

require 'banco.php';

 session_start();
if((!isset ($_SESSION['login'])))
{
  header('location:reciclagem.php');
  }

$logado = $_SESSION['login']; 

?> 



</head>

<body>
    
    <P>
    <?php

    
    $login = $pdo->query("SELECT nm_pessoa FROM tb_pessoa WHERE nu_cpf = '$logado'")->fetch();
    
    echo($login['nm_pessoa']);

    if(count($_GET)){
        echo "Vai registrar";
    }

    ?>


    </P>
    
    <br>

    <fieldset>
        <div>
            <form action="reciclagem2.php">
                <label>Peso</label>
                <input type="text" name="pesagem" >
                <br><br>
                <label>Material</label>
                <select name="Material">
                    <option value="1">Pet Branca</option>
                    <option value="2">Pet Verde</option>
                    <option value="3">Pet Colorida</option>
                    <option value="4">Pet Leitoso</option>
                    <option value="5">Pet Mista</option>
                    
                </select>

                <br><br>
                <button>Pesar</button>




            </form>



        </div>



    </fieldset>



</body>
</html>