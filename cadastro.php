<?php 
	include "cabecalho.php";
	$especie = $_POST["especie"];
?>
 
	<form method="POST" action="criaAnimal.php">
		<input type="number" name="peso" placeholder="Peso(Kg)..." /> <br /><br />
		<input type="number" name="altura" placeholder="Altura(M)..." /> <br /><br />
		<label>Data de nascimento: </label>
		<input type="date" id="data_nascimento" name="data_nascimento" /> <br /><br />
		<label> Sexo: </label>
		<input type="radio" id="masc" name="sexo" value="masc" />
		<label for="masc"> masc </label>					
		<input type="radio" id="fem" name="sexo" value="fem" />
		<label for="fem"> fem </label> <br /><br />
		<?php
			if($especie == "c"){
				echo '<input type="number" name="crina" placeholder="Tamanho da crina(cm)..." /> <br /><br />
					<input type="text" name="corPelo" placeholder="Cor do pêlo..." /> <br /><br />';
			}else if($especie == "e"){
				echo ' <input type="number" name="tromba" placeholder="Tamanho da tromba(cm)..." /> <br /><br />';
			} elseif ($especie == 'l') {
				echo '<input type="number" name="juba" placeholder="Tamanho juba(cm)..." /> <br /><br />';
			}else{
				echo '<input type="number" name="chifre" placeholder="Tamanho do chifre(cm)..." <br /><br />';
			}

			echo "<input type='hidden' name='especie' value='$especie' /> ";
		?>
		<input type="submit" name="Enviar" />
	</form>
</body>
</html>