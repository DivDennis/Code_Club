<?php include '../header.php'; ?>
<link rel="stylesheet" href="../css/style.css">

 <body>
      <div class="container">
          <div id="nav">
            <ul>
              <li class="font"><a class="active" href="../index.php">Home</a></li>
              <li class="font"><a href="../../public/forum.php">Forum</a></li>
              <li class="font"><a href="../../public/events.php">Events</a></li>
              <li class="font"><a href="../../public/team.php">Meet The Team</a></li>
              <li class="font"><a href="../../public/lesson.php">Lessons</a></li>
              <li class="font"><a href="../../public/gallery.php">Gallery</a></li>

              <?php if($_SESSION['admin_level']==2): ?>
                <li class="profile"><a href="../../public/profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
              <?php endif; ?>

              <?php if($_SESSION['admin_level']==1): ?>
                <li class="profile"><a href="../../public/admin_profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
              <?php endif; ?>



            </ul>
          </div>
      </div>
      </body
