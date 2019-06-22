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
				var name = document.getElementById("user").value;
				if (name == "")                                  
				{ 
					alert("Please enter your User Id"); 
					return false; 
				}
				if (name != "aman")                                  
				{ 
					alert("Please enter correct User Id"); 
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
		<form action = "index2.php" method="post" onsubmit = "return check();">
		<h3 class=fra>WELCOME TO WEBTECH</h3>
		<h4 class=fra>LOGIN</h4>
		<h2 class=fra>User Id</h2><br>
		<input type="text" id="user"><br><br>
		<input type="submit" value="next"><br><br>
		</form>
	</center>
	<?php 
	include "footer.html";
	?>

	</body>
</html>