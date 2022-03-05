<?php
$myname = $_GET["fullname"];
$mynumber = $_GET["mobile-no"];
$order = $_GET[""];
echo "Thank you".$myname."for booking with us. You shall be contacted through".$mynumber. <br> "Your order number is ".$_order;
?>

<!-- <?php
// $host= $_POST["localhost"];
// $dbUsername=$_POST["root"];
// $dbPassword=$_POST[""];
// $dbName= $_POST["createUser"];

// if(!empty($dbUsername) && !empty($dbPassword)){
// $host="localhost";
// $dbUsername="root";
// $dbPassword="";
// $dbName="createUser";
// $conn = new mysql_connect($host,$dbUsername,$dbPassword,$dbName);
// echo "Welcome";
// }
// else{
// 	echo "All fields are required";
// 	die();
// }
?> -->