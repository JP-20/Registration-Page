<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2>
		<a href="logout.php"> Logout</a>
	</div>
</body>
</html>

