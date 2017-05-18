<?php 
  session_start(); 
  include '../private/classes/Database.php';

?>
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

    <div class="navi" >
<div id="nav">
  <ul>
  <li class="font"><a href="index.php">Home</a></li>
  <li class="font"><a href="forum.php">Forum</a></li>
  <li class="font"><a href="events.php">Events</a></li>
  <li class="font"><a href="team.php">Meet The Team</a></li>
  <li class="font"><a href="lesson.php">Lessons</a></li>
  <li class="font"><a href="gallery.php">Gallery</a></li>
<li class="font"><a href="about-us.php">About Us</a></li>

  <li class="club"><a href="service/logout.php">Logout</a></li>
  <?php if(isset($_SESSION['user_uname'])): ?>
      <li class="club"><a href="./admin_profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
      <?php endif;
  ?>

</ul>
</div>
</div>

<?php

// get value of id that sent from address bar
if(isset($_GET['id'])){
  $id=$_GET['id'] ;
}else{
  $id=$_SESSION['userId'] ;
}

$sql="SELECT * FROM users WHERE id='$id'";
$result=Database::getInstance()->query($sql);
if($result){
  while($row = $result->fetch_assoc()){
    $rows= $row;
  }
}
?>


<div class="profile">
<div class="opaque">

<h3>+ Welcome</h3>
<div class="bio">
<p class="bio">Hello. Welcome back administrator.</p>
</div>


<div class="image">
  <img src="./img/profile_avatar.png" alt="">
</div>

  <div class="profileinfo">
    <p><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;User Name:  <?php echo $rows['uname']; ?></p>
<br>
    <p><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;Name:   <?php echo $rows['name']; ?></p>
    <br>
    
    <p><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;Email Address:  <?php echo $rows['email']; ?></p>
    
<br>
    <p><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;View All Users
      <?php
          if($_SESSION['user_uname']==$rows['uname']) {
            ?>
            <a class="button" href="./views/view_users.php">View&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a></p>
            <br>
            <?php
          } else {
              /* Unable to edit profile */
          }
          ?>

           <p><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;View All Forum Responses
      <?php
          if($_SESSION['user_uname']==$rows['uname']) {
            ?>
            <a class="button" href="./views/view_response.php">View&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a></p>
            <br>
            <?php
          } else {
              /* Unable to edit profile */
          }
          ?>

           <p><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;View All Forum Topics
      <?php
          if($_SESSION['user_uname']==$rows['uname']) {
            ?>
            <a class="button" href="./views/view_topic.php">View&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a></p>
            <br>
            <?php
          } else {
              /* Unable to edit profile */
          }
          ?>

    <p><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;View All Lessons
      <?php
          if($_SESSION['user_uname']==$rows['uname']) {
            ?>
            <a class="button" href="./views/view_lessons.php">View&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a></p>
            <br>
            <?php
          } else {
              /* Unable to edit profile */
          }
          ?>

    <p>
    <i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Add New Lesson
      <?php
          if($_SESSION['user_uname']==$rows['uname']) {
            ?>
<a class="button" href="./views/new_lesson.php">Add&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a></p>
            <br>
            <br>
            <?php
          } else {
              /* Unable to edit profile */
          }
          ?>

          
  </div>
</div>
  </div>



</body>

</html>
