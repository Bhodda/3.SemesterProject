<?php
if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fliptheburger";
    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $name = $_POST["name"];
        $phone_nr = $_POST["phone_nr"];
        $order_details = $_POST["order_details"];
        $subtotal = $_POST["subtotal"];
        $discount = $_POST["discount"];
        $sumtotal = $_POST["sumtotal"];
        $message = $_POST["message"];



        $sql = "INSERT INTO orders (name, phone_nr, order_details, subtotal, discount, total, message)
		VALUES (
		:name, 
		:phone_nr, 
		:order_details, 
		:subtotal, 
		:discount, 
		:sumtotal, 
		:message )";


        $sqlResult = $dbh->prepare($sql);

        $sqlResult->bindParam(':name', $name);
        $sqlResult->bindParam(':phone_nr', $phone_nr);
        $sqlResult->bindParam(':order_details', $order_details);
        $sqlResult->bindParam(':subtotal', $subtotal);
        $sqlResult->bindParam(':discount', $discount);
        $sqlResult->bindParam(':sumtotal', $sumtotal);
        $sqlResult->bindParam(':message', $message);

        $sqlExec = $sqlResult->execute(array(
            ":name"=>$name, 
            ":phone_nr"=>$phone_nr, 
            ":order_details"=>$order_details, 
            ":subtotal"=>$subtotal, 
            ":discount"=>$discount,  
            ":sumtotal"=>$sumtotal, 
            ":message"=>$message, ));

        if($sqlExec) {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
        }else {
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