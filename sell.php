<?php
session_start();

// Datenbankverbindung aufbauen

$host = "localhost"; //$_ENV['POSTGRES_HOST'];
$port = "5432";
$db = "take2new";
$user = "postgres";
$pw = ""; //"Start#123";
$connStr = "host=$host port=$port dbname=$db user=$user password=$pw";

$dbConn = pg_connect($connStr);

if (!$dbConn) {
    echo "Ein Fehler ist aufgetreten.\n";
    exit;
}

// Nutzername abrufen

if (isset($_SESSION['loggedin'])) {
    $userNameId = $_SESSION['userid'];
    $getUserName = pg_query($dbConn, "SELECT * FROM public.sellers WHERE id = $userNameId");
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
    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);



    if (!in_array($imageExtension, $imageExtensionsAllowed)) {
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

        $articleExists = pg_query($dbConn, "SELECT itemname FROM public.sellers WHERE itemname LIKE '$name'");

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

    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>

    <?php include('./components/navbar.php'); ?>
    <div class="container-sm">

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="100px"><br>
                    <h1 class="fw-light">Artikel verkaufen</h1>
                    <p class="lead text-muted">Wir freuen uns, dass du den Weg zu uns gefunden hast. Hier kannst du die
                        Informationen zu dienen Piece angeben und die Anzeige online stellen.</p>
                </div>
            </div>
        </section>
        <form method="post"  enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Artikel</span>
                <input type="text" class="form-control" placeholder="Artikelname" aria-label="Artikelname"
                    aria-describedby="basic-addon1" name="name" id="name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">€</span>
                <input type="text" class="form-control" aria-label="Preis" name="price" id="price">
                <span class="input-group-text">.00</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Größe</span>
                <input type="text" class="form-control" placeholder="XXS, XS, S, M, L, XL, XXL ---- 39, 40, 41 ---- 30/32, 40/42, 30/30" aria-label="Size"
                    aria-describedby="basic-addon1" name="size" id="size">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Beschreibung</span>
                <textarea class="form-control" aria-label="With textarea" name="description"
                    id="description"></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="pictureName" id="fileToUpload">
            </div>
            <br>
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
