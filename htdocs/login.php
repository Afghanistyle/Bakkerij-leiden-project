<?php include('database.php'); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="CSS/style-login.css" rel="stylesheet" type="text/css">
	</head>


    <!-- login -->
		<div class="login">
      <!-- <div id="shady"></div> -->
			<h1>Login</h1>
			<form action="database.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="password" id="password" required>
		<div id="login"><input type="submit" value="Login"></div>
		<a href="index.php"><div id="terug"> Terug </div></a>
			</form>
      <!-- end login -->
		</div>
	</body>
</html>

<?php
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('niet werken lan!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();

    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
       
        if (password_verify($_POST['password'], $password)) {
          
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welkom ' . $_SESSION['name'] . '!';
        } else {
            header('location: pu.php');
        }
    } else {
        header('location: pu.php');
    }

	$stmt->close();
}

?>