<?php
	require_once "./db.php";
	session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
  $result = mysql_query("SELECT * FROM freeB order by freeB_no desc");
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
										<h1>Notice</h1>
                    <h2> Write </h2>
									</header>

                  <form method="post" action="rboard_write_chk.php">
                    <div class="row uniform">
                      <div class="12u$">
                        <input type="text" name="title" id="title" value="" placeholder="Title" />
                      </div>
                      <div class="12u$">
                        <textarea name="content" id="content" placeholder="내용" rows="6"></textarea>
                      </div>
                      <!-- Break -->
                      <div>
                          <input type="submit" value="Write" class="special" />
                          <input type="reset" value="초기화" />
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
