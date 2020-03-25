<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
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
    <div id="navi">
        <div id="logout"></div>
    </div>
    <p>Welkom, <?=$_SESSION['name']?></p>
</body>
</html>










       