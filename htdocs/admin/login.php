<?php session_start(); ?>

<?php include ('../includes/head.php'); ?>
    <!-- login -->
		<div class="login">
      
			<h1>Login</h1>
			<form action="login-setup.php" method="post">
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
      <!-- end login -->
		</div>
	</body>

</html>

<?php

include ('../includes/database.php');

if (isset($_POST['login']))
{
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $password = trim(mysqli_real_escape_string($con, $_POST['password']));
    $hash_password = md5($password);
    $sel_user = "select * from users where email ='$email' AND password='$hash_password' ";
    $run_user = mysqli_query($con, $sel_user) or die("error: " . mysqli_error($con));
    $check_user = mysqli_num_rows($run_user);

    if ($check_user > 0)
    {
        $db_row = mysqli_fetch_array($run_user);

        $_SESSION['email'] = $db_row['email'];
        $_SESSION['name'] = $db_row['name'];
        $_SESSION['user_id'] = $db_row['id'];
        $_SESSION['role'] = $db_row['role'];

        if ($db_row['role'] == 'admin')
        {
            echo "<script>window.open('index.php?logged_in=You have successfully Logged In!','_self')</script>";
        }
        elseif ($db_row['role'] == 'guest')
        {
            echo "<script>alert('Password or Email is wrong, your are guest not admin!')</script>";
        }
    }
    else
    {
        echo "<script>alert('Password or Email is wrong, try again!')</script>";
    }
}
?>
