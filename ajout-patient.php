<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./process/ajout_patient_traitement.php" method="get">
        <label for="lastname">Nom de famille : </label>
        <input type="text" name="lastname">

        <label for="fistname"> Prénom : </label>
        <input type="text" name="firstname">

        <label for="birthdate"> Date de naissance : </label>
        <input type="date" name="birthdate">

        <label for="phone"> N° de téléphone : </label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>

        <label for="mail"> Mail : </label>
        <input type="text" name="mail">

        <button type="submit"> Submit </button>



    </form>
</body>

</html>