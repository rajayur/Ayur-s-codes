<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'quizdbase');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div class="container">


	<br> <h1 class="text-center text-primary"> </h1><br>

	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>
	<a href="logout.php" class="btn btn-primary "> LOGOUT </a>

</div>


</body>
</html>
