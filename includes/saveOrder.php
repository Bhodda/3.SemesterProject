<?php
if(isset($_POST["submit"])){
	$hostname='localhost';
	$username='root';
	$password='';

	try {
		$dbh = new PDO("mysql:host=$hostname;dbname=fliptheburger",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO orders (phone_nr, order_details, subtotal, discount, total, message)
VALUES ('".$_POST["phone_nr"]."','".$_POST["order_details"]."','".$_POST["subtotal"]."','".$_POST["discount"]."','".$_POST["sumtotal"]."','".$_POST["message"]."')";
if ($dbh->query($sql)) {
	echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
	echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

}
?>