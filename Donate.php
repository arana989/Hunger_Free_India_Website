
<!DOCTYPE html>
<html>

<head>
	<title>Donate</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>

	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="Store_SignUp_data.php" method="post">
				<label for="chk" aria-hidden="true">Fill Details</label>
				<input type="text" placeholder="User Name" required="" name="username">
				<input type="email" placeholder="Email" required="" name="email">
				<input type="password" placeholder="Mobile Number" required="" name="Mobile_number">
				<input type="text" placeholder="Residential Address" name="Address">
				<input href="./"type="submit" value="Proceed to payment" class="button" name="proceed to payment">
			</form>
		</div>

		
	</div>
</body>

</html>