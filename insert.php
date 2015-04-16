<?php

 
if(isset($_POST['guardar']))
{

$nombre = $_POST['nombre']; 
$telefono =$_POST['Telefono']; 
$email = $_POST['email'];


$cnn= mysql_connect("127.0.0.1","root","") or die ("error al conectar");
mysql_select_db("dogtrining",$cnn);

$guardar = "INSERT INTO users (name,phone,mail)   VALUES ('$nombre' ,'$telefono','$email');"; 
mysql_query($guardar);
mysql_close($cnn);
header('Location:dogtrining.php');
}else
{

	echo "No hay Datos";
}





?>