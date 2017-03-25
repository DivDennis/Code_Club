<?php session_start(); ?>
<?php include 'header.php' ?>

<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">

<body>
  <div class="container-fluid">

  <h1 class='elegantshadow'>Community Forum</h1>

  <?php include 'nav.php' ?>

      <br>

      <?php include '../private/connection/fquestion_connection.php' ?>

      <?php

      $sql="SELECT * FROM $tbl_name ORDER BY id DESC";

      // OREDER BY id DESC is order result by descending

      $result=mysql_query($sql);

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

  while($rows = mysql_fetch_array($result)){

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

  mysql_close();

  ?>

  </div>



  <div style="float: right; margin: 5px;">

  <a href="../public/views/new_topic.php"><strong>Create New Topic</strong></a>

  </div>


</div>
  </body>
