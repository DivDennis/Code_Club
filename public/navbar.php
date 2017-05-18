<?php include 'header.php'; ?>
<link rel="stylesheet" href="./css/index-style.css">


 <body>
      <div class="nav-container">
          <div id="nav">
            <ul>
              <li class="font"><a class="active" href="index.php">Home</a></li>
              <li class="font"><a href="forum.php">Forum</a></li>
              <li class="font"><a href="events.php">Events</a></li>
              <li class="font"><a href="team.php">Meet The Team</a></li>
              <li class="font"><a href="lesson.php">Lessons</a></li>
              <li class="font"><a href="gallery.php">Gallery</a></li>
              <li class="font"><a href="about-us.php">About Us</a></li>


              <?php if(isset($_SESSION['user_uname'])): ?>
                <li class="profile"><a href="admin_profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
              <?php endif; ?>


              <?php if(!isset($_SESSION['user_uname'])):?>
              <button class="login" onclick="document.getElementById('id02').style.display='block'">Login</button>
              <?php endIf;?>
            </ul>
          </div>
      </div>
