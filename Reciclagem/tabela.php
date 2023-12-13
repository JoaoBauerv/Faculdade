<style>
table,
td {
  border: 1px solid #333;
}

thead,
tfoot {
  background-color: #333;
  color: #fff;
}
	
    
	

  




</style>



<div>
<?php
require 'banco.php';

session_start();










$cpf = $_SESSION['cpf_registrar'];

$stmt = $pdo->prepare("SELECT * from tb_pesagem where nu_cpf = '$cpf' order by id_pesagem;");
$stmt->execute();
$rowCount = $stmt->rowCount();

if ($rowCount > 0) {
    echo "<table>";
    echo "<thead>";
    echo "<td>Preço</td>"; echo "<td>Peso</td>"; echo "<td>Id Pesagem</td>"; 
    echo "</thead>";

    echo "<tbody>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["vl_preco_total"] . "</td> ";
        echo "<td>" . $row["nu_peso"] . "</td> ";
        echo "<td>" . $row["id_pesagem"] . "</td>";

        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "0 resultados"; 
    
}





?>
</div>

<br>

<div class="">
<fieldset>

				<div class="" >
					<form action="deletar.php" method="post">
						<label for="chk" aria-hidden="true">Deletar pesagem</label> <br>
						<br>
						<input type="text" name="pesagem" placeholder="id pesagem"  pattern="[0-9]+" >
						<br><br>
						
						<input type="submit" value="Deletar" id="submit" class="submit"/>
            
					</form>
				</div>

</fieldset>	
</div>

<br>

<div class="">
<fieldset>

    <div class="">
        <form action="alterar.php" method="post">
            <label for="chk" aria-hidden="true">Alterar pesagem</label> <br><br>
            <input type="text" name="id_pesagem" placeholder="id pesagem" pattern="[0-9]+" ><br><br>
            <input type="text" name="peso" placeholder="peso" pattern="[0-9]+" ><br><br>
            <input type="text" name="preco" placeholder="preço" pattern="[0-9]+" ><br><br>
            <input type="submit" value="Alterar" id="submit" class="submit"/>
        </form>
    </div>

</fieldset>	
</div>