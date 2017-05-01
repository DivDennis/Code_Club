
<div id="id02" class="modal">
  <form class="modal-content animate" action="..\public\service\login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/ramon.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <p  id="errText" style="color:red; text-align: center; display: none; font-size:12px">
         Your username or passowrd is incorrect!
      </p>
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="../public/views/password-recovery.php"> Forgot Password?</a></span>
    </div>
  </form>
</div>
<?php
 //show error message if user already exist
  if(isset($_GET['error'])){
      if($_GET['error']==2){
        echo'<script type="text/javascript">
                    document.getElementById("exist_error").style.display="block" ;
                    document.getElementById("id01").style.display="block";
                  </script>';
      }
  }
  //show error message if username or password is incorrect
  if(isset($_GET['error'])){
      if($_GET['error']==1){
        echo'<script type="text/javascript">
                    document.getElementById("errText").style.display="block" ;
                    document.getElementById("id02").style.display="block";
                  </script>';
      }
  }
?>
