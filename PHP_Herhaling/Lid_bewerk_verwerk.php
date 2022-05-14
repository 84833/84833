<?php
require_once 'session.inc.php';

//lees het config bestand
require_once 'config.inc.php';

//lees alle formuliervelden
$id               = $_POST['id'];
$first_name       = $_POST['first_name'];
$last_name        = $_POST['last_name'];
$birth_date       = $_POST['birth_date'];
$member_since     = $_POST['member_since'];
$gender           = $_POST['gender'];

//controleer of alle formulier velden zijn ingevuld
if (is_numeric($id)               &&
    strlen($id)               > 0 &&
    strlen($first_name)       > 0 &&
    strlen($last_name)        > 0 &&
    strlen($birth_date)       > 0 &&
    strlen($member_since)     > 0 &&
    strlen($gender)           > 0 ) {

    //controleer of de datums juist zijn
    $check1 = strtotime($birth_date);
    $check2 = strtotime($member_since);
    if (date('Y-m-d', $check1) == $birth_date &&
        date('Y-m-d', $check2) == $member_since) {

        //Alle data zijn OK, maak de query
        $query = "UPDATE back3_leden SET gender = '$gender', first_name = '$first_name', last_name = '$last_name', birth_date = '$birth_date',
                  member_since = '$member_since' WHERE id = $id;";

        //Voer de query uit
        $result = mysqli_query($mysqli, $query);
        var_dump($mysqli);
        //Controleer het resultaat
        if ($result) {
            //alles ok stuur terug naar de homepage
            header("Location:Home.php");
            exit;
        } else {
            echo 'Er ging wat mis met het toevoegen!';
        }
    } else {
        //datum onjuist
        echo "Een van de gevulde datum was ongeldig";
    }

} else{
    echo "Niet alle velden waren ingevuld";
}

