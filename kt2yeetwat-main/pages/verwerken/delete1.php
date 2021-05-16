<?php 
require '../../config/db_connect.php';

$id = $_POST['idKamer'];

// var_dump($_POST);

$sql = $conn->prepare(" 
DELETE FROM huis WHERE huis.idKamer = :idKamer
");

$sql->execute(["idKamer"=>$id]);

echo "<script>alert('Uw gegevens zijn succesvol verwijderd.')</script>";
header('refresh:0;url=../woningoverzicht.php');
?>