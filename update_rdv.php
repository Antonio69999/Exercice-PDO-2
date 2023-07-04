<?php
include('./connexion.php');

if (isset($_GET['id'])) {
    $appointmentId = $_GET['id'];
    $request = $db->prepare('SELECT * FROM appointments WHERE id = :id');
    $request->bindParam(':id', $appointmentId);
    $request->execute();
    $appointment = $request->fetch();
}

if ($appointment) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <form action="./process/update_rdv_trait.php" method="post">
            <input type="hidden" name="id" value="<?php echo $appointment['id']; ?>"> <!-- stores the patient ID which will be used in the SQL query-->

            <label for="dateHour">Changer la date :  </label>
            <input type="datetime-local" name="datehour">


            <a href="./process/update_rdv_trait.php?id="><input type="submit" name="submit" value="Submit"></a>.
        </form>
    <?php
}
    ?>

    </body>

    </html>