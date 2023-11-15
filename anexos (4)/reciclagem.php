
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclagem</title>

</head>

<body>

	<style>
    
	
		body {
			background: black;
		}

		section {
			background-color: #221f42;
			color: white;
			border-radius: 1em;
			padding: 1em;
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
		}

  </style>


<section>
    <div class="main">  	

			<fieldset>

				<div class="registro">
					<form action="registra.php" method="post">
						<label for="chk" aria-hidden="true">Registrar nova pessoa</label><br>
						<br>
						<input type="text" name="cpf" id="cpf" placeholder="CPF" required="" pattern="[0-9]+" minlength="11" maxlength="11">
						<br><br>
						<input type="text" name="nome" id="nome" placeholder="NOME" required="" maxlength="60">
						<br><br>
						<button type="submit" name="enviarDados" id="submit" class="submit">Cadastrar</button>
        				
					</form>
				</div>
				
			</fieldset>

			<br>

			<fieldset>

				<div class="Login" >
					<form action="login.php" method="post">
						<label for="chk" aria-hidden="true">Entrar</label> <br>
						<br>
						<input type="text" name="login" placeholder="CPF " required="" pattern="[0-9]+" minlength="11" maxlength="11">
						<br><br>
						
						<input type="submit" value="Entrar" id="submit" class="submit"/>
					</form>
				</div>

			</fieldset>	
	</div>
</section>
</body>
</html>