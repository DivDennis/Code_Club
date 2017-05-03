<?php include '../header.php'; ?>
<link rel="stylesheet" href="../css/style.css">

 <body>

    <div class="container">
   <div class="navi" >
   <div id="nav">
     <ul>
     <li class="font"><a href="../index.php">Home</a></li>
     <li class="font"><a href="../forum.php">Forum</a></li>
     <li class="font"><a href="../events.php">Events</a></li>
     <li class="font"><a href="../team.php">Meet The Team</a></li>
     <li class="font"><a href="../lesson.php">Lessons</a></li>
     <li class="font"><a href="../gallery.php">Gallery</a></li>
     <li class="font"><a href="../about-us.php">About Us</a></li>

   <?php if (isset($_SESSION['admin_level'])): ?>
       <?php if($_SESSION['admin_level']==2): ?>
         <li class="profile"><a href="../profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
       <?php endif; ?>

       <?php if($_SESSION['admin_level']==1): ?>
         <li class="profile"><a href="../admin_profile.php"> My Account: <?=$_SESSION['user_uname']?></a></li>
       <?php endif; ?>
     <?php endif; ?>

   </ul>
   </div>
   </div>

     </div>
         </body>
