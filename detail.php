<?php

//you should already have a database to use pdo
//"$_server['PHP_SELF']" for keeping both the form(html) and the code(php) in same page

$name =      $_POST['name']; 
$pass_word = $_POST['pass_word']; 
$mobile_no = $_POST['mobile_no'];
$email_id = $_POST['email_id'];

$con = mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect :'.mysql_error());
}


mysql_select_db("sg",$con);

$query="INSERT INTO s1 (name ,pass_word,mobile_no,email_id)VALUES('$name',$pass_word','$mobile_no','$email_id')";


if(!mysql_query($query,$con))
{
die('error in inserting records' .mysql_error);
}
else
{
echo  "data inserted";
}

?>