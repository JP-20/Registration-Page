<?php

session_start();
header('location:LoginPage.php'); 

$con = mysqli_connect('localhost','root');
if($con){

	echo "connection successfull";
}
else{
	echo "No Connection";
}
mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['Password'];

$q = " select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){

	echo "this is duplicate data";
}else{

	$qy = "insert into signin(name, password ) values ('$name' , '$pass')";

	mysqli_query($con, $qy);
}


?>