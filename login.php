
<?php
$host= $_POST["localhost"];
$dbUsername=$_POST["root"];
$dbPassword=$_POST[""];
$dbName= $_POST["registration"];

if(!empty($dbUsername) && !empty($dbPassword)){
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registration";
$conn = new mysql_connect($host,$dbUsername,$dbPassword,$dbName);
echo "Welcome";
}
else{
	echo "All fields are required";
	die();
}
?>