<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="CSS/styleDB.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="navibar">
       <a href="index.php"> <div id="logout"></div> </a>
    </div>
    <div id="sidebar"></div>
    <p>Welkom, <?=$_SESSION['name']?></p>
</body>
</html>

