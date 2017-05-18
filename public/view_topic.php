<?php session_start(); ?>
<?php include 'header.php' ?>
<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">


<?php include './nav.php' ?>

<body>

<div class="container-fluid">

<?php

include '../private/classes/Database.php';

// get value of id that sent from address bar
$id=$_GET['id'];
$sql="SELECT * FROM fquestions WHERE id=$id";
$result=Database::getInstance()->query($sql);
$rows=$result->fetch_assoc();
?>

<br>
<br>

<div class="comments">
<div class="panel panel-primary" style="width=50%">
  <!-- Default panel contents -->
  <div class="panel-heading">Comment:</div>

 <table class="table">
    <thead>
      <tr>
        <th><strong>Topic:</strong><?php echo $rows['topic']; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>Details:</strong><?php echo $rows['detail']; ?></td>
      </tr>
      <tr>
        <td><strong>By:</strong> <?php echo $rows['name']; ?></td>
      </tr>
      <tr>
      <td> <strong> Email:</strong> <?php echo $rows['email'];?> </td>
      </tr>
      <tr>
        <td><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

<?php
$tbl_name2="fanswer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=Database::getInstance()->query($sql2);
while($rows=$result->fetch_assoc()){
?>

<div class="comments">
<div class="panel panel-primary" style="width=50%">
  <!-- Default panel contents -->
  <div class="panel-heading">Response:</div>

 <table class="table table-striped">
    <thead>
      <tr>
        <th><strong>Id:</strong><?php echo $rows['a_id']; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>Name:</strong><?php echo $rows['a_name']; ?></td>
      </tr>
      <tr>
        <td><strong>Email:</strong> <?php echo $rows['a_email']; ?></td>
      </tr>
      <tr>
      <td> <strong> Answer:</strong> <?php echo $rows['a_answer'];?> </td>
      </tr>
      <tr>
        <td><strong>Date/time : </strong><?php echo $rows['a_datetime']; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>

<?php
}

$sql3="SELECT view FROM fanswer WHERE id='$id'";
$result3=Database::getInstance()->query($sql3);
$rows=$result->fetch_assoc();
$view=$rows['view'];

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO fanswer(view) VALUES('$view') WHERE id='$id'";
$result4=Database::getInstance()->query($sql4);
}

// count more value
$addview=$view+1;
$sql5="update fanswer set view='$addview' WHERE id='$id'";
$result5=Database::getInstance()->query($sql5);
?>


<?php include './views/response.php' ?>

</div>
</body>
