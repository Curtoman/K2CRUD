<?php
//met de database verbinden
include '../../config/db_connect.php';

//de variables opvangen
$id = $_POST['idKamer'];
$adres = $_POST['adres'];
$aanVer = $_POST['aantalVerdiepingen'];
$aanKam = $_POST['aantalKamers'];
$breedte = $_POST['Breedte'];
$hoogte = $_POST['Hoogte'];
$diepte = $_POST['Diepte'];
$prijs = $_POST['Prijs'];
$huurder = $_POST['Huurder_idHuurder'];
$typehuis = $_POST['TypeHuis_idTypeHuis'];
$status = $_POST['Status_idStatus'];

//Testen van variables
// var_dump($_POST);
// exit();

//update query uitvoeren
$sql = $conn->prepare("UPDATE huis 
    SET 
    adres = :adres,
    aantalVerdiepingen = :aantalVerdiepingen,
    aantalKamers = :aantalKamers,
    Breedte = :Breedte,
    Hoogte = :Hoogte, 
    Diepte = :Diepte,
    Prijs = :Prijs,
    Huurder_idHuurder = :Huurder_idHuurder,
    TypeHuis_idTypeHuis = :TypeHuis_idTypeHuis,
    Status_idStatus = :Status_idStatus
    WHERE idKamer =  :idKamer
");

//execute de query
$sql->execute([
    "idKamer" => $id,
    "aantalVerdiepingen" => $aanVer,
    "adres" => $adres,
    "aantalKamers" => $aanKam,
    "Breedte" => $breedte,
    "Hoogte" => $hoogte,
    "Diepte" => $diepte,
    "Prijs" => $prijs,
    "Huurder_idHuurder" => $huurder,
    "TypeHuis_idTypeHuis" => $typehuis,
    "Status_idStatus" => $status
]);

echo "<script>alert('Uw gegevens zijn succesvol gewijzigd in de database.')</script>";
header('refresh:0;url=../woningoverzicht.php');
