<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<style>
			.fra{
				color:white;
			}
		</style>
		<script type="text/javascript">
			function check()
			{
				var pass = document.getElementById("pass").value;
				if (pass == "")                                  
				{ 
					alert("Please enter your password"); 
					return false; 
				}
				if (pass != "12345ABC")                                  
				{ 
					alert("Please enter correct password"); 
					return false; 
				}
			}
		</script>
	</head>
	
	<body>
	<?php 
	include "header.html";
	?>
	<center>
		<form action = "index3.php" method="post" onsubmit = "return check();">
		<h3 class=fra>WELCOME TO WEBTECH</h3>
		<h4 class=fra>LOGIN</h4>
		<h2 class=fra>Password</h2><br>
		<input type="password" id="pass"><br><br>
		<input type="submit" value="submit"><br><br>
		</form>
	</center>
	<?php 
	include "footer.html";
	?>

	</body>
</html>