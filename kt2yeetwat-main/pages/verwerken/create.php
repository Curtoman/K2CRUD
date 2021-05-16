<?php
//met de database verbinden
include '../../config/db_connect.php';

//de variables opvangen
$id = NULL;
$adres = $_POST["adres"];
$aanVer = $_POST['aantalVerdiepingen'];
$aanKam = $_POST['aantalKamers'];
$breedte = $_POST['Breedte'];
$hoogte = $_POST['Hoogte'];
$diepte = $_POST['Diepte'];
$prijs = $_POST['Prijs'];
$huurder = $_POST['Huurder_idHuurder'];
$typehuis = $_POST['TypeHuis_idTypeHuis'];
$status = $_POST['Status_idStatus'];

//testen van de variables
// var_dump($_POST);
// exit;

//sql query om in de database toe te voegen
$sql = $conn->prepare("INSERT INTO huis VALUES (:id, :adres, :aantalVerdiepingen, :aantalKamers, :Breedte, :Hoogte, :Diepte, :Prijs, :Huurder_idHuurder, 
    :TypeHuis_idTypeHuis, :Status_idStatus)
    ");

//de query uitvoeren
$sql->execute([
    "id" => $id,
    "aantalVerdiepingen" => $aanVer,
    "adres"=> $adres,
    "aantalKamers" => $aanKam,
    "Breedte" => $breedte,
    "Hoogte" => $hoogte,
    "Diepte" => $diepte,
    "Prijs" => $prijs,
    "Huurder_idHuurder" => $huurder,
    "TypeHuis_idTypeHuis" => $typehuis,
    "Status_idStatus" => $status
]);

//melding dat het gelukt is
echo "<script>alert('Uw gegevens zijn succesvol toegevoegd aan de database.')</script>";
header('refresh:0;url=../woningoverzicht.php');
