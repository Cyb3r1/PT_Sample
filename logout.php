<?php
session_start();
unset($_SESSION['is_login']);
unset($_SESSION['username']);
session_destroy();
?>
<meta http-equiv='refresh' content='0;url=index.php'>
