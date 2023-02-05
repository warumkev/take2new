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

    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>
<?php include('./components/navbar.php'); ?>
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <img src="./assets/brand/take2new.svg" class="rounded mx-auto d-block" height="100px"><br>
                <h1 class="fw-light">Benutzerverwaltung</h1>
                <p class="lead text-muted">Hier kannst du die Benutzer verwalten</p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ((new BaseModel)->getAll('sellers') as $user) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <title>
                                <?php echo $user['username']; ?>
                            </title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                <br>&nbsp&nbsp&nbsp <span class="text-dark"><b><?php echo $user['username']; ?></b></span>
                            </text>

                            <?php
                            if ($user['admin']) {
                                $rolle = "Admin";
                            } else {
                                $rolle = "Seller";
                            }
                            ?>

                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo "ID: " . $user['id']; ?>
                                </p>
                                <p class="card-text">
                                    <?php echo "Passwort: " . $user['userpassword']; ?>
                                </p>
                                <p class="card-text">
                                    <?php echo "Rolle: " . $rolle ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-secondary">Bearbeiten</a>
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