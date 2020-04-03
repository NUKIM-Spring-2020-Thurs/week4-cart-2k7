<?php 
ob_start();
session_start();
$uid="David";
$upwd="aaaaaa";
$id=$_POST["id"];
$pwd=$_POST["pwd"];

if ($id==$uid && $pwd==$upwd) {
	$_SESSION["login"]="S";
	$_SESSION["ID"]=$id;

	header('Location:catalog.php');
}else{
	$_SESSION["login"]="F";
	header('Location:login.php');
	
}
 ?>
