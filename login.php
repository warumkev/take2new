<?php
session_start();
include('./includes/connect.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>take2new | Registrierung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>

    <?php include('./components/navbar.php'); ?>

    <div class="container">
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="./assets/brand/take2new.svg" class="rounded mx-auto d-block" height="100px"><br>
                    <h1 class="fw-light">Anmeldung</h1>
                    <p class="lead text-muted"><a class="link-dark" href="register.php"">Hier</a> kannst du dich registrieren.</p>
                </div>
            </div>
            <?php if ($wrong == True) { ?>
            <div class="alert alert-warning" role="alert">
                Bitte überprüfe deine Eingabe!
            </div>
            <?php } else {
            } ?>
        </section>
        <form method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nutzername" aria-label="Nutzername"
                    name="username">
                <span class="input-group-text">-</span>
                <input type="text" class="form-control" placeholder="Passwort" aria-label="Passwort" name="password">
                <button name="login" type="post" class="btn btn-dark">Anmelden</button>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>