<?php include('config.php'); ?>
<?php include('head.php');?>

<body>
<!-- header -->
<header>
<!-- menu -->
<div class="container">
  <div class="row">
    <div class="grid_12">
      <h1>
        <a href="index.php">
          <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
        <div class="stripes"></div>
        <div id='cssmenu'>
          <ul>
            <li>
              <a href='index.php'>
                <i class="fas fa-home"></i> Home
              </a>
            </li>
            <li>
              <a href='bestellen.php'>
                <i class="fas fa-shopping-cart"></i> Bestellen
              </a>
            </li>
            <ul></ul>
          </div>
        </header>

    <!-- login -->
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
      <!-- end login -->
		</div>
	</body>
	<?php include('footer.php');?>
</html>