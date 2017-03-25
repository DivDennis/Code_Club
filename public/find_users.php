<?php session_start(); ?>
<?php include './header.php' ?>
<?php require('../private/classes/Database.php'); ?>
<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">


<body>

<?php include './nav.php' ?>

<br>

<div class="col-md-7">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Find Friends</h3>
  </div>
  <div class="panel-body">

    <div class="col-md-4 col-md-offset-3">
            <form action="" method="GET" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            	<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>

<br>
<br>
<br>

<div class="user-container">

<?php
$resultsPerPage =7;
  $resultSet = [];
  $query = "select * from users  LIMIT $resultsPerPage";
  if (isset($_GET['search'])){
      $q = $_GET['search'];
      $query = "select * from users where uname like '%".$q."%' LIMIT $resultsPerPage";
  }
  if($resultSet = Database::getInstance()->query($query)){

      while($row = $resultSet->fetch_assoc()){
?>
     <div class="user-list">
       <?php if ($row['photo'] !== null): ?>
     <img src="./photos/<?= $row['photo'];?>">
     <?php else: ?>
       <img src="./img/profile_avatar.png" alt="">
       <?php endif; ?>
      <?php  if($row['admin_level']==1): ?>
      <strong><a href="./admin_profile.php?id=<?=$row['id']?>" ><?=$row['uname']?></a></strong>
        <br>
        <a href="./admin_profile.php?id=<?=$row['id']?>"  class="user-name"><?=$row['name']?></a>
      <?php else : ?>
      <strong>  <a href="./profile.php?id=<?=$row['id']?>" ><?=$row['uname']?></a></strong>
        <br>
        <a href="./profile.php?id=<?=$row['id']?>"  class="user-name"><?=$row['name']?></a>
      <?php endif; ?>
     </div>
  <?php
     }
   }
 ?>
</div>
</div>
</div>
</div>

<div class="col-md-5">
<div class="user-ads-2">

<img src="http://placehold.it/450x250">
<br>
<br>
<br>
<img src="http://placehold.it/450x250">
</div>
</div>



</body>
