<?php
	require_once "./db.php";session_start();
?>

<?php
	$conn = mysql_connect($host,$user,$pass) or die("connect error");
	mysql_select_db($db_schema);
  $result = mysql_query("SELECT * FROM freeB WHERE freeB_type='rboard' order by freeB_no desc");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<script>
		function checkAuth(id) { 
			if (id != 'admin') {
				alert('You are not Webmaster!');
			} else {
				document.location.href = "rboard_write.php";
			}
		}
	</script>
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
									</header>

                  <div class="table-wrapper">
                    <table>
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Title</th>
                          <th>Writer</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          while ($row = mysql_fetch_assoc($result)) {
      										?>
                          <tr>
                            <td><?php echo $row['freeB_no'];?></td>
                            <td><a href="view.php?no=<?php echo $row['freeB_no'];?>&type=freeB_type&typeN=rboard"><?php echo $row['freeB_title'];?></a></td>
                            <td><?php echo $row['freeB_author'];?></td>
                          </tr>
                          <?php
      										}
                        ?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                    <div align="right">
                      <?php
			#if(isset($_SESSION['is_login'])){
			  $username = $_SESSION['username'];
                          echo '<a href="javascript:checkAuth(\'' . $username . '\');" class="button" id="write" >Write</a>';
                       #}
                      ?>
                    </div>
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
