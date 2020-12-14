<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("includes/session.inc.php");
include("includes/dbh.inc.php");

if (!isset($_GET['lid'])) {
  header("Location: home.php");
}

else{
  $lid = $_GET['lid'];
}

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
          <div class="card-header"><h4>Lid verwijderen</h4></div>

          <div class="card-body">
                <?php
                $stmt = $conn->prepare("SELECT * FROM back2_leden WHERE id = :lid");
                $stmt->bindParam(":lid", $lid);
                $stmt->execute();
                $lid = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <h3> Weet je zeker dat je dit lid wil verwijderen? </h3>
                <br>
                <form method="post" action="includes/lid_verwijder.inc.php">
                <input type="hidden" name="lid" value="<?php echo $lid; ?>">
                <div class="form-group col-6">
                  <label for="lid">Naam lid</label>
                  <input type="text" class="form-control" id="lid" value="<?php echo $lid["first_name"]." ".$lid["last_name"]; ?>" readonly>
                  <input type="hidden" name="lid" value="<?php echo $lid["id"]; ?>">
                </div>
                <br>
                <div class="form-group col-6">
                <input type="submit" name="verwijderen" class="btn btn-danger" value="Verwijderen">
              </div>
              </form>
              <a href="home.php">Ga terug naar het overzicht</a>
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
