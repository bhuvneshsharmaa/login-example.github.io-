<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="bg-warning">
	<div class="container">
		<div>
			<form action="register.php" method="POST">
			<button class="btn btn-warning register "> <span>register</span></button>
		</form>
		</div>
		<div style="position: relative;" class="rel">
				<form action="validation.php" method="post">
			<div class="form-group position">
				<div class="container h3">
					<div class="row">
						<div class="col">
							<b>Login</b> 
							<br>Windows
						</div>
					</div>
				</div>
				<label for="username"></label>
				<input type="text" name="username"  placeholder="username" class="form-control margin" id="username" required="required">
				<label for="password"></label>
				<input type="password" name="password"  placeholder="password" class="form-control margin" id="password"  required="required">
				<button class="btn btn-success new" ><span class="glyphicon glyphicon-user"></span> <span>login</span></button>
			</div>
		</form>
		</div>
	</div>
</body>
</html>