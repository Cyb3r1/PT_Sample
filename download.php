<?php
/*
	if($_SESSION['auth']>1){
		echo "<script>alert('Access Denied.');history.back();</script>";
	}	*/
	if(empty($_GET['f'])){
		echo "<script>alert('Error occured!');history.back();</script>";
	}
	$fn = $_GET['f'];
	$path = '/var/www/html/data/'.$fn;

	header('Content-Type: application/x-octetstream');
	header('Content-Disposition: attachment; filename="'.$fn.'"');
	header('Content-Length: '.filesize($path));
	header('Content-Transfer-Encoding: binary');

	flush();
	if($fp = fopen($path,'r')){
		fpassthru($fp);
		fclose($fp);
	}
?>
