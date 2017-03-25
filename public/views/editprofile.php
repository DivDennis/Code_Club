<?php session_start(); ?>
<?php include '../header.php' ?>
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../lib/bootstrap/js/bootstrap.min.js">
<link rel="stylesheet" href="../css/style.css">

<body>

 <?php include './navbar.php' ?>



 <div class="container">



<form action="../service/upload.php?id=<?=$_SESSION['userId']?>" method="POST" enctype="multipart/form-data">



<h3>Personal info</h3>



        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">Image:</label>
            <div class="col-lg-8">
    <input class="form-control" type="file" id="name" name="photo"   />
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">Name:</label>
            <div class="col-lg-8">
    <input class="form-control" type="text" id="name" name="name"  />
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">Date of Birth:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text"  id="birthdate" name="birthdate"/>
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-lg-3 control-label label-default">Skills:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text"  id="skills" name="skills"/>
            </div>
        </div>
        <div class="form-group">
            <label label-default="" class="col-md-3 control-label label-default">Bio:</label>
            <div class="col-md-8">
                <input class="form-control" type="text" id="bio" name="bio"/>
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
