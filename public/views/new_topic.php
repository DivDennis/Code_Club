<?php session_start(); ?>
<?php include '../header.php' ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">

<body>

  <?php include './navbar.php' ?>

<table>

<form class="form-horizontal" name="form1" method="post" action="../service/add_new_topic.php">

<div class="new_topic_form">

    <h1 class="heading"> Create New Topic</h1>

  <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Topic:</label>
    <div class="col-sm-10">
      <input type="text" name="topic" class="form-control" id="topic" placeholder="Topic" required>
    </div>
  </div>

  <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">Details:</label>
    <div class="col-sm-10">
      <input type="text" name="detail" class="form-control" id="detail" placeholder="Details" required>
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
    </div>
  </div>

    <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email Address:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Submit" value="Submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</div>

</form>

</table>



</body>
