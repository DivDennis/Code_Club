<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">


<br>
<br>

<center>
<div class="comments">
<div class="panel panel-default">
  <div class="panel-heading">
   <center <h4 class="panel-title">Create Response</h4> </center>
  </div>
  <div class="panel-body">
<table width="800" border="0" cellpadding="0" cellspacing="1" bgcolor="#3498db">
<tr>
<form name="form1" method="post" action="service/add_response.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="5%"><strong>Name</strong></td>
<td width="0%">:</td>
<td width="90%"><input name="a_name" type="text" id="a_name" size="80" border-radius="50%" required></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="80" required></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="81.5" rows="5" id="a_answer" required></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit">
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
 </div>
</div>
</center>
