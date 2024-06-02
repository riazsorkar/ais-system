<!DOCTYPE html>
<html>
<head>
	<title>Welcome!!!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	 <form action="login.php" method="post">
	 <div class="wrapper">
      <div class="container">
        <div class="col-left">
          <div class="login-text">
            <h2>Logo</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              malesuada vel libero vitae eleifend. Fusce tristique ipsum lorem.
            </p>
            <a class="btn" href="">Read More</a>
          </div>
        </div>
        <div class="col-right">
          <div class="login-form">
            <h2>Login</h2>
            <form>
              <p>
                <input type="text" name="uname" placeholder="Username" required />
              </p>
              <p>
                <input type="password" name="password" placeholder="Password" required />
              </p>
			  <p><div style="color:#ff0000;"><?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?></div></p>
			  
              <p>
                <input class="btn" type="submit" value="Sing In" />
              </p>
              <p>
                <a href="signup.php">Create an account.</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
</form>

</body>
</html>