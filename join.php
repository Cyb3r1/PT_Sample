<?php
	require_once "./db.php";
	session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Item shop - 아이템 샵</title>
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
										<h1>Join</h1>
									</header>
                  <form method="post" action="join_chk.php">
                    <div class="row uniform">
                      <div class="12u$">
                        <input type="text" name="name" id="name" value="" placeholder="name..." />
                      </div>
                      <div class="12u$">
                        <input type="text" name="id" id="id" value="" placeholder="id..." />
                      </div>
                      <div class="12u$">
                        <input type="password" name="pw" id="pw" value="" placeholder="password..." />
                      </div>
                      <div class="12u$">
                        <ul class="actions">
                          <li><input type="submit" value="Join" class="special" /></li>
                        </ul>
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
