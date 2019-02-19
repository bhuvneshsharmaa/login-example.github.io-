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
			<form action="savedata.php" method="post">
				<div class="form-group position">
					<div class="container h3">
						<div class="row">
							<div class="col">
								<b>Form</b> 
								<br>Panel	
							</div>
						</div>
					</div>
					<label for="username"></label>
					<input type="text" name="username"  placeholder="username" class="form-control margin" id="username" required="required">
					<label for="password"></label>
					<input type="password" name="password"  placeholder="password" class="form-control margin" id="password"  required="required">
					<label for="age"></label>
					<input type="number" name="age"  placeholder="age" class="form-control margin" id="age"  required="required">
					<label for="gender"></label>
					<!-- 	<input type="text" name="gender"  placeholder="gender" class="form-control margin" id="gender"  required="required" value="Male"> -->
					<select name="gender" id="gender" style="height: 30px;">
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="others">others</option>
					</select>
					<button class="btn btn-warning new" ><span class="glyphicon glyphicon-user"></span> <span>Register</span></button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>