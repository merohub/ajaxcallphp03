<?php

    $firstName = $_POST['firstName'];

    $password = $_POST['password'];

    echo $firstName."|".$password ;

    //echo $lastName;

//mysql_connect("localhost","root","") or die(mysql_error());
//mysql_select_db("serialize") or die(mysql_error());

mysql_connect("mysql11.000webhost.com","a4377512_hitlar","!webhost123") or die(mysql_error());
mysql_select_db("a4377512_login") or die(mysql_error());
$sql = mysql_query("SELECT * FROM clients WHERE username='$firstName' AND password='$password' LIMIT 1");

$row = mysql_num_rows($sql);

if($row>0)
{
	echo "good";
}

else
echo "bad";



?>