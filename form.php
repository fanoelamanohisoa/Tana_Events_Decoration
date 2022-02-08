<?php
	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];

	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$to='bbboruah1994@gmail.com';
	$subject='Form Submission';
    $message= "name: ".$name."\n". 
    "phone: ".$phone."\n".
    "Email: ".$email."\n".
    "subject: ".$subject."\n".
    "message: ".$message;
	$headers="Form: ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo"<h3>Sent Successfully! Thank you"." ".$name.", we will contact to you shortly!</h3>";
	
	}
	else {
		echo"something went wrong!";
		 
		}
	}
?>

