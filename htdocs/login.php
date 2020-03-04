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
			<form action="database.php" method="post">
				<label for="gebruikersnaam">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" id="gebruikersnaam" required>
				<label for="wachtwoord">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="wachtwoord" placeholder="wachtwoord" id="wachtwoord" required>
        <div id="login"><input type="submit" value="Login"></div>
        <div id="terug"><input type="submit" value="Terug"></div>
			</form>
		</div>
	</body>
</html>