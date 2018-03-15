<?php
	require_once "./db.php";
	session_start();
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);

  if(!empty($_POST['title']) && !empty($_POST['content'])){
    $title = mysql_real_escape_string($_POST['title']);
    $content = mysql_real_escape_string($_POST['content']);
    $author = $_SESSION['username'];
    if(is_uploaded_file($_FILES['attachment']['tmp_name'])){
      $fn = str_replace("'","",$_FILES['attachment']['name']);
      $attachments = '/var/www/html/data/'.$fn.'_'.date('YmdHis',time());
      if(!move_uploaded_file($_FILES['attachment']['tmp_name'], $attachments)){
        echo "<script>alert('Error occure, contact admin!');history.back();</script>";
      }
    }else{
      $ced_attachments = '';
    }
    #echo "INSERT INTO user(user_name, user_id, user_pw) VALUES ('{$name}','{$id}','{$pw}');";
    @mysql_query("INSERT INTO freeB(freeB_title, freeB_content, freeB_author, freeB_type, freeB_attachment) VALUES ('{$title}','{$content}','{$author}','fboard','{$attachments}');");
    if(mysql_errno()){
      echo '<script>alert("Wrtie Error");</script>';
      echo "<meta http-equiv='refresh' content='0;url=fboard_write.php'>";
    }else{
      echo '<script>alert("Write Success");</script>';
      echo "<meta http-equiv='refresh' content='0;url=fboard.php'>";
    }
  }
?>
