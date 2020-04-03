<?php 
session_start();
if (isset($_SESSION["id"])) {
	$id=$_SESSION["id"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$num=$_SESSION["num"];

	setcookie($id."[id]", $id, time()+3600);
	setcookie($id."[name]", $name, time()+3600);
	setcookie($id."[price]", $price, time()+3600);
	setcookie($id."[num]", $num, time()+3600);
}

header('Location:catalog.php');
 ?>