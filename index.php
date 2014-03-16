<!DOCTYPE html>
<html>
<head>
	<title>CompumundoHypermegared</title>
</head>
<body>
<h1>Hola mundo</h1>
<?php 
	$Numero=1; 
	$cadena='hola';
	$vector= array('hola' => 'chao', 'chao' => 'adios');
	$numero2=2;
	$suma=$Numero+$numero2;
	echo "Numero = $Numero<br>".'Numero = '.$Numero."<br>";
	echo $cadena.$vector['hola'].'<br>';
	//Ver Variables
	var_dump($vector);
	echo "<br>$Numero + $numero2 = $suma";
?>

<h3>Seccion2</h3>
<div >
<?php if ($Numero=1) {
	echo "Numero es igual a 1";
} ?>
<?php if($conexion = mysql_connect("localhost", "root", ""))echo "<br>Conectojoajaojao<br>"; ?>
<?php mysql_select_db("bd_test",$conexion) ;

$queEmp = "SELECT * FROM persona";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

if(isset($numero));

if ($totEmp > 0) {
   while ($rowEmp = mysql_fetch_assoc($resEmp)) {
      echo "Nombre : <strong>".$rowEmp['nombre']."</strong><br>";
      echo "Apellido: ".$rowEmp['apellido']."<br>";
      echo "FEcha : ".$rowEmp['fecha_ingreso']."<br><br>";
   }
}








?>
	
</div>
<form>
	<input type="text" placeholder"pico pal que lee">
</form>
</body>
</html>