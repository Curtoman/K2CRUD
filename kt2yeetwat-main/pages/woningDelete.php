<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'include/menu.php'; ?>
    <h1>Woning Verwijderen</h1>
    <form action="verwerken/delete.php" method="post">
        <select name="id" id="id">
            <option value="" selected="true" disabled="disabled">Selecteer een woning</option>
            <?php include '../config/db_connect.php';

            $huizen = $conn->prepare("
                SELECT * 
                FROM huis
                /*WHERE idKamer = :idKamer*/
                ");

            $huizen->execute();

            foreach ($huizen as $huis) {
                echo "<option value='" . $huis['idKamer'] . "'>" . $huis['idKamer'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Woning opzoeken">
    </form>
</body>

</html>