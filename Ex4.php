<?php
	include "cabecalho.php";
?>
	<form method="POST" action="cadastro.php">
		<select name="especie" id="especie">
			<option label="::Selecione a espécie do animal::">
			<option value="l">Leão</option>
			<option value="r">Rinoceronte</option>
			<option value="e" >Elefante</option>
			<option value="c">Cavalo</option>
		</select>
		<br /> <br />
		<input type="submit" name="Enviar">
	</form>

</body>
</html>