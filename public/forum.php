<?php session_start(); ?>
<?php include 'header.php' ?>

<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">

  <div class="container-fluid">

  <h1 class='elegantshadow'>Community Forum</h1>

  <?php include 'nav.php' ?>

      <br>

      <?php include '../private/classes/Database.php'; ?>

      <?php

      $sql="SELECT * FROM fquestions ORDER BY id DESC";

      // OREDER BY id DESC is order result by descending

      $result=Database::getInstance()->query($sql);

      ?>

      <div class="table">

      <div class="row header">

        <div class="cell">

         #

        </div>

        <div class="cell">

          Topic

        </div>

        <div class="cell">

          Views

        </div>

        <div class="cell">

          Replies

        </div>

         <div class="cell">

          Date/Time

        </div>

      </div>



  <?php

  // Start looping table row

  while($rows = $result->fetch_assoc()){

  ?>



      <div class="row">

        <div class="cell">

          <?php echo $rows['id']; ?>

        </div>

        <div class="cell">

          <a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR>

        </div>

        <div class="cell">

         <?php echo $rows['view']; ?>

        </div>

        <div class="cell">

         <?php echo $rows['reply']; ?>

        </div>

        <div class="cell">

         <?php echo $rows['datetime']; ?>

        </div>

      </div>

  <?php

  // Exit looping and close connection

  }


  ?>

  </div>



  <div style="float: right; margin: 5px;">

  <a href="../public/views/new_topic.php"><strong>Create New Topic</strong></a>

  </div>


</div>

  </body>

  </html>
