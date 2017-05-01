<?php session_start(); ?>

<?php
       $mysqli = new Mysqli("localhost", "root", "" , "coding_society");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if (!$result = $mysqli->query("Select * from categories")) {
        echo "Selecting from categories failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    $sub_menu = [];
    $i = 0;
    while($data = $result->fetch_assoc()){
        $sub_menu[$i] = $data["Name"];
        $i++;
    }
    $mysqli->close(); 
 ?>
<html>
    <head>
        <title>Lessons and Activities</title>
        <link rel="stylesheet" href="css/lesson.css">
    </head>
    <body>
        
<h1 class='elegantshadow'>Lessons & Activites</h1>

<div class="navi" >
<div id="nav">
  <ul>
  <li class="font"><a href="home.php">Home</a></li>
  <li class="font"><a href="forum.php">Forum</a></li>
  <li class="font"><a href="events.php">Events</a></li>
  <li class="font"><a href="team.php">Meet The Team</a></li> 
  <li class="font"><a href="lesson.php">Lessons</a></li>
  <li class="font"><a href="gallery.php">Gallery</a></li>
   <?php if(isset($_SESSION['user_uname'])): ?>
                <li class="profile"><a href="profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
              <?php endif; ?>
</ul>
</div>
</div>

<div class="sub-nav">
 <div class="contianer">
  <ul id="topics"> 
    <?php foreach( $sub_menu as $menu): ?>
       <li class="font" ><a href="#"><?= $menu ?></a></li>
    <?php endforeach ?>
  </ul>
 </div>
</div>


<div class="sidenav">
    <div id="sidebar" class="card card-2">
    <ul>
    <li class="nav2"><a href="#">1 - What is Java</a></li>
    <li class="nav2"><a href="#">2 - How to install Java</a></li>
    <li class="nav2"><a href="#">3 - Basic Java Syntax</a></li>
    </ul>
    </div>
</div>



<div class="body">
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <br>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <br>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem</p>  
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <br>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <br>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem</p>
</div>

