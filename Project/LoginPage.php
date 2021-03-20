<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<dir class="col-lg-6">
				<h2> Login Here </h2>

				<form action="validation.php" method="post" >
					<dir class = "form-group">
						<label> Username </label>
						<input type="text" name="user" class="form-control">
						
					</dir>

					<dir class = "form-group">
						<label> Password </label>
						<input type="Password" name="Password" class="form-control">
						
					</dir>
					<button type="submit" class="btn btn-primary"> Login </button>
				</form>
			</dir>

				<dir class="col-lg-6">
				<h2> Sign Up Here </h2>
				
				<form action="Registration.php" method="post">
					<dir class = "form-group">
						<label> Username </label>
						<input type="text" name="user" class="form-control">
						
					</dir>

					<dir class = "form-group">
						<label> Password </label>
						<input type="Password" name="Password" class="form-control">
						
					</dir>
					<dir class = "form-group">
						<label> Confirm Password </label>
						<input type="Password" name="Password" class="form-control">
						
					</dir>
					<button type="submit" class="btn btn-primary"> Sign-in </button>
				</form>


			</dir>
		</div>
	</div>
</body>
</html>