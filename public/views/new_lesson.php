<?php session_start(); 

include '../../private/classes/Database.php';

$categories = [];

if($result = Database::getInstance()->query("SELECT * from categories")){
      $i = 0;
      while($row = $result->fetch_assoc()){
          $categories[$i] = $row;
          $i++;
      };
      
}
?>
<?php include '../header.php' ?>
<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">

<style>

.container{
    background-color: #2980b9;
}

.heading{
    color:  #2980b9;
    text-align: center;
    padding-bottom: 2%;
}

.new_topic_form{
    padding-top: 4%;
    padding-right: 90px;
}

</style>

<body>

    <?php include './navbar.php' ?>

<table>

<form class="form-horizontal" name="form1" method="post" action="../service/create_lesson.php">

<div class="new_topic_form">

    <h1 class="heading"> Create New Lesson </h1>

  <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Area</label>
    <div class="col-sm-10">
      <select name="category" class="form-control">
          <?php foreach($categories as $category): ?>
          <option value = "<?=$category['ID']?>"><?=$category['Name']?></option>
          <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Topic:</label>
    <div class="col-sm-10">
      <input type="text" name="topic" class="form-control" id="name" placeholder="Topic" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">Details:</label>
    <div class="col-sm-10">
      <textarea id="details" type="text" name="detail" class="ckeditor" id="detail" required></textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Submit" value="Submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</div>

</form>

</table>

<script src='../lib/ckeditor/ckeditor.js'></script>
