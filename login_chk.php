<?php
	require_once "./db.php";
	session_start();
  if(isset($_SESSION["is_login"])){
    header("location:index.php");
    exit();
  }
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);

  if(!empty($_POST['id']) && !empty($_POST['pw'])){
    $id = mysql_real_escape_string($_POST['id']);
    $pw = mysql_real_escape_string($_POST['pw']);
    $pw = sha1($pw);
    $result = @mysql_query("SELECT * FROM user WHERE user_id='{$id}' AND user_pw='{$pw}'");
    $row = @mysql_fetch_assoc($result);
    if($row){
      $_SESSION['is_login'] = 1;
      $_SESSION['username'] = $row['user_id'];
      $_SESSION['no'] = $row['user_no'];
      echo '<script>alert("Login Success");</script>';
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }else{
      echo '<script>alert("Login Error");</script>';
      echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }

  }
?>
