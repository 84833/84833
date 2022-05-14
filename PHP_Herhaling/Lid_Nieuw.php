<?php
require_once 'session.inc.php';

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
    <title>Nieuw lid inschrijven</title
</head>
<body>

<h1>Nieuw lid inschrijven</h1>

<form action="Lid_Nieuw_Verwerk.php" method="post">

    <div class="form-group row">
        <label for="first_name" class="col-sm-2 col-form-label">Voornaam</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Voornaam">
        </div>
    </div>

    <div class="form-group row">
        <label for="last_name" class="col-sm-2 col-form-label">Achternaam</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Achternaam">
        </div>
    </div>

    <div class="form-group row">
        <label for="birth_date" class="col-sm-2 col-form-label">Geboortedatum</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Geboortedatum">
        </div>
    </div>

    <div class="form-group row">
        <label for="member_since" class="col-sm-2 col-form-label">Lid sinds</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="member_since" name="member_since" placeholder="Lid sinds">
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender_m" value="M" checked>
        <label class="form-check-label" for="gender_m">
            Man
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender_f" value="F" checked>
        <label class="form-check-label" for="gender_f">
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
