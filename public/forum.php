<?php session_start(); ?>
<?php include 'header.php' ?>
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

<style>

.container{
    background-color: #2980b9;
}

.elegantshadow{
  margin: 0 0 0 0;
  text-align: center;
  color:white;
  background-color: #2980b9;
  letter-spacing: .1em;
  text-shadow: -1px -1px 1px white 2px 2px 1px #2980b9;
  height: 13%;
}

h1 {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 80px;
  padding: 20px 30px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
}

.table {
  margin-top: 20px;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  display: table;
}

@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #f6f6f6;
}

.row:nth-of-type(odd) {
  background: #e9e9e9;
}

.row.header {
  font-weight: 900;
  color: #ffffff;
  background: #3498db;
}

@media screen and (max-width: 580px) {
  .row {
    padding: 8px 0;
    display: block;
  }
}

.cell {
  padding: 6px 12px;
  display: table-cell;
}

@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 12px;
    display: block;
  }
}

</style>

<body>

    <h1 class='elegantshadow'>Community Forum</h1>
    <?php include 'nav.php' ?>

    <br>

    <?php include '../private/connection/fquestion_connection.php' ?>

    <?php
    $sql="SELECT * FROM $tbl_name ORDER BY id DESC";
    // OREDER BY id DESC is order result by descending
    $result=mysql_query($sql);
    ?>

    <div class="table">

    <div class="row header">
      <div class="cell">
       #
      </div>
      <div class="cell">
        Topic
      </div>
      <div class="cell">
        Views
      </div>
      <div class="cell">
        Replies
      </div>
       <div class="cell">
        Date/Time
      </div>
    </div>

<?php
// Start looping table row
while($rows = mysql_fetch_array($result)){
?>

    <div class="row">
      <div class="cell">
        <?php echo $rows['id']; ?>
      </div>
      <div class="cell">
        <a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR>
      </div>
      <div class="cell">
       <?php echo $rows['view']; ?>
      </div>
      <div class="cell">
       <?php echo $rows['reply']; ?>
      </div>
      <div class="cell">
       <?php echo $rows['datetime']; ?>
      </div>
    </div>
<?php
// Exit looping and close connection
}
mysql_close();
?>
</div>

<div style="float: right; margin: 5px;">
<a href="../public/views/new_topic.php"><strong>Create New Topic</strong></a>
</div>

</body>
