<?php session_start(); ?>
<?php include './header.php' ?>

<body>
        <?php include '../private/connection/message_connection.php' ?>
       <?php  include './nav.php' ?>

       <a href ="./messages.php"> Messages</a>
    
    
<?php 
if (isset($_GET["users"]) && !empty($_GET['users'])) {
echo "you can ";
}
else{
    $query_list=mysql_query("SELECT 'id', 'uname' FROM users");
    while($run_user = mysql_fetch_array($user_list)){
          $user = $run_user ['id'];
          $username = $run_user ['uname'];
          echo "<p><a href="send.php?user=$user">$username</a></p>";
    }
}
?>

</body>
