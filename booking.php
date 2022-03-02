<?php
try {
	$db = new mysqli("localhost","root","","bookingsystem");
} catch (Exception $exc) {
	echo $exc->getTraceAsString();
}

if (isset($_POST['Name']) && isset($_POST['email']) && isset($_POST['Message'])) {
	$name=$_POST['Name'];
	$email=$_POST['email'];
	$message=$_POST['Message'];

	$is_insert=$db->query("INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('','','')");
	if ($is_insert == TRUE) {
		echo "<h2>Thank you for registering with us you shall receive an email shortly.</h2>";
		exit();
	}
}
?>