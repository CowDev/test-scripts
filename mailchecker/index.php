<!DOCTYPE html>
<html>
<head>
	<title>Check if mail is valid</title>
</head>
<body>
<?php
if( isset( $_POST['mails'] ) ){
	$emails = preg_split( '/\r\n|[\r\n]/', $_POST['mails'] );
	echo '<h1>Geldige mailadressen:</h1>';
	foreach( $emails as $mail ){
		$domain = explode( '@', $mail );
		if( filter_var($mail, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain[1], 'MX') ){
			echo $mail . "\n\r";
		}
	}
} ?>
	<br />
	<br />
	<hr />
	<form action="" method="POST">
		<textarea name="mails" rows="10" cols="50"></textarea><br />
		<input type="submit">
	</form>
</body>
</html>