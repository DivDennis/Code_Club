<?php session_start(); ?>
<?php include 'header.php' ?>
<link rel="stylesheet" href="./css/profile-style.css">

<?php

if (isset($_SESSION ['user_uname'])) {
  # user is logged in
}

else
{
  echo 'You cannont accesses this page unless logged in';

  echo '<a href="index.php">Click here to login or sign up</a>';

  die();
}

 ?>

<body>

    <div class="navi" >
<div id="nav">
  <ul>
  <li class="font"><a href="index.php">Home</a></li>
  <li class="font"><a href="forum.php">Forum</a></li>
  <li class="font"><a href="events.php">Events</a></li>
  <li class="font"><a href="team.php">Meet The Team</a></li>
  <li class="font"><a href="lesson.php">Lessons</a></li>
  <li class="font"><a href="gallery.php">Gallery</a></li>

  <li class="club"><a href="service/logout.php">Logout</a></li>
  <?php if(isset($_SESSION['user_uname'])): ?>
      <li class="club"><a href="profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
      <?php endif;  ?>
      <li class="club"><a href="./find_users.php">Find Friends</a>


</ul>
</div>
</div>

<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="coding_society"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
if(isset($_GET['id'])){
  $id=$_GET['id'] ;
}else{
  $id=$_SESSION['userId'] ;
}


$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>


<div class="profile">
<div class="opaque">
<h3>+ Bio</h3>
<p class="bio"><?php echo $rows['bio']; ?></p>

  <div class="image">
    <?php if ($rows['photo'] !== null): ?>
  <img src="./photos/<?= $rows['photo'];?>">
  <?php else: ?>
    <img src="./img/profile_avatar.png" alt="">
    <?php endif; ?>
  </div>

  <div class="profileinfo">
    <p><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;User Name:  <?php echo $rows['uname']; ?></p>
    <br>
    <br>
    <p><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;Name:   <?php echo $rows['name']; ?></p>
    <br>
    <br>
    <p><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Date of Birth:   <?php echo $rows['birthdate']; ?></p>
    <br>
    <br>
    <p><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;Email Address:  <?php echo $rows['email']; ?></p>
    <br>
    <br>
    <p><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Proficient In:   <?php echo $rows['skills'];  ?></p>

    <?php


    if($_SESSION['user_uname']==$rows['uname']) {
      ?>
      <a href="./views/editprofile.php">Edit&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a>
    <?php
    } else {
        /* Unable to edit profile */
    }
    ?>

  </div>
</div>
</div>


</body>
