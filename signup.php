<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="signup-check.php" method="post">

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
            <h2>SIGN UP</h2>
              <p>
                    <?php if (isset($_GET['name'])) { ?>
                      <input type="text" name="name" placeholder="Full Name" value="<?php echo $_GET['name']; ?>">
                    <?php } else{ ?>
                         <input type="text" 
                         name="name" 
                         placeholder="Full Name">
                    <?php }?>
              </p>

              <p>
                    <?php if (isset($_GET['email'])) { ?>
                      <input type="email" name="email" placeholder="Email Address" value="<?php echo $_GET['email']; ?>">
                    <?php } else{ ?>
                         <input type="email" 
                         name="email" 
                         placeholder="Email Address">
                    <?php }?>
              </p>

              <p>
                    <?php if (isset($_GET['number'])) { ?>
                      <input type="text" name="number" placeholder="Phone Number" value="<?php echo $_GET['number']; ?>">
                    <?php } else{ ?>
                         <input type="text" 
                         name="number" 
                         placeholder="Phone Number">
                    <?php }?>
              </p>

              <p>
                    <?php if (isset($_GET['address'])) { ?>
                      <input type="text" name="address" placeholder="Address" value="<?php echo $_GET['address']; ?>">
                    <?php } else{ ?>
                         <input type="text" 
                         name="address" 
                         placeholder="Address">
                    <?php }?>
              </p>



              <p>
                      <?php if (isset($_GET['uname'])) { ?>
                          <input type="text" name="uname"placeholder="User Name" value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name">
          <?php }?>
              </p>




			  <p><input type="password" 
                 name="password" 
                 placeholder="Password">
               </p>
               <p><input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"></p>



                 <p><div style="color:#ff0000;"><?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?></div></p>
			  
              <p>





                <input class="btn" type="submit" value="Sing In" />
              </p>
              <p>
                <a href="index.php">Login</a>
              </p>
          </div>
        </div>
      </div>
    </div>
</form>
</body>
</html>