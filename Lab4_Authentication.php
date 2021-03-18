<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Authenticator</title>
</head>

<body>
<form method = "post">

	<?php
	
	
	session_write_close();

		if(isset($_POST['id'])) {
			if(isset($_POST['email'])) {
				if(isset($_POST['access'])) {
			
			header("Location: Lab4_AmandaHajati.php");
		
		}}}
		else{
			
			header("Location: Lab4_Login.php");
		}
?>


</form>
</body>
</html>