<?php
include('./connexion.php');

if (isset($_GET['id'])) {
    $patientId = $_GET['id'];
    $request = $db->prepare('SELECT * FROM patients WHERE id = :id');
    $request->bindParam(':id', $patientId);
    $request->execute();
    $patient = $request->fetch();
}

if ($patient) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <form action="./process/update_traitement.php" method="post">
            <input type="hidden" name="id" value="<?php echo $patient['id']; ?>"> <!-- stores the patient ID which will be used in the SQL query-->

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

            <a href="./process/update_traitement.php?id="><input type="submit" name="submit" value="Submit"></a>.
        </form>
    <?php
}
    ?>

    </body>

    </html>