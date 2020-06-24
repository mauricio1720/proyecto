<?php 
	require_once("autoload.php");

	$objUsuario=new Usuario();

	//insertar usuario
	$insert=$objUsuario->insertarUsuario("cytalli","perez","Jimenez");
	echo $insert;

	//estraer todos los registros
	$usert=$objUsuario->getUsuarios();
	print_r("<pre>");
	print_r($usert);
	print_r("</pre>");

	//$update=$objUsuario->updateUsuario(3,"Yessenia","perez","ruiz");
	//echo $update;

	//$usert=$objUsuario->getUser(3);
	//print_r("<pre>");
	//print_r($usert);
	//print_r("</pre>");

	//$delete=$objUsuario->deluser(3);
	//echo $delete;
 ?>