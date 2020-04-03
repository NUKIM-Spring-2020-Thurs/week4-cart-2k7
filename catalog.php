<?php 
session_start();

if(isset($_SESSION["login"])){
	echo "登入成功<br/><br>";

	$date=strtotime("+7 days",time());
	$uName=$_SESSION["ID"];
	setcookie("ID",$uName,$date);

}else{
	echo "非法進入<br/>";
	echo "<a href='login.php'>乖乖回首頁</a>";
}
 ?>

<?php 
session_start();
if (isset($_POST["product"])) {
	$_SESSION["num"]=$_POST["num"];
	$id=$_POST["product"];
	$_SESSION["id"]=$id;
	switch (strtoupper($id)) {
		case 'A':
			$_SESSION["name"]="蜜汁豬肉干";
			$_SESSION["price"]=250;
			break;
		case 'B':
			$_SESSION["name"]="黑胡椒牛肉干";
			$_SESSION["price"]=250;
			break;
		case 'C':
			$_SESSION["name"]="五香牛肉干";
			$_SESSION["price"]=250;
			break;
		case 'D':
			$_SESSION["name"]="鯖魚一夜干";
			$_SESSION["price"]=250;
			break;
	}
	header("Location:addcart.php");
}
 ?>
 


 <form action="catalog.php" method="post">
 	<select name="product">
 		<option value="A">蜜汁豬肉干 $250</option>
 		<option value="B">黑胡椒牛肉干 $250</option>
 		<option value="C">五香牛肉干 $250</option>
 		<option value="D">鯖魚一夜干 $250</option>
 	</select>
 	<input type="number" name="num"><br>
 	<input type="submit" name="加入購物車"><br>
 </form>
 <a href="cart.php" style="border: 1px">購物車</a>

