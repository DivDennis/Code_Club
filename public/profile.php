<?php session_start(); ?>
<?php include 'header.php' ?>

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


<style>

*{padding:0px;margin:0px;}

body {
  margin:0px; 
  font: 16px "segoe ui";
  color: white;
  background-color: #55acee;
}

ul {
    list-style-type: none;
    margin: 0 0;
    padding: 0;
    overflow: hidden;
    font-family: Helvetica;
    background-color: #0077B5;
}

li {
    float: left;
}

li a {
    display: block;
    color: #fff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: "lato", sans-serif;
}

li a:hover:not(.active) {
    background-color:#2980b9 ;
}

.navi{
  width:100%;
  margin:0 auto;
  text-align:center;
}

#nav{
  background-color:#34465d;
}

.club{
    float: right;
}

.head{
  margin-top: 20px;
}

.profile{
  width:1000px;
  padding-top: 50px;
  margin: 0 auto;
}

.profile .bio{
  width: 700px;
}

.image{
  padding-top: 40px;
  width: 40%;
  float: left;
}

.profileinfo{
  padding-top: 60px;
  padding-left: 50px;
  width: 45%;
  float: left;
}

.profileinfo p{
  border-style: solid;
  border-width: 1px;
  border-top: 0px;
  border-left: 0px;
  border-right:0px;
}

img{
  width:300px;
  height:300px;
  border-radius: 50%;
  border-style: solid;
  border-width: 5px;
  border-color: #0077B5;
}

.opaque{
  padding: 20px;
  padding-left: 70px;
  opacity: .8;
  background-color: #0077b5;
  height: 470px;
}

.image a{
  padding-left: 145px;
  color: white;
  }

.profileinfo a{
    float: right;
    color: white;
    padding-top:20px;
  }

</style>

<body>
    
    <div class="navi" >
<div id="nav">
  <ul>
  <li class="font"><a href="index.php">Home</a></li>
  <li class="font"><a href="forum.php">Forum</a></li>
  <li class="font"><a href="events.php">Events</a></li>
  <li class="font"><a href="team.php">About Us</a></li>
  <li class="font"><a href="lesson.php">Lessons</a></li>
  <li class="font"><a href="gallery.php">Gallery</a></li>
  <li class="club"><a href="service/logout.php">Logout</a></li>
  <?php if(isset($_SESSION['user_uname'])): ?>
      <li class="club"><a href="profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
      <?php endif; 
  ?>
      
</ul>
</div>
</div>

<div class="profile">
<div class="opaque">
<h3>+ Bio</h3>
<p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <div class="image">
  <img src="img/profile_avatar.png">
  </div>

  <div class="profileinfo">
    <p><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;User Name: lorem Ipsum</p>
    <br>
    <br>
    <p><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;Name: Lorem Ipsum</p>
    <br>
    <br>
    <p><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Date of Birth: March 10, 2017</p>
    <br>
    <br>
    <p><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;Email Address: example@example.com</p>
    <br>
    <br>
    <p><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Proficient In: Web Development, Java, C# </p>

    <a href="editprofile.php">Edit&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></a>

  </div>
</div>
</div>


</body>