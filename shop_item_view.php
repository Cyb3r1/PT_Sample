<?php
	require_once "./db.php";
	session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
  if(empty($_GET['no'])){
    echo "<meta http-equiv='refresh' content='0;url=member.php'>";
  }
  $no = (int)$_GET['no'];
  $result = @mysql_query("SELECT * FROM shop WHERE prod_no={$no}");
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
										<h1><?php echo $row['prod_name'].'($'.$row['prod_price'].')';?></h1>
									</header>
                  <h2>Slave.</h2><br>
                  <h2 id="content"></h2>
                  <img src="<?php echo $row['prod_image'];?>" alt="" style="width:300px; height:300px;"/>
                  <p><?php echo $row['prod_inform'];?></p>
		  <form method="post" action="shop_item_buy.php">
		  	<input type="hidden" name="prod_no" id="prod_no" value="<?=$row['prod_no']?>" />
		  	<input type="hidden" name="prod_name" id="prod_name" value="<?=$row['prod_name']?>" />
		  	<input type="hidden" name="prod_price" id="prod_price" value="<?=$row['prod_price']?>" />
			<div class="row uniform">
			 	<div>
					<input type="submit" value="Buy" class="special"/>
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
