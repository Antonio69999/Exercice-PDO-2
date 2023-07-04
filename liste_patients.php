<?php
require_once ('./connexion.php');

$request = $db->query('SELECT * FROM patients');
$patients = $request->fetchAll();

echo ('Voici la liste des patients enregistrés à ce jour : <br>');
foreach ($patients as $patient):
    echo '<a href="./profil_patients.php?id='.$patient['id'].'">'.$patient['id'].$patient['firstname'].' '.$patient['lastname'].'</a><br>';
endforeach;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href=./ajout-patient.php">Ajouter un patient</a>
    <br>
    <br>
    <a href="./liste_patients.php">Prendre un RDV</a>
    <br>
    <br>
    <a href="./list_rdv.php">Liste des rdv</a>
</body>
</html>