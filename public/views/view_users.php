<?php session_start(); ?>
<?php include '../header.php' ?>
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">

<body>
<?php include './navbar.php' ?>


<?php
include('../../private/connection/admin_connection.php');

$per_page = 50;

// figure out the total pages in the database
if ($result = $mysqli->query("SELECT * FROM users ORDER BY id"))
{
if ($result->num_rows != 0)
{
$total_results = $result->num_rows;
// ceil() returns the next highest integer value by rounding up value if necessary
$total_pages = ceil($total_results / $per_page);

// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
if (isset($_GET['page']) && is_numeric($_GET['page']))
{
$show_page = $_GET['page'];

// make sure the $show_page value is valid
if ($show_page > 0 && $show_page <= $total_pages)
{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}
else
{
// error - show first set of results
$start = 0;
$end = $per_page;
}
}
else
{
// if page isn't set, show first set of results
$start = 0;
$end = $per_page;
}

// display pagination
echo " <br><br><p><b>View Page:</b> ";
for ($i = 1; $i <= $total_pages; $i++)
{
if (isset($_GET['page']) && $_GET['page'] == $i)
{
echo $i . " ";
}
else
{
echo "<a href='view_users.php?page=$i'>$i</a> ";
}
}
echo "</p>";
?>
<br>

<div class="new-user">
<a href="./add-new.php"> Add New User </a>
</div>

<div class="table">

<div class="row header">
  <div class="cell">
   ID
  </div>
  <div class="cell">
   Username
  </div>
  <div class="cell">
    Name
  </div>
  <div class="cell">
    Date of Birth
  </div>
  <div class="cell">
    Administrative Level
  </div>
   <div class="cell">
    Edit
  </div>
  <div class="cell">
   Delete
 </div>
</div>

<?php
// loop through results of database query, displaying them in the table
for ($i = $start; $i < $end; $i++)
{
// make sure that PHP doesn't try to show results that don't exist
if ($i == $total_results) { break; }

// find specific row
$result->data_seek($i);
$row = $result->fetch_row();
?>

<div class="row">
  <div class="cell">
    <?php echo  $row[0]; ?>
  </div>
  <div class="cell">
    <?php echo $row[3]; ?>
  </div>
  <div class="cell">
    <?php echo $row[9]; ?>
  </div>
  <div class="cell">
    <?php echo $row[5]; ?>
  </div>
  <div class="cell">
    <?php echo $row[10]; ?>
  </div>
  <div class="cell">
    <?php echo '<a href="./edit_users.php?id=' . $row[0] . '">Edit</a>' ?>
  </div>
  <div class="cell">
    <?php echo '<a href="../service/delete_user.php?id=' . $row[0] . '">Delete</a>' ?>
 </div>
</div>

<br>


<?php
}

// close table>

}
else
{
echo "No results to display!";
}
}
// error with the query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>

