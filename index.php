<?php


$email_id = $_POST["email_id"];
$pass_word = $_POST["pass_word"]; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sg";

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



$sql1 = " SELECT  name, email_id,pass_word FROM s1  ";
$result = mysqli_query($conn, $sql1);

if( mysqli_num_rows($result) > 0  )
{
  while($row = mysqli_fetch_assoc($result))
  {//echo "bjhgj";

if(  $row['email_id'] == $email_id)
{
  if ($row['pass_word'] == $pass_word) 
  { 
    session_start();
    $_SESSION["name"] = $row ['name'];
    $_SESSION["email"] = $row ['email_id'];
    
       echo'
      <p style = "margin-left:1100px;">'; echo 'WELCOME,'; echo '</p>';
      echo'
      <p style = "margin-left:1150px;">'; echo $row['name']; echo '</p>';

     // echo '<h4> WELCOME,</h4>';  echo $row['name']; echo '</p>';

    echo '<br> <h2><center> GET READY FOR A BATTLE WITH YOUR MIND !!! </center> </h2>';

       echo' <br> <h1><center> Topics</center> </h1> <br><br>';
     
    echo '<center>
  <table>
<tr><form  name = "details" action = "quiz1.html" method  = "POST"> 

     <td> <h3> FASHION &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;</td><td> <button id = "begin" class=" click"> begin  </button></td></h3>
          </form></tr>
<tr><form  name = "details" action = "quiz2.html" method  = "POST"> 

<td><h3> SPORTS &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;</td><td> <button class=" click"> begin  </button></td></h3>
          </form></tr>

<tr><form  name = "details" action = "quiz3.html" method  = "POST"> 

<td><h3>  HARRY POTTER &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;</td><td> <button class=" click" > begin  </button></td></h3>
          </form></tr>
<tr><form  name = "details" action = "quiz4.html" method  = "POST"> 

  <td> <h3>  GENERAL KNOWLEDGE &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; </td><td><button class=" click"> begin  </button></td></h3>
          </form></tr>

<tr><form  name = "details" action = "quiz5.html" method  = "POST"> 

<td><h3> LITERATURE &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; </td><td><button  class=" click"> begin  </button></td></h3>
          </form></tr>


</center>
</table>';
   echo "<br><br>";
 echo '<center> <a href="leaderboard.php"><button class = "click1" type="submit"> leaderboard </button></a></center>';
      echo "<br>";
  }
else 
{
  echo "<h3>password is not correct</h3>";
  echo "<br><br>";
  echo '<center> <a href="index.html"><button class = "click" type="submit"> login again </button></a></center>';

}
}
}
}
 echo "<br>";
 echo '<center> <a href="index.html"><button class = "click1" type="submit"> logout </button></a></center>';

  
?>

<html>
<head>
	<title></title>
  <link href='https://fonts.googleapis.com/css?family=Felipa' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
</head>
<body style = "background : url('img17.jpg') ">
	  
	  <br>
	
    <br>
    <br>


</body>
</html>
<style >
	  h3{
      color: yellow;
      font-family:' Bungee Inline' ;
    }
    .click
    {
       
                 border-style: solid;
                 border-color : teal;
                 border-width: 3px;
                 font-weight: bold;
                 border-radius: 20px;
}

.click1
    {
     
                 border-style: solid;
                 border-color : purple;
                 border-width: 3px;
                 font-weight: bold;
                 border-radius: 20px;
}
h1{ 
    font-family: 'Felipa';
    text-decoration: underline;
    color: lightgreen;
    
     ;
   }
h2{ 
    font-weight: bold;
    font-size: 35px;
    color: white ;
    text-shadow: 2px 2px 20px lightblue
     ;
}
.click{
                background-color: turquoise;
                 border-style: solid;
                 border-color : teal;
                 border-width: 3px;
                 font-weight: bold;
                 border-radius: 20px;


            }
            p{
              font-weight: bold ;
              color: lightpink;
            }
</style>