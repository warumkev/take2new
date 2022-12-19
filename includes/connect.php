<?php

// Datenbankverbindung aufbauen

$host = "localhost";
$port = "5432";
$db = "take2new";
$user = "postgres";
$pw = "IchbinKevin03.";
$connStr = "host=$host port=$port dbname=$db user=$user password=$pw";

$dbConn = pg_connect($connStr);

if (!$dbConn) {
  echo "Ein Fehler ist aufgetreten.\n";
  exit;
}

// Nutzername abrufen
if(isset($_SESSION['loggedin'])){
$userNameId = $_SESSION['userid'];
$getUserName = pg_query($dbConn, "SELECT * FROM public.sellers WHERE id = $userNameId");
$currentUserName = pg_fetch_assoc($getUserName);
$name = $currentUserName['username'];
$userPassword = $currentUserName['userpassword'];
}
// Artikel abrufen

$listArticles = pg_query($dbConn, "SELECT id, itemname, itemdescription, itemviews, sellerid, itemprice, itemsize, picturename FROM public.items ORDER BY id");

// Checkout Query

if(isset($_GET['artid'])) {
$artid = $_GET['artid'];
$checkoutArtikel = pg_query($dbConn, "SELECT id, itemname, itemdescription, itemviews, sellerid, itemprice, itemsize, picturename FROM public.items WHERE id = $artid ORDER BY id");

  $artInfo = pg_fetch_assoc($checkoutArtikel);

} else {}

// Anzahl an Artikeln

$alleArtikelQuery = pg_query($dbConn, "SELECT * FROM public.items");

$alleArtikel = pg_num_rows($alleArtikelQuery);

// Artikel hochladen

if (isset($_POST["sell"])) {

  $currentDirectory = getcwd();
  $uploadDirectory = "/itemimg/";

  $errors = [];

  $fileExtensionsAllowed = ['jpeg', 'jpg', 'png'];

  $fileName = $_FILES['pictureName']['name'];
  $fileSize = $_FILES['pictureName']['size'];
  $fileTmpName = $_FILES['pictureName']['tmp_name'];
  $fileType = $_FILES['pictureName']['type'];

  $tmp = explode('.', $fileName);

  $fileExtension = strtolower(end($tmp));

  $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);

  if (!in_array($fileExtension, $fileExtensionsAllowed)) {
    $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
  }

  if ($fileSize > 4000000) {
    $errors[] = "File exceeds maximum size (4MB)";
  }

  if (empty($errors)) {
    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $size = $_POST['size'];
  $sellerid = $_SESSION['userid'];
  $description = nl2br($description);
  $description = stripslashes($description);


  pg_query($dbConn, "INSERT INTO public.items(id, itemname, itemdescription, itemviews, itemprice, sellerid, itemsize, picturename) VALUES (DEFAULT, '$name', '$description', DEFAULT, $price, $sellerid, '$size', '$fileName')");

  header('Location: items.php');


    if ($didUpload) {
      $uploadSuccess = True;
    } else {
      echo "An error occurred. Please contact the administrator.";
    }
  } else {
    foreach ($errors as $error) {
      echo $error . " These are the errors" . "\n";
    }
  }

}

// Registrierung
$invalid = False;
$taken = False;
$success = False;

if (isset($_POST["register"])) {

  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $usernameFree = pg_query($dbConn, "SELECT username FROM public.sellers WHERE username LIKE '$username'");
  $usernameExists = pg_num_rows($usernameFree);

  if (!isset($username) || trim($username) == '' || !isset($password) || trim($password) == '') {
    $invalid = True;
  } else if ($usernameExists > 0) {
    $taken = True;
  } else {
    $_SESSION['loggedin'] = True;
    pg_query($dbConn, "INSERT INTO public.sellers(id, username, userpassword) VALUES (DEFAULT, '$username', '$password')");
    $success = True;
  }
}

// Anmeldung

$wrong = False;

if (isset($_POST["login"])) {

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $checkData = pg_query($dbConn, "SELECT * FROM public.sellers WHERE username LIKE '$username' AND userpassword LIKE '$password'");

  $login_check = pg_num_rows($checkData);

  if ($login_check > 0) {

    $result = pg_query($dbConn, "SELECT id FROM public.sellers WHERE username LIKE '$username' AND userpassword LIKE '$password'");

    $id = pg_fetch_assoc($result);


    $_SESSION['userid'] = $id['id'];
    $_SESSION['loggedin'] = True;
    header('Location: home.php');

  } else {

    $wrong = True;

  }

}

?>