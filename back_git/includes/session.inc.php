<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: index.php");
}

else {
  header("Locatiom: ../home.php");
}


 ?>
