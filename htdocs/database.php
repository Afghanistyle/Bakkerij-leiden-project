<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bakkerij_leiden';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

    if ( !isset($_POST['gebruikersnaam'], $_POST['wachtwoord']) ) {
    
        die ('not good my friend');
    }

    
if ($stmt = $con->prepare('SELECT id, wachtwoord FROM gebruikers WHERE gebruikersnaam = ?')) {
	
	$stmt->bind_param('s', $_POST['gebruikersnaam']);
	$stmt->execute();

    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $wachtwoord);
        $stmt->fetch();
       
        if (password_verify($_POST['wachtwoord'], $wachtwoord)) {
          
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['gebruikersnaam'];
            $_SESSION['id'] = $id;
            echo 'Welkom ' . $_SESSION['name'] . '!';
        } else {
            echo 'Onjuiste Wachtwoord!';
        }
    } else {
        echo 'Onjuiste Gebruikersnaam!';
    }

	$stmt->close();
}

?>