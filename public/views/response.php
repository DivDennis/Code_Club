<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">


<table>

<form class="form-horizontal" name="form1" method="post" action="./service/add_response.php">

<div class="new_topic_form">

    <h2 align="center"> Create Response</h1>

  <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Topic:</label>
    <div class="col-sm-10">
      <input type="text" name="a_name" class="form-control" id="a_name" placeholder="Name" required>
    </div>
  </div>

  <div class="form-group">
    <label for="detail" class="col-sm-2 control-label">Details:</label>
    <div class="col-sm-10">
      <input type="text" name="a_email" class="form-control" id="a_email" placeholder="Email" required>
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="a_answer" class="form-control" id="a_answer" placeholder="Answer" required>
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input name="id" type="hidden" value="<?php echo $id; ?>">
      <button type="submit" name="Submit" value="Submit" class="btn btn-default">Submit</button>
    </div>
  </div>

</div>

</form>

</table>