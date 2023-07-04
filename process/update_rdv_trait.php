<?php
require_once('../connexion.php');

if (isset($_POST['dateHour']) && !empty($_POST['dateHour'])
    ){

        $sql = "UPDATE appointments SET dateHour = :dateHour WHERE id = :id";
        $request = $db->prepare($sql);
        $request->execute([
            'dateHour' => $_POST['dateHour'],
            'id' => $_POST['id']
        ]);
    }
?>