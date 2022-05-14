<?php
require_once 'session.inc.php';

//lees het config-bestand
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
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    CSS style link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="CSS.css" type="text/css" rel="stylesheet">
    <title>Lid bewerken</title
</head>
<body>

<h1>Lid bewerken</h1>

<form action="Lid_bewerk_verwerk.php" method="post">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="form-group row">

        <label for="first_name" class="col-sm-2 col-form-label">Voornaam</label>

        <div class="col-sm-3">

            <input type="text" class="form-control" id="first_name" name="first_name" required="required"
            value="<?php echo $row['first_name']; ?>">
        </div>
    </div>

    <div class="form-group row">

        <label for="last_name" class="col-sm-2 col-form-label">Achternaam</label>

        <div class="col-sm-3">
            <input type="text" class="form-control" id="last_name" name="last_name" required="required"
                   value="<?php echo $row['last_name']; ?>">
        </div>
    </div>

    <div class="form-group row">

        <label for="birth_date" class="col-sm-2 col-form-label">Geboortedatum</label>

        <div class="col-sm-3">
            <input type="date" class="form-control" id="birth_date" name="birth_date" required="required"
                   value="<?php echo $row['birth_date']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="member_since" class="col-sm-2 col-form-label">Lid sinds</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="member_since" name="member_since" required="required"
                   value="<?php echo $row['member_since']; ?>">
        </div>
    </div>

    <div class="form-check">

        <label class="form-check-label" for="gender_m">

            <input class="form-check-input" type="radio" name="gender" id="gender_m" value="M"
                <?php if ($row['gender'] == 'M') echo 'checked="checked"';?>>
            Man
        </label>
    </div>

    <div class="form-check">

        <label class="form-check-label" for="gender_f">

            <input class="form-check-input" type="radio" name="gender" id="gender_f" value="F"
                <?php if ($row['gender'] == 'F') echo 'checked="checked"';?>>
            Vrouw
        </label>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Opslaan">
            <button class="btn btn-primary"  onclick="history.back();return false;">Annuleren</button>
        </div>
    </div>


</form>






<!--Javascript en jQuery links-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
