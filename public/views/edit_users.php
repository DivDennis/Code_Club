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
function renderForm($uname = '', $name ='', $birthdate = '', $admin_level= '', $error = '', $id = '')
{
?>

    <h1><php if ($id != '')?> Edit Record <?php if ($error != '')  {
    echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
    . "</div>";
    }
    ?></h1>

    <div class="row"></div>
    <div class="col-md-2"></div>

    <div class="col-md-8">
    <form action="" method="post">

    <div>
    <?php if ($id != '') { ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p>ID: <?php echo $id; ?></p>
    <?php } ?>


    <strong>Username: *</strong>
    <div class=" col-10"><input class="form-control" type="text" name="uname"
    value="<?php echo $uname; ?>"/><br/>
    </div>
    <strong>Name: *</strong>
    <div class=" col-10"><input class="form-control" type="text" name="name"
    value="<?php echo $name; ?>"/><br/>
    </div>
    <strong>Date of Birth: *</strong>
    <div class=" col-10"><input class="form-control" type="text" name="birthdate"
    value="<?php echo $birthdate; ?>"/><br/>
    </div>
    <strong>Administrative Level: *</strong>
    <div class=" col-10"><input class="form-control" type="text" name="admin_level"
    value="<?php echo $admin_level; ?>"/>
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
$uname = htmlentities($_POST['uname'], ENT_QUOTES);
$name = htmlentities($_POST['name'], ENT_QUOTES);
$birthdate = htmlentities($_POST['birthdate'], ENT_QUOTES);
$admin_level = htmlentities($_POST['admin_level'], ENT_QUOTES);


// check that firstname and lastname are both not empty
if ($uname == '' || $name == '' || $birthdate == '' || $admin_level == '')
{
// if they are empty, show an error message and display the form
$error = 'ERROR: Please fill in all required fields!';
renderForm($uname, $name, $birthdate, $admin_level, $error, $id);
}
else
{
// if everything is fine, update the record in the database
if ($stmt = $mysqli->prepare("UPDATE users SET uname = ?, name = ?, birthdate = ?, admin_level = ?
WHERE id=?"))
{
$stmt->bind_param("sssii", $uname, $name, $birthdate, $admin_level, $id);
$stmt->execute();
$stmt->close();
}
// show an error message if the query has an error
else
{
echo "ERROR: could not prepare SQL statement.";
}

// redirect the user once the form is updated
header("Location: ./view_users.php");
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

 if($result = Database::getInstance()->query("select * from users WHERE id = {$id}")->fetch_assoc()){

      renderForm($result['uname'], $result['name'], $result['birthdate'], $result['admin_level'], '', $result['id']);

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
header("Location: ./view_users.php");
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
