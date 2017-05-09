<?php 
  session_start(); 
  include '../private/classes/Database.php';
?>

<?php
    //get all categories to display in the submenu
    $result = Database::getInstance()->query("Select * from categories");
    $sub_menu = [];
    $i = 0;
    if($result){
        while($data = $result->fetch_assoc()){
            $sub_menu[$i] = $data;
            $i++;
        }
    }
   
    //reintialize counter
    $i = 0;

    //get all topic pertaining to a selected topic
    $category_id = (isset($_GET['category'])) ? Database::getInstance()->escape_string($_GET['category']) : 1;
    $result = Database::getInstance()->query("Select topic from lessons where fk_category_id = $category_id");
    $topics = [];
    if($result){
        while($row = $result->fetch_assoc()){
            $topics[$i] = $row["topic"];
            $i++;
        }
    }

    //reintialize counter
    $i = 0;

    $topic = (isset($_GET['topic']))?Database::getInstance()->escape_string($_GET['topic']): '';
    //get a specific top details
    $result = Database::getInstance()->query("select * from lessons where topic = '$topic' and fk_category_id = $category_id LIMIT 1");
    $lesson = [];
    if($result){
        while($row = $result->fetch_assoc()){
                $lesson = $row;
        }
    }

 ?>

        <link rel="stylesheet" href="css/lesson.css">
    <body>
        
<h1 class='elegantshadow'>Lessons & Activites</h1>

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
<?php if (isset($_SESSION['admin_level'])): ?>
    <?php if($_SESSION['admin_level']==2): ?>
      <li class="profile"><a href="./profile.php"> My Account: <?= $_SESSION['user_uname']?></a></li>
    <?php endif; ?>

    <?php if($_SESSION['admin_level']==1): ?>
      <li class="profile"><a href="./admin_profile.php"> My Account: <?=$_SESSION['user_uname']?></a></li>
    <?php endif; ?>
  <?php endif; ?>

</ul>
</div>
</div>
<div class="sub-nav">
 <div class="contianer">
  <ul id="topics"> 
    <?php foreach( $sub_menu as $menu): ?>
       <li class="font" ><?= "<a href='./lesson.php?category=".$menu["ID"]."'>".$menu["Name"]."</a>";?></li>
    <?php endforeach ?>
  </ul>
 </div>
</div>


<div class="sidenav">
    <div id="sidebar" class="card card-2">
    <ul>
    <?php foreach($topics as $topic): ?>
        <li class="nav2"><a href="<?='./lesson.php?category='.$category_id .'&topic='.$topic?>"><?= $topic ?></a></li>
    <?php endforeach; ?>
    </ul>
    </div>
</div>



<div class="body">
  <?= (isset($lesson["details"]))?$lesson["details"]:"<h3>No lessons selected</h3>"; ?>
</div>

