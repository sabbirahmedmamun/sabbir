<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","sadata");

$con=mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
    $myname=$_POST['myname'];
    $phone=$_POST['phone'];

$query = "INSERT INTO sabbir(myname,phone)VALUES('$myname','$phone')";
$result = mysql_query($query);
if($result)
	{
	    echo "Successfully loged in";
		
	}
	else
	{
	 die('Error: '.mysql_error($con));
	}
	mysql_close($con);
?>
