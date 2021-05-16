<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>woning.nl</title>
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'include/menu.php' ?>
    <h1>Woning Toevoegen</h1>
    <form action="verwerken/create.php" method="post">
        <div class="form-group">
            <input type="text" name="adres" class="form-control" placeholder="Adres" required>
        </div>
        <div class="form-group">
            <input type="text" name="aantalVerdiepingen" class="form-control" placeholder="Aantal verdiepingen" required>
        </div>
        <div class="form-group">
            <input type="text" name="aantalKamers" class="form-control" placeholder="Aantal Kamers" required>
        </div>
        <div class="form-group">
            <div class="input-group-prepend">
                <input type="text" name="Diepte" class="form-control" placeholder="Lengte" required>
                <div class="input-group-text">cm</div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-prepend">
                <input type="text" name="Breedte" class="form-control" placeholder="Breedte" required>
                <div class="input-group-text">cm</div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-prepend">
                <input type="text" name="Hoogte" class="form-control" placeholder="Hoogte" required>
                <div class="input-group-text">cm</div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group-prepend">
                <div class="input-group-text">€</div>
                <input type="text" name="Prijs" class="form-control" placeholder="Prijs" required>

            </div>
        </div>
        <div class="form-group">
            <input type="text" name="Huurder_idHuurder" class="form-control" placeholder="Uw huurder ID (Uw huurder ID vindt u in uw profiel)" required>
        </div>
        <div class="form-group">
            <select name="TypeHuis_idTypeHuis" id="TypeHuis_idTypeHuis">
                <option value="" selected="true" disabled="disabled">Type Huis</option>
                <option value="1" name="1">Koophuis</option>
                <option value="2" name="2">&#8361; Huurhuis</option>
            </select>

            <select name="Status_idStatus" id="Status_idStatus">
                <option value="" selected="true" disabled="disabled">Status</option>
                <option value="1" name="1">Vehuurd</option>
                <option value="2" name="2">Verkocht</option>
                <option value="3" name="3">Te Huur</option>
                <option value="4" name="4">Te Koop</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Woning Toevoegen</button>
    </form>
</body>

</html>