<?php
    require_once ("./connexion.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dateHour = $_POST['dateHour'];
    $idPatient = $_POST['idPatient']; // Assuming you have a select input for selecting the patient ID

    $sql = "INSERT INTO `appointments` (`dateHour`, `idPatients`) VALUES (:dateHour, :idPatients);";

    $query = $db->prepare($sql);

    $query->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
    $query->bindValue(':idPatients', $idPatient, PDO::PARAM_INT);

    $query->execute();
    $_SESSION['message'] = "RDV ajouté avec succès !";
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout RDV</title>
</head>

<body>
    <h1>Ajoutez un RDV ICI :</h1>
    <form method="post">
        <label for="dateHour">Date et heure:</label>
        <input type="datetime-local" name="dateHour">

        <label for="idPatients"> ID du patient </label>
        <input type="text" name="idPatient">

        <button>Enregistrer</button>
    </form>
</body>

</html>
