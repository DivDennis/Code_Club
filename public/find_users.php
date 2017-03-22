<?php require('../private/classes/Database.php'); ?>

<style>
.user-container{
   width: 300px;
}
.user-list{
    padding: 10px;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
  }
.user-list > img{
   width: 50px;
   height: 50px;
   border-radius: 50%;
}
.user-list a{
    margin-top: -20px;
}
</style>
<div class="user-container">
<?php


  $resultSet = [];
  if($resultSet = Database::getInstance()->query('select * from users')){

      while($row = $resultSet->fetch_assoc()){
?>
     <div class="user-list">
        <img style="" src="./img/abi.png">
      <?php  if($row['admin_level']==1): ?>
        <a href="./admin_profile.php?id=<?=$row['id']?>" ><?=$row['uname']?></a>
      <?php else : ?>
        <a href="./profile.php?id=<?=$row['id']?>" ><?=$row['uname']?></a>
      <?php endif; ?>
     </div>
  <?php
     }
   }
 ?>
</div>
