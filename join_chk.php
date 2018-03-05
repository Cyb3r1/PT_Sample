<?php
	require_once "./db.php";
	session_start();
  if(isset($_SESSION["is_login"])){
    header("location:index.php");
    exit();
  }
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);

  if(!empty($_POST['id']) && !empty($_POST['pw']) && !empty($_POST['name'])){
    $id = mysql_real_escape_string($_POST['id']);
    $pw = mysql_real_escape_string($_POST['pw']);
    $name= mysql_real_escape_string($_POST['name']);
    $pw = sha1($pw);
    #echo "INSERT INTO user(user_name, user_id, user_pw) VALUES ('{$name}','{$id}','{$pw}');";
    @mysql_query("INSERT INTO user(user_name, user_id, user_pw) VALUES ('{$name}','{$id}','{$pw}');");
    if(mysql_errno()){
      echo '<script>alert("Join Error");</script>';
      echo "<meta http-equiv='refresh' content='0;url=join.php'>";
    }else{
      echo '<script>alert("Join Success");</script>';
      echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
  }
?>
