<?php
session_start();

include('./includes/connect.php');

if(!$_SESSION['admin']) {
    header('Location: home.php');
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>take2new | Benutzerverwaltung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>
<?php include('./components/navbar.php'); ?>
<main>
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <section class="py-5 text-center container">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="row py-lg-5">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-lg-6 col-md-8 mx-auto">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="100px"><br>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <h1 class="fw-light">Benutzerverwaltung</h1>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <p class="lead text-muted">Hier kannst du die Benutzer verwalten</p>
            </div>
        </div>
    </section>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="album py-5 bg-light">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="container">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ((new BaseModel)->getAll('sellers') as $user) { ?>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <div class="col">
                        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <div class="card shadow-sm">
                            <title>
                                <?php echo $user['username']; ?>
                            </title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <br>&nbsp&nbsp&nbsp <span class="text-dark"><b><?php echo $user['username']; ?></b></span>
                            </text>

                            <?php
                            if ($user['admin']) {
                                $rolle = "Admin";
                            } else {
                                $rolle = "Seller";
                            }
                            ?>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <div class="card-body">
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <p class="card-text">
                                    <?php echo "ID: " . $user['id']; ?>
                                </p>
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <p class="card-text">
                                    <?php echo "Passwort: " . $user['userpassword']; ?>
                                </p>
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <p class="card-text">
                                    <?php echo "Rolle: " . $rolle ?>
                                </p>
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                    <div class="btn-group">
                                        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                        <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-secondary">Bearbeiten</a>
                                        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                        <a href="delete_user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-secondary">Löschen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<?php include('./components/footer.php'); ?>
</body>