<?php
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/login example/login.php');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="bg-warning">
<div class="container">
<div class="row">
<div class="col-4 column"><h1> Hello <?php echo $_SESSION['username']?> </h1>
<a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span><span style="margin:5px">Logout</span></a>
</div>
<div class="col-8 bg-warning column">
</div>
</div>
</div>
</body>
</html>
