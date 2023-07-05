<?php
require_once ('./connexion.php');

$request = $db->query('SELECT * FROM patients');
$patients = $request->fetchAll();

foreach ($patients as $patient) {
    echo "Profil du patient n°.".$patient['id']." <a href='./profil_patient.php?id=".$patient['id']."'>détails</a>. 
    <a href='./delete_patients.php?id=".$patient['id']."'>supprimer</a>.</br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste patient</title>
</head>
<body>
<p>Ajouter un patient <a href="./ajout_patient.php">ICI</a></p>    
</body>
</html>