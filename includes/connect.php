<?php
include('./BaseModel.php');


// Nutzername abrufen
if (isset($_SESSION['loggedin'])) {
    $user = (new BaseModel)->getOne('sellers', $_SESSION['userid']);
    $name = $user['username'];
    $userPassword = $user['userpassword'];
}

// Suchfunktion


if (isset($_GET['search'])) {

    $query = $_GET['search'];
    $listArticles = pg_query($dbConn, "SELECT * FROM public.items WHERE itemname LIKE '%$query%' ORDER BY id");

}

// Registrierung
$invalid = False;
$taken = False;
$success = False;
if (isset($_POST["register"])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $usernameFree = (new BaseModel)->getByColumnValue("sellers", "username", $username);

    if (!isset($username) || trim($username) == '' || !isset($password) || trim($password) == '') {
        $invalid = True;
    } else if ($usernameFree) {
        $taken = True;
    } else {
        $_SESSION['loggedin'] = True;
        (new BaseModel)->create("sellers", ['id' => uniqid(), 'username' => $username, 'userpassword' => $password, 'admin' => 'false']);
        $user = (new BaseModel)->getByColumnValue("sellers", "username", $username);
        $_SESSION['userid'] = $user['id'];
        $success = True;
    }
}


// Anmeldung
$wrong = False;
if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if ((new BaseModel)->checkLogin($username, $password)) {

        $user = (new BaseModel)->getByColumnValue("sellers", "username", $username);

        if ($user['admin'] ) {
            $_SESSION['admin'] = True;
        }

        $_SESSION['userid'] = $user['id'];
        $_SESSION['loggedin'] = True;
        header('Location: home.php');

    } else {

        $wrong = True;

    }
}


// Bestellung aufgeben
if (isset($_POST["order"])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $plz = $_POST['plz'];
    $art = $artInfo['id'];
    $artQty = $artInfo['qty'];
    $artPrice = $artInfo['itemprice'];

    (new BaseModel)->create('orders', [
        'id' => uniqid(),
        'firstname' => $firstName,
        'lastname' => $lastName,
        'email' => $email,
        'address' => $address,
        'plz' => $plz,
        'itemid' => $art,
        'price' => $artPrice
    ]);
}


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

        (new BaseModel)->create('items', [
            'id' => uniqid(),
            'itemname' => $name,
            'itemdescription' => $description,
            'itemviews' => 0,
            'itemprice' => $price,
            'sellerid' => $sellerid,
            'itemsize' => $size,
            'picturename' => $fileName
        ]);

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


// Suchfunktion
if (isset($_GET['search'])) {
    $query = $_GET['search'];
    $listArticles = (new BaseModel)->allWhere('items', 'itemname', $query);
}


// Checkout
if (isset($_GET['artid'])) {
    $artid = $_GET['artid'];
    $artInfo = (new BaseModel)->getOne('items', $artid);
}


// Benutzer bearbeiten
if (isset($_POST["edit"])) {

    $oldid = $_POST['oldid'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $rawPassword = $_POST['password'];
    if (strlen($rawPassword) == 32 && ctype_xdigit($rawPassword)) {
        $password = $rawPassword;
    } else {
        $password = md5($_POST['password']);
    }
    if (isset($_POST['admin'])) {
        $role = "true";
    } else {
        $role = "false";
    }

    (new BaseModel)->update('sellers', [
        'id' => $id,
        'username' => $name,
        'userpassword' => $password,
        'admin' => $role
    ], $oldid);

}

?>
