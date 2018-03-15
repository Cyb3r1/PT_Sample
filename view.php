<?php
	require_once "./db.php";
	session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
  if(empty($_GET['no']) || empty($_GET['type']) || empty($_GET['typeN'])){
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  }
  $no = (int)$_GET['no'];
  $typeN = mysql_real_escape_string($_GET['typeN']);
  $type = mysql_real_escape_string($_GET['type']);
  $result = @mysql_query("SELECT * FROM freeB WHERE freeB_no={$no} AND {$type}='{$typeN}'");
  $row = @mysql_fetch_assoc($result);
  if(empty($row)){
    echo "<script>history.back(-1);</script>";
  }
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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<?php
									require_once "header.php";
								?>

							<!-- Content -->
								<section>

									<header class="main">
										<h1><?php echo $row['freeB_title'];?></h1>
									</header>
					                <h2 id="content"></h2>
					                <p><?php echo $row['freeB_content'];?></p>
					                <p></p>
					                <p><?php if($row['freeB_attachment']!='') echo '<a href="download.php?f='.$row['freeB_attachment'].'">Download</a>'?></p>


								</section>

						</div>
					</div>

				<!-- Sidebar -->
				<?php
					require_once 'menu.php';
				?>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
