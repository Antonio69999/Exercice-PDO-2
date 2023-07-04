<?php

include ('./connexion.php');

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

    <form action="./process/ajout_rdv_trait.php" method="post">
        <label for="dateHour"> Date et Heure du rendez-vous </label>
        <input type="datetime-local" name="dateHour">

        <label for="idPatients"> ID du patient </label>
        <input type="hidden" name="idPatients" value="<?php echo $patient['id']; ?>">

        <button type="submit"> Submit </button>

    </form>  
    <?php
}
    ?>  
    </body>
</html>