<?php 
session_start();
include '../server/functions.php';

if (isset($_POST['user']) && isset($_POST['password'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $hash = getPasswordByUsername($username);
    // Hier zou je normaal gesproken de gebruikersgegevens controleren, bijvoorbeeld tegen een database
    // Voor dit voorbeeld gebruiken we hardcoded waarden

    if (password_verify($password, $hash)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        echo "Ongeldige gebruikersnaam of wachtwoord.";
    }
}