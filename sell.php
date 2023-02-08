<?php
session_start();
include './includes/config.php';

// Datenbankverbindung aufbauen
$connStr = "host=". HOST . " port=" . PORT . " dbname=" . DBNAME . " user=" . USER . " password=" . PASSWORD;
$dbConn = pg_connect($connStr);

if (!$dbConn) {
    echo "Ein Fehler ist aufgetreten.\n";
    exit;
}

// Nutzername abrufen

if (isset($_SESSION['loggedin'])) {
    $userNameId = $_SESSION['userid'];
    $getUserName = pg_query($dbConn, "SELECT * FROM public.sellers WHERE id LIKE '$userNameId'");
    $currentUserName = pg_fetch_assoc($getUserName);
    $name = $currentUserName['username'];
    $userPassword = $currentUserName['userpassword'];
}

// Artikel hochladen

if (isset($_POST["sell"])) {

    $errors = [];
    $currentDirectory = getcwd();
    $uploadDirectory = "/itemimg/";
    $fileExtensionsAllowed = ['jpeg', 'jpg', 'png'];
    $imageName = $_FILES['pictureName']['name'];
    $imageSize = $_FILES['pictureName']['size'];
    $imageTmpName = $_FILES['pictureName']['tmp_name'];
    $imageType = $_FILES['pictureName']['type'];

    $tmp = explode('.', $imageName);
    $imageExtension = strtolower(end($tmp));
    $uploadPath = $currentDirectory . $uploadDirectory . basename($imageName);



    if (!in_array($imageExtension, $fileExtensionsAllowed)) {
        $errors[] = "Ungültiges Dateiformat! Bitte lade eine PNG oder JPG hoch.";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($imageTmpName, $uploadPath);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $size = $_POST['size'];
        $sellerid = $_SESSION['userid'];
        $description = nl2br($description);
        $description = stripslashes($description);

        $itemid = uniqid();

        pg_query($dbConn, "INSERT INTO public.items(id, itemname, itemdescription, itemviews, itemprice, sellerid, itemsize, picturename) VALUES ('$itemid', '$name', '$description', 0, $price, $sellerid, '$size', '$imageName')");

        header('Location: items.php');

        if ($didUpload) {
            $uploadSuccess = True;
        } else {
            echo "Ein Fehler ist aufgetreten. Bitte kontaktiere uns.";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . " Folgende Fehler traten auf: " . "\n";
        }
    }

}
?>
<!doctype html>
<html lang="en">

<head>
    <title>take2new | Artikel verkaufen</title>
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
    <div class="container-sm">
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <section class="py-5 text-center container">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="row py-lg-5">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <div class="col-lg-6 col-md-8 mx-auto">
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="100px"><br>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <h1 class="fw-light">Artikel verkaufen</h1>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <p class="lead text-muted">Wir freuen uns, dass du den Weg zu uns gefunden hast. Hier kannst du die
                        Informationen zu dienen Piece angeben und die Anzeige online stellen.</p>
                </div>
            </div>
        </section>
        <form method="post"  enctype="multipart/form-data">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="input-group mb-3">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <span class="input-group-text" id="basic-addon1">Artikel</span>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <input type="text" class="form-control" placeholder="Artikelname" aria-label="Artikelname"
                    aria-describedby="basic-addon1" name="name" id="name">
            </div>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="input-group mb-3">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <span class="input-group-text">€</span>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <input type="text" class="form-control" aria-label="Preis" name="price" id="price">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <span class="input-group-text">.00</span>
            </div>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="input-group mb-3">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <span class="input-group-text" id="basic-addon1">Größe</span>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <input type="text" class="form-control" placeholder="XXS, XS, S, M, L, XL, XXL ---- 39, 40, 41 ---- 30/32, 40/42, 30/30" aria-label="Size"
                    aria-describedby="basic-addon1" name="size" id="size">
            </div>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="input-group mb-3">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <span class="input-group-text">Beschreibung</span>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <textarea class="form-control" aria-label="With textarea" name="description"
                    id="description"></textarea>
            </div>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="input-group mb-3">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <input type="file" class="form-control" name="pictureName" id="fileToUpload">
            </div>
            <br>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <button name="sell" type="post" class="btn btn-dark">Artikel einstellen</button>
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
