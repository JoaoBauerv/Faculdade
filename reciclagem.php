






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclagem</title>
</head>





<body>

    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			
			<fieldset>







				<div class="registro">
					<form action="registra.php" method="post">
						<label for="chk" aria-hidden="true">Registrar nova pessoa</label>
						<br>
						<input type="text" name="cpf" id="cpf" placeholder="Cpf" required="" pattern="[0-9]+" minlength="11" maxlength="11">
						<br><br>
						<input type="text" name="nome" id="nome" placeholder="Nome" required="" maxlength="60">
						<br><br>
						<button type="submit" name="enviarDados">Cadastrar</button>
        				
						<br><br>
					</form>
				</div>
			</fieldset>

			<br>

			<fieldset>











				<div class="Login" >
					<form action="" method="">
						<label for="chk" aria-hidden="true">Entrar</label>
						<br>
						<input type="text" name="entrar" placeholder="Cpf ou Cnpj" required="" pattern="[0-9]+" minlength="11" maxlength="14">
						<br><br>
						
						<button>Entrar</button>
					</form>
				</div>
			</fieldset>	
	</div>

</body>
</html>