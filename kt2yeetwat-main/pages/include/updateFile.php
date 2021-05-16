<?php 
echo '<form action="update1.php" method="post">
<div class="form-group">
ID:
    <input type="text" name="idKamer" class="form-control" readonly value="' . $huis['idKamer'] . '">
</div>
<div class="form-group">
Adres:
    <input type="text" name="adres" class="form-control" value="' . $huis['adres'] . '">
</div>
<div class="form-group">
Aantal Verdiepingen:
    <input type="text" name="aantalVerdiepingen" class="form-control" value="' . $huis['aantalVerdiepingen'] . '">
</div>
<div class="form-group">
Aantal Kamers:
    <input type="text" name="aantalKamers" class="form-control" value="' . $huis['aantalKamers'] . '" >
</div>
<div class="form-group">
Lengte:
    <div class="input-group-prepend">
        <input type="text" name="Diepte" class="form-control" value="' . $huis['Diepte'] . '" >
        <div class="input-group-text">cm</div>
    </div>
</div>
<div class="form-group">
Breedte:
    <div class="input-group-prepend">
        <input type="text" name="Breedte" class="form-control" value="' . $huis['Breedte'] . '" >
        <div class="input-group-text">cm</div>
    </div>
</div>
<div class="form-group">
Hoogte:
    <div class="input-group-prepend">
        <input type="text" name="Hoogte" class="form-control" value="' . $huis['Hoogte'] . '" >
        <div class="input-group-text">cm</div>
    </div>
</div>
<div class="form-group">
Prijs:
    <div class="input-group-prepend">
        <div class="input-group-text">€</div>
        <input type="text" name="Prijs" class="form-control" value="' . $huis['Prijs'] . '" >

    </div>
</div>
<div class="form-group">
Huurder ID:
    <input type="text" name="Huurder_idHuurder" class="form-control" value="' . $huis['Huurder_idHuurder'] . '" >
</div>
<div class="form-group">
    <select name="TypeHuis_idTypeHuis" id="TypeHuis_idTypeHuis">
        <option value="" selected="true" disabled="disabled">Type Huis</option>
        <option value="1" name="1">Koophuis</option>
        <option value="2" name="2">Huurhuis</option>
    </select>

    <select name="Status_idStatus" id="Status_idStatus">
        <option value="" selected="true" disabled="disabled">Status</option>
        <option value="1" name="1">Vehuurd</option>
        <option value="2" name="2">Verkocht</option>
        <option value="3" name="3">Te Huur</option>
        <option value="4" name="4">Te Koop</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Woning Wijzigen</button>
</form> ';
?>