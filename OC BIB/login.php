<?php
session_start();


?>

<!DOctype html>
<html lang="eng">
<head>
    <meta charset="utf-8"/>
    <meta name="robots" content="all">
    <link rel="stylesheet" type="text/css" href="styles/opmaak.css">
    <title>Login</title>
</head>
<body>
    <form>
        <div class="form-outline mb-4">
            <input type="text" id="user" class="form-control"/>
            <label class="form-label" for="user">Gebruikersnaam</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="password" class="form-control"/>
            <label class="form-label" for="password">Wachtwoord</label>
        </div>

        <button type="submit">Log in</button>
</body>