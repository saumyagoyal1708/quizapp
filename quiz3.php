
<?php
 
$ans1 =  $_POST["answer1"];
$ans2 =  $_POST["answer2"];
$ans3 =  $_POST["answer3"];
$ans4 =  $_POST["answer4"];
$ans5 =  $_POST["answer5"];
$ans6 =  $_POST["answer6"];
$ans7 =  $_POST["answer7"];
$ans8 =  $_POST["answer8"];
$ans9 =  $_POST["answer9"];
$ans10 =  $_POST["answer10"];
 
 $count = 0;
 $f =0;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sg";

 echo'
      <p style = "margin-left:1100px;">'; echo ' <a href="topic.html"><button class = "click1" type="submit"> Topics </button></a>'; echo '</p>';
$conn= mysqli_connect($servername,$username,$password,$dbname);
   echo "SlNo &emsp; &emsp; &emsp; YOUR ANSWER &emsp; &emsp; &emsp; CORRECT ANSWER &emsp; &emsp; &emsp; REMARK";
   echo "<br>";

$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 1";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans1)
 {
 	echo " 1. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans1 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
}
 else
 {
 	echo " 1. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans1 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 2";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans2)
 {
 	echo " 2. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans2 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo " 2. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans2 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 3";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans3)
 {
 	echo " 3. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans3 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
 else
 {
 	echo " 3. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans3 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 4";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans4)
 {
 	echo " 4. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans4 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo " 4. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans4 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }

}

$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 5";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans5)
 {
 	echo " 5. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans5 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
  else
 { 
 	echo " 5. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans5 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 6";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans6)
{
echo " 6. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans6 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo " 6. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans6 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
 
}
$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 7";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans7)
 {
 	 echo " 7. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans7 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo " 7. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans7 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
  
}
$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 8";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans8)
 {
 	 echo " 8. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans8 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo " 8. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans8 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
 
}
$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 9";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans9)
 {
 	echo " 9. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans9 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;

 }
  else
 {
 	echo " 9. &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans9 ";
 	echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
  
}
$sql = " SELECT answer,SlNo  FROM s5  WHERE SlNo like 10";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans10)
 {
 	echo " 10.  &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans10 ";
 	echo "&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;correct";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo " 10.  &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; $ans10 ";
 	echo "&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" ; echo $row['answer']; echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;wrong";
 	echo "<br>";
 }
  
}
echo "<br>";echo "<br>";//echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
 session_start();
   echo " <center><font size = '12' color = 'darkgreen'> hey ," . $_SESSION["name"] ;echo "</font></center>";
    echo "&emsp; &emsp; &emsp;&emsp;&emsp;";
echo "<center> <font size = '12' color = 'darkgreen'>  YOUR SCORE - ";
  echo $count;echo"</font></center>";
  echo "<br>";
  echo "<br>";

 //$_SESSION["count"] = $count;

  if($count<=3&& $count>0)
  {
  	//echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
  	echo "<center><font size = '6' color = 'purple'>NEED TO PRACTICE</font></center>";
  }
  elseif ($count<=7&&$count>3) {
  	//echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
  	echo "<center><font size  = '6' color = 'purple'>WELLDONE,GOOD GOING</font></center>";
  }
  else
  {
  	//echo "&emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
  	 echo "<center><font size = '6' color = 'purple'>BRAVO !!! KEEP IT UP</font> </center>";
  }
  echo "<br><br>";
 echo '<center> <a href="index.html"><button class = "click1" type="submit"> logout </button></a></center>';

   echo "<br><br>";
 echo '<center> <a href="leaderboard.php"><button class = "click1" type="submit"> leaderboard </button></a></center>';

 
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "sg";

$conn= mysqli_connect($servername,$username,$password,$dbname);
 $name1 = $_SESSION["name" ];
 


if($conn)
{
  echo "successfull";
  echo "<br>";
}
else
{
  echo "failed";
}
$email = $_SESSION["email" ];
 $sql = " SELECT  name, email_id , harry_potter FROM s8  ";
$result = mysqli_query($conn, $sql);

if( mysqli_num_rows($result) > 0  )
{
  while($row = mysqli_fetch_assoc($result))
  {

if(  $row['email_id'] == $email  )
{
   // echo "hjjb";
    $f =1;
    break;
}
}
}
if($f==1)
{
  if($row['harry_potter'] < $count)
  {
  $sql = "UPDATE s8 SET harry_potter = '$count' WHERE  email_id = '$email' ";
}
else
{
   echo "<br>";
}
  if($conn->query($sql)=='TRUE')
{
  echo "successfully updated";
  echo "<br>";
}
}

else
{
$sql = "INSERT INTO s8(name , email_id ) values ('$name1' , '$email' )";
 if($conn->query($sql)=='TRUE')
{
  echo "<br>";
}
$sql = "UPDATE s8 SET harry_potter = '$count' WHERE  email_id = '$email'  ";
  if($conn->query($sql)=='TRUE')
{
  echo "successfully inserted";
  echo "<br>";
}
}


?>
<!DOCTYPE html>
<html>
<head>
	 <link href = "style.css" rel = "stylesheet">
</head>

<body style = "background : url('img14.jpg') ">
	<ul class = "bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

</body>
</html>

<style >
  .click1{
                background-color: turquoise;
                 border-style: solid;
                 border-color : teal;
                 border-width: 3px;
                 font-weight: bold;
                 border-radius: 20px;


            }
</style>