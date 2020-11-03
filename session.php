<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT id, name, gender
								  FROM account 
								 WHERE UPPER(name) = UPPER('" . $user_check . "')");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   $name = $row['name'];
   
   if(!isset($_SESSION['login_user']))
   {
      header("location:index.php");
      die();
   }
?>