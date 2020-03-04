<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="CSS/style-login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
      <div id="shady"></div>
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
        <div id="login"><input type="submit" value="Login"></div>
        <div id="terug"><input type="submit" value="Terug"></div>
			</form>
		</div>
	</body>
</html>