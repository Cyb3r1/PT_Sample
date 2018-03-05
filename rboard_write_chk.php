<?php
	require_once "./db.php";
	session_start();
  if(!isset($_SESSION["is_login"])){
    header("location:login.php");
    exit();
  }
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);

  if(!empty($_POST['title']) && !empty($_POST['content'])){
    $title = mysql_real_escape_string($_POST['title']);
    $content = mysql_real_escape_string($_POST['content']);
    $author = $_SESSION['username'];
    #echo "INSERT INTO user(user_name, user_id, user_pw) VALUES ('{$name}','{$id}','{$pw}');";
    @mysql_query("INSERT INTO freeB(freeB_title, freeB_content, freeB_author, freeB_type) VALUES ('{$title}','{$content}','{$author}','rboard');");
    if(mysql_errno()){
      echo '<script>alert("Wrtie Error");</script>';
      echo "<meta http-equiv='refresh' content='0;url=rboard_write.php'>";
    }else{
      echo '<script>alert("Write Success");</script>';
      echo "<meta http-equiv='refresh' content='0;url=rboard.php'>";
    }
  }
?>
