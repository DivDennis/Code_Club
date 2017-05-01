<?php session_start(); ?>
<?php include 'header.php' ?>
<link rel="stylesheet" href="./css/index-style.css">

<html id="index-html">
<body>

<?php include 'navbar.php'; ?>


      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='title'>
        <span class="words">
          CODING CLUB
        </span>
        <br>
        <span class="words" id="hashtag">
        	#COMECODEWITHUS
        </span>
        <br>
        <span>
        	<a href="https://www.facebook.com/CodeClubVTDI/" class="glow"><img src="img/facebook.png"></a>
        	<a href="https://plus.google.com/101421869968347346310" class="glow"><img src="img/plus.png"></a>
        	<a href="https://www.instagram.com/vtdi_code_club/" class="glow"><img src="img/insta.png"></a>
        	<a href="twitter.com" class="glow"><img src="img/twitter.png"></a>
        </span>
        <br>
        <br>
        <a class="ghost-button" href="https://goo.gl/forms/0Flo9zEQriG7z7oC3">Get Involved</a>
        <a class="ghost-button" href="https://codeclubvtdi.wordpress.com/">News</a>
      </div>

    <!-- SCRIPTS -->
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript">
  function check(input){
    if (input.value != document.getElementById('passwordID').value){
      input.setCustomValidity('Password Must Be Matching.');
    }else{
      //input is valid -- reset the error message
    input.setCustomValidity('');
    }
  }
</script>

<?php if(isset($_GET['error'])):?>
    <script>
      document.getElementById('id02').style.display='block';
      document.getElementById('errText').style.display='block';
    </script>
<?php endIf;?>

</body>
</html>

<?php include 'modals/login.php' ?>
