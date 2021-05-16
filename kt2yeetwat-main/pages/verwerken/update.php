<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>woning.nl</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <?php include '../include/menu.php' ?>
    <h1>Woning Wijzigen</h1>
    <?php include '../../config/db_connect.php';

    $id = $_POST['id'];

    $huizen = $conn->prepare("
    SELECT *
    FROM huis
    WHERE idKamer = :idKamer
    ");

    $huizen->execute(['idKamer' => $id]);

    foreach ($huizen as $huis) {

        include '../include/updateFile.php';
    } ?>
</body>

</html>