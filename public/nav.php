<?php include 'header.php'; ?>

<style type="text/css">

.container{
    width:100%;
} 

ul {
    list-style-type: none !important;
    margin: 0;
    padding: 0;
    overflow: hidden;
    font-family: arial;
    width: 100%;
}

li {
    float: left;
    margin-right: 10px;

}

li a {
    display: block !important;
    text-align: center !important;
    padding: 14px 16px !important;
    text-decoration: none !important;
    color: #FFF !important;
    font-family: "lato", sans-serif !important;
}

li a:hover:not(.active) {
    background-color:#2980b9 !important;
}

.profile{
    float: right;
}

</style>

 <body>

 <div class="container">

<div class="navi" >
<div id="nav">
  <ul>
  <li class="font"><a href="index.php">Home</a></li>
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

  </div>
      </body>