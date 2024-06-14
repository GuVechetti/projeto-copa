<!DOCTYPE html>
<html>
<head
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercicio1</title>
</head>
<body>
	<form method="post" action="">
	<label>Digite um número:</label>
	<input type="number" name="cont">
	<input type="submit" name="Enviar">
</form>
<?php

  $num = $_POST['cont'];


		$cont = 0;				
		while ($cont <=$num)
		{
			echo "$cont <br>";
			$cont++;
		}

	

?>

</body>
</html>