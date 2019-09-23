<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

  <div class="login-form">
		<form action="validation.php" method="post">
			<h1>Login</h1>
			<div class="form-group">
				<input type="text" name="user" placeholder="Username" required>
				<span class="input-icon"><i class="fa fa-user"></i></span>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password" required>
				<span class="input-icon"><i class="fa fa-lock"></i></span>
			</div>
			<button type="submit" class="login-btn">Login</button>

		</form>

    <form action="signup.php" method="post">
     <button type="submit" class="login-btn">Sign Up</button>
    </form>

	</div>

  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Login Form</h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control"
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          </div>
         <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>

        <form action="signup.php" method="post">
         <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>

    </div>
  </div> -->
</body>
</html>
