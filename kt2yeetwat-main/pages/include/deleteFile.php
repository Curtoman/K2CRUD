<?php 
echo '<form action="delete1.php" method="post">
<div class="form-group">
ID:
    <input type="text" name="idKamer" class="form-control" readonly value="' . $huis['idKamer'] . '">
</div>
<div class="form-group">
Adres:
    <input type="text" name="adres" class="form-control" readonly value="' . $huis['adres'] . '">
</div>
<div class="form-group">
Aantal Verdiepingen:
    <input type="text" name="aantalVerdiepingen" class="form-control" readonly value="' . $huis['aantalVerdiepingen'] . '">
</div>
<div class="form-group">
Aantal Kamers:
    <input type="text" name="aantalKamers" class="form-control" readonly value="' . $huis['aantalKamers'] . '" >
</div>
<div class="form-group">
Lengte:
    <div class="input-group-prepend">
        <input type="text" name="Diepte" class="form-control" readonly value="' . $huis['Diepte'] . '" >
        <div class="input-group-text">cm</div>
    </div>
</div>
<div class="form-group">
Breedte:
    <div class="input-group-prepend">
        <input type="text" name="Breedte" class="form-control" readonly value="' . $huis['Breedte'] . '" >
        <div class="input-group-text">cm</div>
    </div>
</div>
<div class="form-group">
Hoogte:
    <div class="input-group-prepend">
        <input type="text" name="Hoogte" class="form-control" readonly value="' . $huis['Hoogte'] . '" >
        <div class="input-group-text">cm</div>
    </div>
</div>
<div class="form-group">
Prijs:
    <div class="input-group-prepend">
        <div class="input-group-text">€</div>
        <input type="text" name="Prijs" class="form-control" readonly value="' . $huis['Prijs'] . '" >

    </div>
</div>
<div class="form-group">
Huurder ID:
    <input type="text" name="Huurder_idHuurder" class="form-control" readonly value="' . $huis['Huurder_idHuurder'] . '" >
</div>
<div class="form-group">
Type Huis:
    <input type="text" name="TypeHuis_idTypeHuis" class="form-control" readonly value="' . $huis['huisnaam'] . '" >
</div>
<div class="form-group">
Status:
    <input type="text" name="Status_idStatus" class="form-control" readonly value="' . $huis['statusnaam'] . '" >
</div>
<input type="checkbox" required name="delete" id="delete">
<label for="delete"> Weet u zeker dat u deze woning wilt verwijderen? Als u verwijdert, kunt u dit niet meer ongedaan maken.</label>
<br>
<button type="submit" class="btn btn-primary">Woning Verwijderen</button>
</form> ';
?>