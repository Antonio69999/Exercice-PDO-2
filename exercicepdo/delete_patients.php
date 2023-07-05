<?php
require_once ('./connexion.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM `appointments` WHERE `idPatients`=:id;
            DELETE FROM `patients` WHERE `id` = :id;"
    ;

    $query = $db->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    header('Location: liste_patients.php');
}

?>