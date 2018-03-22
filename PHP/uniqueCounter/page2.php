<!--style tag for styling-->
<!DOCTYPE html>
<html>
	<head>
		<link href="styles.css" rel="stylesheet" type="text/css"/>	
		<title>Page 2</title>
	</head>
<body>
<?php
session_start(); 
 #visit counter
    if ( !isset( $_SESSION['count1'] ) )		
     $formCounter = $_SESSION['count1'] = 1;
	else $_SESSION['count1']++;
	
include 'nav.php';
?>
<?php
//show page counts:
	echo 'Page visits: <u>'.($_SESSION['count1']).'</u><br/>';
	include 'functions.php';
 ?>
</body>
</html>