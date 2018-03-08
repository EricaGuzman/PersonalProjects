<?php
	$uploads = 'uploads/';
	$isUploaded = $_SERVER['REQUEST_METHOD'] === 'POST';
	$isitUploaded = '';
	$wasFileDeleted = '';
	
	//UPLOAD FILE 
	
	if ($isUploaded){	
	//LIST FILES

	
	
	$file = $_FILES['fileToUpload']['tmp_name'];
	$okay = move_uploaded_file($file, $uploads . $_FILES['fileToUpload']['name']);
	if ($okay){
		$isitUploaded = "Your file was uploaded!";
	} else {
		$isitUploaded = "Sorry, the file wasn't uploaded. Please try again.";
	}
	
	
	// DELETE FILE
	if(isset($_POST['remove_file']) && $file_Path = $_POST['fileToRemove'])
{
    // check if the file exist
    if(file_exists($file_Path))
    {
        unlink($file_Path);
        $wasFileDeleted = 'File Deleted';
    }else{
        $wasFileDeleted = 'File Not Exist';
    }
}
		session_unset();
		session_destroy();
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
		<nav>Home | <a href="index.php">Logout</a></nav>
		</header>
		<main>
	
		<section>
				<div class="allfiles">
		<?php 	
		if ($isUploaded){
		$files = scandir($uploads);
		foreach($files as $file){
		echo 'File: ' . $file . '<br>';
		}
		}
		?>
		</div>
			<h3>Upload</h3>
			
			<p><?php echo $isitUploaded; ?></p>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" enctype='multipart/form-data' name="info" method="POST" novalidate>
				Upload files here:<br>
				<input type="file" name="fileToUpload"><br>
				<input type="submit" value="Upload/View Files" name="submit" ><br><br>
				
				Remove files here:<br>
				
				<input type="text" name="fileToRemove"><br><?php echo $wasFileDeleted; ?>
				<input type = "submit" name="remove_file" value="Delete">
				
			</form>
		</section>
	
		</main>
	</body>
</html>