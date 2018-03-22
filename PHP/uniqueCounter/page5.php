<!--style tag for styling-->
<!DOCTYPE html>
<html>
	<head>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
		<title>Page 5</title>
	</head>
<body>
<?php
session_start(); 
 #visit counter
    if ( !isset( $_SESSION['count4'] ) )		
     $formCounter = $_SESSION['count4'] = 1;
	else $_SESSION['count4']++;
include 'nav.php';
?>
<?php
//show page counts:
	echo 'Page visits: <u>'.($_SESSION['count4']).'</u><br/>';
	include 'functions.php';
 ?>
 </body>
 </html>
