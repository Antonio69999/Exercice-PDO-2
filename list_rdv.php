<?php
require_once ('./connexion.php');

$request = $db->query('SELECT * FROM appointments');
$appointments = $request->fetchAll();

echo ('Voici la liste des RDV: <br>');
foreach ($appointments as $appointment):
    echo '<a href="./profil_patients.php?id='.$appointment['id'].'">'.$appointment['id'].$appointment['dateHour'].' '.$appointment['idPatients'].'</a><br>';
    echo ('<br>');
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
    <a href="./liste_patients.php">Prendre un RDV</a>
    <br>
    <br>
    <a href="./rendezvous.php">Information sur les rendez vous</a>
    <br>
    <br>
</body>
</html>