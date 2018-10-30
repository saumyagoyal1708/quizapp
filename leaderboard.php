
<?php
$conn = mysqli_connect('localhost','root','','sg');
//mysqli_select_db("sg",$conn);
$sql = " SELECT * FROM s8";
$records = mysqli_query($conn, $sql);

?>
<html>
<head>
	<br>
	<title>  leaderboard </title>
	<link href = "style.css" rel = "stylesheet">
</head>
<body style = "background : url('img16.jpg') ">
	

	<center>
		<br>
	 <i><h1 class="line">LEADERBOARD...</h1></i>
	 <br>
<table width= "600px" border="3" cellpadding="4" cellspacing="2">
		<tr>
			<u><th> NAME </th></u>
			<th> FASHION </th>
			<th> SPORTS </th>
			<th> HARRY POTTER </th>
			<th> GENERAL KNOWLEDGE </th>
			<th> LITERATURE</th>
		</tr>
		<?php 

	while ($s8 = mysqli_fetch_assoc($records)) {
		echo "<tr>";
        echo "<td>".$s8['name']."</td>" ;
             echo "<td>".$s8['fashion']."</td>" ;
                  echo "<td>".$s8['sports']."</td>" ;
                       echo "<td>".$s8['harry_potter']."</td>" ;
                             echo "<td>".$s8['general_knowledge']."</td>" ;
                                     echo "<td>".$s8['literature']."</td>" ;
		echo "<tr>";
	}
		?>
		
	</table>
             <form  name = "details" action = "topic.html" method  = "POST">
             	<br>
             	<br>

             	<button class="click"> Topics </button>
             </form>
</center>
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

<style >
	.click{
                background-color: black;
                 border-style: solid;
                 border-color : black;
                 border-width: 10px;
                 font-weight: bold;
                 border-radius: 15px;
                 color: white;


            }

            .line{
            	color: brown;
            	font-weight: bold;
            }

</style>