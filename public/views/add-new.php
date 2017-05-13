<?php session_start(); ?>
<?php include '../header.php' ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">

<body>

  <?php include './navbar.php' ?>

<table>

<form class="form-horizontal" name="form1" method="post" action="../service/add_new_user.php">

<div class="new_topic_form">

    <h1 class="heading">Add New User</h1>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username:</label>
    <div class="col-sm-10">
      <input type="text" name="uname" class="form-control" id="uname" placeholder="Username" required>
    </div>
  </div>

      <div class="form-group">
    <label for="birthdate" class="col-sm-2 control-label">Date of Birth:</label>
    <div class="col-sm-10">
      <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Eg: May 12, 2016" required>
    </div>
  </div>

    <div class="form-group">
    <label for="Password" class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="psw" class="form-control" id="psw" placeholder="Password" required>
    </div>
  </div>

      <div class="form-group">
    <label for="Password" class="col-sm-2 control-label">Password-Repeat:</label>
    <div class="col-sm-10">
      <input type="password" name="pswrepeat" class="form-control" id="pswrepeat" placeholder="Password" required>
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
