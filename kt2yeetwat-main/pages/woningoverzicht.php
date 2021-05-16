<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerntaak2</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include 'include/menu.php' ?>

    <a href="woningToevoegen.php">
        <button type="button" class="btn btn-light">Woning Toevoegen</button>
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Adres</th>
                <th>Aantal Verdiepingen</th>
                <th>Aantal Kamers</th>
                <th>Oppervlakte</th>
                <th>Prijs</th>
                <th>Huurder</th>
                <th>Type Huis</th>
                <th>Status</th>
            </tr>
        </thead>
        <?php
        //database verbinding
        require '../config/db_connect.php';

        //gegevens uit de database ophalen en te laten zien
        $huizen = $conn->prepare("
        SELECT huis.*, huis.breedte * huis.diepte AS oppervlakte, huurder.Naam AS huurnaam, status.Naam AS statusnaam, typehuis.Naam AS huisnaam, woonwijk.naamWijk AS wijknaam
        FROM huis, huurder, status, typehuis, woonwijk
        WHERE huis.Huurder_idHuurder = huurder.idhuurder AND huis.Typehuis_idTypehuis = typehuis.idTypehuis AND huis.Status_idStatus = status.idStatus
        GROUP BY huis.idKamer

        /*ORDER BY huis.idKamer ASC*/
        ");

        $huizen->execute();

        //de gegevens van de database op de site laten zien
        foreach ($huizen as $huis) {
            echo "<tr>";
            echo "<th>" . $huis["idKamer"] . "</th>";
            echo "<td>" . $huis["adres"] . "</td>";
            echo "<td>" . $huis["aantalVerdiepingen"] . "</td>";
            echo "<td>" . $huis["aantalKamers"] . "</td>";
            echo "<td title='" . $huis["Breedte"] . " x " . $huis["Diepte"] . "'>" . $huis["oppervlakte"] . "cm²</td>";
            echo "<td> €" . $huis["Prijs"] . "</td>";
            echo "<td>" . $huis["huurnaam"] . "</td>";
            echo "<td>" . $huis["huisnaam"] . "</td>";
            echo "<td>" . $huis["statusnaam"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>