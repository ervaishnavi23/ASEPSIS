<?php
if (isset($_POST['Send Message'])) {
	$to = "ervaishnavi23@gmail.com";
	$name = $_POST['name']
	$from = $_POST['email']
	$Message = $_POST['message']

	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to,$message,$headers);
	echo "Mail Sent. Thank you";
}
?>