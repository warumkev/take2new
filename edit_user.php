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

    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>

<?php include('./components/navbar.php'); ?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <img src="./assets/brand/take2new.svg" class="rounded mx-auto d-block" height="100px"><br>
            <h1 class="fw-light">take<span class="text-danger">2</span>new - Benutzer Bearbeiten</h1>
            <p class="lead text-muted">Hier kann man Benutzer bearbeiten</p>
        </div>
    </div>
</section>
<div class="container">
    <main>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-dark">Artikel</span>
                    <span class="badge bg-dark rounded-pill"><?php echo count((new BaseModel)->allWhere('items', 'sellerid', $_GET['id'])) ?></span>
                </h4>
                <ul class="list-group mb-3">

                    <?php foreach ((new BaseModel)->allWhere('items', 'sellerid', $_GET['id']) as $article) { ?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0"><?php echo $article['itemname'] . " | " . $article['itemprice'] . "€" ?></h6>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <?php
                $userInfo = (new BaseModel)->getOne('sellers', $_GET['id']);
            ?>

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Details</h4>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="row g-3">

                        <div class="col-sm-6">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder=""
                                   value=<?php echo $userInfo['id']; ?> required="" control-id="ControlID-4">
                            <div class="invalid-feedback">
                                Es muss eine gültige ID angegeben werden
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="role" class="form-label">Admin</label>
                            <?php if ($userInfo['admin']) { ?>
                                <input type="checkbox" class="form-check-input" id="role" name="role"
                                       control-id="ControlID-5" checked>
                            <?php } else { ?>
                                <input type="checkbox" class="form-check-input" id="role" name="role"
                                       control-id="ControlID-5">
                            <?php } ?>
                        </div>

                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder=""
                                   value=<?php echo $userInfo['username']; ?> required="" control-id="ControlID-6">
                            <div class="invalid-feedback">
                                Es muss ein Name angegeben werden
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder=""
                                   value=<?php echo $userInfo['userpassword']; ?> required="" control-id="ControlID-7">
                            <div class="invalid-feedback">
                                Es muss ein Password angegeben werden
                            </div>
                        </div>

                        <hr class="my-4">

                        // TODO
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