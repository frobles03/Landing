<?php 
include "conexionbd.php";
$link=AbrirConexion();
$CadSql="Select num_c,nombre_c,num_cp,nombre_cp,num_ct,nombre_ct,num_cg,nombre_cg,id
from guardar_colores ;";
$resultado=EjecutarConsulta($CadSql,$link);
 require( 'init.php' );


?>
<?php require( 'templates/header.php' ); ?>




<?php
	
	
	$id = $_POST['id'];
	
	$queryM = "SELECT id FROM guardar_colores WHERE id = '$id' ORDER BY id asc ";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar </option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id']."'>".$rowM['id']."</option>";
	}
	
	echo $html;
?>