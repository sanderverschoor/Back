<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("includes/session.inc.php");

include("includes/dbh.inc.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Back2 | Herhaling</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CSS Bootsrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



</head>
<body class="bg-dark">
<a href="logout.php"><button type="button" class="btn btn-danger fixed-top">Log uit..</button></a>

<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">

        <div class="card card-primary">
          <div class="card-header"><h4>Alle leden</h4></div>

          <div class="card-body text-center">
            <a href="lid_nieuw.php" class="btn btn-success col-9 mb-4 ">Klik hier om een nieuw lid aan te maken!</a>
					<?php	if (isset($_GET["verwijderd"])) {
							echo '<div class="alert alert-success" role="alert">
<strong>Top!</strong> Je hebt een lid verwijderd!
</div>';
						}

						if (isset($_GET["bewerkt"])) {
								echo '<div class="alert alert-success" role="alert">
	<strong>Doorgevoegrd!</strong> de gegevens zijn succesvol geweizigd!
	</div>';
							}

							if (isset($_GET["aangemaakt"])) {
									echo '<div class="alert alert-success" role="alert">
		<strong>Toegevoegd!</strong> Je hebt een nieuw lid verwelkomd!
		</div>';
								}

						?>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Voornaam</th>
                  <th scope="col">Achternaam</th>
                  <th scope="col">Geslacht</th>
                  <th scope="col">Geboortedatum</th>
                  <th scope="col">Bewerken</th>
                  <th scope="col">Verwijderen</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $stmt = $conn->prepare("SELECT * FROM back2_leden");
                $stmt->execute();
                $leden = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($leden as $lid) {

                  if ($lid['gender'] == "M") {
                    $gender = "Man";
                  }
                  else {
                    $gender = "Vrouw";
                  }

                  echo '
                <tr>
                  <td>'.$lid["first_name"].'</td>
                  <td>'.$lid["last_name"].'</td>
                  <td>'.$gender.'</td>
                  <td>'.date("d-m-Y", strtotime($lid["birth_date"])).'</td>
                  <td><a href="lid_bewerk.php?lid='.$lid['id'].'" class="btn btn-warning btn-sm" role="button">Bewerken</a></td>
                  <td><a href="lid_verwijder.php?lid='.$lid['id'].'" class="btn btn-danger btn-sm" role="button">Verwijderen</a></td>
                </tr>';
              }
                ?>

              </tbody>
            </table>

          </div>
        </div>
        <div class="simple-footer text-light text-center mt-3">
          Copyright &copy; Sander Verschoor 2020
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Bootstrap javascript files -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
