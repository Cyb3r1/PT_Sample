<?php
	require_once "./db.php";
	session_start();
	  if(!isset($_SESSION["is_login"])){
	    header("location:login.php");
	    exit();
	  }
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);

  if(!empty($_POST['no'])){
    $newpw = sha1(mysql_real_escape_string($_POST['newpw']));
    $no = $_POST['no'];
    @mysql_query("UPDATE user SET user_pw='${newpw}' WHERE user_no=${no}")
    
    if(mysql_errno()){
      echo '<script>alert("Error");</script>';
      echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
    }else{
      echo '<script>alert("Success");</script>';
      echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
    }
  }
?>
