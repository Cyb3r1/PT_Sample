<?php
	require_once "./db.php";
	session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
  if(empty($_POST['prod_no'])){
    echo "<meta http-equiv='refresh' content='0;url=member.php'>";
  }
  $no = (int)$_POST['prod_no'];
  $result = @mysql_query("SELECT * FROM shop WHERE prod_no=${no}");
  $row = @mysql_fetch_assoc($result);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Cyb3r1 House</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Sidebar -->
		<?php
			$saved_price = $row['prod_price'];
			$post_price = $_POST['prod_price'];
			
			echo '<script>';
			if ($saved_price != $post_price) {
				echo 'alert("ERROR!!");history.back(-1);';
			} else {
				echo 'alert("OK!!");document.location.href="shop.php"';
			}
			echo '</script>';	
	
			require_once 'menu.php';
		?>


		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

	</body>
</html>
