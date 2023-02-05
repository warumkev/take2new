<?php
session_start();
include('./includes/connect.php');
if(!$_SESSION['admin']) {
    header('Location: home.php');
    exit;
}

$userId = $_SESSION['userid'];

if(isset($_GET['id'])) {
    if ($userId != $_GET['id']) {
        (new BaseModel)->delete('sellers', $_GET['id']);
    }
    header('Location: users.php');
    die();
}