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
          <div class="card-header"><h4>Lid toevoegen</h4></div>

          <div class="card-body">
            <form method="POST" action="includes/lid_nieuw.inc.php" class="needs-validation" novalidate="">
              <div class="row">
              <div class="form-group col-6">
                <label for="first_name">Voornaam</label>
                <input  type="text" class="form-control"  id="first_name" name="first_name" tabindex="1" required="require" autofocus>
              </div>

              <div class="form-group col-6">
                <label for="last_name">Achternaam</label>
                <input  type="text" class="form-control" id="last_name" name="last_name" tabindex="2" required="require" autofocus>
              </div>

              <div class="form-group col-6">
                <label for="last_name">Geslacht</label>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="man" value="M" checked>
                  <label class="form-check-label" for="man">
                    Man
                  </label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="gender" id="vrouw" value="F">
                  <label class="form-check-label" for="vrouw">
                  Vrouw
                  </label>
                </div>
              </div>


            <div class="form-group col-6">
              <label for="first_name">Geboortedatum</label>
              <input type="date" class="form-control"  id="date" name="birth_date" tabindex="3" required="require" autofocus>
            </div>
          </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="toevoegen" tabindex="4">
                  Toevoegen
                </button>
              </div>
            </form>
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
