<?php
require_once 'session.inc.php';
//Lees het config bestand
require_once 'config.inc.php';

//lees het ID uit de URl
$id = $_GET['id'];

//is het Id een nummer
if (is_numeric($id)){
    //lees het lid uit de database
    $result = mysqli_query($mysqli, "SELECT * FROM back3_leden WHERE id = $id");

    //is er een lid gevonden met dit id
    if (mysqli_num_rows($result) == 1){
        //ja, lees het lid uit de database
        $row = mysqli_fetch_array($result);
    } else{
        echo "Geen lid gevonden";
        exit;
    }
} else {
    //het ID was geen nummer
    echo "Onjuist ID.";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lid verwijderen</title>
</head>
<body>

<h1>Lid verwijderen</h1>

<p>
    weet je zeker dat je het lid <strong><?php echo $row['first_name'] . "<br>" .$row['last_name'];?></strong>
    wilt verwijderen?
</p>

<p>
    <a href="Lid_verwijder_verwerk.php?id=<?php echo $id; ?>">Ja, verwijderen</a><br>

    <a href="Home.php">Nee, terug</a>
</p>

</body>
</html>
