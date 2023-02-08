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
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>

    <?php include('./components/navbar.php'); ?>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="container">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <section class="py-5 text-center container">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="row py-lg-5">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <div class="col-lg-6 col-md-8 mx-auto">
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="180px" width="490px" style="margin-top: -50px; text-align: center;"><br>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <h1 class="fw-light" style="margin-top: 56px;">Registrierung</h1>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <p class="lead text-muted"><a class="link-dark" href="login.php">Hier</a> kannst du dich anmelden.</p>

                </div>
            </div>
            <?php if ($invalid == True) { ?>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="alert alert-warning" role="alert">
                Bitte überprüfe deine Eingabe!
            </div>
            <?php } else if ($taken == True) { ?>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="alert alert-warning" role="alert">
                Dieser Nutzername ist bereits vergeben!
            </div>
            <?php } else if ($success == True) { ?>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="alert alert-success" role="alert">
                Dein Registrierung war erfolgreich!
            </div>
            <?php } ?>
        </section>
        <form method="post">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="form-group" style="margin-top: -70px;">
                <label>Nutzername</label>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <input type="text" class="form-control" placeholder="Nutzername" aria-label="Nutzername" name="username"
                    id="username">
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <small class="form-text text-muted">Gib niemals deine Login Daten weiter!</small>
            </div>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
               <div class="form-group" style="margin-top: 8px;">
                <label for="exampleInputPassword1">Passwort</label>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. --> 
                <input type="password" class="form-control" placeholder="Passwort" aria-label="Passwort" name="password"
                    id="password">
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <button style="margin-top: 9px;" name="register" type="post" class="btn btn-primary">Registrieren</button>
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
