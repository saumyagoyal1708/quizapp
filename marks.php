<?php
 $name = $_POST["name"];
 $english = $_POST["english"];
 $programming_in_c = $_POST["programming_in_c"];
 $mathematics = $_POST["mathematics"];
 $physics = $_POST["physics"];
 $chemistry = $_POST["chemistry"];

  $avg  = ($english+ $programming_in_c+$mathematics+$physics+ $chemistry)/5;
   echo " the average is $avg";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sg";


$conn= mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	echo "successfull";
	echo "<br>";
}
else
{
	echo "failed";
}


$sql = "INSERT INTO s2 (name,english,programming_in_c,mathematics,physics,chemistry,average) VALUES ('$name','$english','$programming_in_c','$mathematics','$physics','$chemistry','$avg')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 
	?>