<?php
	require_once "./db.php";
	session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
	// get shop member list
	$result = mysql_query("SELECT * FROM shop LIMIT 6");
?>
<!DOCTYPE html>
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

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Cyberone PT Team<br />
											</h1>
											<p>Hello World! XD</p>
										</header>
										<p>Introduce our team.</p>
										<ul class="actions">
											<li><a href="member.php" class="button big">More.</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/cyberone_ci.png"  style="width: 50%; height: 50%" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Cyberone PT Team</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-diamond"></span>
											<div class="content">
												<h3>Web</h3>
												<p>Find Vulnerability, more deep.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>System</h3>
												<p>Find Vulnerability in your service from simple bof to another technic.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Mobile</h3>
												<p>Find Vulnerability in your mobile app.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
												<h3>IoT</h3>
												<p>Find Vulnerability in your IoT devices.</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Team member</h2>
									</header>
									<div class="posts">
									<?php
										while ($row = mysql_fetch_assoc($result)) {
											echo '<article>';
											echo '<a href="member_view.php?no='.$row['prod_no'].'" class="image"><img src="'.$row['prod_image'].'" alt="" /></a>';
											echo '<h3>'.$row['prod_name'].'</h3>';
											echo '<p>'.substr($row['prod_inform'],0,100).'... </p>';
											echo '<ul class="actions"><li><a href="member_view.php?no='.$row['prod_no'].'" class="button">More</a></li></ul></article>';
										}
									?>
									</div>
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
