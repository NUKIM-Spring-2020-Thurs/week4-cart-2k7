<h2>User Login</h2>

<?php 
if (isset($_COOKIE["ID"])) {
	$user=$_COOKIE["ID"];
	echo "歡迎再度光臨".$_COOKIE["ID"];
	setcookie("ID","",time()-3600);
}else{
	echo "歡迎新朋友";
	$user="";
}
?>
<form action="check.php" method="post">
		Please input your username:
		<input type="text" name="id" 
			   value="<?php 
			   			echo $_COOKIE['ID']; 
			   		  ?>"><br/>
		Please input your password:
		<input type="password" name="pwd"><br/>
		<input type="submit" name="">
</form>
