<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todos os anos de Copa do Mundo.</title>
</head>
<body>
<center><h2>Copas do Mundo</h2><center>

<form action="" method="post">
	<select name="Copa">
		<?php
		for ($i=1930; $i <=2022 ; $i+=4) { 
				if ($i!=1942 && $i!=1946) {
					echo "<option value='$i'>$i</option>";
				}
			
		}
?>
	</select>
	<input type="submit" name="btnVerificar" value="Verificar">
</form>

<?php
 $copa = $_POST['Copa'];

echo "<center>"; 

switch ($copa) {
 	case 1930:
 		echo"Sede: Uruguai<br>";
 		echo"Campeão: Uruguai<br><br>";
 		echo" <img src='Imagens/1930.jpg' width='1024'height='682' >";
 		break;
 	case 1934:
 		echo"Sede: Italia<br>";
 		echo"Campeão: Italia<br><br>";
 		echo"<img src='Imagens/1934.jpg' width='1024'height='682'>";
 		break;
 	case 1938:
 		echo"Sede: França<br>";
 		echo"Campeão: Italia<br><br>";
 		echo"<img src='Imagens/1938.jpg' width='1024'height='682'>";
 		break;
 	case 1950:
 		echo"Sede: Brasil<br>";
 		echo"Campeão: Uruguai<br><br>";
 		echo"<img src='Imagens/1950.jpg' width='1024'height='682'>";
 		break;
 	case 1954:
 		echo"Sede: Suiça<br>";
 		echo"Campeão: Alemanha Ocidental<br><br>";
 		echo"<img src='Imagens/1954.jpg' width='1024'height='682'>";
 		break;
 	case 1958:
 		echo"Sede: Suecia<br>";
 		echo"Campeão: Brasil<br><br>";
 		echo"<img src='Imagens/1958.jpg' width='1024'height='682'>";
 		break;
 	case 1962:
 		echo"Sede: Chile<br>";
 		echo"Campeão: Brasil<br><br>";
 		echo"<img src='Imagens/1962.jpg' width='1024'height='682'>";
 		break;
 	case 1966:
 		echo"Sede: Inglaterra<br>";
 		echo"Campeão: Inglaterra<br><br>";
 		echo"<img src='Imagens/1966.jpg' width='1024'height='682'>";
 		break;
 	case 1970:
 		echo"Sede: Mexico<br>";
 		echo"Campeão: Brasil<br><br>";
 		echo"<img src='Imagens/1970.jpg' width='1024'height='682'>";
 		break;
 	case 1974:
 		echo"Sede: Alemanha Ocidental<br>";
 		echo"Campeão: Alemanha Ocidental<br><br>";
 		echo"<img src='Imagens/1974.jpg' width='1024'height='682'>";
 		break;
 	case 1978:
 		echo"Sede: Argentina<br>";
 		echo"Campeão: Argentina<br><br>";
 		echo"<img src='Imagens/1978.jpg' width='1024'height='682'>";
 		break;
 	case 1982:
 		echo"Sede: Espanha<br>";
 		echo"Campeão: Italia<br><br>";
 		echo"<img src='Imagens/1982.jpg' width='1024'height='682'>";
 		break;
 	case 1986:
 		echo"Sede: Mexico<br>";
 		echo"Campeão: Argentina<br><br>";
 		echo"<img src='Imagens/1986.jpg' width='1024'height='682'>";
 		 break;
 	case 1990:
 		echo"Sede: Italia<br>";
 		echo"Campeão: Alemanha<br><br>";
 		echo"<img src='Imagens/1990.jpg' width='1024'height='682'>";
 		break;
 	case 1994:
 		echo"Sede: Estados Unidos<br>";
 		echo"Campeão: Brasil<br><br>";
 		echo"<img src='Imagens/1994.jpg' width='1024'height='682'>";
 		break;
 	case 1998:
 		echo"Sede: França<br>";
 		echo"Campeão: França<br><br>";
 		echo"<img src='Imagens/1998.jpg' width='1024'height='682'>";
 		break;
 	case 2002:
 		echo"Sede: Coreia do Sul e Japão<br>";
 		echo"Campeão: Brasil<br><br>";
 		echo"<img src='Imagens/2002.jpg' width='1024'height='682'>";
 		break;
 	case 2006:
 		echo"Sede: Alemanha<br>";
 		echo"Campeão: Italia<br><br>";
 		echo"<img src='Imagens/2006.jpg' width='1024'height='682'>";
 		break;
 	case 2010:
 		echo"Sede: Africa do Sul<br>";
 		echo"Campeão: Espanha<br><br>";
 		echo"<img src='Imagens/2010.jpg' width='1024'height='682'>";
 		break;
 	case 2014:
 		echo"Sede: Brasil<br>";
 		echo"Campeão: Uruguai<br><br>";
 		echo"<img src='Imagens/2014.jpeg' width='1024'height='682'>";
 		break;
 	case 2018:
 		echo"Sede: Russia<br>";
 		echo"Campeão: França<br><br>";
 		echo"<img src='Imagens/2018.jpg' width='1024'height='682'>";
 		break;
 	case 2022:
 		echo"Sede: Qatar<br>";
 		echo"Campeão: Argentina<br><br>";
 		echo"<img src='Imagens/2022.jpeg' width='1024'height='682'>";
 		break;
 	default:
 		echo"Selecione um ano";
 		break;
 }

		

	

	?>
	 </center>

</body>
</html>