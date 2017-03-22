<?php session_start(); ?>
<?php include '../header.php' ?>
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">

<style>

.container{
    background-color: #2980b9;
}

.heading{
    color:  #2980b9;
    text-align: center;
    padding-bottom: 2%;
}

.new_topic_form{
    padding-top: 4%;
    padding-right: 90px;
}

</style>

<body>

    <?php include './navbar.php' ?>

<table>

<form class="form-horizontal" name="form1" method="post" action="../service/add_new_topic.php">

<div class="new_topic_form">

    <h1 class="heading"> Create New Lesson </h1>

  <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Topic:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="Topic" required>
    </div>
  </div>

  <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">Lorem:</label>
    <div class="col-sm-10">
      <input type="text" name="detail" class="form-control" id="detail" placeholder="Details" required>
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Lorem:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" placeholder="Lorem" required>
    </div>
  </div>

    <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Lorem:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Lorem" required>
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
