<?php
require_once 'session.inc.php';

//lees het config-bestand
require_once 'config.inc.php';
?>


<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<!--    CSS style link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="CSS.css" type="text/css" rel="stylesheet">

    <title>Ledenbeheer</title>
</head>
<body>

<h1> Ledenbeheer</h1>

<p><a href="Lid_Nieuw.php"> Klik hier </a> om een nieuw lid in te schrijven. </p>

<p>Je bent ingelogd als <?php echo $_SESSION['username']; ?> <br>
<a href="logout.php">Klik hier om uit te loggen.</a></p>

<?php

//Lees alle leden uit de tabel
$result = mysqli_query($mysqli, "SELECT * FROM back3_leden ORDER BY last_name");

echo "<table class='table table-striped table-dark'>";

echo "<thead>";
echo    "<tr>";

echo      "<th scope='col'>ID</th>";
echo      "<th scope='col'>Geslacht</th>";
echo      "<th scope='col'>Voornaam</th>";
echo      "<th scope='col'>Achternaam</th>";
echo      "<th scope='col'>Geboortedatum</th>";
echo      "<th scope='col'>Lid sinds</th>";
echo      "<th scope='col'>Bewerken</th>";
echo      "<th scope='col'>Verwijderen</th>";

echo    "</tr>";
echo  "</thead>";
//loop door alle rijen data heen
while ($row = mysqli_fetch_array($result)){

    echo "<tr>";
    echo "<td>" . $row['id']           . "</td>";
    echo "<td>" . $row['gender']       . "</td>";
    echo "<td>" . $row['first_name']   . "</td>";
    echo "<td>" . $row['last_name']    . "</td>";
    echo "<td>" . $row['birth_date']   . "</td>";
    echo "<td>" . $row['member_since'] . "</td>";
    echo "<td><a href='Lid_Bewerk.php?id="      . $row['id'] . "'>Bewerk</a></td>";
    echo "<td><a href='Lid_verwijder.php?id="   . $row['id'] . "'>Verwijder</a></td>";

    echo "</tr>";

}
echo "</table>";
?>



<!--Javascript en jQuery links-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
