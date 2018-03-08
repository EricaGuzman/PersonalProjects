<?php
	$title = "Team Project 2";
	$file = fopen('users/configuration.txt', 'rb'); //opens the file for read only
	$usernames = file('users/configuration.txt');	
	$isEntered = $_SERVER['REQUEST_METHOD'] === 'POST';
	$loginerror = '';
	$usererror = '';
	$passerror = '';
	$username='';
	$password='';
	$welcome='';



	session_start();
	$_SESSION['user'] = $username;
	
	if ($isEntered){

		
		//VALIDATION ----

	$username = $_POST['username'];
	$password = $_POST['pass'];	
	//reads file into array
	$lines = file('users/configuration.txt');
	
	//if the username input is empty 
	if (empty($username)){
        $usererror = "Please enter a username";
    }
	//if the password input is empty
	if (empty($password)){
		$passerror = 'Please enter a password';
	}

	if (isset($username) && isset($password)){
		
	foreach($lines as $lineNumber=>$user){

		if ($lineNumber> 1){
		//takes out comma and separates the strings into the array
		$arrays = explode(',', $user);	
		
		$trimmed = array_map('trim',$arrays);

			
			if ($username == $trimmed[0] && $password == $trimmed[1]){

			//$welcome =  'Welcome ' . $_SESSION['user'];//just for testing
				$loginerror = '';
				header('Location: page2.php');
				break;
			}
			else{
				$loginerror = 'Wrong username/password';
			}
			
		}

		//closes the file
		//fclose($file);
		}		
	}
}
 	
	
	
?>
<!doctype html>
<html>
	<head>
		<meta charset ="utf-8">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
		</head>
	<body>
		<header>
		<div id="logo">DigiFile</div>
		<nav>Home| About</nav>
		</header>
		<main>
		<section>
			<h3>Login</h3>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="info" method="POST" novalidate>
				<label>Username:</label><input type="text" name="username" class="texts" value="<?php echo $username; ?>"><span class="error"><?php echo $usererror;?></span><br>
				<label>Password:&nbsp;</label><input type="password" name="pass" class="texts" value="<?php echo $password; ?>"><span class="error"><?php  echo $passerror; echo $loginerror;?></span><br>

				<input type="submit" name= "login" class="login">
				<span class="welcome"><?php echo $welcome;?></span>

			

			</form>
		</section>
		</main>
	</body>
</html>