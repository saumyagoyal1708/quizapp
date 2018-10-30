
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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sg";


$conn= mysqli_connect($servername,$username,$password,$dbname);


$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 1";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans1)
 {
 	echo " 1. Correct Answer";
 	echo "<br>";
 	 $count++;
}
 else
 {
 	echo "1. Wrong Answer";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 2";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans2)
 {
 	echo " 2. Correct Answer";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo "2. Wrong Answer";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 3";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans3)
 {
 	echo " 3. Correct Answer";
 	echo "<br>";
 	 $count++;
 }
 else
 {
 	echo "3. Wrong Answer";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 4";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans4)
 {
 	 echo " 4. Correct Answer";
 	 echo "<br>";
 	 $count++;
 }
  else
 {
 	echo "4. Wrong Answer";
 	echo "<br>";
 }

}

$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 5";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans5)
 {
 	echo " 5. Correct Answer";
 	 echo "<br>";
 	 $count++;
 }
  else
 { 
 	echo "5. Wrong Answer";
 	echo "<br>";
 }
  
}

$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 6";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans6)
{
	echo " 6. Correct Answer";
 	echo "<br>";
 	 $count++;
 }
  else
 {
 	echo "6. Wrong Answer";
 	echo "<br>";
 }
 
}
$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 7";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans7)
 {
 	 echo " 7. Correct Answer";
 	 echo "<br>";
 	 $count++;
 }
  else
 {
 	echo "7. Wrong Answer";
 	echo "<br>";
 }
  
}
$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 8";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans8)
 {
 	 echo " 8. Correct Answer";
 	 echo "<br>";
 	 $count++;
 }
  else
 {
 	echo "8. Wrong Answer";
 	echo "<br>";
 }
 
}
$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 9";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans9)
 {
 	 echo " 9. Correct Answer";
 	 echo "<br>";
 	 $count++;

 }
  else
 {
 	echo "9. Wrong Answer";
 	echo "<br>";
 }
  
}
$sql = " SELECT answer,SlNo  FROM s3  WHERE SlNo like 10";
$answer = mysqli_query($conn, $sql);

if( mysqli_num_rows($answer) > 0  )
{
	$row = mysqli_fetch_assoc($answer);
 if($row['answer']==$ans10)
 {
 	echo " 10. Correct Answer";
 	 echo "<br>";
 	 $count++;
 }
  else
 {
 	echo "10. Wrong Answer";
    echo "<br>";
 }
  
}
echo "  <font size='16' >  YOUR SCORE - ";
  echo $count;
?>