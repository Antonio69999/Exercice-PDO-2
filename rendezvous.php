<?php
require_once ('./connexion.php');

$request = $db->query('SELECT * FROM appointments');
$appointments = $request->fetchAll();

echo ('Voici la liste des patients enregistrés à ce jour : <br>');
foreach ($appointments as $appointment):
    echo ''.$appointment['id'].'">'."Rendez-Vous n°".$appointment['id'].' '."Date et Heure du rendez-vous".' '.$appointment['dateHour'].' '."Patient n°".$appointment['idPatients'].'<br>';
endforeach;
?>