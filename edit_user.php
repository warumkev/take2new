<?php
session_start();
include('./includes/connect.php');

if (!$_SESSION['admin']) {
    header('Location: home.php');
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>take2new | Startseite</title>
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
<section class="py-5 text-center container">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="row py-lg-5">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="col-lg-6 col-md-8 mx-auto">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="100px"><br>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <h1 class="fw-light">take<span class="text-danger">2</span>new - Benutzer Bearbeiten</h1>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <p class="lead text-muted">Hier kann man Benutzer bearbeiten</p>
        </div>
    </div>
</section>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
<div class="container">
    <main>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="row g-5">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-md-5 col-lg-4 order-md-last">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-dark">Artikel</span>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <span class="badge bg-dark rounded-pill"><?php echo count((new BaseModel)->allWhere('items', 'sellerid', $_GET['id'])) ?></span>
                </h4>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <ul class="list-group mb-3">
                    <?php foreach ((new BaseModel)->allWhere('items', 'sellerid', $_GET['id']) as $article) { ?>
                        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <h6 class="my-0"><?php echo $article['itemname'] . " | " . $article['itemprice'] . "€" ?></h6>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <?php $userInfo = (new BaseModel)->getOne('sellers', $_GET['id']); ?>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-md-7 col-lg-8">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <h4 class="mb-3">Details</h4>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <form class="needs-validation" novalidate="" method="post">
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <div class="row g-3">

                        <input type="hidden" name="id"
                               value="<?php echo $userInfo['id']; ?>">
                        <input type="hidden" name="oldid"
                               value="<?php echo $userInfo['id']; ?>">
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <div class="col-sm-6">
                            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <label for="id" class="form-label">ID</label>
                            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <input type="text" class="form-control" id="id" name="id" placeholder=""
                                   value=<?php echo $userInfo['id']; ?> required="" control-id="ControlID-4" disabled>
                                   <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <div class="invalid-feedback">
                                Es muss eine gültige ID angegeben werden
                            </div>
                        </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <div class="col-sm-6">
                            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <label for="admin" class="form-label">Admin</label>
                            <?php if ($userInfo['admin']) { ?>
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <input type="checkbox" class="form-check-input" id="admin" name="admin"
                                       control-id="ControlID-5" checked>
                            <?php } else { ?>
                                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                                <input type="checkbox" class="form-check-input" id="admin" name="admin"
                                       control-id="ControlID-5">
                            <?php } ?>
                        </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <div class="col-12">
                            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <label for="name" class="form-label">Name</label>
                            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <input type="text" class="form-control" id="name" name="name" placeholder=""
                                   value=<?php echo $userInfo['username']; ?> required="" control-id="ControlID-6">
                                   <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <div class="invalid-feedback">
                                Es muss ein Name angegeben werden
                            </div>
                        </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <div class="col-12">
                            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <label for="password" class="form-label">Password</label>
                            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <input type="password" class="form-control" id="password" name="password" placeholder=""
                                   value=<?php echo $userInfo['userpassword']; ?> required="" control-id="ControlID-7">
                                   <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                            <div class="invalid-feedback">
                                Es muss ein Password angegeben werden
                            </div>
                        </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <hr class="my-4">
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                        <button name="edit" type="post" class="btn btn-dark">Änderungen Abschicken</button>
                </form>
            </div>
        </div>
    </main>
</div>

<?php include('./components/footer.php'); ?>

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