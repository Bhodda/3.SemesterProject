<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fliptheburger";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = :product_id"); 
    $stmt->bindParam(':product_id', $product_id);

    $product_id = $_GET["product_id"];
    
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // tell the browsers that this is json and not text/html
	header('Content-Type: application/json');

	// make the $result array into some nice JSON
	echo json_encode($result);
	// var_dump(json_decode($result));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>


