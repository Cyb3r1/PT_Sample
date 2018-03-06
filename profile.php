<?php
	require_once "./db.php";
	session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
	$no = (int)$_GET['userno'];
	if(empty($no)){
		echo "<script>alert('Error occured!');</script>";
    	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	}
	$result = @mysql_query("SELECT * FROM user WHERE user_no='${no}';");
    $row = @mysql_fetch_assoc($result);
    if(!$row){
    	echo "<script>alert('Error occured!');</script>";
    	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
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
										<h1>Profile</h1>
									</header>
									<form method="post" action="changepw.php">
				                    <div class="row uniform">

				                      <div class="12u$">
									<p>Username : <?php echo $row['user_name']; ?></p>
									<p>ID : <?php echo $row['user_id']; ?></p>
									<!--<p>Current Password : <input type="text" name="oldpw" id="oldpw" value="" placeholder="Old Password..." /></p>-->
									<p>Password : <input type="text" name="newpw" id="newpw" value="" placeholder="New Password..." /></p>
									<input type="hidden" name="no" value="<?php echo $no;?>">     
				                      </div>
				                   
				                      <div>
				                          <input type="submit" value="Password change" class="special" />
				                      </div>
				                    </div>
				                  </form>
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
