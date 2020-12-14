<?php

include('session.inc.php');
include('dbh.inc.php');

if (isset($_POST['bewerken'])) {

$voornaam = $_POST['first_name'];
$achternaam = $_POST['last_name'];
$geslacht = $_POST['gender'];
$geboortedatum = $_POST['birth_date'];
$lid = $_POST['lid'];

$stmt = $conn->prepare("UPDATE back2_leden SET first_name = :voornaam, last_name = :achternaam, gender = :geslacht, birth_date = :geboortedatum WHERE id = :id");
$stmt->bindParam(':voornaam', $voornaam);
$stmt->bindParam(':achternaam', $achternaam);
$stmt->bindParam(':geslacht', $geslacht);
$stmt->bindParam(':geboortedatum', $geboortedatum);
$stmt->bindParam(':id', $lid);

if ($stmt->execute()) {
  header("Location: ../home.php?bewerkt");
}

}


?>
