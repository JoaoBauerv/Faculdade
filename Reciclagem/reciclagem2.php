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
  header('location:index.php');
  }

$logado = $_SESSION['login']; 



$options = [
    [
        'value' => '1',
        'text' => 'Pet',
    ],
    [
        'value' => '2',
        'text' => 'Cobre',
    ],
    [
        'value' => '3',
        'text' => 'Aluminio',
    ],
    [
        'value' => '4',
        'text' => 'Sucata',
    ],
    [
        'value' => '5',
        'text' => 'Placa',
    ],
];


?> 



</head>

<body>
    <style>
		
        body {
			background: black;
		}
		
        section {
            display: flex;
            justify-content: center;
			background-color: #221f42;
			color: white;
			border-radius: 5px;
			padding: 5px;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-right: -50%;
			transform: translate(-50%, -50%);
		}

        .submit {
			display: flex;
			justify-content: center;
			color: white;
			width: 150px;
			text-align: center;
			padding: 10px 15px;
			border: 1px solid #eee;
			border-radius: 1px;
			background-color: #0a0185;
			font-size: 10px;
			margin: 0 auto;
            position: sticky;
            bottom: 1;
		}


    </style>

<section>
        <fieldset>
        <P>
            <?php


            $login = $pdo->query("SELECT nm_pessoa FROM tb_pessoa WHERE nu_cpf = '$logado'")->fetch();

            echo($login['nm_pessoa']);

            if(count($_GET)){
                echo "Vai registrar";
            }

            ?>
        
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
        <a href="tabela.php" >

                <input type="submit" value="Pesagens" id="submit"  class="submit"/>
        
        </a>

        <form action="logout.php" method="post">
            
            <input type="submit" value="Sair" id="submit" class="submit"/>
        
        </form>

        </P>
        </fieldset>
        



    <br>

    <fieldset>
        <div>
            <form action="pesagem.php" method="post">
                
                <label>Peso:</label><br>
                <input type="text" name="pesagem" minlength="1"><br><br>
                
                
                <label for="material">Material:</label><br>
                <?php
                foreach ($options as $option) {
                    echo '<input type="checkbox" name="material[]" value="' . $option['value'] . '">';
                    echo '<label for="' . $option['value'] . '">' . $option['text'] . '</label>';
                    echo '<br>';
                }
                ?> <br> 

                <label>Valor Misto:</label><br>
                <input type="text" name="valormisto" minlength="1"><br><br>
                
                
                <input type="submit" value="Pesar" id="submit" class="submit"/>

            </form>

        </div>

        



        </fieldset>

                

        


    
<section>

</body>
</html>