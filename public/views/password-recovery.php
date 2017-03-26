<?php require('../../private/classes/Database.php') ?>
<?php include './navbar.php' ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<link rel="stylesheet" href="../css/style.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Email</span>
	  <input type="text" name="username" class="form-control" placeholder="Enter Email" required>
	</div>
	<br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="../service/login.php">Login</a>
      </form>

<?php
      if(isset($_POST) & !empty($_POST)){
      	$username = mysqli_real_escape_string($connection, $_POST['username']);
      	$sql = "SELECT * FROM `users` WHERE uname = '$uname'";
      	$res = mysqli_query($connection, $sql);
      	$count = mysqli_num_rows($res);
      	if($count == 1){
      		echo "Send email to user with password";
      	}else{
      		echo "User name does not exist in database";
      	}
      }

      $r = mysqli_fetch_assoc(1);
      $password = $r['psw'];
      $to = $r['email'];
      $subject = "Your Recovered Password";

      $message = "Please use this password to login " . $password;
      $headers = "From : codeclubvtdi@gmail.com";
      if(mail($to, $subject, $message, $headers)){
      	echo "Your Password has been sent to your email id";
      }else{
      	echo "Failed to Recover your password, try again";
      }
