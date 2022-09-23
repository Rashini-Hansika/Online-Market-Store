
<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv= "X-UA-Compatible content="ie=edge">
	<title>Register Form</title>
	<link rel="stylesheet"href="style2.css">
	<script src="login2.js"></script>
</head>
<body>

<div>

	<div class="form-2">
	<form action="process.php" method="post">
	
  <label for="firstname">First Name:</label><br>
  <input type="text" id="firstnamename" name="firstname"><br>
  
  <label for="lastnamename">Last name:</label><br>
  <input type="text" id="lastname" name="lastname"><br>
  
   <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  
  <label for="cpass">Comfirm Password:</label><br>
  <input type="password" id="cpass" name="cpass"><br>
  
  <input type="submit" value="Rejister" class="btn" name="btn-save">
 


	
	<p class="message"> Not Registered? <a href="#">Register</a></p>
	
	</form>
	
</div>

</body>
</html>	
	
	