<?php

if (isset($_POST['inloggen'])) {

//start session
session_start();


//link naar DB
include ('dbh.inc.php');

$username = $_POST['username'];
$password = $_POST['password'];

//User check
$stmt = $conn->prepare("SELECT * FROM Accounts WHERE Username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();

if($stmt->rowCount() < 0) {
header("Location: ../index.php?onbekend");
die();
 }

//Hashed password ophalen uit DB en checken
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (password_verify($password, $user['Password'])) {

  $_SESSION['user'] = $user['ID'];
  header("Location: ../home.php");
}

else {
header("Location: ../index.php?ongeldig");
}

}

else {
  header("Location: ../index.php?onbekendefout");
}

 ?>
