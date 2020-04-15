<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
  <title>Bakkerij Leiden - Dashboard</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="../css/style-login.css" />          
</head>
<body>

<!-- Login. -->
<div class="login">
  <!-- The heading for login page. -->
  <div class="heading">
    <h1>Login</h1>
    
  </div>
  <!-- Form that uses the method post to get data from the database. -->
  <form action="config.php" method="post">
    <input class="username" name="username" type="text" maxlength="50" placeholder="Gebruikersnaam" required>
    <input class="password" name="password" type="password" maxlength="50" placeholder="Wachtwoord" required>
    <!-- Submit button. Sends all data to config.php. -->
       <div id="login"><input type="submit" value="Login"></div>
    <a href="../index.php"><div id="terug"> Terug </div></a>
  </form>
  <!-- End of form. -->
</div>
<!-- End of login. -->

</body>
</html>