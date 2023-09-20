<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<title>SIGN UP/ LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>

	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="Store_SignUp_data.php" method="post">
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" placeholder="User name" required="" name="username">
				<input type="email" placeholder="Email" required="" name="email">
				<input type="password" placeholder="Password" required="" name="password">
				<input type="circle" placeholder="e.g Ngo" name="Category">
				<input type="submit" value="Signup" class="button" name="signup">
			</form>
		</div>

		file:///C:/Users/Admin/Des C:\Users\arvind rana\Downloads\Grocery -20221015T151628Z-001\PBL
	</div>
</body>

</html>