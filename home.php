<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="container-home">
     <div class="left-container">
          <div class="prof-img">
               <img class="profile-img" src="image\img_avatar2.png" alt="" style="height: 100px; width:100px">
          </div>
          <div class="hero">
               <h3>Hello, <?php echo $_SESSION['user_name']; ?></h3>
          </div>
          <div class="vertical-menu">
               <a href="#" class="active">Home</a>
               <a href="#" >Cost Tracking</a>
               <a href="#"> Genarel Ledger</a>
               <a href="#"> Acc. Payable</a>
               <a href="#">Acc. Receiveable</a>
               <a href="#"> Revenue</a></button >
               <a href="#">account payable</a>
          </div>
          <div class="logout">
               <button class="log-btn"><a href="change-password.php">Change Password</a></button>
     	     <button class="log-btn"><a href="logout.php">Logout</a></button>
          </div>
     </div>
     <div class="right-container">
          <div class="right-secton">
               <h3>Welcome</h3>
               <h1><?php echo $_SESSION['name']; ?></h1>
               <p>User Id: <span style="color:#b76565;"><?php echo $_SESSION['id']; ?></span></p>
               <p>Full Name: <span style="color:#b76565;"><?php echo $_SESSION['name']; ?></span></p>
               <p>Mobile: <span style="color:#b76565;"><?php echo $_SESSION['number']; ?></span></p>
               <p>Email: <span style="color:#b76565;"><?php echo $_SESSION['email']; ?></span></p>   
               <p>Address: <span style="color:#b76565;"><?php echo $_SESSION['address']; ?></span></p>   
          </div>
     </div>
</div>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>