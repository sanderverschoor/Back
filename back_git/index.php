<?php

//Username: admin
//Password: #1Geheim

session_start();

if (isset($_SESSION['user'])) {
  header("Location: home.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Back2 - Inloggen</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CSS Bootsrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>
<body class="bg-dark">

    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand text-center mt-5">
              <img src="assets/images/password.png" alt="logo" width="100" class="rounded-circle mb-5">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Inloggen</h4></div>

              <div class="card-body">
                <?php
                                if (isset($_GET["uitgelogd"])) {
                                  echo '<div class="alert alert-success" role="alert">
                <strong>lekker!</strong> Je bent succesvol uitgelogd!
              </div>';
                                }
																if (isset($_GET["ongeldig"])) {
																	echo '<div class="alert alert-danger" role="alert">
								<strong>Let op!</strong> Uw username en/of password is onjuist!
							</div>';
																}
                ?>
                <form method="POST" action="includes/login.inc.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Gebruikersnaam</label>
                    <input  type="text" class="form-control" name="username" tabindex="1" required="require" autofocus>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Wachtwoord</label>
                    </div>
                    <input type="password" class="form-control" name="password" tabindex="2" required="required">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="inloggen" tabindex="4">
                      inloggen
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
