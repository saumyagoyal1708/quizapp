<?php

$name=      $_POST["name"]; 
$mobileno = $_POST["mobile_no"];
$emailid = $_POST["email_id"];
$password = $_POST["pass_word"]; 

$servername = "localhost";
$username = "root";
$password = "";
  
try{
	$con = new PDO ("mysql:host = $servername; dbname = sg ",$username , $password);
	$con ->setattribute(PDO :: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "connected to database";
	$sql ="INSERT INTO s1 (name ,pass_word,mobile_no,email_id)VALUES('$name','$password','$mobileno','$emailid')";
	$con -> exec ($sql);
	echo "new record created successfully";
    }
    catch (PDOException $e){

    echo "connection failed";
}

?>
