<	?php
				$name = $_POST['name'];
				$visitor_email = $_POST['email'];
				$message = $_POST['message'];
				$phone = $_POST['phone'];
				
				$email_from = 'mayankrajput2110@gmail.com';
				
				$email_subject = "New Inquiry from PayTrust site";
				
				$email_body = "User Name: $name.\n".
														"User Email: $visitor_email.\n".
														"User Number: $phone.\n".
														"User Message: $message.\n";
				
														
				$to = "bhupendrachouhan138@gmail.com";
				
				$headers = "From: $email_from \r\n";
				
				$headers .= "Reply-To: $visitor_email \r\n";
				
				mail($to,$email_subject,$email_body,$headers);
				
				header("Location: index.html");
				
				
	?>
