<?php
session_start();
include('./includes/connect.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>take2new | Mein Profil</title>
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
                <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="100px"><br>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <h1 class="fw-light" style="margin-top: 30px;">Mein Profil</h1>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <p class="lead text-muted">Hier findest du alle Informationen, die wir über dich haben!</p>
            </div>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <ul class="list-group mx-auto">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <li class="list-group-item">Deine ID ist <span class="text-danger"><?php echo $_SESSION['userid']; ?></span>
                </li>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <li class="list-group-item">Dein Nutzername lautet <span class="text-danger"><?php echo (new BaseModel)->getOne('sellers', $_SESSION['userid'])['username']; ?></span>
                </li>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <a href="logout.php" class="list-group-item"><span class="text-danger"><b>Abmelden</b></span></a>
            </ul>
        </div>
    </section>
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
