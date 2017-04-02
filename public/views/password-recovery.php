<?php include './navbar.php' ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<link rel="stylesheet" href="../css/style.css" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form class="form-signin" method="POST" action = "">
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Email</span>
	  <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
	</div>
	<br />
        <button class="btn btn-lg btn-primary btn-block" value="submit" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="../service/login.php">Login</a>
      </form>

      <?php

      require('../../private/classes/Database.php');
      require('../../private/classes/Security.php');


      $email = isset($_POST['email']) ? $_POST['email'] : '';
      $submit = isset($_POST['submit']) ? $_POST['submit'] : '';

        //connect to db
        $connect = mysql_connect("localhost" , "root" , "");
        mysql_select_db("forgot" , $connect);

        if ($submit) {

          $email_check("SELECT * FROM users WHERE email '".$email."' ");
          $count = mysqli_num_rows($email_check);

          if ($count != 0) {
            //generate new password
            $random = rand(72891, 9279);
            $new_password = $random;

            //create new password
            $email_password = $new_password;

            //encrypt new password
            $salt = Security::generateSalt();
            $new_password = Security::generateHash($new_password, $salt);

            //update the database
            mysql_query("UPDATE users SET psw ='".$new_password."'  WHERE email = '".$email."' ");

            //send the password to user
            $subject ="Password Recovery";
            $message = "Your password has been changed to $email_password";
            $from = "From: codeclubvtdi@gmail.com";

            mail($email, $subject, $message, $from);
            echo "Your new password has been emailed to you";
          }
          else {
            echo "This Email Does Not Exist.";
          }

        }

      ?>
