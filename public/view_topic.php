<?php session_start(); ?>
<?php include 'header.php' ?>
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

<style> 

.container{
  background-color:#2980b9;
}

</style>

<?php include './navbar.php' ?>

<body>

<div class="container-fluid">

<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="coding_society"; // Database name 
$tbl_name="fquestions"; // Table name 
 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>

<br>
<br>
<div class="row">
  <div class="col-md-3"></div>

<div class="col-md-6">

<div class="panel panel-primary" style="width=50%">
  <!-- Default panel contents -->
  <div class="panel-heading">Comment:</div>

 <table class="table table-striped">
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

 <div class="col-md-3"></div>
</div>


<?php
$tbl_name2="fanswer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
?>

<div class="row">
 <div class="col-md-3"></div>

<div class="col-md-6">
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

  <div class="col-md-3"></div>
</div>

<?php
}
 
$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>

</div>
</body>