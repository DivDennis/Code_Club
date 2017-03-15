<?php session_start(); ?>
<?php include '../header.php' ?>
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../lib/bootstrap/js/bootstrap.min.js">

<style>

.container{
    background-color: #2980b9;
}

</style>

<body>

 <?php include './navbar.php' ?>

 <!-- ?php include '../../public/service/upload.php'  ?> -->

 <div class="container">

<form method="POST">

  <?php
  $id='1';
  $mysqli = new mysqli('localhost' , 'root' , '' , 'coding_society');
  $query = $mysqli->query("select * from users where id='$id' limit 0,1");
  $row = $query -> fetch_assoc();

  if (isset($_POST['update'])){

   $id=$_POST['id'];
   $name = $_POST['name'];
   $birthdate = $_POST['birthdate'];
   $skills = $_POST['skills'];
   $bio = $_POST['bio'];
   $result = $mysqli -> $query(" update users set name= '$name ' , birthdate='$birthdate ' , skills='$skills ' , bio= '$bio ' where id='$id'  ");
  if ($result) {
    echo "Successful";
  }
  else {
    echo "unsuccesful
  }
?>

<h3>Personal info</h3>

        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">ID:</label>
            <div class="col-lg-8">
        <input class="form-control" type="text" id="id" name="id" value="<?php echo $row['id'] ?>" readonly/>
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">Name:</label>
            <div class="col-lg-8">
    <input class="form-control" type="text" id="name" name="name" value="<?php echo $row['name'] ?>" />
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">Date of Birth:</label>
            <div class="c




            ol-lg-8">
                <input class="form-control" type="text"  id="birthdate" name="birthdate" value="<?php  echo $row['birthdate']?>"/>
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">Skills:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text"  id="skills" name="skills" value="<?php  echo $row['skills']?>"/>
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-md-3 control-label label-default">Bio:</label>
            <div class="col-md-8">
                <input class="form-control" type="text" id="bio" name="bio" value="<?php  echo $row['bio']?>"/>
            </div>
        </div>
                <input type="submit" id="submit" name="Update" class="btn btn-primary" value="submit"> <span></span>

                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
        </div>
    </div>
</div>
</div>
</form>
</hr>

</body>
