<?php

include('session.inc.php');
include('dbh.inc.php');

if (isset($_POST['verwijderen'])) {

$lid = $_POST['lid'];

$stmt = $conn->prepare("DELETE FROM back2_leden WHERE id = :lid ");
$stmt->bindParam(':lid', $lid);

if ($stmt->execute()) {
  header("Location: ../home.php?verwijderd");
}

else {
  header("Location: ../home.php?fout");
}

}

?>
