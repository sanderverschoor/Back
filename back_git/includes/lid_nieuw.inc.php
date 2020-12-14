<?php

include('session.inc.php');
include('dbh.inc.php');

if (isset($_POST['toevoegen'])) {

  $voornaam = $_POST['first_name'];
  $achternaam = $_POST['last_name'];
  $geslacht = $_POST['gender'];
  $geboortedatum = $_POST['birth_date'];

  $stmt = $conn->prepare("INSERT INTO back2_leden (first_name, last_name, gender, birth_date) VALUES (:voornaam, :achternaam, :geslacht, :geboortedatum)");
  $stmt->bindParam(':voornaam', $voornaam);
  $stmt->bindParam(':achternaam', $achternaam);
  $stmt->bindParam(':geslacht', $geslacht);
  $stmt->bindParam(':geboortedatum', $geboortedatum);

  if ($stmt->execute()) {
    header("Location: ../home.php?aangemaakt");
  }

}

 ?>
