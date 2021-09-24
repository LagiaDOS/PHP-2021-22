<!DOCTYPE html>
<html>
<head>
	<style>
	body {bakground-color:black;}
	h3 {color: gray}
	p{color: darkgray}
	</style>
</head>

<body>
	<h3> This is a heading </h3>
	<p> This is a paragraph </p>

	<?php
	
	$nom_cognom = "Roger Ortiz";
	$subcadena;
	$num_char_nom_cognom = strlen($nom_cognom);
	
	$inici_subcadena = rand(0,$num_char_nom_cognom);
	$longitud_subcadena = rand(0,$num_char_nom_cognom);
	
	
	
	
	
	
	echo  $nom_cognom;
	
	echo $num_char_nom_cognom;

	echo $inici_subcadena;
	
	
	
	?>

</body>


</html>