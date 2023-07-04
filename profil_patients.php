<?php
require_once('./connexion.php');

if (isset($_GET['id'])) {$patientId = $_GET['id']; 
    $request = $db->prepare('SELECT * FROM patients WHERE id = :id');
    $request->bindParam(':id', $patientId);    
    $request->execute();    
    $patient = $request->fetch();
}

if ($patient) {
    echo ('Nom : '. $patient['lastname']. '<br>');
    echo ('Prénom : '. $patient['firstname']. '<br>');
    echo ('Birthdate : '. $patient['birthdate']. '<br>');
    echo ('Téléphone : '. $patient['phone']. '<br>');
    echo ('Email : '. $patient['mail']. '<br>');
    echo ('<a href="./update_patient.php?id=' . $patient['id'] . '">Modifier le patient</a>'); //lien pour modifier le patien grâce à son id 
    echo ("<br>");
    echo ('<a href="./ajout-rdv.php?id=' . $patient['id'] . '">Prendre un rendez-vous</a>'); //lien pour modifier le patien grâce à son id 
    echo ("<br>");
    echo ('<a href="./update_rdv.php?id=' . $patient['id'] . '">Modifier le rendez-vous</a>'); //lien pour modifier le patien grâce à son id 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
