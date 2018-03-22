<?php

//code for emailing page info
  $url = $_POST["redirect"];
  $errorurl = $_POST["redirectonerror"];
  $to = $_POST["recipient"];
  $from = $_POST["from"];
  $replyto = $_POST["email"];
  $subject = $_POST["subject"];
  $firstname = $_POST["FirstName"];
  $lastname = $_POST["LastName"];
  $email = $_POST["email"];
  $body = '<strong>Client Name:</strong> ' . $firstname . ' ' . $lastname . '<br><br>';
  $body .= '<strong>Client Email:</strong> ' . $email . '<br><br>';
  $body .= '<strong>Comments:</strong> ' . $_POST['comments'] . '<br><br>';
  $headers = 'From: ' . $from . '\r\n';
  $headers .= 'Reply-To: ' . $replyto . '\r\n';
  $headers .= 'MIME-Version: 1.0\r\n';
  $headers .= 'Content-type: text/html;  charset=iso-8859-1' . '\r\n';
  if (mail($to, $subject, $body, $headers)) {
	  header("Location: $url");
  } else {
	  header("Location: $errorurl");
  }
  
?>