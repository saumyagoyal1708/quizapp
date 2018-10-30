
<?php

$name =      $_POST["name"]; 
$mobile_no = $_POST["mobile_no"];
$email_id = $_POST["email_id"];
$pass_word = $_POST["pass_word"]; 

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

if($name=="11")
{
	if($password=="12")
	{
		echo "hello there";
	}
}
$sql = "INSERT INTO s1(name,mobile_no,email_id,pass_word) values ('$name','$mobile_no','$email_id','$pass_word')";
if($conn->query($sql)=='TRUE')
{
	echo "successfully inserted";
	echo "<br>";


}
?>
<?php
$conn = mysqli_connect('localhost','root','','sg');
//mysqli_select_db("sg",$conn);
$sql = " SELECT * FROM s1";
$records = mysqli_query($conn, $sql);

?>
<html>
<head>
	<title>   data  </title>
</head>
<body>
	<table width= "600px" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th> name </th>
			<th> mobile_no </th>
			<th> email_id </th>
			<th> pass_word </th>
		</tr>
		<?php 

	while ($s1 = mysqli_fetch_assoc($records)) {
		echo "<tr>";
        echo "<td>".$s1['name']."</td>" ;
             echo "<td>".$s1['mobile_no']."</td>" ;
                  echo "<td>".$s1['email_id']."</td>" ;
                       echo "<td>".$s1['pass_word']."</td>" ;
		echo "<tr>";
	}
		?>
		
	</table>
</body>