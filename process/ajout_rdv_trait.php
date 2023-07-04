<?php

require_once('../connexion.php');

if (isset($_POST['dateHour']) && !empty($_POST['dateHour'])
    && isset($_POST['idPatients']) && !empty($_POST['idPatients'])
    ){

$sql = "INSERT INTO appointments (dateHour, idPatients) VALUES (:dateHour, :idPatients)";
$request = $db->prepare($sql);
$request->execute([
    'dateHour' => $_POST['dateHour'],
    'idPatients' => $_POST['idPatients'],
]);
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
    <h1>Rendez Vous pris en compte</h1>
    <a href="../index.php">Retour au menu</a>
</body>
</html>