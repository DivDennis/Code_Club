<?php

include '../../private/connection/users_connection.php';

$id = $_GET['id'];
$name=$_POST['name'];
$birthdate=$_POST['birthdate'];
$skills=$_POST['skills'];
$bio=$_POST['bio'];


if(isset($_FILES['photo'])){
   $errors= array();
   $file_name = $_FILES['photo']['name'];
   $file_size = $_FILES['photo']['size'];
   $file_tmp = $_FILES['photo']['tmp_name'];
   $file_type = $_FILES['photo']['type'];
   $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));

   $expensions= array("jpeg","jpg","png");

   if(in_array($file_ext,$expensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
   }

   if($file_size > 2097152) {
      $errors[]='File size must be excately 2 MB or less';
   }

   if(empty($errors)==true) {
      move_uploaded_file($file_tmp,"../photos/".$file_name);
      echo "Success";
   }else{
      print_r($errors);
   }
}

$sql = "UPDATE $tbl_name SET name='".$name."' , birthdate='".$birthdate."', skills='".$skills."', bio='".$bio."', photo= '".$_FILES['photo']['name']."'  WHERE id=".$id."";

if ($conn->query($sql) === TRUE ) {
    header("Location: ../profile.php");

} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>
