<?php

include '../../private/connection/users_connection.php';

$id = $_GET['id'];
$name=$_POST['name'];
$birthdate=$_POST['birthdate'];
$skills=$_POST['skills'];
$bio=$_POST['bio'];

$sql = "UPDATE $tbl_name SET name='".$name."' , birthdate='".$birthdate."', skills='".$skills."', bio='".$bio."' WHERE id=".$id."";

if ($conn->query($sql) === TRUE) {
    header("Location: ../profile.php");

} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
?>
