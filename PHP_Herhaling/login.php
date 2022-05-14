<?php

//lees het config bestand
require_once 'config.inc.php';

//lees alle formuliervelden
$username = $_POST['username'];
$password = $_POST['password'];

//controleer of alle formulier velden zijn ingevuld
if (strlen($username) > 0 && strlen($password) > 0) {
    //versleutel het wachtwoord
    $password = md5($password);

    //maak de controle-query
    $query = "SELECT * FROM back3_users WHERE username = '$username' AND password = '$password' ";

    //Voer de query uit
    $result = mysqli_query($mysqli, $query);

    //Controleer of de login correct was
    if (mysqli_num_rows($result) == 1) {
        //login correct, start de sessie
        session_start();

        //sla de username op in de sessie
        $_SESSION['username'] = $username;

        //stuur door naar de home page
        header("Location:Home.php");
    } else {
        //login incorrect, terug naar het login-formulier
        header("Location:index.php");
        exit;
    }
} else {
    echo "Niet alle velden zijn ingevuld!";
    exit;
}
