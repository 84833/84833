<?php
require_once 'session.inc.php';
//Lees het config bestand
require_once 'config.inc.php';

//lees het ID uit de URl
$id = $_GET['id'];

//is het Id een nummer
if (is_numeric($id)){
    //lees het lid uit de database
    $result = mysqli_query($mysqli, "DELETE FROM back3_leden WHERE id = $id");

//controleer het resultaat
    if ($result){
        //alles oke, stuur terug naar de homepage
        header("Location:Home.php");
        exit;
    } else{
        echo 'Er ging wat mis met het verwijderen!';
    }
} else {
    //het id was geen nummer
    echo "Onjuist ID";
    exit;
}
?>
