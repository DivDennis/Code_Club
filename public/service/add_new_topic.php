<?php
include '../../private/classes/Database.php'; 
// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
$datetime=date("d/m/y h:i:s"); //create date time
$sql="INSERT INTO fquestions(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=Database::getInstance()->query($sql);
if($result){
header("Location: ../forum.php");
}
else {
echo "ERROR";
}
mysql_close();
?>