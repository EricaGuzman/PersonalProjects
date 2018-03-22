<!--style tag for styling-->
<!DOCTYPE html>
<html>
	<head>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
		<title>Page 3</title>
	</head>
<body>
<?php
session_start(); 
 #visit counter
    if ( !isset( $_SESSION['count2'] ) )		
     $formCounter = $_SESSION['count2'] = 1;
	else $_SESSION['count2']++;
include 'nav.php';
?>
<?php
//show page counts:
	echo 'Page visits: <u>'.($_SESSION['count2']).'</u><br/>';
	include 'functions.php';
 ?>
</body>
</html>