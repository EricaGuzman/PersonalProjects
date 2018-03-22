<!--style tag for styling-->
<!DOCTYPE html>
<html>
	<head>
		<link href="styles.css" rel="stylesheet" type="text/css"/>
		<title>Page 1</title>
	</head>
<body>
<main>
	<?php
	session_start();
	 #visit counter
		if ( !isset( $_SESSION['count'] ) )		
		 $formCounter = $_SESSION['count'] = 0;
		else $_SESSION['count']++;		
	include 'nav.php';
	?>
	<?php
	//show page counts:
		echo 'Page visits: <u>'.($_SESSION['count']).'</u><br/>';
		include 'functions.php';
		
	//email counts
		echo '<fieldset>
				<h3><u>Email page information here:</u></h3>
		<form action="mailform.php" method="POST">
			  <input type="hidden" name="recipient" value="PHP@localhost">
			  <input type="hidden" name="replyto" value="newuser@localhost">
			  <input type="hidden" name="from" value="newuser@localhost">
			  <input type="hidden" name="redirect" value="thankyou.html">
			  <input type="hidden" name="redirectonerror" value="emailerror.html">
			  <input type="hidden" name="subject" value="Customer Review">';
		echo'
					  <p>*First Name: <input type="text" name="FirstName" /></p>
					  <p>*Last Name: <input type="text" name="LastName" /></p>
					  <p>*Email:<input type="text" name="email" /></p>
				<p><textarea name="comments" cols="90" rows="3">';
			
					echo	'Page 1 visited '.($_SESSION["count"]).' times|| ';
					echo	'Page 2 =>' .($_SESSION["count1"]).' times|| ';
					echo	'Page 3 => '.($_SESSION["count2"]).' times|| ';
					echo	'Page 4 => '.($_SESSION["count3"]).' times|| ';
					echo	'Page 5=> '.($_SESSION["count4"]).' times.	
			
				</textarea></p>
				<input type="submit" name="submit" value="Send Email" />
		</form>
		</fieldset>';

	?>
</main>

</body>
</html>

