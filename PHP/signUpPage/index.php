<?php
$title = 'Student Extra-curricular Form || Assignment 2';
$page_title = 'BC STUDENT PLACEMENT FORM';
$firstTime = ($_SERVER['REQUEST_METHOD'] != 'POST');
$validData = true;

$fullName = $studentID = $message = $student = $interest = $career = $clubInterest = '';
$fullNameError = $studentIdError = $messageError = $studentRegError = $interestError = $careerError = $clubInterestError = '';

if (!$firstTime){
	$fullName = $_POST['fullname']; 
	$studentID = $_POST['studentID'];
	$message = $_POST['message'];
	$career = $_POST['career'];
	
}
?>


<!doctype html>
<html lang="en">
<!--Head section-->
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8">
		<!--external css-->
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>

	<body>
	<div class="wrap">
			<header class="header">
				<h1 style="text-align: center;"><u><?php echo $page_title; ?></u></h1>
				<h4 style="text-align:center;">Matches students with organizations!</h4>
			</header>
			<main>
		<?php 
			
			//if not firstTime
				if (!$firstTime) {
					
					//validate full name 
					if(empty($fullName)){
						$validData = false;
						$fullNameError = 'Required field';
					} else if(strlen($fullName) < 3){
						$fullNameError = 'Your name must be longer than 3 character';
					}
					
					//validate student id
					if(empty($studentID)){
						$validData = false;
						$studentIdError = 'Require field';
					} else if(strlen($studentID) < 8){
						$studentIdError = 'Student ID must be 9 characters long';
					}					
					
					//validate message
					if(empty($message)){
						$validData = false;
						$messageError = 'Required field';
					}
					
					//validate student decision
					if (isset($_POST['radio'])) { // if options was checked
						echo $_POST['radio']; // echo the choice
					} else
						$student = $_POST['student'];
						$studentRegError = 'Required field';
						
						}
					
					//validate interest
					if(empty($interest)){
						$validData = false;
						$interestError = 'Please select your interest';
					}else{
						$interest = $_POST['interest'];
					}
					
					//validate interest
					if(empty($career) || $career == 'null'){
						$validData = false;
						$careerError = 'Please select your career';
					}
					
					//validate clubInterest
					if(empty($clubInterest)){
						$validData = false;
						$clubInterestError = 'Please select your preference';
					}else{
						$clubInterest = $_POST['clubInterest'];
					}
				
				
			//if firstTime or not validData, display form
				if ($firstTime or !$validData) { 
					include_once('sign-up.php'); 
				}
		?>
	<div class="process">
			<?php
						if (isset($_POST['submit']))
							{ 
							
								echo '<p>Name: ' . $fullName . '</p>'; 
								echo '<p>Student ID: ' . $studentID . '</p>';
								echo '<p>Message: ' . $message . '</p>';
								echo '<p>Are you a student: ' . $student . '</p>';
								echo '<p>Interest</p>';
					echo '<ul>';
						foreach($_POST['interest'] as $value)
						 {
							echo '<li>'.$value.'</li>';
						 }
					echo '</ul>';
								
								echo '<p>Career: ' . $career . '</p>';
								
								echo 'Club Interest';
								echo '<ul>';
								$clubInterest = range ([0],[3]);
					 foreach($clubInterest as $clubInterests){
									echo '<li> Selection: ' . $clubInterests . '</li>';
								}
								echo '</ul>';
							}
			?>
	</div>
				
		</main>
	</div>
	<footer>Erica Guzman &copy; &nbsp; &amp; <a href="mailto:someone@example.com">Email student</a>.</footer>
	</body>
</html>