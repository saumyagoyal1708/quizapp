
<?php

$name =      $_POST["name"]; 
$mobile_no = $_POST["mobile_no"];
$email_id = $_POST["email_id"];
$pass_word = $_POST["pass_word"]; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sg";

$f = 0;

$conn= mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	//echo "successfull";
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
$sql1 = " SELECT  name, email_id ,mobile_no,pass_word FROM s1  ";
$result = mysqli_query($conn, $sql1);

if( mysqli_num_rows($result) > 0  )
{
	while($row = mysqli_fetch_assoc($result))
	{//echo "bjhgj";

if(  $row['email_id'] == $email_id)
{
	$f = 1;
	break;
}
     }
     if ( $f==1)
     {
          	echo "<center><font size = '6'><h2 > ^.^ ACCOUNT IS ALREADY REGISTERD ^.^ </h2></font></center>";

     }
	else
{
$sql = "INSERT INTO s1(name,mobile_no,email_id,pass_word) values ('$name','$mobile_no','$email_id','$pass_word')";
if($conn->query($sql)=='TRUE')
{
	//echo "successfully inserted";
	echo " <center> <font size='6' > <h2> HOORAYYY!!! YOUR ACCOUNT IS CREATED :)<?h2></font></center>";
	//echo "HOORAYYY!!! YOUR ACCOUNT IS CREATED";
	echo "<br>";
		echo "<br>";
			echo "<br>";


}
}
}
?>

 <html>
 <head>
 	<link href='https://fonts.googleapis.com/css?family=Felipa' rel='stylesheet'>
 </head>

<body style = "background : url('img12.jpg') ">
	<form   name = "details" action = "index.html" method  = "POST"> 

<center>
	<br><br>
	    <h2  class="line"> Wanna test your knowledge ???</h2><br>
<h4><button class="click"> login </button></h4>
</center>
 
</form>
 </body>
 </html>
 <style>

 .line{
 	    color: darkblue;
 	    font-size: 35px;
 }
 
 	.click{
                background-color: black ;
                 border-style: solid;
                 border-color : black ;
                 border-width: 15px;
                 font-weight: bold;
                 border-radius: 15px;
                 color: white;

             }

 </style>
