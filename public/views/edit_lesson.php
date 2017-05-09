<?php session_start(); ?>
<?php
include '../header.php';
include '../../private/classes/Database.php';
?>
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">

<?php
include('../../private/connection/admin_connection.php');
?>

<body>

<?php include './navbar.php' ?>


<div class="edit-body">
<?php
function renderForm($topic = '', $details ='', $id = '')
{
?>

    <h1><php if ($id != '')?> Edit Lesson </h1>

    <div class="row"></div>
    <div class="col-md-2"></div>

    <div class="col-md-8">
    <form action="" method="post">

    <div>
    <?php if ($id != '') { ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p>ID: <?php echo $id; ?></p>
    <?php } ?>


    <strong>Topic: *</strong>
    <div class=" col-10"><input class="form-control" type="text" name="topic"
    value="<?php echo $topic; ?>"/><br/>
    </div>
    <strong>Details: *</strong>
    <div class=" col-10">
        <textarea type="text" name="detail" class="ckeditor" id="detail"  required><?php echo $details; ?></textarea>
        <br/>
    </div>
    <p>* required</p>
    <input type="submit" name="submit" value="Submit" />
    </div>
    </form>
    <div class="col-md-2"></div>
    </div>



<?php
}

include('../../private/connection/admin_connection.php');

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id']))
{
// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit']))
{
// make sure the 'id' in the URL is valid
if (is_numeric($_POST['id']))
{
// get variables from the URL/form
$id = $_POST['id'];
$topic = $_POST['topic'];
$details = $_POST['detail'];

// check that firstname and lastname are both not empty
if ($topic == '' || $details == '' )
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($topic, $lesson, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $mysqli->prepare("UPDATE lessons SET topic = ?, details = ?
WHERE id=?"))
{
$stmt->bind_param("ssi", $topic, $details, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: ./view_lessons.php");
}
}
// if the 'id' variable is not valid, show an error message
else
{
echo "Error!";
}
}
// if the form hasn't been submitted yet, get the info from the database and show the form
else
{
// make sure the 'id' value is valid
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// get 'id' from URL
$id = $_GET['id'];

 if($result = Database::getInstance()->query("select * from lessons WHERE id = {$id}")->fetch_assoc()){

      renderForm($result['topic'], $result['details'], $result['id']);

}
// show an error if the query has an error
else
{
echo "Error: could not prepare SQL statement";
}
}
// if the 'id' value is not valid, redirect the user back to the view.php page
else
{
header("Location: ./view_lessons.php");
}
}
}
else
{
renderForm();
}

// close the mysqli connection
$mysqli->close();
?>


</div>
</body>
<script src='../lib/ckeditor/ckeditor.js'></script>